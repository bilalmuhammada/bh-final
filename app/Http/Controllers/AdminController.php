<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function index()
    {
        $users = User::get();
        $countries = Country::all();

        $data = [
            'countries'=> $countries,
            'menu' => 'dashboard',
            'total_users' => $users->count(),
            'active_users' => $users->where('status', 'active')->count(),
            'inactive_users' => $users->where('status', 'inactive')->count(),
        ];
        return view('Admin.dashboard.index')->with($data);
    }
}
