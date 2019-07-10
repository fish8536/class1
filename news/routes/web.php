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

Route::get('/', "News\MainController@index");
Route::get('/login', "Users\UserController@index");
Route::get('/register', "Users\UserController@create");
Route::post('/login', "Users\UserController@postLogin");
Route::post('/logout', "Users\UserController@postLogout");
Route::post('/register', "Users\UserController@store");
Route::resource('news', 'News\MainController');
