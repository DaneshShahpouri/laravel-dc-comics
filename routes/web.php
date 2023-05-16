<?php

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

Route::get('/', [PageController::class, 'index']);

// character
Route::get('/character', function () {

    return 'hello';
})->name('character');

// comics
Route::get('/comics', function () {

    $comics = config('comics');
    $footerSocials = config('footerUtility');
    $mainBlueBanner = config('mainUtility');

    $navLinks  = [
        'character',
        'comics',
        'movies',
        'tv',
        'games',
        'collectibles',
        'video',
        'fans',
        'news',
        'shop'
    ];

    $footerLinks = [
        ['Dc Comics', [
            'Character',
            'Comics',
            'Movies',
            'Tv',
            'Games',
            'Cllectibles',
            'Video',
            'Fans',
            'News',
        ]], [
            'Shop', [
                'Shop DC',
                'Shop DC Collectibles'
            ]
        ], [
            'DC', [
                'Terms Of Use',
                'Privacy Policy (New)',
                'Ad Choices',
                'Advertising',
                'Jobs',
                'Subscritions',
                'Talent Workshops',
                'CPSC Certificates',
                'Ratings',
                'Shop Help',
                'Contact Us'
            ]
        ], [
            'Sites',
            [
                'DC',
                'MAD Magazine',
                'DC Kids',
                'DC Universe',
                'DC Power Visa'
            ]
        ]
    ];

    $currentPage = 'comics';

    // |--------------------------------------------------------------------------
    // Non sono completamente sicuro di come passo i dati di 'footerLinks', 
    // forse è più giusto passarli dai config come 'comics' e 'footerUtility'.
    // |--------------------------------------------------------------------------


    return view('comics', compact('comics', 'footerSocials', 'mainBlueBanner', 'navLinks', 'footerLinks', 'currentPage'));
})->name('comics');

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
