<?php
use App\Http\Controllers\Api\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieApiController;
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/login', [AuthController::class, 'Login']);
//debe autenticar para acceder a las rutas de la api
Route::middleware('auth:sanctum')->group(function(){
    Route::apiResource('movies', MovieApiController::class);
    Route::post('/logout', [AuthController::class, 'Logout']);
});
