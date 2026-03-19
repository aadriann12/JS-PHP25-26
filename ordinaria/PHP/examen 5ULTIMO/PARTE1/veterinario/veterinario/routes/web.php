<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


use App\Http\Controllers\PetController;
use App\Models\Pet;
Route::get('/pets', [PetController::class, 'index'])->name('pets.index');
Route::get('/pets/create', [PetController::class, 'create'])->name('pets.create');
Route::post('/pets', [PetController::class, 'store'])->name('pets.store');
Route::get('/pets/{pet}', [PetController::class, 'show'])->name('pets.show');
Route::get('/pets/{pet}/edit', [PetController::class, 'edit'])->name('pets.edit');
Route::resource('user', UserController::class);
