<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

# Leaver Project

## Installation

```bash
PULL DULU GAN.
Running Migration
Running Seeder
```

## Usage
Try to login after migrate&seed

**Link/route list**

```php
/logout
Route::get('/','HomeController@index');
Route::get('/login','AuthController@login')->name('login');
Route::get('/register','AuthController@register');
Route::post('/register/process','AuthController@register_process');
Route::post('/login/process','AuthController@login_process');
Route::get('/student', 'studentController@index');
Route::get('/student/create', 'studentController@create');
Route::post('/student/create/process', 'studentController@create_process');
Route::get('/student/create/id', 'studentController@create_book');
Route::get('/student/read/id', 'studentController@read');
Route::get('/student/read/id/book_id', 'studentController@read_book');
Route::get('/student/join', 'studentController@join_class');
Route::post('/student/join/process', 'studentController@join_process');
Route::get('/student/library', 'studentController@library');
Route::get('/teacher', 'teacherController@index');
Route::get('/teacher/class/id', 'teacherController@class');
Route::get('/teacher/class/id/std_id', 'teacherController@student_progress');
Route::get('/teacher/class/id/std_id/book_id', 'teacherController@book_progress');
Route::get('/teacher/create', 'teacherController@new_class');
Route::post('/teacher/create/process', 'teacherController@process');
Route::get('/teacher/library', 'teacherController@library');

```