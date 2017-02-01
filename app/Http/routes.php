<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'HomeController@index');

Route::get('/index', function () {
    return view('admin');
});

Route::get('/home', 'HomeController@index');

Route::get('/chart1', 'Chart1Controller@chart1');

Route::get('/admin', function () {
	return view('dashboard');
});

Route::auth();

