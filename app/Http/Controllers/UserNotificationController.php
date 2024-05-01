<?php

namespace App\Http\Controllers\App;

use App\Models\UserNotification;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class UserNotificationController extends Controller
{
    public function show(Request $request)
    {
        return response()->json([
            'status' => true,
            'data' => UserNotification::with('notification')->find($request->id)
        ]);
    }

    public function all()
    {
        return response()->json([
            'status' => true,
            'data' => UserNotification::with('notification')->where('user_id', Auth::id())->latest()->get()
        ]);
    }

    public function markAsReadSingle(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => $validator->errors()->first()
            ]);
        }

        $UserNotification = UserNotification::find($request->id);
        $UserNotification->read_at = Carbon::now();
        $UserNotification->save();


        return response()->json([
            'status' => true,
            'message' => 'Mark As Read Successfully'
        ]);
    }

    public function markAsReadAll(Request $request)
    {
        $UserNotification = UserNotification::whereNull('read_at')->where('user_id', Auth::id())->get();

        $current = Carbon::now();
        foreach ($UserNotification as $notification) {
            $notification->read_at = $current;
            $notification->save();
        }
        return response()->json([
            'status' => true,
            'message' => 'Mark As Read Successfully'
        ]);
    }

}
