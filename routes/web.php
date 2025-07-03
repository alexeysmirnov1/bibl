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

use Domoteka\Battle\Presentation\Controllers\BattleController;
use Domoteka\Battle\Presentation\Controllers\RegistryController;
use Domoteka\Battle\Presentation\Controllers\TaskController;
use Domoteka\Battle\Presentation\Controllers\TaskVoteController;
use Domoteka\Battle\Presentation\Middleware\NewBattlerMiddleware;
use Illuminate\Support\Facades\Route;

Route::get('/battles/{battle}', [BattleController::class, 'show'])
    ->middleware(NewBattlerMiddleware::class)
    ->name('battles.show');

Route::get('/battles/{battle}/login', [RegistryController::class, 'create'])
    ->name('battles.login');

Route::post('/battles/{battle}/confirm', [RegistryController::class, 'store'])
    ->name('battles.store');

Route::get('/battles/{battle}/logout', [RegistryController::class, 'delete'])
    ->name('battles.logout');

Route::get('/tasks/{task}', [TaskController::class, 'show'])
    ->name('tasks.show');

Route::post('/tasks/{task}', [TaskController::class, 'update'])
    ->name('tasks.update');

Route::get('/vote/{task}', [TaskVoteController::class, 'edit'])
    ->name('tasks.vote.edit');

Route::post('/vote/{task}', [TaskVoteController::class, 'store'])
    ->name('tasks.vote.update');

Route::get('/vote/{task}/results', [TaskVoteController::class, 'show'])
    ->name('tasks.vote.show');
