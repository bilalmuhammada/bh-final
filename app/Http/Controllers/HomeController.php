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

        // Capture everything during view rendering
        DB::enableQueryLog();
        $startTime = microtime(true);
        
        $view = view('home.home');
        $renderedView = $view->render();
        
        $endTime = microtime(true);
        $executionTime = $endTime - $startTime;
        $queries = DB::getQueryLog();
        
        \Illuminate\Support\Facades\Log::info("HOME VIEW RENDER PERFORMANCE:");
        \Illuminate\Support\Facades\Log::info("Execution time: {$executionTime}s");
        \Illuminate\Support\Facades\Log::info("Queries count: " . count($queries));
        
        foreach ($queries as $query) {
            if ($query['time'] > 100) {
                \Illuminate\Support\Facades\Log::warning("SLOW QUERY ({$query['time']}ms): {$query['query']}", $query['bindings']);
            }
        }

        return $renderedView;
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
