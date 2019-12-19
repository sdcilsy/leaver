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

Route::get('/admin','admincontroller@index');
Route::get('/logout', function () {
    Auth::logout();
    return redirect('/');
});
Route::middleware(['guest'])->group(function () {
    Route::get('/','HomeController@index');
    Route::get('/login','AuthController@login')->name('login');
    Route::get('/register','AuthController@register');
    Route::post('/register/process','AuthController@register_process');
    Route::post('/login/process','AuthController@login_process');
});
Route::middleware(['auth','roles'])->group(function () {
    Route::get('/student', 'studentController@index');
    Route::get('/student/create', 'studentController@create');
    Route::get('/student/read', 'studentController@read');
    Route::get('/student/library', 'studentController@library');
});
Route::middleware(['auth','rolet'])->group(function() {
    Route::get('/teacher', 'teacherController@index');
    Route::get('/teacher/class', 'teacherController@class');
    Route::get('/teacher/class/create', 'teacherController@new_class');
    Route::get('/teacher/library', 'teacherController@library');
});
