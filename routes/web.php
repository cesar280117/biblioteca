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

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

//Controladores de usuarios
Route::resource('usuarios', 'UserController');
Route::get('usuarios/{id}/confirm', 'UserController@confirm')->name('usuarios.confirm');


//Controladores de alumnos
Route::resource('alumnos', 'AlumnoController');
Route::get('alumnos/{id}/confirm', 'AlumnoController@confirm')->name('alumnos.confirm');


//Controladores de docentes
Route::resource('docentes', 'DocenteController');
Route::get('docentes/{id}/confirm', 'DocenteController@confirm')->name('docentes.confirm');

//Controladores para carreras
Route::resource('carreras', 'CarreraController');
Route::get('/carreras/{id}/confirm', 'CarreraController@confirm')->name('carreras.confirm');

//controlador para maquinas
Route::resource('maquinas', 'MaquinaController');
Route::get('maquinas/{id}/confirm', 'MaquinaController@confirm')->name('maquinas.confirm');
