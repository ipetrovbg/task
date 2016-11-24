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

Route::get('/', 					'FooBarController@index');
Route::get('/foo-bar/create', 		'FooBarController@createView');
Route::get('/foo-bar/{id}', 		'FooBarController@view');
Route::get('/foo-bar/update/{id}', 	'FooBarController@updateView');