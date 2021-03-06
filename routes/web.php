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
Route::post('/contactar', ['as' => 'front.contactar', 'uses' => 'FrontController@contactar']);

//USUARIO
Route::resource('app/user', 'UsuarioController');
Route::get('app', 'UsuarioController@showLogin');
Route::post('app/user/login', ['as' => 'user.login', 'uses' => 'UsuarioController@login']);
Route::get('logout', 'UsuarioController@logout');

//TEAM
Route::resource('app/team', 'TeamController');
Route::post('/app/team/users/{idTeam}', 'TeamController@updateUsers');
Route::get('/app/team/users/{idTeam}', 'TeamController@getUsersFromTeam');
Route::delete('/app/team/exit/{idTeam}', 'TeamController@exitTeam');
Route::get('/app/team/show/{idTeam}/{idModel}/{idDes?}', 'TeamController@showModel');

//MODELO
Route::resource('app/model', 'ModelController');
Route::get('/app/model/show/{idModel}/{idDes?}', 'ModelController@showModel');
Route::post('/app/model/teams/{idModel}', 'ModelController@updateTeams');
Route::get('/app/model/teams/{idModel}', 'ModelController@getTeamsFromModel');



