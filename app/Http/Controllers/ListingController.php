<?php

namespace App\Http\Controllers;

use App\Helpers\RecordHelper;
use App\Helpers\SiteHelper;
use App\Models\AdsReported;
use App\Models\Attachment;
use App\Models\BusinessForSaleDetail;
use App\Models\BusinessIdeaDetail;
use App\Models\Category;
use App\Models\Country;
use App\Models\ExportImportTradeDetail;
use App\Models\Favourite;
use App\Models\FranchiseOpportunitiesDetail;
use App\Models\InvestorsDetail;
use App\Models\InvestorsRequired;
use App\Models\InvestorsRequiredDetail;
use App\Models\Listing;
use App\Models\MachineSuppliesDetail;
use App\Models\Search;
use App\Models\SharesForSaleDetail;
use App\Models\SubCategory;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class ListingController extends Controller
{
    public function showSelectCategory()
    {
        $categories = Category::orderBy('name')->get();
        $data = [
            'categories' => $categories
        ];
        return view('listings.select-category')->with($data);
    }
   

    public function showSelectSubcategory($category_id)
    {
        $validation_arr = [
            'category_id' => $category_id
        ];

        $Validator = Validator::make($validation_arr, [
            'category_id' => 'required|exists:categories,id'
        ]);

        if ($Validator->fails()) {
            $error = $Validator->errors()->first();
            SiteHelper::setAlert('danger', $error);
            return redirect(env('base_url') . 'listing/select-category');
        }

        $subcategories = RecordHelper::getSubCategories($category_id);

        $Category = Category::find($category_id);

        return view('listings.select-subcategory')->with([
            'subcategories' => $subcategories,
            'category' => $Category,
            'category_id' => $category_id
        ]);
    }



    public function SubmitPrice(Request $request){
        //  dd($request->all());
        
         return response()->json([
            'status' => true,
            'id' => Session::get('user')->id,
            'message' => "Ad Title saved successfully",
            'listing_id' => $request->listing_id,
        ]);
        // return view('subscription.plans');
        
    }
    public function showListingTitleForm($category_id, $subcategory_id)
    {
        $validation_arr = [
            'category_id' => $category_id,
            'subcategory_id' => $subcategory_id
        ];

        $Validator = Validator::make($validation_arr, [
            'category_id' => 'required|exists:categories,id',
            'subcategory_id' => 'required|exists:sub_categories,id',
        ]);

        if ($Validator->fails()) {
            $error = $Validator->errors()->first();
            SiteHelper::setAlert('danger', $error);
            return redirect(env('base_url') . 'listing/select-subcategory');
        }

        $data = [
            'category_id' => $category_id,
            'subcategory_id' => $subcategory_id,
            'countries' => Country::get(),
        ];

        return view('listings.listing-title')->with($data);
    }

    public function storeListingTitle(Request $request)
    {
        $Validator = Validator::make($request->all(), [
            'category_id' => 'required|exists:categories,id',
            'subcategory_id' => 'required|exists:sub_categories,id',
        ]);


        if ($Validator->fails()) {
            $error = $Validator->errors()->first();
            return response()->json([
                'status' => false,
                'message' => $error
            ]);
        }

        $Listing = Listing::create([
            'category_id' => $request->category_id,
            'subcategory_id' => $request->subcategory_id,
            'title' => $request->title ?? null,
            'status' => "draft",
            'created_by' => Session::get('user')->id,
        ]);

        return response()->json([
            'status' => true,
            'id' => Session::get('user')->id,
            'message' => "Ad Title saved successfully",
            'listing_id' => $Listing->id,
        ]);
    }

    public function showPlaceAd($listing_id)
    {
        $validation_arr = [
            'listing_id' => $listing_id,
        ];

        $Validator = Validator::make($validation_arr, [
            'listing_id' => 'required|exists:listings,id',
        ]);

        if ($Validator->fails()) {
            $error = $Validator->errors()->first();
            SiteHelper::setAlert('danger', $error);
            return redirect(env('base_url') . 'listing/select-subcategory');
        }

        $Listing = Listing::find($listing_id);

        $view_name = Category::find($Listing->category_id)->form_view;
// dd('ddd');
        $data = [
            'listing' => $Listing,
            'countries' => RecordHelper::getCountries(),
        ];

        return view('listings.' . $view_name)->with($data);
    }

    public function showPlaneAd(Request $request)
    {
        return view('subscription.plans');
    }
    
    public function storeAd(Request $request)
    {
        $Validator = Validator::make($request->all(), [
            'listing_id' => 'required|exists:listings,id',
            'title' => 'required',
            'phone' => 'required|integer',
            'price' => 'nullable|integer',
            'investment_amount' => 'nullable|integer',
            'manufactured_year' => 'nullable|date',
            'description' => 'required',
            'country' => 'required|integer',
            'city' => 'required|integer',
            'location_name' => 'required',
            'images' => 'required|array',
            'images.*' => 'image|max:2048',
        ]);


        if ($Validator->fails()) {
            $error = $Validator->errors()->first();
            SiteHelper::setAlert('danger', $error);
            return response()->json([
                'status' => false,
                'message' => $error,
                'errors' => $Validator->errors()
            ]);
        }

        Listing::where('id', $request->listing_id)->update([
            'title' => $request->title,
            'phone' => $request->phone,
            'price' => $request->price,
            'description' => $request->description,
            'city_id' => $request->city,
            'country_id' => $request->country,
            'status' => "pending",
            'latitude' => $request->latitude,
            'longitude' => $request->longitude,
            'location_name' => $request->location_name,
            'created_by' => Session::get('user')->id,
        ]);

        $Listing = Listing::find($request->listing_id);

        if($Listing->category_id == 4 || $Listing->category_id == 5) {
            $Listing->hide_phone = true;
            $Listing->save();
        }



        $this->saveListingAdditionalDetails(Category::find($Listing->category_id)->form_view, $request);

        $imgDataArr = SiteHelper::upload_file('uploads/listings', 'images');

        if ($imgDataArr['status']) {
            foreach ($imgDataArr['upload_data'] as $key => $image) {
                Attachment::create([
                    'name' => $image['name'],
                    'file_name' => $image['file_name'],
                    'type' => $image['type'],
                    'object' => 'Listing',
                    'object_id' => $Listing->id,
                    'context' => 'Listing-image',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ]);
            }
        }

        $imgDataArr = [];

        $imgDataArr = SiteHelper::upload_file('uploads/listings/documents', 'documents');

        if ($imgDataArr['status']) {
            foreach ($imgDataArr['upload_data'] as $key => $image) {
                Attachment::create([
                    'name' => $image['name'],
                    'file_name' => $image['file_name'],
                    'type' => $image['type'],
                    'object' => 'Listing',
                    'object_id' => $Listing->id,
                    'context' => 'Listing-document',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ]);
            }
        }

        return response()->json([
            'status' => true,
            'message' => "Add placed successfully",
            'listing_id' => $Listing->id,
        ]);
    }

    public function saveListingAdditionalDetails($listing_detail_name, $data_arr)
    {
        switch ($listing_detail_name) {
            case 'business_for_sale_details':

                BusinessForSaleDetail::create([
                    'listing_id' => $data_arr->listing_id,
                    'business_type' => $data_arr->business_type,
                    'trade_licence_type' => $data_arr->trade_licence_type,
                    'established_year' => $data_arr->established_year,
                    'lease_term' => $data_arr->lease_term,
                    'size_sqm' => $data_arr->size_sqm,
                    'no_of_employees' => $data_arr->no_of_employees,
                    'reason_for_sale' => $data_arr->reason_for_sale,
                    'open_for_partnership' => $data_arr->open_for_partnership,
                    'products_and_services_offered' => $data_arr->products_and_services_offered,
                ]);

                return true;
                break;
            case 'shares_for_sale_details':

                SharesForSaleDetail::create([
                    'listing_id' => $data_arr->listing_id,
                    'share_amount' => $data_arr->share_amount,
                    'business_type' => $data_arr->business_type,
                    'share_percentage' => $data_arr->share_percentage,
                    'established_year' => $data_arr->established_year,
                    'trade_licence_type' => $data_arr->trade_licence_type,
                    'lease_term' => $data_arr->lease_term,
                    'open_for_partnership' => $data_arr->open_for_partnership,
                    'size_sqm' => $data_arr->size_sqm,
                    'no_of_employees' => $data_arr->no_of_employees,
                    'products_and_services_offered' => $data_arr->products_and_services_offered,
                ]);

                return true;
                break;
            case 'business_idea_details':

                BusinessIdeaDetail::create([
                    'listing_id' => $data_arr->listing_id,
                    'investment_amount' => $data_arr->investment_amount,
                    'estimated_sales_in_numbers' => $data_arr->estimated_sales_in_numbers,
                    'estimated_sales_in_letters' => $data_arr->estimated_sales_in_letters,
                    'trade_licence_type' => $data_arr->trade_licence_type,
                    'business_type' => $data_arr->business_type,
                    'open_for_partnership' => $data_arr->open_for_partnership,
                    'products_and_services_offered' => $data_arr->products_and_services_offered,
                ]);

                return true;
                break;
            case 'investors_details':

                InvestorsDetail::create([
                    'listing_id' => $data_arr->listing_id,
                    'investment_amount' => $data_arr->investment_amount,
                    'open_to_invest' => $data_arr->open_to_invest,
                    'open_for_partnership' => $data_arr->open_for_partnership,
                    'interested_business_types' => $data_arr->interested_business_types,
                ]);

                return true;
                break;
            case 'investors_required_details':

                InvestorsRequiredDetail::create([
                    'listing_id' => $data_arr->listing_id,
                    'required_investment' => $data_arr->required_investment,
                    'business_type' => $data_arr->business_type,
                    'reason_for_investment' => $data_arr->reason_for_investment,
                    'established_year' => $data_arr->established_year,
                    'trade_licence_type' => $data_arr->trade_licence_type,
                    'lease_term' => $data_arr->lease_term,
                    'open_for_partnership' => $data_arr->open_for_partnership,
                    'size_sqm' => $data_arr->size_sqm,
                    'no_of_employees' => $data_arr->no_of_employees,
                    'products_and_services_offered' => $data_arr->products_and_services_offered,
                ]);

                return true;
                break;
            case 'franchise_opportunities_details':

                FranchiseOpportunitiesDetail::create([
                    'listing_id' => $data_arr->listing_id,
                    'franchise_fee' => $data_arr->franchise_fee,
                    'business_type' => $data_arr->business_type,
                    'franchise_fee_term' => $data_arr->franchise_fee_term,
                    'established_year' => $data_arr->established_year,
                    'trade_licence_type' => $data_arr->trade_licence_type,
                    'no_of_branches' => $data_arr->no_of_branches,
                    'no_of_employees' => $data_arr->no_of_employees,
                    'size_sqm' => $data_arr->size_sqm,
                    'products_and_services_offered' => $data_arr->products_and_services_offered,
                ]);

                return true;
                break;
            case 'export_import_trade_details':

                ExportImportTradeDetail::create([
                    'listing_id' => $data_arr->listing_id,
                    'condition' => $data_arr->condition,
                    'manufactured_year' => SiteHelper::reformatDateToDbDate($data_arr->manufactured_year),
                    'usage' => $data_arr->usage,
                    'model' => $data_arr->model,
                    'stock_level' => $data_arr->stock_level,
                    'stock_unit' => $data_arr->stock_unit,
                    'source' => $data_arr->source,
                    'trade' => $data_arr->trade,
                ]);

                return true;
                break;
            case 'machine_supplies_details':
                MachineSuppliesDetail::create([
                    'listing_id' => $data_arr->listing_id,
                    'condition' => $data_arr->condition,
                    'manufactured_year' => SiteHelper::reformatDateToDbDate($data_arr->manufactured_year),
                    'usage' => $data_arr->usage,
                    'model' => $data_arr->model,
                    'stock_level' => $data_arr->stock_level,
                    'stock_unit' => $data_arr->stock_unit,
                ]);

                return true;
                break;
            default :
                return false;

        }
    }

    public function showTermsAndConditions($listing_id = '')
    {
        if ($listing_id != '') {
            $validation_arr = [
                'listing_id' => $listing_id,
            ];

            $Validator = Validator::make($validation_arr, [
                'listing_id' => 'required|exists:listings,id',
            ]);

            if ($Validator->fails()) {
                $error = $Validator->errors()->first();
                SiteHelper::setAlert('danger', "Invalid Request");
                return redirect(env('base_url') . 'home');
            }
        }

        $data = [
            'listing_id' => $listing_id
        ];
        return view('listings.terms-and-conditions')->with($data);
    }

    public function agreeToTermsAndConditions($listing_id = '')
    {
        if ($listing_id != '') {
            $validation_arr = [
                'listing_id' => $listing_id,
            ];

            $Validator = Validator::make($validation_arr, [
                'listing_id' => 'required|exists:listings,id',
            ]);

            if ($Validator->fails()) {
                $error = $Validator->errors()->first();
                SiteHelper::setAlert('danger', "Invalid Request");
                return redirect(env('base_url') . 'home');
            }

            $Listing = Listing::find($listing_id);
            $Listing->agree_to_terms_and_conditions = true;
            $Listing->save();

            $endpoint = "verify-email";

            $User = User::find(Session::get('user')->id);

            if (!$User->is_subscription_active) {
                $endpoint = "subscription/plans";
            }

            return response()->json([
                'status' => true,
                'message' => "Success",
                'endpoint' => $endpoint,
                'phone' => $Listing->phone,
            ]);
        }

    }

    public function addToFavourites($listing_id)
    {
        $validation_arr = [
            'listing_id' => $listing_id,
        ];

        $Validator = Validator::make($validation_arr, [
            'listing_id' => 'required|exists:listings,id',
        ]);

//        if (!Auth::id() || !Session::has('user')) {
//            return response()->json([
//                'status' => false,
//                'message' => "Login to continue",
//            ]);
//        }

        if ($Validator->fails()) {
            $error = $Validator->errors()->first();
            return response()->json([
                'status' => false,
                'message' => "Invalid Selection",
            ]);
        }

        $Favourite = Favourite::where([
            'listing_id' => $listing_id,
            'user_id' => Auth::id(),
        ])->first();

        if (!empty($Favourite)) {
            return response()->json([
                'status' => false,
                'message' => "Already exists",
            ]);
        }

        Favourite::create([
            'listing_id' => $listing_id,
            'user_id' => Auth::id() ?? Session::get('user')->id,
        ]);

        return response()->json([
            'status' => true,
            'message' => "Added to favourites",
        ]);

    }

    public function reportAd(Request $request)
    {

        $Validator = Validator::make($request->all(), [
            'ad_id' => 'required|exists:listings,id',
            'report_reason' => 'required',
            'description' => 'required',
        ]);


        if ($Validator->fails()) {

            return response()->json([
                'status' => false,
                'message' => $Validator->errors()->first(),
            ]);
        }

        $AdsReported = AdsReported::where([
            'listing_id' => $request->ad_id,
            'reported_by' => Auth::id() ?? Session::get('user')->id,
        ])->first();

        if (!empty($AdsReported)) {

            return response()->json([
                'status' => false,
                'message' => "Already Reported",
            ]);
        }


        AdsReported::create([
            'listing_id' => $request->ad_id,
            'reason' => $request->report_reason,
            'description' => $request->description,
            'reported_by' => Auth::id() ?? Session::get('user')->id,
            'reported_at' => Carbon::now(),
        ]);

        return response()->json([
            'status' => true,
            'message' => "Ad Reported",
        ]);

    }

    public function removeFromFavourites($listing_id)
    {
        $validation_arr = [
            'listing_id' => $listing_id,
        ];

        $Validator = Validator::make($validation_arr, [
            'listing_id' => 'required|exists:listings,id',
        ]);

        if ($Validator->fails()) {
            $error = $Validator->errors()->first();
            return response()->json([
                'status' => false,
                'message' => "Invalid Selection",
            ]);
        }

        $Favourite = Favourite::where([
            'listing_id' => $listing_id,
            'user_id' => Auth::id(),
        ])->first();

        if (!empty($Favourite)) {
            $Favourite->delete();

            return response()->json([
                'status' => true,
                'message' => "Removed",
            ]);
        }

        return response()->json([
            'status' => false,
            'message' => "Failed",
        ]);

    }

    public function deleteAd(Request $request)
    {
        $Validator = Validator::make($request->all(), [
            'ad_id' => 'required|exists:listings,id',
        ]);

        if ($Validator->fails()) {
            $error = $Validator->errors()->first();
            return response()->json([
                'status' => false,
                'message' => "Invalid Selection",
            ]);
        }

        Listing::where([
            'id' => $request->ad_id,
            'created_by' => Auth::id() ?? Session::get('user')->id,
        ])->delete();

        return response()->json([
            'status' => true,
            'message' => "Deleted",
        ]);

    }

    public function getCities(Request $request)
    {
        $Validator = Validator::make($request->all() , [
            'country' => 'required|exists:countries,id'
        ]);

        if ($Validator->fails()) {
            $errors = $Validator->errors();

            return response()->json([
                'status' => false,
                'errors' => $errors
            ]);
        }

        return response()->json([
            'status' => true,
            'data' => RecordHelper::getCities($request->country)
        ]);
    }

    public function getCountries()
    {
        return response()->json([
            'status' => true,
            'data' => RecordHelper::getCountries()
        ]);
    }


}
