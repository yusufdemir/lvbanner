<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('index');
});

/*Route::get('login', function()
{
	return View::make('auth/login');
});*/

	Route::get('auth/register', array('uses' => 'UserController@showRegisterForm'));
	Route::post('auth/register', array('uses' => 'UserController@registerUser'));
	
	Route::get('auth/login', array('uses' => 'UserController@showLoginForm'));
	Route::post('auth/login', array('uses' => 'UserController@loginUser')); 
	
	Route::get('auth/logout', array('uses' => 'UserController@doLogout'));