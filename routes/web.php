<?php



Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// dropzone routes

Route::get('/posts','PostController@index')->name('posts.index');
Route::get('/posts/{post}', 'PostController@show')->name('posts.show');

Route::post('/posts/{post}' , 'PostController@upload')->name('posts.upload');

Route::delete('/images/{image}','ImageController@destroy')->name('images.destroy');