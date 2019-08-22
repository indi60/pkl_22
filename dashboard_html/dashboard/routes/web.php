<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/dashboard', 'HomeController@dashboard')->name("dashboard");
Route::get('/', 'HomeController@index')->name("main");
Route::get('/minor', 'HomeController@minor')->name("minor");
// Route::get('/home', 'HomeController@home')->name("home");
Route::get('/reolisasi', 'HomeController@reolisasi')->name("reolisasi");
Route::get('/ptk', 'HomeController@ptk')->name("ptk");
Route::get('/bantuan', 'HomeController@bantuan')->name("bantuan");
Route::get('/absensi', 'HomeController@absensi')->name("absensi");
Route::get('/agenda', 'HomeController@agenda')->name("agenda");