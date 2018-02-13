<?php

//Posts
Route::get('/', 'PostsController@index')->name('home');
Route::get('/posts/create', 'PostsController@create');
Route::get('/posts/{post}', 'PostsController@show');
Route::post('/posts', 'PostsController@store');
Route::delete('/posts/{post}', 'PostsController@destroy');
Route::get('/posts/{post}/edit', 'PostsController@edit');
Route::patch('/posts/{post}', 'PostsController@update');

//Gallery
Route::get('/posts/{post}/gallery/create', 'GalleriesController@create');
Route::post('/posts/{post}/gallery/upload', 'GalleriesController@upload');
Route::get('/posts/{post}/gallery/reader', 'GalleriesController@show');

//Auth
Route::get('/register', 'RegistrationController@create');
Route::post('/register', 'RegistrationController@store');

Route::get('/login', 'SessionsController@create');
Route::get('/logout', 'SessionsController@destroy');



