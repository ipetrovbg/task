<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/foo-bar', 					'FooBarController@get');
Route::get('/foo-bar/{id}', 			'FooBarController@getById');
Route::post('/foo-bar/create', 			'FooBarController@create');
Route::put('/foo-bar/update', 			'FooBarController@update');
Route::delete('/foo-bar/delete/{id}', 	'FooBarController@delete');
