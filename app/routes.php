<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('themes.fullcalendar.calendario.create');
});

//Rutas para las personas
Route::get('crearPersona','PersonaController@create');
Route::post('guardarPersona','PersonaController@store');
Route::get('existenciaCedula','PersonaController@existenciaCedula');
Route::get('existenciaEmail','PersonaController@existenciaEmail');
Route::get('listarPersonas','PersonaController@index');

//Rutas de las articulaciones
Route::get('retornarArticulaciones','ArticulacionController@retornarArticulaciones');
Route::get('mostrarArticulaciones','ArticulacionController@index');
Route::get('crearArticulacion','ArticulacionController@create');
Route::post('guardarArticulacion','ArticulacionController@store');
Route::get('editarArticulacion/{id}','ArticulacionController@edit');
Route::post('actualizarArticulacion/{id}','ArticulacionController@update');
Route::get('borrarArticulacion/{id}','ArticulacionController@destroy');

//Rutas de los impactos
Route::get('retornarImpactos','ImpactoController@retornarImpactos');
Route::get('crearImpactos','ImpactoController@create');
Route::post('guardarImpactos','ImpactoController@store');
Route::get('editarImpacto/{id}','ImpactoController@edit');
Route::post('actualizarImpacto/{id}','ImpactoController@update');

//Rutas de los subsistemas
Route::get('retornarSubsistemas','SubsistemaController@retornarSubsistemas');
Route::get('crearSubsistemas','SubsistemaController@create');
Route::get('mostrarSubsistemas','SubsistemaController@index');
Route::post('guardarSubsistemas','SubsistemaController@store');
Route::get('editarSubsistema/{id}','SubsistemaController@edit');
Route::post('actualizarSubsistema/{id}','SubsistemaController@update');

//Rutas del controlador Munucupio
Route::get('cargarMunicipios/{id_estado}','MunicipioController@cargarMunicipios');
Route::get('mostrarMunicipios','MunicipioController@index');
Route::get('crearMunicipio','MunicipioController@create');
Route::post('guardarMunicipio','MunicipioController@store');
Route::get('editarMunicipio/{id}','MunicipioController@edit');
Route::post('actualizarMunicipio/{id}','MunicipioController@update');

//Rutas de el controlador Estado
Route::get('cargarEstados','EstadoController@cargarEstados');
Route::get('crearEstado','EstadoController@create');
Route::post('guardarEstado','EstadoController@store');
Route::post('verificarExistenciaNombreEstado','EstadoController@verificarExistenciaNombreEstado');
Route::get('mostrarEstados','EstadoController@index');
Route::get('editarEstado/{id}','EstadoController@edit');
Route::post('actualizarEstado/{id}','EstadoController@update');
Route::get('borrarEstado/{id}','EstadoController@destroy');

//Rutas del controlados Eventos
//Route::resource('estado','EstadoController');
Route::post('eventos/{datos}','EventController@store');
Route::post('updateStartEvent/{datos}','EventController@updateStartEvent');
Route::post('actualizarEvento/{id}/{datos}','EventController@update');
Route::get('cargar_eventos','EventController@allEvents');
Route::get('mostrar','EventController@create');
Route::get('retornarEventos','EventController@retornarEventos');
