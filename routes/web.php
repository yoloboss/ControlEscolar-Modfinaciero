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

Route::get('/welcome', 'HomeController@index')->name('menu');

Route::get('/Usuario/alumno/','Alumnocontroller@index');//ver todos alumnos
Route::get('/Usuario/alumno/baja','Alumnocontroller@indexbaja');//ver alumnos de baja
Route::get('/Usuario/alumno/resgistrar','Alumnocontroller@create');//ver formulario de alumno
Route::post('/Usuario/alumno/resgistrar','Alumnocontroller@store');//guardar nuevo registro
Route::get('/Usuario/alumno/{id}/edicion','Alumnocontroller@edit');//ver formulario de edicion de alumno
Route::post('/Usuario/alumno/{id}/edicion','Alumnocontroller@update');//actualizar alumno
Route::post('/Usuario/alumno/{id}/eliminar','Alumnocontroller@destroy');//eliminar alumno
Route::post('/tomate', 'Alumnocontroller@tomate');//actualizar alumno


Route::get('/Usuario/Nivel/','ActLevelcontroller@index'); //ver niveles escolares
Route::get('/Usuario/Nivel/resgistrar','ActLevelcontroller@create');//ver formulario de niveles escolares
Route::post('/Usuario/Nivel/resgistrar','ActLevelcontroller@store');
Route::get('/Usuario/Nivel/{id}/edicion','ActLevelcontroller@edit');
Route::post('/Usuario/Nivel/{id}/edicion','ActLevelcontroller@update');


Route::get('/Usuario/ciclo_escolar/','ciclecontroller@index');//ver ciclos
Route::get('/Usuario/ciclo_escolar/resgistrar','ciclecontroller@create');//ver formulario de ciclos
Route::post('/Usuario/ciclo_escolar/resgistrar','ciclecontroller@store');//crear un nuevo ciclo
Route::get('/Usuario/ciclo_escolar/{id}/edicion','ciclecontroller@edit');
Route::post('/Usuario/ciclo_escolar/{id}/edicion','ciclecontroller@update');
Route::get('/Usuario/ciclo_escolar/pasos','ciclecontroller@indexp');


Route::get('/Usuario/concepto_pago/','paymentconceptscontroller@index');//ver conceptos de pago
Route::get('/Usuario/concepto_pago/resgistrar','paymentconceptscontroller@create');//ver formulario de conceptos de pago
Route::post('/Usuario/concepto_pago/resgistrar','paymentconceptscontroller@store');//guardar nuevo concepto de pago
Route::get('/Usuario/concepto_pago/{id}/edicion','paymentconceptscontroller@edit');//ver formulario de ecicion de conceptos de pago
Route::post('/Usuario/concepto_pago/{id}/edicion','paymentconceptscontroller@update');
Route::post('/Usuario/concepto_pago/{id}/eliminar','paymentconceptscontroller@destroy');