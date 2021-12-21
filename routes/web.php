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
    return view('frontend/home/index');
});

Route::get('/blog', function () {
    return view('frontend/blog/blog');
});

Route::get('/contact', function () {
    return view('frontend/contact/contact');
});

Route::get('/invest', function () {
    return view('frontend/invest/invest');
});

Route::get('/login', function () {
    return view('frontend/login/login');
});


Route::get('/register', function () {
    return view('frontend/register/register');
});

Route::get('/service', function () {
    return view('frontend/service/service');
});

Route::get('/tiho', function () {
    return view('frontend/tiho/tiho');
});










