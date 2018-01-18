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

Route::get('/', function () {
    return view('login');
});
Route::get('/dashboard', function () {
    return view('dashboard');
});
Route::get('/manageacc', function () {
    return view('mapaccount');
});
Route::get('/deleteusr', function () {
    return view('listusers');
});
Route::get('/userlogin', function () {
    return view('user_login');
});
Route::get('/useractivate', function () {
    return view('user_activator_login');
});
Route::get('/listusr', function () {
    return view('listactive');
});
Route::get('/readers', function () {
    return view('permission');
});

Route::get('permission , mapaccount , dashboard , listusers', function() { return View::make('sidebar'); });
Route::get('permission , mapaccount , dashboard , listusers', function() { return View::make('navigation'); });

