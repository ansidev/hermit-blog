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

// Route::get('/', 'PagesController@index');

Route::get('/', function() {
	return view('about');
});

Route::get('/about-me', function() {
	return view('about');
});

Route::get('home', 'HomeController@index');
Route::get('item-locator', 'ItemsController@index');
Route::get('item-locator/items', [
	'as' => 'items.index',
	'uses' => 'ItemsController@index'
]);
Route::post('item-locator/items/add', [
	'as' => 'items.store',
	'uses' => 'ItemsController@store'
]);
Route::get('item-locator/items/add', [
	'as' => 'items.add',
	'uses' => 'ItemsController@add'
]);

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
