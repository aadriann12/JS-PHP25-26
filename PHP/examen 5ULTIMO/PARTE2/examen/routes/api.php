<?php
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\StudioController;

use App\Http\Controllers\PlatformController;

use App\Http\Controllers\VideogameController;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/login',[AuthController::class,'login']);
Route::middleware('auth:sanctum')->group(function(){

Route::get('/user',function(Request $request){
return $request->user();
});

Route::post('/logout',[AuthController::class,'logout']);






});

//las saco porque me da fallo el login
Route::apiResource('studios',StudioController::class);
Route::apiResource('platforms',PlatformController::class);
Route::apiResource('videogames',VideogameController::class);
