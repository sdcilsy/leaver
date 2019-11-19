Leaver Project

routes list

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