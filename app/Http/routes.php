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

Route::get('admin/auth/register', [
	'as' => 'admin.auth.register',
	'uses' => 'Auth\AuthController@getRegister'
]);

Route::post('admin/auth/register', [
	'as' => 'admin.auth.register',
	'uses' => 'Auth\AuthController@postRegister'
]);


// RUTAS DEL PANEL ADMIN
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function(){

	Route::get('/', [
		'as' => 'admin.index',
		function(){ return view('admin.index'); }
	]);

	Route::resource('users', 'UsersController');

	Route::resource('categories', 'CategoriesController');

	Route::resource('tags', 'TagsController');

	Route::resource('articles', 'ArticlesController');


});



// RUTAS DE AUTENTIFICACION
Route::get('admin/auth/login',[ 
	'as' => 'admin.auth.login',
	'uses' => 'Auth\AuthController@getLogin'
]);

Route::post('admin/auth/login', [ 
	'as' => 'admin.auth.login',
	'uses' => 'Auth\AuthController@postLogin'
]);

Route::get('admin/auth/logout', [
	'as' => 'admin.auth.logout',
	'uses' => 'Auth\AuthController@getLogout'
]);

