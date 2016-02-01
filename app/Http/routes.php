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


Route::resource('/','guestController');
Route::resource('admin','AdminController');
Route::resource('log','LogController');
Route::resource('usuario','UsuarioController');
Route::resource('pelicula','PeliculaAdminController');
Route::resource('profile','ProfileController');


Route::get('perfil/editar', 'ProfileController@cambiar');
Route::get('logout','ProfileController@logout');
Route::resource('perfil','ProfileController');





Route::resource('login','logGuestController');
Route::resource('reproductor','ReproductorController');

