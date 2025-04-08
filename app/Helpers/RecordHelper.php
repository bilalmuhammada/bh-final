<?php

namespace App\Helpers;

use App\Models\Category;
use App\Models\city;
use App\Models\CollectionCenter;
use App\Models\Country;
use App\Models\Listing;
use App\Models\ListingUserApproval;
use App\Models\Search;
use App\Models\SubCategory;
use App\Models\UserNotification;
use App\Notifications\EmailNotification;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class RecordHelper
{
    public static function getCategories()
    {
        return Category::with(['attachment', 'sub_categories'])->orderBy('sequence')->get();
    }

    public static function getCountries()
    {
        return Country::orderBy('name')->get();
    }

    public static function getCountriesRegistration()
    {
        
        return  DB::table('countries')->orderBy("name",'ASC')->get();
    }

    public static function getnationalities()
    {
        $nationalities = DB::table('nationalities')->orderBy("name",'ASC')->get();
    
    
        return $nationalities;
    }
    public static function getlanguge()
    {
        $languages = DB::table('languages')->orderBy("name",'ASC')->get();
    
    
        return $languages;
    }


    public static function getCities($country_id = false)
    {
        if (!$country_id) {
            return collect();
        }

        $cities = city::where('country_id', $country_id)->orderBy('sequence')->get();
        // dd($cities,'hh');
        if ($cities->count() > 22) {
            return $cities->take(22);
        }

        return $cities;
    }
    public static function getCurrency()
    {
        
        $currency = Country::orderBy('name')->get();
       
        // $languages = DB::table('languages')->orderBy("name",'ASC')->get();
       

        return $currency;
    }
    
    public static function getSafeValueFromObject($object, $index, $default = '')
    {
        
    //   dd($object);
        // Check if the object is null or not an object
        if (empty($object) || !is_object($object)) {
            return $default;
        }

        // Check if the index exists and is not null
        if (isset($object->$index) && !empty($object->$index)) {
            return $object->$index;
        }

        return $default;
    }

    public static function getSubCategories($category_id)
    {
        return SubCategory::where('category_id', $category_id)->orderBy('sequence')->get();
    }

    public static function getSubCategoriesLike($category_id=null, $keyword = null)
{

    
    if ($category_id === null) {
        $query =   SubCategory::select('name')->groupBy('name'); // Use query builder
    } else {
        $query = SubCategory::where('category_id', $category_id);
    }
    
    if ($keyword) {
        $query->where('name', 'LIKE', '%' . $keyword . '%');
    }
    
    return $query->get();
}
    public static function getAdsBySubcategory($subcategory_id)
    {
        $country_id = request()->country;
        $city_id = request()->city;

        return Listing::with(['attachments', 'created_by_user'])->where('subcategory_id', $subcategory_id)->when($country_id, function ($Listing) use ($country_id) {
            $Listing->where('country_id', $country_id);
        })->when($city_id, function ($Listing) use ($city_id) {
            $Listing->where('city_id', $city_id);
        })->orderBy('name')->get();
    }

    public static function getAdsByCategory($Category_id)
    {
        $country_id = request()->country;
        $city_id = request()->city;

        return Listing::with(['attachments', 'created_by_user'])->where('subcategory_id', $subcategory_id)->when($country_id, function ($Listing) use ($country_id) {
            $Listing->where('country_id', $country_id);
        })->when($city_id, function ($Listing) use ($city_id) {
            $Listing->where('city_id', $city_id);
        })->orderBy('name')->get();
    }

    public static function getAdById($ad_id)
    {
        return Listing::with(['attachments', 'images', 'documents', 'created_by_user'])->find($ad_id);
    }

    public static function getAdsByUserId($user_id)
    {
        
        return Listing::with(['attachments', 'created_by_user'])->where('created_by', $user_id)->orderBy('name')->get();
    }

   
    public static function getSearches()
    {
        return Search::where('searched_by', Auth::id() ?? Session::get('user')->id)->orderBy('created_at')->get();
    }

    public static function getAds()
    {
        $country_id = request()->country;
        $city_id = request()->city;

        return Listing::orderBy('name')->when($country_id, function ($Listing) use ($country_id) {
            $Listing->where('country_id', $country_id);
        })->when($city_id, function ($Listing) use ($city_id) {
            $Listing->where('city_id', $city_id);
        })->get();
    }

    public static function getFavouriteAds()
    {
        $user_id = Auth::id() ?? Session::get('user')->id;
        return Listing::with(['attachments', 'created_by_user'])->whereHas('favourites', function ($Favourite) use ($user_id) {
            $Favourite->where('user_id', $user_id);
        })->get();
    }

    public static function getNotifications()
    {
        $user_id = Auth::id() ?? Session::get('user')->id;
        return UserNotification::where('user_id', $user_id)->latest()->get();
    }

    public static function getUnreadMessages()
    {
        $Messages = \App\Models\Message::with('receiver')->where('receiver_id', \App\Helpers\SiteHelper::getLoginUserId())->where('is_readed', 0)->get();

        return $Messages;
    }

    public static function getDownloadRequests($type)
    {
        return ListingUserApproval::with('listing')->whereHas('listing', function ($Listing) {
            $Listing->where('created_by', SiteHelper::getLoginUserId());
        })->where('status', 'pending')->where('type', $type)->get();
    }
}
