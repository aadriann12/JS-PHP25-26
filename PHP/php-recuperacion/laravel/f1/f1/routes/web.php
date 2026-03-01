<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
Route::get('/', function () {
    return view('welcome');
});


Route::resource('cars',CarController::class)->only(['edit','update','create','store','index']);