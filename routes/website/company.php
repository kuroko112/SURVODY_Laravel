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

Route::get('/login', function () {
    return "Company login";
});

Route::get('/profile', function () {
    return "Company profile";
});

Route::get('/profile_Friend', function () {
    return "Company profile_Friend";
});

Route::get('/Job', function () {
    return "Company Job";
});

Route::get('/profile', function () {
    return "Company profile";
});



