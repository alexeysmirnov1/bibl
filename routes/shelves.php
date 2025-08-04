<?php

use Illuminate\Support\Facades\Route;
use Literati\Shelves\Presentation\Controllers\BookController;
use Literati\Shelves\Presentation\Controllers\ShelvesController;

Route::name('shelves.')
    ->middleware('auth')
    ->group(function () {
        Route::get('/dashboard', [ShelvesController::class, 'index'])
            ->name('dashboard');

        Route::get('/books', [BookController::class, 'index'])
            ->name('books.index');

        Route::get('/books/create', [BookController::class, 'create'])
            ->name('books.create');

        Route::post('/books', [BookController::class, 'store'])
            ->name('books.store');
    });
