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

	// return View::make('hello');
});


Route::get('/login','LoginController@index');
Route::post('/login','LoginController@doLoginWithPassword');
Route::get('login/facebook', 'LoginController@doLoginWithFacebook');
Route::get('login/facebookCallback', 'LoginController@facebookCallback');


Route::get('dashboard', 'DashboardController@index');



