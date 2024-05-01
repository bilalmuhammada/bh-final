<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\AdController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\PlanController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('auth/google', [AuthController::class, 'redirectToGoogle']);
Route::get('auth/google/callback', [AuthController::class, 'handleGoogleCallback']);

Route::get('123', function () {
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('view:clear');
});

Route::get('/ads/{subcategory_id}', [AdController::class, 'showAds']);
Route::get('/ads/detail/{ad_id}', [AdController::class, 'showAdDetail']);

Route::get('/', [HomeController::class, 'index']);
Route::get('/home', [HomeController::class, 'home']);
Route::get('/forgot-password', [AuthController::class, 'forgotPassword']);
Route::get('/reset/{reset_password_token}', [AuthController::class, 'reset']);
Route::get('/verify-email/', [AuthController::class, 'verifyEmail']);

Route::get('/listing/search', [SearchController::class, 'search']);

Route::middleware('check_user_auth')->group(function () {
    Route::get('/logout', [AuthController::class, 'logout']);

    Route::prefix('/user')->group(function() {
        Route::get('/profile', [UserController::class, 'showProfile']);
        Route::get('/ads', [UserController::class, 'myAds']);
        Route::get('/change-password', [AuthController::class, 'changePassword']);
        Route::get('/searches', [UserController::class, 'mySearches']);
    });

    Route::prefix('/listing')->group(function() {
        Route::get('/select-category', [ListingController::class, 'showSelectCategory']);
        Route::get('/select-subcategory/{category_id}', [ListingController::class, 'showSelectSubcategory']);
        Route::get('{category_id}/listing-title/{subcategory_id}', [ListingController::class, 'showListingTitleForm']);
        Route::get('/place-ad/{listing_id}', [ListingController::class, 'showPlaceAd']);
        Route::get('terms-and-conditions/{listing_id}', [ListingController::class, 'showTermsAndConditions']);
    });

    Route::prefix('/subscription')->group(function() {
        Route::get('/plans', [PlanController::class, 'showPlans']);
        Route::get('/user-details', [PlanController::class, 'showUserDetailForm']);
        Route::post('/checkout', [PlanController::class, 'checkout']);
    });
});

Route::get('/about-us',function(){
 return view('about-us');
});
Route::get('/contact-us',function(){
   return view('contact-us');
  });
  Route::get('/how-it-works',function(){
   return view('how-it-works');
  });
  Route::get('/privacy-policy',function(){
   return view('privacy-policy');
  });
  Route::get('/terms-of-use',function(){
   return view('terms');
  });
  Route::get('/change-password',function(){
   return view('change-password');
  });

Route::get('/step-6', function(){
    return view('listings.step-6');
});

//newly added links by saima

Route::get('/notifications', function(){
    return view('home.innerPages.notifications');
});
Route::get('/my-searches', function(){
    return view('home.innerPages.search');
});

Route::get('/my-favourites', [HomeController::class, 'favourite']);

Route::get('/my-ads', function(){
    return view('home.innerPages.ads');
});
Route::get('/chats', function(){
    return view('home.innerPages.chats');
});
Route::get('/chat-new', function(){
    return view('chat-new');
});

//custom forms
Route::get('/business-ideas-form', function(){
    return view('listings-cat-forms.business-ideas');
});
Route::get('/business-for-sale-form', function(){
    return view('listings-cat-forms.business-for-sale');
});
Route::get('/share-for-sale-form', function(){
    return view('listings-cat-forms.share-for-sale');
});
Route::get('/investors-form', function(){
    return view('listings-cat-forms.investors');
});
Route::get('/investors-required-form', function(){
    return view('listings-cat-forms.investors-required');
});
Route::get('/franchise-opportunities-form', function(){
    return view('listings-cat-forms.franchise-opportunities');
});
Route::get('/export-import-trade-form', function(){
    return view('listings-cat-forms.export-import-trade');
});
Route::get('/machinery-supplies-form', function(){
    return view('listings-cat-forms.machinery-supplies');
});

//chat route start here
Route::get('/chats/', [\App\Http\Controllers\ChatController::class, 'index']);
