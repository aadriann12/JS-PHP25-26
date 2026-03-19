<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlbumController;
Route::get('/', function () {
    return view('inicio')->with(['nombre'=> 'adrian teran']);
});

Route::Resource('albums', AlbumController::class);
