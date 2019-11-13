<?php

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

Route::get('/dashboard', function () {
    return view('examples-dashboard/index');
});

Route::get('/icons', function () {
    return view('examples-dashboard/icons');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/login', function () {
    return view('register');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/no', function () {
    return view('welcome');
});