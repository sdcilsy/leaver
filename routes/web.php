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
// Route::get('/icons', function () {
//     return view('examples-dashboard/icons');
// });
// home, login, register
Route::get('/','HomeController@index');
Route::get('/login','HomeController@login');
Route::get('/register','HomeController@register');
// Admin routes
Route::get('/admin','admincontroller@index');
// Student routes
Route::get('/student', 'studentController@index');
Route::get('/student/create', 'studentController@create');
Route::get('/student/read', 'studentController@read');
Route::get('/student/inventory', 'studentController@inventory');
// Teacher routes
Route::get('/teacher', 'teacherController@index');
