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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('menu');

Route::get('/Usuario/alumno/','Alumnocontroller@index');//ver todos alumnos
Route::get('/Usuario/alumno/baja','Alumnocontroller@indexbaja'); //ver alumnos de baja
Route::get('/Usuario/alumno/resgistrar','Alumnocontroller@create');//ver formulario de alumno
Route::post('/Usuario/alumno/resgistrar','Alumnocontroller@store');//guardar nuevo registro
Route::get('/Usuario/alumno/{id}/edicion','Alumnocontroller@edit');//ver formulario de edicion de alumno
Route::post('/Usuario/alumno/{id}/edicion','Alumnocontroller@update');//actualizar alumno

Route::get('/Usuario/Nivel/','ActLevelcontroller@index'); //ver niveles escolares
Route::get('/Usuario/Nivel/resgistrar','ActLevelcontroller@create');//ver formulario de niveles escolares
Route::post('/Usuario/Nivel/resgistrar','ActLevelcontroller@store');