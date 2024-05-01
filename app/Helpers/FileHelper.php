<?php

namespace App\Helpers;

class FileHelper
{
    public static function uploadFiles($attachments, $path)
    {
        $i = 0;
        $error = [];
        $upload_data = [];

        if (!empty($attachments)) {
            foreach ($attachments as $file) {
                if (!empty($file)) {
                    $file_name = time() . $i . '.jpg';
                    $upload_data[] = ['file_name' => $file_name];
                    list($type, $data) = explode(';', str_replace("charset=utf-8;", "", $file['dataURL']));
                    list(, $data) = explode(',', $data);
                    $data = base64_decode($data);
                    file_put_contents($path . '/' . $file_name, $data);
                    $i++;
                }
            }
        }

        return ["status" => true, "message" => 'Success', "upload_data" => $upload_data, "error" => $error];
    }

    public static function uploadFile($image, $path)
    {
        $base64Image = explode(";base64,", $image);
        $explodeImage = explode("image/", $base64Image[0]);
        $imageType = $explodeImage[1];
        $image_base64 = base64_decode($base64Image[1]);
        $file_name = uniqid() . '.'.$imageType;
        $file = $path . '/' . $file_name;
        file_put_contents($file, $image_base64);

        return [
            "status" => true,
            "message" => 'Success',
            "file_name" => $file_name,
            "file_path" => $file,
            "type" => $imageType
        ];
    }
}
