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

Route::get('/', function () {
    //return view('post.index');
    return redirect()->route('showPost', []);
});
Auth::routes();
Route::get('/posts', 'HomeController@showPost')->name('showPost');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/author/post', 'HomeController@getPostForm')->name('post.form');
Route::post('/author/post', 'HomeController@createPost')->name('post.form');
Route::get('/post/edit/{id}', 'HomeController@editPost')->name('post.edit');
Route::post('/post/edit', 'HomeController@savePost')->name('post.save');
Route::get('/post/delete/{id}', 'HomeController@deletePost')->name('post.delete');


