<?php

namespace App\Http\Controllers;

use App\Helpers\FileHelper;
use App\Helpers\RecordHelper;
use App\Helpers\SiteHelper;
use App\Models\Attachment;
use App\Models\Country;
use App\Models\Listing;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function showProfile()
    {
        return view('user.user-profile');
    }

    public function reportUser() {
        $users = User::where('status','')->get();
        $data = [
            'users' => $users
        ];
     
     return view('Admin.vendors.reviews');
    }

    public function reviews(Request $request)
    {
       
        $users = User::where('status','inactive')->get();
        if ($users->isNotEmpty()) {
            return response()->json([
                'status' => true,
                'data' => $users
            ]);
        }

        return response()->json([
            'status' => false,
            'message' => 'No Record Found'
        ]);
    }
    public function all(Request $request)
    {
        // dd($request->role);
        $validator = Validator::make($request->all(), [
            'role' => 'required|exists:roles,role_key',
        ]);
        // dd('dd');

        if ($validator->fails()) {
            return response()->json([
                'status' => FALSE,
                'message' => $validator->errors()->first()
            ]);
        }

      
        $role = $request->role;

        $Users = User::whereHas('role', function ($Role) use ($role) {
            $Role->where('role_key', $role);
        })->when($request->status, function ($User, $status) {
            $User->where('status', $status);
        })->latest()->get();
// dd(  $Users);
        if ($Users->isNotEmpty()) {
            return response()->json([
                'status' => true,
                'message' => '',
                'data' => $Users
            ]);
        }

        return response()->json([
            'status' => false,
            'message' => 'No Record Found'
        ]);
    }

    public function index()
    {
        $countries = Country::all();
        return view('Admin.vendors.list')->with(['menu' => 'users', 'countries' => $countries]);
    }
    public function create()
    {
        $countries = Country::all();
        return view('Admin.vendors.create')->with(['menu' => 'vendors/create', 'countries' => $countries]);
    }


    public function detail()
    {
        $User = User::with(['role', 'attachment'])->where('id', Auth::id() ?? Session::get('user')->id)->first();
        return response()->json([
            'status' => true,
            'code' => '200',
            'message' => '',
            'user' => $User
        ]);
    }

    public function updateProfile(Request $request)
    {

        //  dd($request->all());
        $validator = Validator::make($request->all(), [
            
            'first_name' => 'required',
            'last_name'=>'required',
            'dob' => 'required',
            'country'=>'required',
            
            'gender' => 'required',
            'mobile'=>'required',
            'email' => 'required',
            'cities'=>'required',
            'password' => 'required',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => FALSE,
                'message' => $validator->errors()->first(),
                'errors' => $validator->errors()
            ]);
        }

        $User = User::find(Auth::id() ?? Session::get('user')->id);

        if (!empty($User)) {
            $User->name = $request->first_name.' '.$request->last_name;
            $User->first_name = $request->first_name;
            $User->last_name = $request->last_name;
            $User->dob = Carbon::parse($request->dob)->format('Y-m-d');
            $User->gender = $request->gender;
            $User->phone = $request->mobile;
            $User->email = $request->email;
            $User->country_id = $request->country;
            $User->city_id = $request->cities;

            $User->offers_and_bargains = 0;
            $User->weekly_newsletter = 0;

            if ($request->offers_and_bargains == 'on') {
                $User->offers_and_bargains = 1;
            }

            if ($request->weekly_newsletter == 'on') {
                $User->weekly_newsletter = 1;
            }

            $User->save();

            $img_response = [];
  
            //calling function update img
            // if (!empty($request->image)) {
            //     $img_response = $this->updateProfileImage($request->image);
            // }
           
            Session::forget('user');
            Session::put('user', $User);

            return response()->json([
                'status' => true,
                'imag' => $img_response,
                'message' => 'Updated',
                'data' => $User
            ]);
        } else {
            return response()->json([
                'status' => false,
                'message' => 'Error'
            ]);
        }
    }

    public function updateProfileImage($image)
    {
        $User = User::with(['attachment'])->find(Auth::id() ?? Session::get('user')->id);

        if (!empty($User)) {
            $path = public_path('uploads/users/profile-images/');
            $response = FileHelper::uploadFile($image, $path);
            if ($response['status']) {

                Attachment::updateORCreate([
                    'object' => 'User',
                    'object_id' => $User->id,
                    'context' => 'profile-image'
                ],[
                    'name' => $response['file_name'],
                    'file_name' => $response['file_name'],
                    'type' => $response['type'],
                ]);
            }

            $new_user_data = User::find(Auth::id() ?? Session::get('user')->id);

            return [
                'status' => true,
                'message' => 'Updated',
                'image_url' => $new_user_data->image_url
            ];
        }
    }

    public function myAds()
    {
        //  dd('dd');
        $user_id =Auth::id() ?? Session::get('user')->id;
        if (!$user_id) {
            $user_id = Auth::id();
        }

        $validation_arr = [
            'user_id' => $user_id
        ];

        $validator = Validator::make($validation_arr, [
            'user_id' => 'required|exists:users,id'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => $validator->errors()->first()
            ]);
        }
       $activeListing = Listing::with(['attachments', 'created_by_user'])->where('created_by', $user_id)->where('status', 'active')->orderBy('name')->paginate(20, ['*'], 'activePage');
       $draftListing = Listing::with(['attachments', 'created_by_user'])->where('created_by', $user_id)->where('status', 'draft')->orderBy('name') ->paginate(20, ['*'], 'draftPage');;
       $pendingListing = Listing::with(['attachments', 'created_by_user'])->where('created_by', $user_id)->where('status', 'pending')->orderBy('name')->paginate(20, ['*'], 'pendingPage');
       $rejectedListing = Listing::with(['attachments', 'created_by_user'])->where('created_by', $user_id)->where('status', 'rejected')->orderBy('name')->paginate(20, ['*'], 'rejectedPage');
       $expiredListing = Listing::with(['attachments', 'created_by_user'])->where('created_by', $user_id)->where('status', 'expired')->orderBy('name')->paginate(20, ['*'], 'expiredPage');
       $payment_pendingtListing = Listing::with(['attachments', 'created_by_user'])->where('created_by', $user_id)->where('status', 'payment_pending')->orderBy('name')->paginate(20, ['*'], 'payment_pendingPage');
       
        // $ads = $this->getAdsOfCurrentUser(Auth::id() ?? Session::get('user')->id);

// dd($draftListing->total());
        $data = [
            'activeListing' => $activeListing,
            'draftListing' => $draftListing,
            'pendingListing' => $pendingListing,
            'rejectedListing' => $rejectedListing,
            'expiredListing' => $expiredListing,
            'payment_pendingtListing' => $payment_pendingtListing,
            
        ];
        
        return view('user.my-ads',)->with($data);
    }

    public function mySearches()
    {
        $searches = $this->getSearchesOfCurrentUser(Auth::id());

        $data = [
            'my_searches' => $searches
        ];

        return view('user.my-searches')->with($data);
    }

    public function getAdsOfCurrentUser($user_id = false)
    {
        if (!$user_id) {
            $user_id = Auth::id();
        }

        $validation_arr = [
            'user_id' => $user_id
        ];

        $validator = Validator::make($validation_arr, [
            'user_id' => 'required|exists:users,id'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => $validator->errors()->first()
            ]);
        }

        return RecordHelper::getAdsByUserId($user_id);
    }

    public function getSearchesOfCurrentUser($user_id = false)
    {
        if (!$user_id) {
            $user_id = Auth::id();
        }

        $validation_arr = [
            'user_id' => $user_id
        ];

        $validator = Validator::make($validation_arr, [
            'user_id' => 'required|exists:users,id'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => $validator->errors()->first()
            ]);
        }

        return RecordHelper::getSearches();
    }

    public function getFavouriteAdsOfCurrentUser()
    {
        return RecordHelper::getFavouriteAds();
    }

    public function deleteReview($id)
    {
        $rules = [
            'id' => 'required|exists:reviews,id',
        ];

        $validator = Validator::make(['id' => $id], $rules);

        if ($validator->fails()) {
            return response()->json([
                'status' => FALSE,
                'message' => $validator->errors()->first()
            ]);
        }

        User::where('id', $id)->delete();

        return response()->json([
            'status' => true,
            'message' => 'User Review Deleted Successfully'
        ]);
    }
    public function deleteReviewAds($id)
    {
        $rules = [
            'id' => 'required|exists:reviews,id',
        ];

        $validator = Validator::make(['id' => $id], $rules);

        if ($validator->fails()) {
            return response()->json([
                'status' => FALSE,
                'message' => $validator->errors()->first()
            ]);
        }

        Listing::where('id', $id)->delete();

        return response()->json([
            'status' => true,
            'message' => 'Listing Review Deleted Successfully'
        ]);
    }
    
    public function show($id)
    {
        $user = User::find($id);
    
        if (!$user) {
            return response()->json([
                'status' => false,
                'message' => 'User not found',
            ], 404);
        }
    
        return response()->json([
            'status' => true,
            'data' => $user,
        ]);
    }
    

    public function deleteAccount()
    {
        $User = User::find(Auth::id());
        if (!empty($User->toArray())) {
            Listing::where('created_by', $User->id)->delete();
            $User->delete();

            return response()->json([
                'status' => true,
                'message' => "user deleted"
            ]);
        }

        return response()->json([
            'status' => false,
            'message' => "Invalid selection"
        ]);
    }

}
