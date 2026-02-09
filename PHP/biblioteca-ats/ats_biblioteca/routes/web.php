<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LoanController;
use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return redirect()->route('books.index');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Catálogo
    Route::resource('authors', AuthorController::class);
    Route::resource('books', BookController::class);
    Route::resource('categories', CategoryController::class);

//socio
    Route::middleware('role:user,librarian,admin')->group(function () {
        Route::get('/loans', [LoanController::class, 'index'])->name('loans.index');
        Route::get('/loans/create', [LoanController::class, 'create'])->name('loans.create');
        Route::post('/loans', [LoanController::class, 'store'])->name('loans.store');
    });
//bibliotecario y admin
    Route::middleware('role:librarian,admin')->group(function () {
        Route::get('/loans/all', [LoanController::class, 'indexAll'])->name('loans.all');
        Route::post('/loans/{loan}/approve', [LoanController::class, 'approve'])->name('loans.approve');
        Route::post('/loans/{loan}/reject', [LoanController::class, 'reject'])->name('loans.reject');
        Route::post('/loans/{loan}/return', [LoanController::class, 'markAsReturned'])->name('loans.return');
    });
});
