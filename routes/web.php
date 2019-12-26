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
    Route::post('/student/create/process', 'studentController@create_process');
    // change id to --> {id}
    Route::get('/student/create/id', 'studentController@create_book');
    // change id to --> {id}
    Route::get('/student/read/id', 'studentController@read');
    // change book_id to --> {book_id}
    Route::get('/student/read/id/book_id', 'studentController@read_book');
    Route::get('/student/join', 'studentController@join_class');
    Route::post('/student/join/process', 'studentController@join_process');
    Route::get('/student/library', 'studentController@library');
});
Route::middleware(['auth','rolet'])->group(function() {
    Route::get('/teacher', 'teacherController@index');
    // ganti id --> {id}
    Route::get('/teacher/class/id', 'teacherController@class');
    // ganti std_id --> {std_id}
    Route::get('/teacher/class/id/std_id', 'teacherController@student_progress');
    // ganti book_id --> {book_id}
    Route::get('/teacher/class/id/std_id/book_id', 'teacherController@book_progress');
    Route::get('/teacher/create', 'teacherController@new_class');
    Route::post('/teacher/create/process', 'teacherController@process');
    Route::get('/teacher/library', 'teacherController@library');
});
