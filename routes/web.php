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
Route::get('logout', 'UsuarioController@logout');

//TEAM
Route::resource('app/team', 'TeamController');

//MODELO
Route::resource('app/model', 'ModelController');
Route::get('/app/model/show/{idModel}/{idDes?}', 'ModelController@showModel');
Route::post('/app/model/teams/{idModel}', 'ModelController@updateTeams');
Route::get('/app/model/teams/{idModel}', 'ModelController@getTeamsFromModel');



