<?php

use App\Http\Controllers\ComicController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [PageController::class, 'index'])->name('home');

Route::resource('/comics', ComicController::class);






//Route Di debug


// character
Route::get('/character', function () {

    return 'hello';
})->name('character');

// comics
Route::get('/comics', [ComicController::class, 'index'])->name('comics');

// movies
Route::get('/movies', function () {

    return 'hello';
})->name('movies');

// tv
Route::get('/tv', function () {

    return 'hello';
})->name('tv');

// games
Route::get('/games', function () {

    return 'hello';
})->name('games');

// collectibles
Route::get('/collectibles', function () {

    return 'hello';
})->name('collectibles');

// video
Route::get('/video', function () {

    return 'hello';
})->name('video');

// fans
Route::get('/fans', function () {

    return 'hello';
})->name('fans');

// news
Route::get('/news', function () {

    return 'hello';
})->name('news');

// shop
Route::get('/shop', function () {

    return 'hello';
})->name('shop');
