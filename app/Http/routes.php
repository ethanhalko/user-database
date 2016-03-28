<?php
Route::auth();

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', ['uses' => 'HomeController@index', 'as' => 'home']);

Route::resource('user', 'UserController', [
    'only' => ['index', 'show', 'edit', 'update', 'destroy'],
]);