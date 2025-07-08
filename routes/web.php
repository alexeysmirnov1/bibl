<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProfileController::class, 'dashboard'])
    ->name('bibl.dashboard');

Route::get('/books', [ProfileController::class, 'books'])
    ->name('bibl.books.index');

Route::get('/books/create', [ProfileController::class, 'createBook'])
    ->name('bibl.books.create');

Route::post('/books', [ProfileController::class, 'storeBook'])
    ->name('bibl.books.store');
