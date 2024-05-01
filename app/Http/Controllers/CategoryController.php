<?php

namespace App\Http\Controllers;

use App\Helpers\RecordHelper;
use App\Helpers\SiteHelper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    public function uploadFile(Request $request)
    {
        // Get the data from the request
        $data = $request->all();

        // Extract the file name and file data from the data array
        $file_name = $data['file_name'];
        $file_data = base64_decode($data['file_data']);

        // Define the destination folder on the server
        $live_server_folder = public_path("uploads/categories");

        // Save the file on the server
        if (file_put_contents($live_server_folder . DIRECTORY_SEPARATOR . $file_name, $file_data)) {
            return true;
        } else {
            return false;
        }
    }

    public function getAllCategories()
    {
        return response()->json([
            'status' => true,
            'data' => RecordHelper::getCategories()
        ]);
    }

    public function getAllSubCategories(Request $request)
    {
        $Validator = Validator::make($request->all(), [
            'category_id' => 'required|exists:categories,id'
        ]);

        if ($Validator->fails()) {
            $error = $Validator->errors()->first();
            return response()->json([
                'status' => true,
                'message' => "Invalid category"
            ]);
        }

        return response()->json([
            'status' => true,
            'data' => RecordHelper::getSubCategories($request->category_id)
        ]);
    }
}
