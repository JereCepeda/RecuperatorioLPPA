<?php
Route::get(	'/', function () {
    return view('welcome');
});

Route::get(	'/usuarios','UserController@index')->name('users');

Route::get(	'/usuarios/{id}','UserController@show')->where('id','[0-9]+')->name('users.show');

Route::get(	'/usuarios/nuevo','UserController@create')->name('users.create');

Route::post('/usuarios/crear','UserController@store');

Route::get(	'/usuarios/{id}/edit','UserController@edit')->where('id','[0-9]+');

Route::get(	'/saludos/{name}/{nickname}','WelcomeUserController@conNick');

Route::get(	'/saludos/{name}','WelcomeUserController@sinNick');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
