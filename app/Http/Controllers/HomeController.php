<?php

namespace App\Http\Controllers;

use App\Helpers\RecordHelper;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    public function index()
    {
        session()->forget('app_currency');
        session(['app_currency' => 'USD']);
       

        dd("ggg");
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
        $categories = Category::orderBy('name')->get();
        $data = [
            'categories' => $categories
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
