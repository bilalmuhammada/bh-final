<?php

namespace App\Http\Controllers;

use App\Helpers\RecordHelper;
use App\Helpers\SiteHelper;
use App\Models\AdsReported;
use App\Models\Country;
use App\Models\Listing;
use App\Models\ListingUserApproval;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AdController extends Controller
{

    public function index()
    {
        $ads = Listing::with([
            'attachments',
            'category',
            'subcategory',
            'created_by_user'
        ])
            ->orderBy('name')->get();
       
        $data = [
      
            'ads' => $ads
        ];
        $countries = Country::all();
        return view('Admin.influencers.list')->with(['menu' => 'post', 'countries' => $countries,'data'=>$ads]);
    }

    public function reportedUser(){
    
        return view('Admin.influencers.reviews');
    }
    public function reviews(Request $request)
    {
       
        $adsreport = AdsReported::with(['listing'])->get();
        if ($adsreport->isNotEmpty()) {
            return response()->json([
                'status' => true,
                'data' => $adsreport
            ]);
        }

        return response()->json([
            'status' => false,
            'message' => 'No Record Found'
        ]);
    }
    
    public function showAds(Request $request,$subcategory_id = false)
    {
        $data = [];
        if ($subcategory_id) {
            // dd($subcategory_id);

            $SubCategory = SubCategory::with(['category'])->find($subcategory_id);
            $perPage = 20;
            $price_from = $request->from;
            $price_to = $request->to;
            $keyword = $request->keyword;
            $country_id = $request->country;
            $city_id = $request->city;

            $ads = Listing::with([
                'attachments',
                'created_by_user'
            ])
                ->where('subcategory_id', $subcategory_id)
                ->when($price_from, function ($listing) use ($price_from) {
                    $listing->where('price', '>=', $price_from);
                })
                ->when($price_to, function ($listing) use ($price_to) {
                    $listing->where('price', '<=', $price_to);
                })
                ->when($keyword, function ($listing) use ($keyword) {
                    $listing->where('title', 'like', '%' . $keyword . '%');
                })
                ->when($country_id, function ($Listing) use ($country_id) {
                    $Listing->where('country_id', $country_id);
                })
                ->when($city_id, function ($Listing) use ($city_id) {
                    $Listing->where('city_id', $city_id);
                })
                ->orderBy('name')->paginate($perPage);


                // dd($SubCategory->category);
            $data = [
                'from' => $request->from ?? false,
                'to' => $request->to ?? false,
                'keyword' => $request->keyword ?? false,
                'country' => $request->country ?? false,
                'city' => $request->city ?? false,
                'category_id' => $SubCategory->category->id,
                'category_name' => $SubCategory->category->name,
                'subcategory_id' => $subcategory_id,
                'subcategory_name' => $SubCategory->name,
                'ads' => $ads
            ];
          
            return view('ads.list')->with($data);
        }
        else{           
            
            $SubCategory = SubCategory::with(['category'])->get(); // This returns a collection of SubCategories

            $price_from = $request->from;
            $price_to = $request->to;
            $keyword = $request->keyword;
            $country_id = $request->country;
            $city_id = $request->city;
            
            $perPage = 2;

            $ads = Listing::with([
                'attachments',
                'created_by_user'
            ])
                ->when($price_from, function ($listing) use ($price_from) {
                    $listing->where('price', '>=', $price_from);
                })
                ->when($price_to, function ($listing) use ($price_to) {
                    $listing->where('price', '<=', $price_to);
                })
                ->when($keyword, function ($listing) use ($keyword) {
                    $listing->where('title', 'like', '%' . $keyword . '%');
                })
                ->when($country_id, function ($listing) use ($country_id) {
                    $listing->where('country_id', $country_id);
                })
                ->when($city_id, function ($listing) use ($city_id) {
                    $listing->where('city_id', $city_id);
                })
                ->orderBy('name')
                ->paginate($perPage); // Use pagination
            
            // Safely accessing category details from the first SubCategory, assuming there are multiple
            $firstSubCategory = $SubCategory->first(); // Access the first item in the collection if available
            
            $data = [
                'from' => $request->from ?? false,
                'to' => $request->to ?? false,
                'keyword' => $request->keyword ?? false,
                'country' => $request->country ?? false,
                'city' => $request->city ?? false,
                'category_id' => $firstSubCategory?->category?->id ?? false,
                'category_name' => $firstSubCategory?->category?->name ?? false,
                'subcategory_name' => $firstSubCategory?->name ?? false, // If only one is required
               'subcategory_id' => $subcategory_id ?? 0,
                'ads' => $ads
            ];
            
            return view('ads.list')->with($data);
            
        }            
    }



    public function getAllyAds(Request $request)
    {
        
        $ads = Listing::with([
            'attachments',
            'created_by_user'
        ])
            ->orderBy('name')->get();
       
        $data = [
      
            'ads' => $ads
        ];
        
      
        return response()->json([
            'status' => true,
            'ads' => $data
        ]);
    }

    public function showAdDetail($ad_id = false)
    {
        $data = [];

        $ad = $this->adDetail($ad_id);
        if (empty($ad)) {
            return view('home.home');
        }

        if ($ad_id) {
            $data = [
                'ad_id' => $ad_id,
                'ad' => $ad
            ];
        }

        return view('ads.detail')->with($data);
    }

    public function adsBySubcategoryId($subcategory_id)
    {
        $validation_arr = [
            'subcategory_id' => $subcategory_id
        ];

        $validator = Validator::make($validation_arr, [
            'subcategory_id' => 'required|exists:sub_categories,id'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => $validator->errors()->first()
            ]);
        }

        return RecordHelper::getAdsBySubcategory($subcategory_id);
    }

    public function adDetail($ad_id)
    {
        $validation_arr = [
            'ad_id' => $ad_id
        ];

        $validator = Validator::make($validation_arr, [
            'ad_id' => 'required|exists:listings,id'
        ]);

        if ($validator->fails()) {
            return [];
        }

        return RecordHelper::getAdById($ad_id);
    }

    public function getPopularAds()
    {
        $data = RecordHelper::getAds()->where('is_popular', 1);

        return response()->json([
            'status' => false,
            'data' => $data
        ]);
    }

    public function downloadDocumentRequest(Request $request)
    {
        $user_id = SiteHelper::getLoginUserId();

        if (empty($user_id)) {
            return response()->json([
                'status' => false,
                'message' => 'Invalid'
            ]);
        }

        $ListingUserApprovalExist = ListingUserApproval::where('user_id', $user_id)->where('type', $request->type)->where('listing_id', $request->listing_id)->whereIn('status', ['accepted', 'pending'])->first();

        if (!$ListingUserApprovalExist) {

            ListingUserApproval::create([
                'user_id' => $user_id,
                'listing_id' => $request->listing_id,
                'status' => 'pending',
                'type' => $request->type
            ]);
        }

        return response()->json([
            'status' => true,
            'message' => 'Sent'
        ]);
    }

    public function downloadRequestStatusUpdate(Request $request)
    {

        $ListingUserApproval = ListingUserApproval::where('id', $request->listing_user_approval_id)->first();
        $ListingUserApproval->status = $request->status;
        $ListingUserApproval->save();

        return response()->json([
            'status' => true,
            'message' => "request $request->status successfully",
            'data' => RecordHelper::getDownloadRequests($ListingUserApproval->type)
        ]);
    }

}
