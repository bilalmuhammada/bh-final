<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;

use App\Notifications\PasswordReset;
use App\Notifications\VerifyEmail;
use Carbon\Carbon;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Laravel\Socialite\Facades\Socialite;

//use Laravel\Socialite\Facades\Socialite;


class AuthController extends Controller
{

    public function index()
    {
      
        if (Session::has('user')) {
           
            return redirect('/dashboard');
        }
        return view('Admin.auth.login');
    }


    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'first_name' => 'required',
            'last_name' => 'required',
            'mobile' => 'required',
            'email' => 'required|email|unique:users',
            'gender' => 'required',
            'dob' => ['required', 'date', 'before:' . now()->subYears(18)->format('Y-m-d')],
            'country' => 'required|exists:countries,id',
            'cities' => 'nullable|required',
            'password' => 'required|min:6|confirmed',       
        ]
        ,[
            // Custom messages
            'first_name.required' => 'First name is required.',
            'last_name.required' => 'Last name is required.',
            'mobile.required' => 'Mobile is required.',
            'email.required' => 'Email is required.',
            'email.email' => 'Please enter a valid email address.',
            'email.unique' => 'This email address is already in use.',
            'gender.required' => 'Gender is required.',
            'dob.required' => 'Date of Birth is required.',
            'dob.date' => 'The date of birth must be a valid date.',
            'dob.before' => 'You must be at least 18 years old.',
            'country.required' => 'Country is required.',
            'country.exists' => 'The selected country is invalid.',
            'cities.exists' => 'The selected city is invalid.',
            'cities.required' => 'City is required.',
            'password.required' => 'Password is required.',
            'password.min' => 'Password must be at least 6 characters.',
            'password.confirmed' => 'Confirm Password does not match.',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => FALSE,
                'message' => $validator->errors()->first()
            ]);
        }

        $role_id = Role::firstWhere('role_key', $request->role)->id ?? 1;

        $User = User::create([
            'role_id' => $role_id,
            'name' => $request->first_name . " " . $request->last_name,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone' => $request->mobile,
            'country_id' => $request->country,
            'city_id' => $request->city,
            'password' => Hash::make($request->password),
        ]);

        return response()->json([
            'status' => TRUE,
            'message' => 'User registered successfully'
        ]);
    }

    public function login(Request $request)
    {
        
        if ($request->isMethod('get')) {
            return response()->json([
                'status' => false,
                'message' => "Invalid token"
            ]);
        }

        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => FALSE,
                'message' => $validator->errors()->first()
            ]);
        }

        $User = User::where('email', $request->email)->first();

        // check if User exist or not
        if (!$User) {
            return response()->json([
                'status' => FALSE,
                'code' => 404,
                'message' => 'No user registered with this email'
            ]);
        }

        // check if password match or not
        if (Hash::check($request->password, $User->password)) {

            Session::put('user', $User);

            $token = $User->createToken($User->name)->plainTextToken;
            Session::put('user_token', $token);


           
            return response()->json([
                'status' => TRUE,
                'code' => 200,
                'token' => $token,
                'message' => 'Logged in',
                'user' => $User,
                'role_key' => Role::firstWhere('id', $User->role_id)->role_key,
            ]);
        } else {
            return response()->json([
                'code' => 404,
                'message' => 'Invalid Password!'
            ]);
        }
    }

    public function logout()
    {
        Session::forget('user');
        Session::forget('user_token');
        if (Session::has('user')) {
            return response()->json([
                'status' => false,
                'message' => 'logout failed'
            ]);
        } else {
            return response()->json([
                'status' => true,
                'message' => 'logout successful'
            ]);
        }
    }

    public function forgotPassword()
    {
        return view('auth.forgot-password');
    }

    public function forgotPasswordCheck(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => $validator->errors()->first()
            ]);
        }

        $User = User::where('email', $request->email)->first();

        if (!empty($User)) {
            $password_reset_code = date('hisymd') . $User->id;
            $User->password_reset_code = $password_reset_code;
            $User->save();

            /*******PREPARE EMAIL FOR USER PASSWORD RESET********/
            $link = env('BASE_URL') . 'reset/' . $password_reset_code;
            $User->notify(new PasswordReset($password_reset_code));


            /*******END- PREPARE EMAIL FOR USER PASSWORD RESET********/

            return response()->json([
                'status' => TRUE,
                'message' => "An Email Has been sent to your email address to reset your password",
            ]);
        } else {
            return response()->json([
                'status' => FALSE,
                'message' => "Email doesn't exists!"
            ]);
        }
    }

    public function reset($password_reset_code)
    {
        $User = User::where('password_reset_code', $password_reset_code)->get()->toArray();
        if (empty($User)) {
            return redirect(env('BASE_URL') . 'home');
        }

        return view('auth.change-password')->with(['password_reset_code' => $password_reset_code]);
    }

    public function resetPassword(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'password_reset_code' => 'required',
            'password' => 'required|min:6|confirmed',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => FALSE,
                'message' => $validator->errors()->first()
            ]);
        }

        $User = User::where('password_reset_code', $request->password_reset_code)->first();
        if (!empty($User)) {
            $User->password = Hash::make($request->password);
            $User->password_reset_code = '';
            $User->save();
            return response()->json([
                'status' => true,
                'message' => 'Password changed successfully'
            ]);
        } else {
            return response()->json([
                'status' => FALSE,
                'message' => 'Invalid password reset request'
            ]);
        }
    }

    public function resetPasswordCodeCheck(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'password_reset_code' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => FALSE,
                'message' => $validator->errors()->first()
            ]);
        }

        $User = User::where('password_reset_code', $request->password_reset_code)->first();
        if (!empty($User)) {
            return response()->json([
                'status' => true,
                'message' => 'Enter New Password',
                'password_reset_code' => $request->password_reset_code
            ]);
        } else {
            return response()->json([
                'status' => FALSE,
                'message' => 'Invalid password reset request'
            ]);
        }
    }

    public function changePassword()
    {
        return view('auth.change-password');
    }

    public function updatePassword(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'old_password' => 'required',
            'password' => 'required|min:6|confirmed',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => FALSE,
                'message' => $validator->errors()->first()
            ]);
        }

        $User = User::where('id', Session::get('user')->id)->first();
        if (!empty($User)) {
            // check if old password match or not
            if (Hash::check($request->old_password, $User->password)) {
                $User->password = Hash::make($request->password);
                $User->password_reset_code = '';
                $User->save();
                return response()->json([
                    'status' => true,
                    'message' => 'Password changed successfully'
                ]);
            } else {
                return response()->json([
                    'status' => FALSE,
                    'message' => 'Incorrect old password'
                ]);
            }
        } else {
            return response()->json([
                'status' => FALSE,
                'message' => 'Invalid password reset request'
            ]);
        }
    }

    public function generateEmailVerificationcode()
    {
        $code = 1 . Carbon::now()->format('Hs');


        $User = User::find(Auth::id() ?? Session::get('user')->id);
        $User->email_verification_code = $code;
        $User->save();
        /*******PREPARE EMAIL FOR USER PASSWORD RESET********/
        $User->notify(new VerifyEmail($code));

        /*******END- PREPARE EMAIL FOR USER PASSWORD RESET********/

        return true;
    }

    public function verifyEmail(Request $request)
    {
        $this->generateEmailVerificationcode();

        return view('auth.verify-email')->with([
            'type' => "success",
            'message' => "An email has been sent to you with a verification code",
        ]);
    }

    public function verifyEmailCode(Request $request)
    {
        $email_verification_code = $request->verification_code;
        $User = User::firstWhere('email_verification_code', $email_verification_code);

        if (empty($User)) {
            return response()->json([
                'status' => false,
                'message' => "Invalid verification Code"
            ]);
        }

        $User->email_verification_code = null;
        $User->email_verified_at = Carbon::now();
        $User->save();

        return response()->json([
            'status' => true,
            'message' => "Email verified successfully"
        ]);
    }

    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        try {

            $user = Socialite::driver('google')->user();

            $User = User::where('google_id', $user->id)->orWhere('email', $user->email)->first();

            if(!empty($User)){
                Session::put('user', $User);
                $token = $User->createToken($User->name)->plainTextToken;
                Session::put('user_token', $token);
                return redirect('home');
            }else{

                $role_id = Role::firstWhere('role_key', "user")->id ?? 2;

                $User = User::create([
                    'role_id' => $role_id,
                    'name' => $user->name,
                    'first_name' => $user->name,
                    'email' => $user->email,
                    'country_id' => $request->country ?? 224,
                    'city_id' => $request->city ?? 253,
                    'password' => Hash::make(123456),
                ]);

                Session::put('user', $User);
                $token = $User->createToken($User->name)->plainTextToken;
                Session::put('user_token', $token);
                return redirect('home');
            }

        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}
