<?php

use App\Http\Controllers\AdController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LangController;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/register', [AuthController::class, 'register']);
Route::any('/login', [AuthController::class, 'login'])->name('login');
Route::post('/change-lang', [LangController::class, 'change']);
Route::post('/forgot-password-check', [AuthController::class, 'forgotPasswordCheck']);

Route::post('/reset-code-check', [AuthController::class, 'resetPasswordCodeCheck']);// for mobile api

Route::post('/reset-password', [AuthController::class, 'resetPassword']);
Route::post('/category/upload-file', [CategoryController::class, 'uploadFile']);
Route::post('/category/list', [CategoryController::class, 'getAllCategories']);
Route::post('/subcategory/list', [CategoryController::class, 'getAllSubCategories']);

Route::post('chats/initiate', [\App\Http\Controllers\ChatController::class, 'initiateChat']);
Route::post('chats/accept-or-reject', [\App\Http\Controllers\ChatController::class, 'acceptOrRejectChat']);
Route::post('chats/send-chat-request', [\App\Http\Controllers\ChatController::class, 'initiateChat']);
Route::post('chats/send-message', [\App\Http\Controllers\ChatController::class, 'sendMessage']);
Route::get('chats/get-new-messages', [\App\Http\Controllers\ChatController::class, 'getNewMessages']);
Route::post('chats/mark-as-read', [\App\Http\Controllers\ChatController::class, 'markMessagesAsRead']);
Route::post('chats/mark-as-read-all', [\App\Http\Controllers\ChatController::class, 'markMessagesAsReadAll']);

Route::post('/listing/search', [SearchController::class, 'search']);
Route::post('/listing/filter', [SearchController::class, 'filter']);

Route::post('/get-countries', [ListingController::class, 'getCountries']);
Route::post('/get-cities', [ListingController::class, 'getCities']);

Route::post('ads/download-document-request', [AdController::class, 'downloadDocumentRequest']);
Route::post('ads/download-request-status-update', [AdController::class, 'downloadRequestStatusUpdate']);
Route::prefix('/ads')->group(function () {
    Route::post('/{subcategory_id}', [AdController::class, 'adsBySubcategoryId']);
    Route::post('/detail/{ad_id}', [AdController::class, 'adDetail']);
});

Route::post('/popular-ads', [AdController::class, 'getPopularAds']);


    Route::prefix('/search')->group(function () {
        Route::post('/delete/{search_id}', [SearchController::class, 'delete']);
        Route::post('/delete-all', [SearchController::class, 'deleteAll']);
    });

    Route::prefix('/notification')->group(function () {
        Route::post('/delete/{search_id}', [SearchController::class, 'delete']);
        Route::post('/delete-all', [SearchController::class, 'deleteAll']);
    });

    Route::post('/delete-ad', [ListingController::class, 'deleteAd']);

    Route::prefix('/user')->group(function () {
        Route::post('/ads', [UserController::class, 'getAdsOfCurrentUser']);
        Route::post('reviews', [UserController::class, 'reviews']);
        Route::post('/favourites', [UserController::class, 'getFavouriteAdsOfCurrentUser']);
        Route::post('/searches', [UserController::class, 'getSearchesOfCurrentUser']);
        Route::post('/delete-account', [UserController::class, 'deleteAccount']);
    });

    Route::prefix('/user-notifications')->group(function () {
        Route::post("/", 'App\Http\Controllers\App\UserNotificationController@all');
        Route::post("/show", 'App\Http\Controllers\App\UserNotificationController@show');
        Route::post("/mark-as-read-single", 'App\Http\Controllers\App\UserNotificationController@markAsReadSingle');
        Route::post("/mark-as-read-all", 'App\Http\Controllers\App\UserNotificationController@markAsReadAll');
    });

    Route::prefix('app/')->group(function () {
        Route::prefix('chats/')->group(function () {
            Route::post('get-users-for-chat', [\App\Http\Controllers\ChatController::class, 'getAcceptedUserForChat']);
            Route::post('send-request/{user_id}', [\App\Http\Controllers\ChatController::class, 'initiateChat']);
            Route::post('accept-or-reject', [\App\Http\Controllers\ChatController::class, 'acceptOrRejectChat']);
            Route::post('send-chat-request', [\App\Http\Controllers\ChatController::class, 'initiateChat']);
            Route::post('send-message', [\App\Http\Controllers\ChatController::class, 'sendMessage']);
            Route::get('get-new-messages', [\App\Http\Controllers\ChatController::class, 'getNewMessages']);
            Route::post('mark-as-read', [\App\Http\Controllers\ChatController::class, 'markMessagesAsRead']);
        });
    });

    Route::post('/update-password', [AuthController::class, 'updatePassword']);
    Route::post('/verify-email', [AuthController::class, 'generateEmailVerificationcode']);
    Route::post('/verify-email-code', [AuthController::class, 'verifyEmailCode']);
    Route::post('/update-profile', [UserController::class, 'updateProfile']);

    Route::post('/dashboard', [AdminController::class, 'dashboard']);
    Route::get('get-chart-data', [AdminController::class, 'getChartData']);
Route::middleware('auth:sanctum')->group(function () {
    
    // Route::prefix('/search')->group(function () {
    //     Route::post('/delete/{search_id}', [SearchController::class, 'delete']);
    //     Route::post('/delete-all', [SearchController::class, 'deleteAll']);
    // });

    // Route::prefix('/notification')->group(function () {
    //     Route::post('/delete/{search_id}', [SearchController::class, 'delete']);
    //     Route::post('/delete-all', [SearchController::class, 'deleteAll']);
    // });

    // Route::post('/delete-ad', [ListingController::class, 'deleteAd']);

    // Route::prefix('/user')->group(function () {
    //     Route::post('/ads', [UserController::class, 'getAdsOfCurrentUser']);
    //     Route::post('/favourites', [UserController::class, 'getFavouriteAdsOfCurrentUser']);
    //     Route::post('/searches', [UserController::class, 'getSearchesOfCurrentUser']);
    //     Route::post('/delete-account', [UserController::class, 'deleteAccount']);
    // });

    // Route::prefix('/user-notifications')->group(function () {
    //     Route::post("/", 'App\Http\Controllers\App\UserNotificationController@all');
    //     Route::post("/show", 'App\Http\Controllers\App\UserNotificationController@show');
    //     Route::post("/mark-as-read-single", 'App\Http\Controllers\App\UserNotificationController@markAsReadSingle');
    //     Route::post("/mark-as-read-all", 'App\Http\Controllers\App\UserNotificationController@markAsReadAll');
    // });

    // Route::prefix('app/')->group(function () {
    //     Route::prefix('chats/')->group(function () {
    //         Route::post('get-users-for-chat', [\App\Http\Controllers\ChatController::class, 'getAcceptedUserForChat']);
    //         Route::post('send-request/{user_id}', [\App\Http\Controllers\ChatController::class, 'initiateChat']);
    //         Route::post('accept-or-reject', [\App\Http\Controllers\ChatController::class, 'acceptOrRejectChat']);
    //         Route::post('send-chat-request', [\App\Http\Controllers\ChatController::class, 'initiateChat']);
    //         Route::post('send-message', [\App\Http\Controllers\ChatController::class, 'sendMessage']);
    //         Route::get('get-new-messages', [\App\Http\Controllers\ChatController::class, 'getNewMessages']);
    //         Route::post('mark-as-read', [\App\Http\Controllers\ChatController::class, 'markMessagesAsRead']);
    //     });
    // });

    // Route::post('/update-password', [AuthController::class, 'updatePassword']);
    // Route::post('/verify-email', [AuthController::class, 'generateEmailVerificationcode']);
    // Route::post('/verify-email-code', [AuthController::class, 'verifyEmailCode']);
    // Route::post('/update-profile', [UserController::class, 'updateProfile']);
});

Route::post('/user-data', [UserController::class, 'detail']);
Route::post('/logout', [AuthController::class, 'logout']);

Route::prefix('/listing')->group(function () {
    Route::post('reviews', [AdController::class, 'reviews']);
    Route::post('/save-listing-title', [ListingController::class, 'storeListingTitle']);
    Route::post('/nextsubmit', [ListingController::class, 'SubmitPrice']);
    Route::post('/save-ad', [ListingController::class, 'storeAd']);
    Route::post('agree-to-terms/{listing_id}', [ListingController::class, 'agreeToTermsAndConditions']);
    Route::post('add-to-favourites/{listing_id}', [ListingController::class, 'addToFavourites']);
    Route::post('remove-from-favourites/{listing_id}', [ListingController::class, 'removeFromFavourites']);
    Route::post('report-ad', [ListingController::class, 'reportAd']);
    Route::get('/ads', [AdController::class, 'getAllAds']);


});

Route::prefix('/subscription')->group(function() {
    // Route::post('/checkout', [\App\Http\Controllers\PlanController::class, 'checkout']);
});


// admin api
Route::prefix('/categories')->group(function () {
    Route::get('/list', [CategoryController::class, 'all']);
    Route::post('/change-status', [CategoryController::class, 'changeStatus']);
    Route::post('/store', [CategoryController::class, 'store']);
    Route::post('/edit/{category_id}', [CategoryController::class, 'edit']);
    Route::post('/update', [CategoryController::class, 'update']);
    Route::post('/delete/{category_id}', [CategoryController::class, 'delete']);
    Route::post('/upload-file', [CategoryController::class, 'uploadFile']);
});

Route::prefix('/users')->group(function () {
    Route::post('/', [UserController::class, 'all']);
    Route::post('/change-status', [UserController::class, 'changeStatus']);
    Route::post('/store', [UserController::class, 'store']);
    Route::post('/{id}/show', [UserController::class, 'show']);
    Route::post('/update', [UserController::class, 'update']);
    Route::post('{id}/delete', [UserController::class, 'delete']);
    Route::post('reviews', [UserController::class, 'reviews']);
    Route::post('{id}/delete-review', [UserController::class, 'deleteReview']);
    Route::post('{id}/ delete-review-ads', [UserController::class, 'deleteReviewAds']);
   
    Route::post('transactions', [UserController::class, 'transactions']);
    Route::post('{id}/delete-transaction', [UserController::class, 'deleteTransaction']);
});

// end api
