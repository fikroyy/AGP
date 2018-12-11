<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/menu', function () {
    return view('/Agp/menu');
});

Route::get('/booking', function () {
	return view('/Agp/booking');
});

//route buat masalah login admin
Route::prefix('admin')->group(function() {
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/home', 'AdminController@adminDashboard')->name('admin.home');
});

//oute buat masalah login user biasa
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
