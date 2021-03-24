<?php

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

Route::get('/', function () {
    return view('Home');
})->name('home');
Route::get('/eya', function () {
    return view('MovieSingle');
});
Route::get('/detailsMovie/{id}',[\App\Http\Controllers\FilmController::class, 'showDetails'])->name('DetailMovie');
Route::get("/MovieList",[\App\Http\Controllers\FilmController::class, 'show'])->name('MovieList');
Route::get('/new_movie', function () {
    return view('NewMovie');
})->name("add_movie");
Route::post('/addmovie',[\App\Http\Controllers\FilmController::class, 'add'])->name('save_movie');
route::get('/MovieGrid',[\App\Http\Controllers\FilmController::class, 'showGrid'])->name('MovieGrid');