<?php
use App\Post;
//Posts
Route::get('/', 'PostsController@index')->name('home');
Route::get('/posts/create', 'PostsController@create');
Route::get('/posts/{post}', 'PostsController@show');
Route::get('/posts/{post}/delete', 'PostsController@delete');
Route::post('/posts', 'PostsController@store');
Route::delete('/posts/{post}', 'PostsController@destroy');
Route::get('/posts/{post}/edit', 'PostsController@edit');
Route::patch('/posts/{post}', 'PostsController@update');
//Chapter
Route::get('/posts/{post}/chapter/create', 'ChapterController@create');
Route::post('/posts/{post}/chapter/store', 'ChapterController@store');
Route::get('/posts/{post}/chapter/{chapter}/edit', 'ChapterController@edit');
Route::delete('/posts/{post}/chapter/{chapter}/destroy', 'ChapterController@destroy');
Route::get('/posts/{post}/chapter/{chapter}/read', 'ChapterController@read');
// //Gallery
Route::get('/posts/{post}/chapter/{chapter}/gallery/create', 'GalleriesController@create');
Route::post('/posts/{post}/chapter/{chapter}/gallery/upload', 'GalleriesController@upload');
//Auth
Route::get('/register', 'RegistrationController@create');
Route::post('/register', 'RegistrationController@store');
Route::get('/login', 'SessionsController@create')->name('login');
Route::post('/login', 'SessionsController@store');
Route::get('/logout', 'SessionsController@destroy');



