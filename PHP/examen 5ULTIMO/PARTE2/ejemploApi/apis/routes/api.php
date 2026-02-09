<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\AuthorController;
// --- Rutas Públicas ---
Route::post('/login', [AuthController::class, 'login']);
// --- Rutas Protegidas ---
Route::middleware('auth:sanctum')->group(function () {
// Obtener datos del usuario autenticado
Route::get('/user', function (Request $request) {
return $request->user();
});
// Cerrar sesión
Route::post('/logout', [AuthController::class, 'logout']);
// Recursos de la API (Notas)
Route::apiResource('notes', NoteController::class);
});
