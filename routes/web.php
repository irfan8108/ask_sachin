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
Route::get('/', 'PageController@Index');
Route::get('welcome', 'PageController@Welcome');
Route::get('voice', 'PageController@Voice');
Route::get('mission', 'PageController@Mission');
Route::get('story', 'PageController@Story');
Route::get('delhi', 'PageController@Delhi');
Route::get('updates', 'PageController@Updates');
Route::get('join', 'PageController@Join');

Route::get('admin', 'AuthController@Login');