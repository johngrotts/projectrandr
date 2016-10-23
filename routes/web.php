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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/maps', 'MapController@index');

Route::group(['middlewareGroup' => 'web'], function () {
	//Facilities
	Route::get('/facilities', 'FacilitiesController@index'); // primary
	Route::get('/facilities/{facility}', 'FacilitiesController@show'); // individual agency

	//Clients
	Route::get('/clients', 'ClientsController@index'); // primary
	Route::get('/clients/create', 'ClientsController@create'); // form for creating a client
	Route::get('/clients/search', 'ClientsController@search'); // form for searching for a client
	Route::post('/clients/clientconfirm', 'ClientsController@findClient'); // finds the searched clients
	Route::post('/clients/assignbed', 'ClientsController@assignBed');
	Route::get('/clients/{id}', 'ClientsController@show'); // shows individual user data
	Route::get('/clients/create', 'ClientsController@create'); // form for creating a client
	Route::post('/clients', 'ClientsController@store'); //storing of data

});
