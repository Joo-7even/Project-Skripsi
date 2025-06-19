<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TabelController;
use App\Http\Controllers\UploadController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::resource('/tables', TabelController::class);
Route::resource('/dashboard', DashboardController::class);
Route::resource('/uploadskripsi', UploadController::class);
