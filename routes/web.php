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


Route::get('form_registrar','AlumnoController@create');
Route::post('registrar','AlumnoController@store');

Route::get('/','AlumnoController@index');

Route::get('form_editar/{id_alumno}','AlumnoController@edit');
Route::post('actualizar/{id_alumno}','AlumnoController@update');

Route::post('eliminar/{id_alumno}','AlumnoController@destroy');
