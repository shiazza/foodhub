<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MenuController;

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

Route::get('/', [MenuController::class, 'index'])->name('mainpage');
Route::get('/menu/{id}', [MenuController::class, 'show'])->name('menus.show');
Route::post('/menu/{id}/like', [MenuController::class, 'likeMenu'])->name('likeMenu');
Route::get('/profile/{username}', 'ProfileController@showProfile')->name('profile.show');
Route::post('/profile/follow/{id}', 'ProfileController@follow')->name('follow');

Route::get('/card', function () {
    return view('compon.card');
});

Auth::routes();