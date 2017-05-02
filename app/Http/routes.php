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

Route::get('/', function () {
    return view('welcome');
});


// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

/*
|-------------------------------------------------------------------------
| API RESTFUL
|-------------------------------------------------------------------------
*/
// API Group Routes
Route::group(array('prefix' => 'api/v1', 'middleware' => []), function () {
  Route::resource('cat_perfil','EndPoints\CatPerfilController');
  Route::resource('cat_perfil.ope_usuario','EndPoints\OpeUsuarioController');
  Route::post('ope_usuario/login','EndPoints\OpeUsuarioController@login');
  Route::post('ope_usuario/loginFacebook','EndPoints\OpeUsuarioController@loginFacebook');
  Route::resource('ope_usuario.cat_grupo','EndPoints\CatGrupoController');
  Route::resource('cat_grupo.cat_alumno','EndPoints\CatAlumnoController');
});
