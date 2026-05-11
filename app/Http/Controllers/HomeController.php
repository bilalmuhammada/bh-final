<?php

namespace App\Http\Controllers;

use App\Helpers\RecordHelper;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    public function index()
    {
        if (!session()->has('app_currency')) {
            session(['app_currency' => 'USD']);
        }
       

        return view('home.index');
    }

    public function home(Request $request)
    {
        if ($request->country) {
            Session::put('country', $request->country);
        }

        return view('home.home');
    }
    public function showAd()
    {
        return view('home.show-ad');
    }
    public function adDetail()
    {
        return view('home.ad-detail');
    }
    public function favourite()
    {
        $user_id = \App\Helpers\SiteHelper::getLoginUserId();
        if (empty($user_id)) {
            return redirect('/home')->with('error', 'Please login to view favorites');
        }

        $categories = Category::orderBy('sequence')->get();
        
        // Fetch favorites grouped by category
        $favourites = \App\Models\Favourite::where('user_id', $user_id)
            ->has('listing')
            ->with(['listing.category', 'listing.attachments'])
            ->get()
            ->groupBy(function($fav) {
                return $fav->listing->category_id;
            });

        $data = [
            'categories' => $categories,
            'favourites' => $favourites
        ];
        
        return view('home.innerPages.favourite')->with($data);
    }


    public function getAllNotification()
    {
        // $categories = Category::orderBy('name')->get();
        // $data = [
        //     'categories' => $categories
        // ];
        return view('home.innerPages.notifications');
        // ->with($data);
    }

    public function getcategoriesLike(Request $request)
    {
        $category_id = $request->get('category_id');
        $keyword = $request->get('keyword', '');

        // dd(  $category_id );
        return response()->json(\App\Helpers\RecordHelper::getSubCategoriesLike($category_id, $keyword));
   
    }



}
