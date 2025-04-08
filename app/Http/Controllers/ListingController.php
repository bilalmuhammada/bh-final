<?php

namespace App\Http\Controllers;

use App\Helpers\RecordHelper;
use App\Helpers\SiteHelper;
use App\Models\AdsReported;
use App\Models\Attachment;
use App\Models\business_rent;
use App\Models\BusinessForSaleDetail;
use App\Models\BusinessIdeaDetail;
use App\Models\Category;
use App\Models\city;
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
        $categories = Category::orderBy('sequence')->get();
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

    public function showPlaceAd($category_id,$subcategory_id)
    {
        // $validation_arr = [
        //     'listing_id' => $listing_id,
        // ];

        // $Validator = Validator::make($validation_arr, [
        //     'listing_id' => 'required|exists:listings,id',
        // ]);

        // if ($Validator->fails()) {
        //     $error = $Validator->errors()->first();
        //     SiteHelper::setAlert('danger', $error);
        //     return redirect(env('base_url') . 'listing/select-subcategory');
        // }

        // $Listing = Listing::find($listing_id);

        $Categories = Category::where('id',$category_id)->first();
        $subcategories = SubCategory::where('id',$subcategory_id)->first();;
        $view_name = Category::find($category_id)->form_view;
//  dd($subcategories);
        $data = [
             'Categories' => $Categories,
             'subcategories' => $subcategories,
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

        // dd('jjjj');
        $Validator = Validator::make($request->all(), [
           
            'title' => 'required',
            'phone' => 'required|integer',
            'price' => 'nullable|integer',
            
            'description' => 'required',
            'latitude' => 'required|integer',
            'longitude' => 'required|integer',
            // 'location_name' => 'required',
            'images' => 'required|array',
            'images.*' => 'image|max:2048',
        ]);


     if ($Validator->fails()) {
            return response()->json([
                'status' => FALSE,
                'message' => $Validator->errors()->first()
            ]);
        }


        $list =  Listing::updateOrCreate(
            // Condition to find the record
            ['id' => $request->listing_id],
            
            // Fields to update or create
            [
                'title' => $request->title,
                'category_id' => $request->category_id,
                'subcategory_id' => $request->subcategory_id,
                'name' => $request->name,
                'phone' => $request->phone,
                'price' => $request->price,
                'description' => $request->description,
                'city_id' => $request->city,
                'country_id' => $request->country,
                'status' => "pending",
                'is_featured' => 1,
                "hide_phone" => false,
                'latitude' => $request->latitude,
                'longitude' => $request->longitude,
                'created_by' => Session::get('user')->id,
            ]
        );
        
        $this->saveListingAdditionalDetails(Category::find($request->category_id)->form_view, $request,$list);

        $imgDataArr = SiteHelper::upload_file('uploads/listings', 'images');

        if ($imgDataArr['status']) {
            foreach ($imgDataArr['upload_data'] as $key => $image) {
                Attachment::create([
                    'name' => $image['name'],
                    'file_name' => $image['file_name'],
                    'type' => $image['type'],
                    'object' => 'Listing',
                    'object_id' => $list->id,
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
                    'object_id' => $list->id,
                    'context' => 'Listing-document',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ]);
            }
        }

        return response()->json([
            'status' => true,
            'message' => "Add placed successfully",
            'listing_id' => $list->id,
        ]);
    }

    public function saveListingAdditionalDetails($listing_detail_name, $data_arr,$list)
    {

    //  dd($data_arr->all());
        switch ($listing_detail_name) {
            case 'business_for_sale_details':

                BusinessForSaleDetail::create([
                    'listing_id' => $list->id,
                    'category_name' => $data_arr->category_name,
                    'subcategory_name' => $data_arr->subcategory_name,
                    'latitude' => $data_arr->latitude,
                    'longitude' => $data_arr->longitude,
                    'title' => $data_arr->title,
                    'price' => $data_arr->price,
                    'sale_revenue' => $data_arr->sale_revenue,
                    'branches' => $data_arr->branches,
                    'business_type' => $data_arr->business_type,



                    'trade_license_type' => $data_arr->trade_license_type,
                    'established_year' => $data_arr->established_year,
                    'lease_term' => $data_arr->lease_term,
                    'squrft' => $data_arr->squrft,
                    'no_of_employees' => $data_arr->no_of_employees,
                    'reason_sale' => $data_arr->reason_sale,
                    'premise_status' => $data_arr->premise_status,

                    
                    'least_amt' => $data_arr->least_amt,
                    'invt_value' => $data_arr->invt_value,
                    'selling_fin' => $data_arr->selling_fin,
                    'supt_traning' => $data_arr->supt_traning,
                    'posted_by' => $data_arr->posted_by,
                    'website' => $data_arr->website,
                    'phone' => $data_arr->phone,

                    'whatsapp' => $data_arr->whatsapp,
                    'products_and_services_offered' => $data_arr->products_and_services_offered,
                    'description' => $data_arr->description,
                    'country' => $data_arr->country,
                    'location_name' => $data_arr->location_name,
                    'city_ids' => $data_arr->city_ids,
                    
                ]);

                return true;
                break;

                case 'business_idea_details':

                    BusinessIdeaDetail::create([
                        'listing_id' => $list->id,
                        'category_name' => $data_arr->category_name,
                        'subcategory_name' => $data_arr->subcategory_name,
                        
                        'latitude' => $data_arr->latitude,
                        'longitude' => $data_arr->longitude,
                        'title' => $data_arr->title,
                        'business_modal' => $data_arr->business_modal,
                        'investment_amount' => $data_arr->investment_amount,
    
    
    
                        'trade_licence_type' => $data_arr->trade_licence_type,
                        'premise_status' => $data_arr->premise_status,
                        'size_sqm' => $data_arr->size_sqm,
                        'lease_term' => $data_arr->lease_term,
                        'branches' => $data_arr->branches,
                        'no_of_employees' => $data_arr->no_of_employees,
                        'sale_freq' => $data_arr->sale_freq,
    
                        
                        'expect_sale' => $data_arr->expect_sale,
                        'expect_roi' => $data_arr->expect_roi,
                        'contract_term' => $data_arr->contract_term,
                        'contract_length' => $data_arr->contract_length,
                        'phone' => $data_arr->phone,
                        'whatsapp' => $data_arr->whatsapp,
                        'products_and_services_offered' => $data_arr->products_and_services_offered,
    
                        'description' => $data_arr->description,
                        'country_id' => $data_arr->country_id,
                       
                        'city_id' => $data_arr->city_id,
                        'location_name' => $data_arr->location_name,
    
                        
                    ]);
    
                    return true;
                    break;

                    case 'businesses_for_rent':

                        business_rent::create([
                                'listing_id' => $list->id,
                                'category_name' => $data_arr->category_name,
                                'subcategory_name' => $data_arr->subcategory_name,
                                
                                'title' => $data_arr->title,
                                'price' => $data_arr->price,
                                'business_status' => $data_arr->business_status,
                                'established_year' => $data_arr->established_year,
                                'branches' => $data_arr->branches,
            
            
            
                                'no_of_employees' => $data_arr->no_of_employees,
                                'premise_status' => $data_arr->premise_status,
                                'squrft' => $data_arr->squrft,
                                'lease_term' => $data_arr->lease_term,
                                'least_amt' => $data_arr->least_amt,
                                'invt_value' => $data_arr->invt_value,
                                'supt_traning' => $data_arr->supt_traning,
            
                                
                                'posted_by' => $data_arr->posted_by,
                                'website' => $data_arr->website,
                                'instagram' => $data_arr->instagram,
                                'phone' => $data_arr->phone,
                                'whatsapp' => $data_arr->whatsapp,
                                'description' => $data_arr->description,
                                'country_id' => $data_arr->country_id,
            
                                'city_id' => $data_arr->city_id,
                                'location_name' => $data_arr->location_name,
                               
                                
                            ]);
            
                            return true;
                            break;
            case 'shares_for_sale_details':

                SharesForSaleDetail::create([
                    'listing_id' => $list->id,
                    'category_name' => $data_arr->category_name,
                    'subcategory_name' => $data_arr->subcategory_name,
                    'title' => $data_arr->title,
                    'share_price' => $data_arr->share_price,
                    'share_amount' => $data_arr->share_amount,
                    'business_modal' => $data_arr->business_modal,
                    'sale_revenue' => $data_arr->sale_revenue,
                    'trade_licence' => $data_arr->trade_licence,
                    'established_year' => $data_arr->established_year,
                    'branches' => $data_arr->branches,


                    'no_of_employees' => $data_arr->no_of_employees,
                    'premise_status' => $data_arr->premise_status,
                    'size_sqm' => $data_arr->size_sqm,
                    'lease_term' => $data_arr->lease_term,
                    'lease_amount' => $data_arr->lease_amount,

                    'selling_fin' => $data_arr->selling_fin,
                    'reason_sale' => $data_arr->reason_sale,
                    'posted_by' => $data_arr->posted_by,
                    'website' => $data_arr->website,
                    'instagram' => $data_arr->instagram,


                    'phone' => $data_arr->phone,
                    'whatsapp' => $data_arr->whatsapp,
                    'products_and_services_offered' => $data_arr->products_and_services_offered,
                    'description' => $data_arr->description,
                    'country_id' => $data_arr->country_id,

                    'city_id' => $data_arr->city_id,
                    'location_name' => $data_arr->location_name,
                    'latitude' => $data_arr->latitude,
                    'longitude' => $data_arr->longitude,
                    

                ]);

                return true;
                break;
            
            case 'investors_details':

                InvestorsDetail::create([
                    'listing_id' => $list->id,
                    'category_name' => $data_arr->category_name,
                    'subcategory_name' => $data_arr->subcategory_name,
                    'latitude' => $data_arr->latitude,
                    'longitude' => $data_arr->longitude,

                    'title' => $data_arr->title,
                    'investment_amount' => $data_arr->investment_amount,
                    'int_bus_mdl' => $data_arr->int_bus_mdl,
                    'open_to_invest' => $data_arr->open_to_invest,
                    'open_for_partnership' => $data_arr->open_for_partnership,


                    'ptn_plan' => $data_arr->ptn_plan,
                    'communication_pre' => $data_arr->communication_pre,
                    'phone' => $data_arr->phone,
                    'whatsapp' => $data_arr->whatsapp,
                    'show_phone' => $data_arr->show_phone,


                    'interested_business_types' => $data_arr->interested_business_types,
                    'description' => $data_arr->description,
                    'country_id' => $data_arr->country_id,
                    'city_id' => $data_arr->city_id,
                    'location_name' => $data_arr->location_name,
                ]);

                return true;
                break;
            case 'investors_required_details':

                InvestorsRequiredDetail::create([
                    'listing_id' => $list->id,
                    'latitude' => $data_arr->latitude,
                    'longitude' => $data_arr->longitude,
                    'category_name' => $data_arr->category_name,
                    'subcategory_name' => $data_arr->subcategory_name,
                    'title' => $data_arr->title,
                    'required_investment' => $data_arr->required_investment,
                    'sales_revenue' => $data_arr->sales_revenue,
                    'business_model' => $data_arr->business_model,
                    'trade_licence_type' => $data_arr->trade_licence_type,
                    'established_year' => $data_arr->established_year,


                    'branches' => $data_arr->branches,
                    'employees' => $data_arr->employees,
                    'premise_status' => $data_arr->premise_status,
                    'size_sqm' => $data_arr->size_sqm,
                    'established_year' => $data_arr->lease_term,

                    'least_amt' => $data_arr->least_amt,
                    'contract_term' => $data_arr->contract_term,
                    'contract_period' => $data_arr->contract_period,
                    'expected_roi' => $data_arr->expected_roi,
                    'posted_by' => $data_arr->posted_by,

                    'reason_investment' => $data_arr->reason_investment,
                    'website' => $data_arr->website,
                    'instagram' => $data_arr->instagram,
                    'phone' => $data_arr->phone,
                    'whatsapp' => $data_arr->whatsapp,

                    'products_and_services_offered' => $data_arr->products_and_services_offered,
                    'description' => $data_arr->description,
                    'country_id' => $data_arr->country_id,
                    'city_id' => $data_arr->city_id,
                    'location_name' => $data_arr->location_name,
                ]);

                return true;
                break;
            case 'franchise_opportunities_details':

                FranchiseOpportunitiesDetail::create([
                    'listing_id' => $list->id,
                    'category_name' => $data_arr->category_name,
                    'subcategory_name' => $data_arr->subcategory_name,
                    'title' => $data_arr->title,
                    'franchise_fee' => $data_arr->franchise_fee,
                    'franchise_fee_term' => $data_arr->franchise_fee_term,
                    'business_type' => $data_arr->business_type,
                    'trade_licence_type' => $data_arr->trade_licence_type,
                    'established_year' => $data_arr->established_year,
                    'no_of_branches' => $data_arr->no_of_branches,

                    'no_of_employees' => $data_arr->no_of_employees,
                    'premise_status' => $data_arr->premise_status,
                    'squrft' => $data_arr->squrft,
                    'lease_term' => $data_arr->lease_term,
                    'contract_period' => $data_arr->contract_period,

                    
                    'finance_term' => $data_arr->finance_term,
                    'posted_by' => $data_arr->posted_by,
                    'reason_financing' => $data_arr->reason_financing,
                    'website' => $data_arr->website,
                    'instagram' => $data_arr->instagram,

                    'phone' => $data_arr->phone,
                    'whatsapp' => $data_arr->whatsapp,
                    'products_and_services_offered' => $data_arr->products_and_services_offered,
                    'description' => $data_arr->description,
                    'country_id' => $data_arr->country_id,

                    'city_id' => $data_arr->city_id,
                    'location_name' => $data_arr->location_name,
                
                ]);

                return true;
                break;
            
            case 'machine_supplies_details':
                MachineSuppliesDetail::create([
                    'listing_id' => $list->id,
                    'category_name' => $data_arr->category_name,
                   
                    'subcategory_name' => $data_arr->subcategory_name,
                    'latitude' => $data_arr->latitude,
                    'longitude' => $data_arr->longitude,
                    'title' => $data_arr->title,

                    'price' => $data_arr->price,
                    'price_term' => $data_arr->price_term,
                   
                    'business_model' => $data_arr->business_model,
                    'trade_licence_type' => $data_arr->trade_licence_type,
                    'established_year' => $data_arr->established_year,
                    'branches' => $data_arr->branches,
                    'no_of_employees' => $data_arr->no_of_employees,
                    'premise_status' => $data_arr->premise_status,
                    'squrft' => $data_arr->squrft,
                    'lease_term' => $data_arr->lease_term,
                    'stock_level' => $data_arr->stock_level,
                    'stock_unit' => $data_arr->stock_unit,


                    'condition' => $data_arr->condition,
                    'seller_financing' => $data_arr->seller_financing,
                    'export' => $data_arr->export,
                    'posted_by' => $data_arr->posted_by,
                    'reason_sale' => $data_arr->reason_sale,
                    'website' => $data_arr->website,
                    'instagram' => $data_arr->instagram,
                    'phone' => $data_arr->phone,
                    'whatsapp' => $data_arr->whatsapp,
                    'description' => $data_arr->description,

                    'country_id' => $data_arr->country_id,
                    'city_id' => $data_arr->city_id,
                    'location_name' => $data_arr->location_name,
               
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

        //  dd($request->all());
        $Validator = Validator::make($request->all(), [
            'ad_id' => 'required',
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
            'user_id' => Session::get('user')->id,
        ])->first();

        //  dd( );
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

// dd($request->country);
    
        return response()->json([
            'status' => true,
            'data' => RecordHelper::getCities($request->country)
        ]);
    }

    public function get_city_Countries(Request $request)
    {
        $country_id= city::orderBy('name')->where('country_id',$request->country_id)->get();
        return response()->json([
            'status' => true,
            'data' =>  $country_id

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
