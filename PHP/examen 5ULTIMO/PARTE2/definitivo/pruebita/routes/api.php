<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\NotaController;
use App\Http\Controllers\BookController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
Route::post('/login',[AuthController::class,'login']);



Route::middleware('auth:sanctum')->group(function(){

Route::apiResource('books', BookController::class);
Route::post('/logout',[AuthController::class,'logout']);
Route::apiResource('notes', NotaController::class);




});
