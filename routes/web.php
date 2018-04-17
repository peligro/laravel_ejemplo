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
/*
Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/', 'TrabajoController@index');
//trabajo
Route::get('trabajo', 'TrabajoController@index');
Route::get('trabajo/nosotros', 'TrabajoController@nosotros')->name('trabajo_nosotros');

Route::get('trabajo/utilidades', 'TrabajoController@utilidades')->name('trabajo_utilidades');
Route::get('trabajo/parametro/{id1}', 'TrabajoController@parametro');
Route::get('trabajo/parametros/{id1}/{id2}', 'TrabajoController@parametros');
Auth::routes();
//Bd
Route::get('bd/listado', 'BdController@index');
Route::get('bd/detalle/{datos}', 'BdController@detalle');
Route::get('bd/add', 'BdController@add');
Route::post('bd/add_post', 'BdController@add_post');
//home
Route::get('/home', 'HomeController@index')->name('home');
//Acceso
Route::get('acceso/login', 'AccesoController@login');
Route::post('acceso/login_post', 'AccesoController@login_post');
Route::get('acceso/salir', 'AccesoController@salir');

Route::get('acceso/registro', 'AccesoController@registro');
Route::post('acceso/registro_post', 'AccesoController@registro_post');

Route::get('acceso/logueado', 'AccesoController@logueado');
