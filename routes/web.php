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

Route::get('/menu', 'MenuController@home')->name('menu');

Route::get('/lokasi', function () {
    return view('/Agp/lokasi');
})->name('lokasi');


Auth::routes();

Route::prefix('admin')->group(function() {
	Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/', 'AdminController@redirectToBooking')->name('admin');
    Route::get('/booking', 'AdminController@adminDashboard')->name('admin.home');
    Route::get('/booking', 'BookingController@index')->name('admin.booking');
    Route::get('/promo', 'PromoController@index')->name('admin.promo');
});

Route::get('/booking', function () {
	return view('/Agp/booking');
})->name('booking');

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/BookingInsert', 'BookingController@store');