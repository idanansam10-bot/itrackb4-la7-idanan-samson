<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VideoGameController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/games', [VideoGameController::class, 'index'])
    ->name('games.index');

Route::get('/games/featured', [VideoGameController::class, 'featured'])
    ->name('games.featured');

Route::get('/games/filter/{value?}', [VideoGameController::class, 'filter'])
    ->name('games.filter');

Route::get('/games/{id}', [VideoGameController::class, 'show'])
    ->name('games.show');