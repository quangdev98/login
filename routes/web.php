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
Route::get('login-admin', 'adminController@getLogin')->name('login-admin');
Route::post('login-admin', 'adminController@postLoginAdmin');
Route::get('login-user', 'usersController@getLoginUser')->name('login-user');
Route::post('login-user-post', 'usersController@postLoginUser')->name('login-user-post');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
