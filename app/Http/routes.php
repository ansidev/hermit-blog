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

Route::get('home', 'HomeController@index');

Route::get('/about-me', function() {
	return view('about');
});

Route::get('item-locator', 'ItemsController@index');
Route::get('item-locator/items', [
	'as' => 'items.index',
	'uses' => 'ItemsController@index'
]);

Route::get('item-locator/items/add', [
	'as' => 'items.add',
	'uses' => 'ItemsController@add'
]);
Route::post('item-locator/items/add', [
	'as' => 'items.store',
	'uses' => 'ItemsController@store'
]);

Route::get('item-locator/items/{id}/edit', [
    'as' => 'items.edit',
    'uses' => 'ItemsController@edit'
]);
Route::put('item-locator/items/{id}', [
    'as' => 'items.update',
    'uses' => 'ItemsController@update'
]);

Route::get('item-locator/items/{id}/delete', [
    'as' => 'items.delete',
    'uses' => 'ItemsController@delete'
]);
Route::delete('item-locator/items/{id}', [
    'as' => 'items.destroy',
    'uses' => 'ItemsController@destroy'
]);

Route::get('item-locator/items/{id}', [
    'as'   => 'items.show',
    'uses' => 'ItemsController@show'
]);

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
