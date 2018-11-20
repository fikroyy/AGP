<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/menu', function () {
    return view('Agp/menu');
});

Route::get('/booking', function () {
	return view('Agp/booking');
});