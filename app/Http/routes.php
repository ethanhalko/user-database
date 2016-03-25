<?php


Route::group(['middleware' => 'web'], function () {
    Route::auth();

	Route::get('/', function () {
	    return view('welcome');
	});

    Route::get('/home', 'HomeController@index');

    Route::resource('user', 'UserController', [
    	'only' => ['index', 'show', 'edit', 'update', 'destroy'],
    	'before' => 'auth'
    ]);
});
