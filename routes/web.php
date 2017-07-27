<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//FRONTPAGE
Route::get('/', 'FrontController@home');

//USUARIO
Route::resource('app/user', 'UsuarioController');
Route::get('app', 'UsuarioController@showLogin');
Route::post('app/user/login', ['as' => 'user.login', 'uses' => 'UsuarioController@login']);

//MODELO
Route::resource('app/model', 'ModelController');

//PRUEBAS
Route::get('showtest', 'ModelController@showtest');

