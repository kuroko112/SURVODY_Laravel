<?php

use App\Http\Controllers\Users\UsersController;
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


Route::get('/', [UsersController::class, "login"]);

Route::get('/profile', function () {
    return "user profile";
});

Route::get('/profile_Friend', function () {
    return "user profile_Friend";
});

Route::get('/Job', function () {
    return "user Job";
});

Route::get('/profile', function () {
    return "user profile";
});

Route::get('/about');



