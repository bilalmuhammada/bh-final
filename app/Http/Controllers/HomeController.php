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
        if (!session()->has('app_currency')) {
            session(['app_currency' => 'USD']);
        }
       

        return view('home.index');
    }

    public function home(Request $request)
    {
        \Illuminate\Support\Facades\DB::enableQueryLog();
        $startTime = microtime(true);
      
        if ($request->country) {
            Session::put('country', $request->country);
        }

        $endTime = microtime(true);
        $executionTime = $endTime - $startTime;
        $queries = \Illuminate\Support\Facades\DB::getQueryLog();
        
        \Illuminate\Support\Facades\Log::info("Home page execution time: {$executionTime}s");
        \Illuminate\Support\Facades\Log::info("Home page queries count: " . count($queries));
        
        foreach ($queries as $query) {
            if ($query['time'] > 100) { // Log queries slower than 100ms
                \Illuminate\Support\Facades\Log::warning("Slow query ({$query['time']}ms): {$query['query']}", $query['bindings']);
            }
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
