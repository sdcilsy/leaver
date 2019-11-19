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

Route::get('/','HomeController@index');
Route::get('/admin','admincontroller@index');
Route::get('/login','HomeController@login');
Route::get('/register','HomeController@register');
Route::get('/student', 'studentController@index');
Route::get('/teacher', 'teacherController@index');
// Route::get('/icons', function () {
//     return view('examples-dashboard/icons');
// });