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

Route::get('retornarArticulaciones','ArticulacionController@retornarArticulaciones');
Route::get('retornarImpactos','ImpactoController@retornarImpactos');
Route::get('retornarSubsistemas','SubsistemaController@retornarSubsistemas');
Route::get('cargarEstados','EstadoController@cargarEstados');
Route::get('cargarMunicipios/{id_estado}','MunicipioController@cargarMunicipios');
Route::resource('estado','EstadoController');
Route::resource('municipios','MunicipioController');
Route::post('eventos/{datos}','EventController@store');
Route::post('updateStartEvent/{event_data}','EventController@updateStartEvent');
Route::get('cargar_eventos','EventController@allEvents');
Route::get('mostrar','EventController@create');
