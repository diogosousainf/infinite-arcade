<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;

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
    return view('welcome');
});

Auth::routes();

Route::get('games',[GameController::class, 'index']) -> name('games.index');
Route::resource('categories', 'CategoryController');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/profile', [App\Http\Controllers\UserController::class, 'show'])->middleware('auth')->name('profile-show');
Route::get('/search', 'GameController@search')->name('search');
Route::get('/games/{id}', 'GameController@show')->name('games.show');
Route::get('/games/platform/{platform}', 'GameController@byPlatform')->name('games.byPlatform');



//673d63746a2345afaaa2550d83565f32
//GET https://api.rawg.io/api/platforms?key=YOUR_API_KEY
//GET https://api.rawg.io/api/games?key=YOUR_API_KEY&dates=2019-09-01,2019-09-30&platforms=18,1,7
