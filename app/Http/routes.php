<?php
Route::group(['middleware' => ['web']], function () {
    Route::auth();

    Route::get('/', ['uses' => 'HomeController@index', 'as' => 'index']);

    Route::resource('user', 'UserController', [
    	'only' => ['index', 'show', 'edit', 'update', 'destroy'],
    ]);
});
