<?php

Route::get('/', 'PostsController@index');

Route::get('/posts/create', 'PostsController@create');

Route::get('/posts/{post}', 'PostsController@show');

Route::post('/posts', 'PostsController@store');

Route::delete('/posts/{post}', 'PostsController@destroy');

Route::get('/posts/{post}/edit', 'PostsController@edit');

Route::patch('/posts/{post}', 'PostsController@update');

// Images

Route::post('/posts/{post}/images', 'ImagesController@upload');
Route::delete('image-gallery/{id}', 'ImageGalleryController@destroy');

Route::get('/images/create', 'PostsController@images');
Route::post('/images/create', 'PostsController@imagesUpload');


