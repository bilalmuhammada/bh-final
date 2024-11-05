<?php

namespace App\Helpers;

use App\Models\Attachment;
use App\Models\BusinessForSaleDetail;
use App\Models\CollectionCenter;
use App\Models\ExportImportTradeDetail;
use App\Models\FranchiseOpportunitiesDetail;
use App\Models\InvestorsDetail;
use App\Models\InvestorsRequired;
use App\Models\MachineSuppliesDetail;
use App\Models\SharesForSaleDetail;
use App\Models\User;
use App\Models\UserNotification;
use App\Notifications\EmailNotification;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class SiteHelper
{
    private $alert = '';

    public static function reformatDateToDbDate($date)
    {

        if (!empty($date)) {
            return Carbon::parse($date)->format('Y-m-d H:i:s');
        } else {
            return NULL;
        }
    }

    public static function reformatDbDateTime($datetimeStr)
    {

        if (!empty($datetimeStr)) {
            return Carbon::createFromFormat('d/m/Y H:i', $datetimeStr)->format('Y-m-d H:i:s');
        } else {
            return NULL;
        }
    }

    public static function priceFormatter($price,$currency='')
    {
        if (empty($price) || $price < 1) {
            return $currency .' '. 0;
        } else {
            return $currency .' '. number_format($price);
        }
    }

    public static function reformatDbDate($dateStr)
    {
        if (!empty($dateStr)) {
            return Carbon::createFromFormat('d/m/Y H:i:s', "{$dateStr} 00:00:00")->format('Y-m-d');
        } else {
            return NULL;
        }
    }

    public static function reformatDate($date)
    {
        if (!empty($date)) {
            return Carbon::createFromFormat('Y-m-d H:i:s', "{$date} 00:00:00");
        } else {
            return NULL;
        }
    }

    public static function reformatReadableDateTime($datetimeStr)
    {

        if (!empty($datetimeStr)) {
            return Carbon::createFromFormat('Y-m-d H:i:s', $datetimeStr)->format('d/m/Y H:i');
        } else {
            return NULL;
        }
    }

    public static function reformatReadableDate($dateStr)
    {
        if (!empty($dateStr)) {
            return Carbon::createFromFormat('Y-m-d H:i:s', "{$dateStr} 00:00:00")->format('d/m/Y');
        } else {
            return NULL;
        }
    }

    public static function checkPermission($menu_key)
    {
        if (Auth::user()->menus->where('menu_key', $menu_key)->isNotEmpty()) {
            return true;
        } else {
            return false;
        }
    }

    public static function reformatReadableDateNice($dateStr)
    {
        if (!empty($dateStr)) {
            return Carbon::parse($dateStr)->format('d M, Y');
        } else {
            return false;
        }
    }

    public static function getPreviousMonth($date)
    {
        if (!empty($date)) {
            return Carbon::parse($date)->subMonth()->format('Y-m');
        } else {
            return false;
        }
    }

    public static function reformatReadableMonthNice($date)
    {
        if (!empty($date)) {
            return Carbon::parse($date)->format('M/Y');
        } else {
            return false;
        }
    }

    public static function get_working_days_count($holidays = [])
    {
        $start = Carbon::now()->startOfMonth();
        $end = Carbon::now();

        return $days = $start->diffInDaysFiltered(function (Carbon $date) use ($holidays) {
            return !$date->isSunday() && !in_array($date->format('Y-m-d'), $holidays);
        }, $end);
    }


    public static function base64ToImage($image)
    {
        if (!empty($image)) {
            $fileName = Str::random(10);
            $folderPathOrignal = public_path() . '/uploads/students/';
            $ext = explode('/', mime_content_type($image))[1];
            $src = preg_replace('#data:image/[^;]+;base64,#', '', $image);
            file_put_contents($folderPathOrignal . $fileName . '.' . $ext, base64_decode($src));
        }
        return $fileName . '.' . $ext;
    }

    public static function strright($str, $separator)
    {
        if (intval($separator)) {
            return substr($str, -$separator);
        } elseif ($separator === 0) {
            return $str;
        } else {
            $strpos = strpos($str, $separator);

            if ($strpos === false) {
                return $str;
            } else {
                return substr($str, -$strpos);
            }
        }
    }

    public static function strleft($str, $separator)
    {
        if (intval($separator)) {
            return substr($str, 0, $separator);
        } elseif ($separator === 0) {
            return $str;
        } else {
            $strpos = strpos($str, $separator);

            if ($strpos === false) {
                return $str;
            } else {
                return substr($str, 0, $strpos);
            }
        }
    }

    public static function AmountInWords(float $amount)
    {
        $amount_after_decimal = round($amount - ($num = floor($amount)), 2) * 100;
        // Check if there is any number after decimal
        $amt_hundred = null;
        $count_length = strlen($num);
        $x = 0;
        $string = array();
        $change_words = array(0 => '', 1 => 'One', 2 => 'Two',
            3 => 'Three', 4 => 'Four', 5 => 'Five', 6 => 'Six',
            7 => 'Seven', 8 => 'Eight', 9 => 'Nine',
            10 => 'Ten', 11 => 'Eleven', 12 => 'Twelve',
            13 => 'Thirteen', 14 => 'Fourteen', 15 => 'Fifteen',
            16 => 'Sixteen', 17 => 'Seventeen', 18 => 'Eighteen',
            19 => 'Nineteen', 20 => 'Twenty', 30 => 'Thirty',
            40 => 'Forty', 50 => 'Fifty', 60 => 'Sixty',
            70 => 'Seventy', 80 => 'Eighty', 90 => 'Ninety');
        $here_digits = array('', 'Hundred', 'Thousand', 'Lakh', 'Crore');
        while ($x < $count_length) {
            $get_divider = ($x == 2) ? 10 : 100;
            $amount = floor($num % $get_divider);
            $num = floor($num / $get_divider);
            $x += $get_divider == 10 ? 1 : 2;
            if ($amount) {
                $add_plural = (($counter = count($string)) && $amount > 9) ? 's' : null;
                $amt_hundred = ($counter == 1 && $string[0]) ? ' and ' : null;
                $string [] = ($amount < 21) ? $change_words[$amount] . ' ' . $here_digits[$counter] . $add_plural . '
       ' . $amt_hundred : $change_words[floor($amount / 10) * 10] . ' ' . $change_words[$amount % 10] . '
       ' . $here_digits[$counter] . $add_plural . ' ' . $amt_hundred;
            } else $string[] = null;
        }
        $implode_to_Rupees = implode('', array_reverse($string));
        $get_paise = ($amount_after_decimal > 0) ? "And " . ($change_words[$amount_after_decimal / 10] . "
   " . $change_words[$amount_after_decimal % 10]) . ' Paise' : '';
        return ($implode_to_Rupees ? $implode_to_Rupees . 'Rupees ' : '') . $get_paise;
    }

    public static function sendNotification($device_token, $message)
    {
        $SERVER_API_KEY = 'AAAAy3dTHa0:APA91bFr2DybB7wEu1SeURpU14c3EeAJfyrQVZnYc3KrZu8I3JE1sv8e9ZMo7IJRu1b9iKB3yGaGu8sunTbfUclR_--t-3XNqeiQt45luMYR8gnCdC_QDnIVMvQqUfD8HvSpHb6gjyjf';


        // payload data, it will vary according to requirement
        $data = [
            "to" => $device_token, // for single device id
            "notification" => $message
        ];
        // return $data;
        $dataString = json_encode($data);

        $headers = [
            'Authorization:key=' . $SERVER_API_KEY,
            'Content-Type: application/json',
        ];
        // return $headers;

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send');
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $dataString);

        $response = curl_exec($ch);

        curl_close($ch);

        return $response;
    }

    public static function getUserByRole($role)
    {
        return User::with('role')->whereHas('role', function ($Role) use ($role) {
            $Role->whereIn('code', $role);
        })->get();
    }


    public static function getMonthWeek($date)
    {

        $first_week = $date->copy()->firstOfMonth();
        $second_week = $first_week->copy()->addDays(7);
        $third_week = $second_week->copy()->addDays(7);
        $fourth_week = $third_week->copy()->addDays(7);
        $last_date_of_month = $date->copy()->lastOfMonth();

        return [
            'first_week_start' => $first_week,
            'second_week_start' => $second_week,
            'third_week_start' => $third_week,
            'fourth_week_start' => $fourth_week,
            'last_week' => $last_date_of_month,
        ];
    }

    public static function replacePlaceholders($message, $variables)
    {
        foreach ($variables as $key => $value) {
            $message = str_replace('{' . $key . '}', $value, $message);
        }
        return $message;
    }

    public static function setAlert($type, $message)
    {
        Session::put('alert', [
            'type' => $type,
            'message' => $message
        ]);
    }

    public static function showAlert($remove_message = true)
    {
        $alert = Session::get('alert');

        $html = '<div class="alert alert-' . $alert['type'] . ' alert-dismissible fade show" role="alert">';
        $html .= $alert['message'];
        $html .=   '<button type="button" class="close" data-dismiss="alert" aria-label="Close">';
        $html .=       '<span aria-hidden="true">&times;</span>';
        $html .=   '</button>';
        $html .= '</div>';

        if ($remove_message) {
            Session::forget('alert');
        }
        return $html;
    }

    public static function getLoginUserId()
    {
      return 2;


        if (session()->has('user')) {
            return session()->get('user')['id'];
        } else {
           return Auth::id();
        }
    }


    public static function getSafeValueFromObject($object, $index, $default = '')
    {
        // Check if the object is null or not an object
        if (empty($object) || !is_object($object)) {
            return $default;
        }

        // Check if the index exists and is not null
        if (isset($object->$index) && !empty($object->$index)) {
            return $object->$index;
        }

        return $default;
    }

    public static function upload_file($path, $file_name)
    {
        $path = public_path($path);
        $upload_data = [];
        $error = [];
        if (!empty($_FILES[$file_name]['name'])) {
            if (is_array($_FILES[$file_name]['name'])) {
                for ($i = 0; $i < count($_FILES[$file_name]['name']); $i++) {
                    $_FILES['file']['name'] = $_FILES[$file_name]['name'][$i];
                    $_FILES['file']['type'] = $_FILES[$file_name]['type'][$i];
                    $_FILES['file']['tmp_name'] = $_FILES[$file_name]['tmp_name'][$i];
                    $_FILES['file']['size'] = $_FILES[$file_name]['size'][$i];
                    $_FILES['file']['error'] = $_FILES[$file_name]['error'][$i];

                    $type = $_FILES[$file_name]['type'][$i];
                    $filename = date('YmdHis') . '_' . $_FILES[$file_name]['name'][$i];
                    $name = date('YmdHis') . '_' . $_FILES[$file_name]['name'][$i];

                    if (!move_uploaded_file($_FILES[$file_name]['tmp_name'][$i], $path . '/' . $filename)) {
                        $error[] = [
                            "file_name" => $_FILES[$file_name]['name'][$i],
                            "file_type" => $_FILES[$file_name]['type'][$i]
                        ];
                    } else {
                        $upload_data[] = [
                            'name' => $name,
                            'type' => $type,
                            'file_name' => $filename
                        ];
                    }
                }
            } else {
                $error = false;
                $type = $_FILES[$file_name]['type'];
                $filename = date('YmdHis') . '_' . $_FILES[$file_name]['name'];
                $name = date('YmdHis') . '_' . $_FILES[$file_name]['name'];
                if (!move_uploaded_file($_FILES[$file_name]['tmp_name'], $path . '/' . $filename)) {
                    $error = [
                        "file_name" => $_FILES[$file_name]['name'],
                        "file_type" => $_FILES[$file_name]['type']
                    ];
                } else {
                    $upload_data = [
                        'name' => $name,
                        'type' => $type,
                        'file_name' => $filename
                    ];
                }
            }
            return ["status" => 'Success', "upload_data" => $upload_data, "error" => $error];
        }
    }
}
