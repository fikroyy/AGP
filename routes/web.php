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

Route::get('/menu', function () {
    return view('/Agp/menu');
});

Auth::routes();

Route::get('/booking', function () {
	return view('/Agp/booking');
});

Route::get('/home', 'HomeController@index')->name('home');
