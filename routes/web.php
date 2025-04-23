<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

Route::get('/', [BookController::class, 'dashboard'])->middleware((['auth']));
Route::get('/books/{id}', [BookController::class, 'show'])->middleware(['auth'])->name('books.show');
