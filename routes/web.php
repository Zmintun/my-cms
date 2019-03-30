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

Route::get('/', 'HomeController@index');
Route::get('/post/{slug}', 'PostController@detail')->name('post.detail');
Route::get('/post/category/{slug}', 'PostController@postByCategory')->name('post.category');
Route::get('/post/tag/{slug}', 'PostController@postByTag')->name('post.tag');
Route::get('/contact', 'ContactController@index')->name('contact');
Route::get('/about', 'AboutController@index')->name('about');

Route::group(['prefix'=>'admin', 'namespace'=>'Admin', 'middleware'=>'auth'], function () {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::resource('category', 'CategoryController');
    Route::resource('post', 'PostController');
    Route::resource('tag', 'TagController');

//    User Edit Profile
    Route::get('user/{id}', 'UserController@edit');
    Route::post('user/{id}', 'UserController@update');
    Route::get('user', 'UserController@index');
    Route::get('user/add/new', 'UserController@create')->name('user.c');
    Route::post('user/add/new', 'UserController@store')->name('user.storee');
    Route::get('user/role/edit/{role}/{user_id}', 'UserController@editRole')->name('user.edit.role')->middleware('Admin');
});



Auth::routes();

