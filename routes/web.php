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

Route::get('/', 'WelcomeController@show');

Route::get('/home', 'HomeController@show');

// Новое
Route::get('/index', 'MainController@index');

Route::get('/login', 'MainController@login');
Route::get('/plans', 'MainController@plans');

    Route::post('/index/create_poll', 'MainController@create_poll');
