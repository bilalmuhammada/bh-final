<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class LangController extends Controller
{
    public function change(Request $request)
    {
        App::setLocale($request->lang);
        session()->put('locale', $request->lang);

        return response()->json([
            'status' => true,
            'code' => '200',
            'message' => 'Language Changed'
        ]);
    }
}
