<?php

use App\Http\Controllers\TendersController;
use Illuminate\Support\Facades\Route;

Route::get('/search',[TendersController::class,'search']);
Route::get('/filters-data',[TendersController::class,'getFiltersData']);
Route::get('/{any}', function () {
    return view('home');
})->where('any', '.*');
