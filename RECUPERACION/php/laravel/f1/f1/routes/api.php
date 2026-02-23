<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::post('login',[AuthController::class,'login']);

Route::middleware('auth:sanctum')->group(function () {
    Route::apiResource('pilots',PilotApiController::class)->only(['index','store']);
    Route::post('pilots/{pilot}/points',[PilotApiController::class,'updatePoints']);
});