<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\ParseVidiki;
use App\Http\Controllers\MainPageController;
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
//
//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/parse', [ParseVidiki::class, 'index']);

Route::get('/', [MainPageController::class, 'index']);

Route::get('movie', [MovieController::class, 'index'])
    ->name('movie');
Route::post('movie', [MovieController::class, 'index'])
    ->name('movie');

Route::post('search', [MovieController::class, 'searchBy'])->name('search');

Route::get('/parse_kinopoisk', [ParseVidiki::class, 'getKinopoiskInfo']);

Route::get('/check', [ParseVidiki::class, 'check']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
