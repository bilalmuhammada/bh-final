<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Listing;
use App\Models\Search;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $category_id = $request->category_id;

        if (!blank($request->key_words) ) {
            Search::create([
                'category_id' => $request->input('category_id', null),
                'key_words' => $request->input('key_words', null),
                'searched_by' => Session::get('user')->id ?? null
            ]);
        }

        $Listings = Listing::with([
            'attachments',
            'created_by_user'
        ])->when($category_id, function ($listing) use ($category_id) {
            $listing->where('category_id', $category_id);
        })->where('title', 'like', '%' . $request->key_words . '%')->get();


        if (isset($request->mode) && $request->mode == "API") {
            return response()->json([
                'status' => true,
                'message' => "Success",
                'data' => $Listings,
            ]);
        } else {
            $data = [
                'from' => $request->from ?? false,
                'to' => $request->to ?? false,
                'keyword' => $request->keywords ?? false,
                'category_id' => $category_id ?? 1,
                'category_name' => Category::find($category_id)->name ?? "ALL",
                'subcategory_id' => "",
                'subcategory_name' => "All",
                'ads' => $Listings
            ];

            return view('ads.list')->with($data);
        }
    }

    public function delete($search_id)
    {
        $validation_arr = [
            'search_id' => $search_id,
        ];

        $Validator = Validator::make($validation_arr, [
            'search_id' => 'required|exists:searches,id',
        ]);

        if ($Validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => "Invalid Selection",
            ]);
        }

        Search::find($search_id)->delete();

        return response()->json([
            'status' => true,
            'message' => "Deleted",
        ]);
    }

    public function deleteAll()
    {
        Search::where("searched_by", Auth::id())->delete();

        return response()->json([
            'status' => true,
            'message' => "Deleted",
        ]);
    }

    public function filter(Request $request)
    {
        $category_id = $request->category_id;
        $subcategory_id = $request->subcategory_id;
        $price_from = $request->from;
        $price_to = $request->to;
        $keyword = $request->keyword;

        $ads = Listing::with([
            'attachments',
            'created_by_user'
        ])
            ->when($category_id, function ($listing) use ($category_id) {
                $listing->where('category_id', $category_id);
            })
            ->when($subcategory_id, function ($listing) use ($subcategory_id) {
                $listing->where('subcategory_id', $subcategory_id);
            })
            ->when($price_from, function ($listing) use ($price_from) {
                $listing->where('price', '>=', $price_from);
            })
            ->when($price_to, function ($listing) use ($price_to) {
                $listing->where('price', '<=', $price_to);
            })
            ->when($keyword, function ($listing) use ($keyword) {
                $listing->where('title', 'like', '%' . $keyword . '%');
            })
            ->orderBy('name')->get();

        return response()->json([
           "status" => true,
           "data" => $ads
        ]);
    }
}
