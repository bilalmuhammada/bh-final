<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Plan;
use App\Models\Subscription;
use App\Models\Transaction;
use App\Models\User;
use App\Models\UserCardDetail;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Validator;
use Stripe\Charge;
use Stripe\Customer;
use Stripe\Stripe;
use Stripe\StripeClient;
use Stripe\Checkout\Session;
use Stripe\Exception\ApiErrorException;

class PlanController extends Controller
{
    public function showPlans()
    {
        $Plans = Plan::get();

        return view('subscription.plans')->with([
            'plans' => $Plans
        ]);
    }

    public function session(Request $request)
    {
    //    dd($request->all());
        Stripe::setApiKey(config('services.stripe.secret'));

        $session = Session::create([
            'payment_method_types' => ['card'],
            'line_items' => [[
                'price_data' => [
                    'currency' => 'usd',
                    'product_data' => [
                        'name' => $request->productname,
                    ],
                    'unit_amount' => 200,
                ],
                'quantity' => 1,
            ]],
            'mode' => 'payment',
            'success_url' => route('checkout.success'),
            'cancel_url' => route('checkout.cancel'),
        ]);

        return redirect($session->url);
    
        return redirect()->away($session->url);
    }
 
    public function success()
    {
        return "Thanks for you order You have just completed your payment. The seeler will reach out to you as soon as possible";
    }
    public function showUserDetailForm(Request $request)
    {
        if (empty($request->plan_id)) {
            return redirect()->back();
        }

        $Plan = Plan::find($request->plan_id);
        $User = User::find(Auth::id() ?? Session::get('user')->id);



        return view('subscription.checkout')->with([
            'plan' => $Plan,
            'user' => $User,
        ]);
    }

    public function checkout1(Request $request)
    {
        $Validator = Validator::make($request->all(), [
            'plan' => 'required|exists:plans,id',
        ]);

        if ($Validator->fails()) {
            $error  = $Validator->errors()->first();
            return response()->json([
                'status' => false,
                'message' => $error
            ]);
        }

        $Plan = Plan::find($request->plan);

        $User = User::find(Auth::id() ?? Session::get('user')->id);

        $UserCard = UserCardDetail::updateOrCreate([
            'user_id' => $User->id,
        ],[
           'user_id' => $User->id,
           'card_holder_name' => $request->card_holder_name,
           'card_number' => $request->card_number,
           'expiry_month' => $request->month_expiry,
           'expiry_year' => $request->year_expiry,
           'card_cvv' => $request->card_cvv,
        ]);

        $amount = $request->amount * 1;
        $currency = "aed";

        if (Session::has('country')) {
//            $Country = Country::find(Session::get('country'));
//            return $currency = $Country->currency;
        }

        Stripe::setApiKey(env('STRIPE_SECRET_KEY_TEST'));
        $stripe = new StripeClient(env('STRIPE_SECRET_KEY_TEST'));

        $customer = $stripe->customers->create([
            'email' => $User->email,
        ]);
        $customer = $stripe->customers->create([
            'description' => 'Plan Subscription',
            'email' => $User->email,
        ]);

        try {
            $StripeCustomer = Customer::create([
                'email' => $User->email,
                'source' => $request->stripe_token,
                'name' => $User->name
            ]);

            $Subscription = [];
            $Transaction = [];

            if (!empty($StripeCustomer->id)) {
                $Charge = Charge::create([
                    "amount" => $amount * 100,
                    "currency" => $request->currency ?? "aed",
                    'source' => $request['stripeToken'],
                    "customer" => $StripeCustomer->id,
                    "description" => "Plan Subscription",
                    'metadata' => []
                ]);

                $User->stripe_customer_id = $StripeCustomer->id;
                $User->customer_card_id = $StripeCustomer->default_source;
                $User->status = "active";
                $User->plan_id = $Plan->id;
                $User->save();

                $Subscription = Subscription::create([
                    'plan_id' => $Plan->id,
                    'user_id' => $User->id,
                    'price' => $Plan->amount,
                    'amount_paid' => $amount,
                    'discount' => 0,
                    'currency' => $currency,
                    'is_active' => true,
                    'activated_at' => Carbon::now(),
                ]);

                $Transaction = Transaction::create([
                    'user_id' => $User->id,
                    'subscription_id' => $Subscription->id,
                    'amount' => $amount,
                    'payment_date' => Carbon::now()->format('Y-m-d'),
                    'payment_status' => "success",
                    'payment_method' => "card",
                    'transaction_at' => Carbon::now(),
                ]);

                return response()->json([
                    'status' => true,
                    'message' => 'You have successfully purchased plan'
                ]);
            } else {

                return response()->json([
                    'status' => false,
                    'message' => 'Sorry, unable to charge payment'
                ]);
            }

        } catch (\Exception $exception) {
            $exception->getMessage();
            return response()->json([
                'status' => false,
                'date' => $exception,
                'message' => $exception->getMessage()
            ]);
        }
    }
}
