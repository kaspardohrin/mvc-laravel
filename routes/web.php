<?php

use Illuminate\Support\Facades\Route;

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
    return view('index')->name('home');
});

Route::get('/posts', 'PostController@index')->name('posts');
Route::post('/posts/create', 'PostController@create')->name('posts.create');
Route::get('/posts/store', 'PostController@store')->name('posts.store');
Route::get('/posts/{id}', 'PostController@detail')->name('posts.detail');