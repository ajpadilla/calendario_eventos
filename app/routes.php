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
Route::get('prueba/{id}',function($id){
    $eventos = Evento::all();
    $eventos_finales = array();
    foreach($eventos as $evento){
        $municipio = $evento->municipio;
        $estado = $municipio->estado;
        $impacto = $evento->impacto;
        $articulacion = $evento->articulacion;
        $subsistema = $evento->subsistema;
        $evento = $evento->toArray();

        unset($evento['municipio_id']); 
        $evento['municipio'] = $municipio->toArray();
        
        unset($evento['articulacion_id']); 
        $evento['articulacion'] = $articulacion->toArray();
        
        unset($evento['subsistema_id']); 
        $evento['subsistema'] = $subsistema->toArray();
        
        unset($evento['impacto_id']); 
        $evento['impacto'] = $impacto->toArray();
        
        array_push($eventos_finales,$evento);
    }
    return json_encode($eventos_finales);
});
