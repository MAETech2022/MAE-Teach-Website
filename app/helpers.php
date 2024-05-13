<?php

use App\Models\Intern;
use App\Models\InternLog;
use App\Models\Invoice;
use App\Models\Province;
use App\Models\Services;
use App\Models\Setting;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

function getSettingValue($val)
{
    $settings = Setting::getSetting();
    return $settings->$val;
}

function checkResultStatusForIntern()
{
    $userID = Auth::user()->id;
    $query = Intern::query();
    $intern = $query->with('applicationTrack')->where('user_id', '=', $userID)->first();
    if ($intern->applicationTrack->is_registration == 1) {
        return true;
    } else {
        return false;
    }
}

function checkPlacementStatusForIntern()
{
    $userID = Auth::user()->id;
    $query = Intern::query();
    $intern = $query->with('applicationTrack')->where('user_id', '=', $userID)->first();
    if ($intern->applicationTrack->is_placement == 1) {
        return true;
    } else {
        return false;
    }
}


function showStatus($status)
{

    if ($status == 1) {
        echo '<span class="badge badge-success">Active</span>';

    } else {
        echo '<span class="badge badge-danger">InActive</span>';

    }

}

function showSelectedStatus($status)
{

    if ($status == 1) {
        echo '<span class="badge badge-success float-right">Selected</span>';

    } else if ($status == 2) {
        echo '<span class="badge badge-danger float-right">Not Selected</span>';
    } else {
        echo '<span class="badge badge-warning float-right">Selection Pending</span>';

    }

}

function showEligibilityStatus($status)
{

    if ($status == 1) {
        echo '<span class="badge badge-success ">Eligible</span>';

    } else {
        echo '<span class="badge badge-danger">Not Eligible</span>';

    }

}

function showVerificationStatus($employer)
{
    if ($employer->is_verified == 1) {
        echo '<span class="badge badge-success"> Verified</span>';

    } else {
        echo ' <span class="badge badge-danger"> Not Verified</span>';

    }

}


function showBoolean($status)
{

    if ($status == 1) {
        echo '<span class="badge badge-success">YES</span>';

    } else {
        echo '<span class="badge badge-danger">NO</span>';

    }

}

function showBooleanStatus($status)
{

    if ($status == 1) {
        return '<span class="badge bg-success">YES</span>';

    } else {
        return '<span class="badge bg-danger">NO</span>';

    }

}


function showTestStatus($status)
{

    if ($status == 1) {
//        echo '<span class="badge badge-success">Submitted</span>';
        return '<span class="badge badge-success">Submitted</span>';

    } else {
        return '<span class="badge badge-danger">Not Submitted</span>';
//        echo '<span class="badge badge-danger">Not Submitted</span>';

    }

}

function showInternshipStatus($joining_date, $completed_date , $completed)
{
    if($completed){
        return '<span class="badge badge-warning">Completed</span>';

    }else{
        if (!empty($joining_date) && !empty($completed_date)) {
            return '<span class="badge badge-success">Onboard</span>';
        } else {
            return '<span class="badge badge-danger">Pending</span>';
        }
    }

}

function showInternshipStarted($status)
{

    if (isset($status)) {
        echo '<span class="badge badge-success">onboard</span>';

    } else {
        echo '<span class="badge badge-danger">Pending</span>';

    }

}


function settingImagePath($image)
{
    if ($image != null)
        return asset('storage/settings/' . $image);
}

function uploadImage($file, $dir)
{
//    $imageName = $request->file('image')->store('courses/images', 'public');
    $filename = $file->store($dir, 'public');

//    $filename = date('YmdHi') . $file->getClientOriginalName();
//    $file->move(public_path('public' . '/' . $dir), $filename);
    return $filename;

}

function showImage($image, $dir)
{
    if (!empty($image)) {
        return asset('storage/' . $image);
    } else {
//        $image = 'placeholder.jpg';
        $image = 'placeholder-image.png';
        return asset('assets/' . $image);

    }

}

//function showImage($image, $dir)
//{
//     if (File::exists(public_path('public/' . $dir . '/' . $image)) && !empty($image)) {
//        return asset('public/' . $dir . '/' . $image);
//    } else {
//        $image = 'placeholder.jpg';
//        return asset('assets/' . $image);
//
//    }
//
//}

function showFile($fileName)
{
    $filePath = asset('storage/'  . $fileName);

    $fileImage = '';
    if (!empty($filePath)) {
        $extension = pathinfo($filePath, PATHINFO_EXTENSION);
        $file = asset('public/'  . $fileName);

        if ($extension == 'pdf') {
            $img = '<img width="50" height="50" src="' . asset('assets/pdf-icon.png') . '">';
            $fileImage = '<a href="' . $filePath . '">' . $img . '</a>';
        }

        if ($extension == 'jpeg' || $extension == 'jpg'|| $extension == 'png') {
            $img = '<img width="100" height="80"   src="' . $filePath . '">';
            $fileImage = '<a target="_blank" href="' . $filePath . '">' . $img . '</a>';
        }

        echo   $fileImage;

    } else {
        $image = 'placeholder.jpg';
        echo   '<img width="50" height="50" src="'.asset('assets/placeholder-image.png').'>';



    }

}


function showFileLink($fileName, $dir, $label)
{
    $filePath = public_path('public/' . $dir . '/' . $fileName);

    $fileImage = '';
    if (File::exists($filePath)) {
        $extension = pathinfo($filePath, PATHINFO_EXTENSION);
        $file = asset('public/' . $dir . '/' . $fileName);

        if ($extension == 'pdf') {
            $img = '<img width="50" height="50" src="' . asset('public/' . 'pdf.png') . '">';
            $fileImage = '<a href="' . $file . '">' . $img . '</a>  <h1 class="mt-2">' . $label . '</h1>';
        }

        if ($extension == 'jpeg' || $extension == 'jpg') {
            $img = '<img width="50" height="50"
              src="' . asset('public/' . 'jpg.png') . '">';
            $fileImage = '<a target="_blank" href="' . $file . '">' . $img . '</a>  <h1 class="mt-2">' . $label . '</h1>';
        }
        echo $fileImage;

    } else {
        $image = 'placeholder.jpg';
        return asset('public/' . $image);

    }

}

function showNumber($number){
    return  number_format($number);

}
function currentDate()
{
    return date('d-M-Y');
}

function currentDatePicker()
{
    return date('m/d/Y');
}

function currentDateInput()
{
    return date('mm/dd/yyyy');
}

function currentDateInsert()
{
    return date('Y-m-d');
}

function currentDateTimeInsert()
{
    return date('Y-m-d h:i:s');
}


function currentYear()
{
    return date('Y');
}

function currentMonthStart()
{
    return date('Y-m-01');
}

function currentMonthEnd()
{
    return date('Y-m-t');
}

function currentMonth()
{
    return date('m');
}

function dateInsert($obj)
{
    return date('Y-m-d', strtotime($obj,));
}

function monthInsert($obj)
{
    return date('m', strtotime($obj));
}

function yearInsert($obj)
{
    return date('Y', strtotime($obj));
}

function showDatePicker($obj)
{
    return date('d/m/Y', strtotime($obj));
//    return date('m/d/Y', strtotime($obj));
}

function showDatePickerDefault($obj)
{
     return date('d F, Y', strtotime($obj));
}

function showDay($obj){
    return date('d', strtotime($obj));

}
function showMonthName($obj){
    return date('F', strtotime($obj));

}
function showYear($obj){
    return date('Y', strtotime($obj));

}


function showDate($obj)
{
    if ($obj != '0000-00-00' && $obj != null) {

        return date('d-M-Y', strtotime($obj));
    } else {
        return '-';
    }
}

function showDateTime($obj)
{
    return date('d-M-Y h:i:s', strtotime($obj));
}


function showFullName($firstName, $lastName)
{
    return $firstName . ' ' . $lastName;
}


function inputMaskDash($obj)
{
    return str_replace('-', '', $obj);
}

function validateTimeStamp($datetime, $full = false)
{
    $now = new DateTime;
    $ago = new DateTime($datetime);
    $diff = $now->diff($ago);

    $diff->w = floor($diff->d / 7);
    $diff->d -= $diff->w * 7;

    $string = array(
        'y' => 'year',
        'm' => 'month',
        'w' => 'week',
        'd' => 'day',
        'h' => 'hour',
        'i' => 'minute',
        's' => 'second',
    );
    foreach ($string as $k => &$v) {
        if ($diff->$k) {
            $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
        } else {
            unset($string[$k]);
        }
    }

    if (!$full) $string = array_slice($string, 0, 1);
    return $string ? implode(', ', $string) . ' ago' : 'just now';
}

function calculatePercentage($score, $total)
{
    $formatted_percentage = '';
    if ($total != 0) {
        $percentage = ($score / $total) * 100;
    } else {
        // handle division by zero error
        $percentage = 0; // or some other default value
    }


    if ($percentage <= 100) {
        $formatted_percentage = number_format($percentage, 2);
    } else {
        $formatted_percentage = number_format(0, 2);

    }
    return $formatted_percentage;
}


if (!function_exists('getStatusBadgeClass')) {
    function getStatusBadgeClass($status)
    {
        $statusMappings = [
            'Pending Review' => 'badge bg-warning text-dark',
            'Under Consideration' => 'badge bg-primary',
            'Interview Scheduled' => 'badge bg-info',
            'Interviewed' => 'badge bg-info',
            'Offer Extended' => 'badge bg-success',
            'Offer Accepted' => 'badge bg-success',
            'Offer Declined' => 'badge bg-danger',
            'Not Selected' => 'badge bg-secondary',
        ];

        $badgeClass = $statusMappings[$status] ?? 'badge bg-secondary';
        return "<span class=\"badge {$badgeClass}\">{$status}</span>";
    }

}
if (!function_exists('getStatusBadgeClassShow')) {
    function getStatusBadgeClassShow($status)
    {
        $statusMappings = [
            'Pending Review' => 'badge bg-warning text-dark',
            'Under Consideration' => 'badge bg-primary',
            'Interview Scheduled' => 'badge bg-info',
            'Interviewed' => 'badge bg-info',
            'Offer Extended' => 'badge bg-success',
            'Offer Accepted' => 'badge bg-success',
            'Offer Declined' => 'badge bg-danger',
            'Not Selected' => 'badge bg-secondary',
        ];

        $badgeClass = $statusMappings[$status] ?? 'badge bg-secondary';
        echo "<span class=\"badge {$badgeClass}\">{$status}</span>";
    }

}






