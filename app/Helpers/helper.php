<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use MongoDB\Driver\Session as DriverSession;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;

if (!function_exists('customres')) {
    function customres($message, $status = 419, $success = false)
    {
        return response(['success' => $success,'message' => $message], $status);
    }
}

if (!function_exists('errorResponse')) {
    function errorResponse($error)
    {
        if (isLive()) {
            return response(['success' => false,'message' => 'Something went wrong please try again',
       'errorDet' => $error->getMessage(),'error_line' => $error->getLine(), 'file_name' => $error->getFile()], 500);
        }
        dd($error);
    }
}

if(!function_exists('errorLog')){
    function errorLog($error)
    {
        $res=['success'=>false,
        'errorDet'=>$error->getMessage(),'error_line' => $error->getLine(), 'file_name' => $error->getFile()];
        Log::error(json_encode($res));
    }
}

if (!function_exists('isLive')) {
    function isLive()
    {
        return config('app.env') === 'server';
    }
}

if (!function_exists('current_time')) {
    function current_time()
    {
        $date = date("Y-m-d h:i:sa"); //Current Date
        return new MongoDB\BSON\UTCDateTime(strtotime($date) * 1000);

    }
}
if (!function_exists('get_time_stamp')) {
    function get_time_stamp($date)
    {
        if ($date instanceof MongoDB\BSON\UTCDateTime) {
            return $date->toDateTime()->getTimestamp(); //Convert MongoDB UTCDateTime to Unix timestamp (seconds)
        }
        return Carbon::parse($date)->getTimestamp();
    }
}
if (!function_exists('unique_id')) {
    function unique_id()
    {
        return date('Ymd').Str::random(8).time();
    }
}

if (!function_exists('getobjectId')) {
    function getobjectId($id)
    {
        return new MongoDB\BSON\ObjectId($id);
    }
}
if (!function_exists('newobjectId')) {
    function newobjectId()
    {
        return new MongoDB\BSON\ObjectId();
    }
}
if (!function_exists('db_session')) {
    function db_session(): DriverSession
    {
        return DB::getMongoClient()->startSession();
    }
}
if (!function_exists('def_pipeline_option')) {
    function def_pipeline_option(): array
    {
        return ['typeMap' => ['root' => 'array', 'document' => 'array', 'array' => 'array']];
    };
}
