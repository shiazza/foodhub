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
Route::get('/', function () {
    return view('mainpage');
});

Route::get('/menu', function () {
    return view('menu');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/card', function () {
    return view('compon.card');
});

Auth::routes();