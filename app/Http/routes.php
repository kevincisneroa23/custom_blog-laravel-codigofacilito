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

// RUTAS DEL FRONTEND

Route::get('/', [
	'as' => 'front.index',
	'uses' => 'FrontController@index'
]);

Route::get('article/{title}', [
	'as' => 'front.show.article',
	'uses' => 'FrontController@show'
]);

// RUTAS DEL PANEL ADMIN

Route::get('/admin', [
	'as' => 'admin.index',
	'uses' => 'AdminController@index'
]);