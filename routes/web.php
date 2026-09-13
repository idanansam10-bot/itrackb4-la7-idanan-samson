<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VideoGameController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/games/featured', [ VideoGameController::class, 'featured'])
    ->name('games.featured');

Route::get('/games/filter/{value?}', [VideoGameController::class, 'filter'])
    ->name('games.filter');

Route::resource('games', VideoGameController::class)
    ->only(['index', 'show']);