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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/post', 'PostController@list');
Route::post('/post', 'PostController@create')->middleware('auth', 'role:author');
Route::get('/post/{id}', 'PostController@read');
Route::get('/post/{id}/delete', 'PostController@delete')->middleware('auth', 'role:author');
