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

Route::get('/swagger', function () {
    return view('vendor/l5-swagger/index');
});


/*
|-------------------------------------------------------------------------
| API RESTFUL
|-------------------------------------------------------------------------
*/
// API Group Routes
Route::group(array('prefix' => 'api/v1', 'middleware' => []), function () {
  Route::resource('cat_perfil','EndPoints\CatPerfilController');
  Route::resource('cat_perfil.ope_usuario','EndPoints\OpeUsuarioController');
  Route::resource('ope_usuario.cat_grupo','EndPoints\CatGrupoController');
  Route::resource('cat_alumno','EndPoints\CatAlumnoController');
});
