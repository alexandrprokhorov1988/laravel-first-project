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

Route::match(['get', 'post'], '/', 'GuestBookController@showAll');
Route::match(['get', 'post'], '/all', 'GuestBookController@showAll');
Route::get('/moderator', 'ModeratorController@moderEdit');
Route::get('/del/{id}', 'ModeratorController@del');
Route::match(['get', 'post'], '/edit/{id}', 'ModeratorController@edit');