<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Listing;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function index()
    {
        dd("dd");
        $users = User::get();
        $countries = Country::all();


       
        $data = [
            'countries'=> $countries,
            'menu' => 'dashboard',
            'total_users' => $users->count(),
            'active_users' => $users->where('status', 'active')->count(),
            'inactive_users' => $users->where('status', 'inactive')->count(),
        ];
       
        return view('Admin.dashboard.index')->with($data);
    }



    public function setcurrency(Request $request)
    {
        $request->validate([
            'currency' => 'required|string',
        ]);

       
        session(['app_currency' => $request->currency]);

        return response()->json(['success' => true]);
    }
    public function dashboard()
    {
       
        return response()->json([
            'status' => true,
            'ads_counts' => $this->getPostData(),
            'users_counts' => $this->getuserData()
        ]);
    }
    public function getPostData()
    {
        $post = Listing::get();

        $returnData = [
            'total_post_count' => $post->count(),
            'active_post_count' => $post->where('status', '=', 'active')->count(),
            'payment_pending_post_count' => $post->where('status', '=', 'payment_pending')->count(),
            'pending_post_count' => $post->where('status', '=', 'pending')->count(),
            'block_post_count' => $post->where('status', '=', 'inactive')->count(),
            'rejected_post_count' => $post->where('status', '=', 'rejected')->count(),
            'draft_post_count' => $post->where('status', '=', 'draft')->count(),
            'approved_post_count' => $post->where('status', '=', 'approved')->count(),
        ];

        return $returnData;

    }
    public function getuserData()
    {
        $users = User::with('role')
        // ->whereHas('role', function ($Role) {
            // $Role->where('code', 'influencer');
        // })
        ->get();

        $returnData = [
            'total_Influencer_count' => $users->count(),
            'popular_Influencer_count' => $users->where('status', '=', 'active')->count(),
            'active_Influencer_count' => $users->where('status', '=', 'active')->count(),
            'pending_Influencer_count' => $users->where('status', '=', 'inactive')->count(),
            'block_Influencer_count' => $users->where('status', '=', 'inactive')->count(),
            'rated_Influencer_count' => $users->where('status', '=', 'active')->count(),
            'favorite_Influencer_count' => $users->where('status', '=', 'active')->count(),
        ];

        return $returnData;

    }
    
    public function getChartData(Request $request)
    {
        // dd($request->all());
        // Get the date range from the request
        $fromDate = $request->input('from_date1');
        $toDate = $request->input('to_date1');

        $date = Carbon::now()->firstOfYear();
        $start_date = Carbon::parse($date)->format('Y-m-d');
        $last_date = $date->addMonth(11)->format('Y-m-d');

        // $to = SiteHelper::reformatDate($start_date);
        // $from = SiteHelper::reformatDate($last_date);

        // if($request->from_date){
        //     $to = SiteHelper::reformatDbDate($request->from_date);
        // }

        //  if($request->to_date){
        //     $from = SiteHelper::reformatDbDate($request->to_date);
        // }
        


       // $period = \Carbon\CarbonPeriod::create($to, '1 month', $from);

       //  $Subscription = Subscription::whereDate('created_at', '>=', $start_date)->when($to, function ($Subscription) use ($to) {
       //  $Subscription->whereDate('created_at', '>=', $to);
//         })->when($from, function ($Subscription) use ($from) {
//             $Subscription->whereDate('created_at', '<=', $from);
//         })->get();


//         //get influencer or brands form user
   
        $user_count = User::with('role')
    // ->whereHas('role', function ($query) {
    //     $query->where('code', 'influencer');
    // })
    ->count();
    $listing_count = Listing::get()
    // ->whereHas('role', function ($query) {
    //     $query->where('code', 'influencer');
    // })
    ->count();

//         $brand_ids = User::with('role')->whereHas('role', function ($Role) {
//             $Role->where('code', 'vendor');
//         })->pluck('id')->toArray();

//         $subscriptionPaymentMonthArray = [];
//         $subscriptionPaymentArray = [];
//         $subscriptionInfluencerPaymentArray = [];
//         $subscriptionBrandPaymentArray = [];
//         foreach ($period as $date) {
//             $month = $date->format('Y-m');

//             $subscriptionPaymentMonthArray[] = $date->format('Y/m');
//             $subscriptionPaymentArray[] = $Subscription->where('month', $month)->sum('amount_paid');
//             $subscriptionInfluencerPaymentArray[] = $Subscription->where('month', $month)->whereIn('user_id', $influencer_ids)->sum('amount_paid');
//             $subscriptionBrandPaymentArray[] = $Subscription->where('month', $month)->whereIn('user_id', $brand_ids)->sum('amount_paid');

//         }
// //        $subscriptionPaymentArray['total_net'] = $total_net_payment;

        return response()->json([
            'status' => true,
            'user_count' => $user_count,
            'filtergraph' => $request->input('filtergraph') === "sales" ? "Sales":"Counts",
            'listing_count' => $listing_count,
    

            // 'month_array' => $subscriptionPaymentMonthArray,
            // 'influencer_payment_amount_array' => $subscriptionInfluencerPaymentArray,
            // 'brand_payment_amount_array' => $subscriptionBrandPaymentArray,
        ]);
    }



    public function Adminindex()
    {
        return view('Admin.admins.list')->with(['menu' => 'admins']);
    }


    public function create()
    {
        $countries = Country::all();
        return view('Admin.admins.create')->with(['menu' => 'admins/create', 'countries' => $countries]);
    }
    public function all()
    {
        $users = admin::all();
        if ($users->isNotEmpty()) {
            return response()->json([
                'status' => true,
                'message' => '',
                'data' => $users
            ]);
        }

        return response()->json([
            'status' => false,
            'message' => 'No Record Found'
        ]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'first_name' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => FALSE,
                'message' => $validator->errors()->first()
            ]);
        }

        

        $Category = Admin::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'phone' => $request->phone,
            'email' => $request->email,
            'gender' => $request->gender,
            'age' => $request->age,
            'addedby' => $request->addedby,
            'country_id' => $request->country_id,
            'city_id' => $request->city_id,
            'password' =>Hash::make($request->password),
            
        ]);


        return response()->json([
            'status' => true,
            'message' => 'Admin created successfully'
        ]);
    }
    public function changeStatus(Request $request)
    {
        if (!empty($request->status)) {
            $user = User::find($request->admin_id);
            $user->status = '0';
            if ($request->status == 'on') {
                $user->status = '1';
            }
            $user->save();
            return response()->json([
                'status' => true,
                'message' => 'Status updated successfully!',
                're' => $request->all()
            ]);
        }
        return response()->json([
            'status' => false,
            'message' => 'Invalid request'
        ]);
    }
}
