<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
*/

Route::get('/', function () {
    return view('beranda');
});

Route::get('/home', function () {
    return view('beranda');
});

Route::get('/login', function () {
    return view('login-old');
});

Route::get('/beranda', function () {
    return view('beranda');
});

Route::get('/view-forum', function () {
    return view('detailforum');
});




