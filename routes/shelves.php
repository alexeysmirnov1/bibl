<?php

use Illuminate\Support\Facades\Route;
use Literati\Shelves\Presentation\Controllers\BookController;

Route::name('shelves.')
    ->group(function () {
        Route::get('/', [ProfileController::class, 'dashboard'])
            ->name('dashboard');

        Route::get('/books', [BookController::class, 'index'])
            ->name('books.index');

        Route::get('/books/create', [BookController::class, 'create'])
            ->name('books.create');

        Route::post('/books', [BookController::class, 'store'])
            ->name('books.store');
    });
