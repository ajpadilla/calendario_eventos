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
//Ruta princiapal del sistema
Route::get('/', function()
{
	return View::make('themes.fullcalendar.layouts.sections');
});

Route::get('requestBlade','UserController@requestBlade');

Route::any("user/request","UserController@request");

Route::any("password/reset/{token}","UserController@reset");

//Rutas para inisiar sesión
Route::any('login','UserController@index');

Route::get('sesionUsuario', function(){
	return View::make('themes.fullcalendar.calendario.create');
});

Route::get('revision','RevisionController@index');

Route::get('respaldarDatos',function ($value='')
{
	$ruta = public_path().'/respaldo.csv';
	$fp = fopen($ruta,"w"); 
	if($fp!==false){
		fwrite($fp, Articulacion::all().PHP_EOL);
		fwrite($fp, Role::all().PHP_EOL);
		fwrite($fp, PermisionRole::all().PHP_EOL);
		fwrite($fp, Beneficiario::all().PHP_EOL);
		fwrite($fp, Estado::all().PHP_EOL);
		fwrite($fp, Evento::all().PHP_EOL);
		fwrite($fp, Impacto::all().PHP_EOL);
		fwrite($fp, Municipio::all().PHP_EOL);
		fwrite($fp, Persona::all().PHP_EOL);
		fwrite($fp, Responsable::all().PHP_EOL);
		fwrite($fp, Subsistema::all().PHP_EOL);
		fwrite($fp, User::all().PHP_EOL);
		fclose($fp);
	}else{
		echo "error";
	}
});


	//Ruta para mostrar el formuarlio de personas para los usuarios
Route::get('vistaPersonasUsuario','PersonaController@vistaPersonasUsuario');
Route::get('vistaListaPersonasUsuario','PersonaController@vistaListaPersonas');

	//Rutas para cargar datos al momento de crear un evento
Route::get('cargar_eventos','EventController@allEvents');
Route::post('updateStartEvent/{datos}','EventController@updateStartEvent');
Route::get('cargarEstados','EstadoController@cargarEstados');
Route::get('retornarArticulaciones','ArticulacionController@retornarArticulaciones');
Route::get('retornarSubsistemas','SubsistemaController@retornarSubsistemas');
Route::get('retornarImpactos','ImpactoController@retornarImpactos');
Route::get('cargarMunicipios/{id_estado}','MunicipioController@cargarMunicipios');
Route::get('mostrarGraficosEvento/{id}','EventController@showGraphics');

	//Ruta para imprimir datos de evento
Route::get('prints',function(){
	return View::make('themes.prints.form_content');
});

	//Rutas del controlados Eventos
	//Route::resource('estado','EstadoController');
Route::get('crearEvento','EventController@create');
Route::get('editarEvento/{id}','EventController@edit');
Route::post('guardarEvento','EventController@store');
Route::post('actualizarEvento/{id}','EventController@update');
Route::get('mostrarEventos','EventController@index');
Route::get('mostrarEvento/{id}','EventController@show');
Route::get('retornarEventos','EventController@retornarEventos');
Route::get('imprimirEvento/{id}','EventController@showPrint');
Route::get('listaResponsables','EventController@retornarPersonas');
Route::get('vistareporteGeneral','EventController@vistareporteGeneral');
Route::post('buscarEventosPorFecha','EventController@buscarEventosPorFecha');
Route::get('vistareporte','EventController@vistareporte');
Route::post('buscarEventos','EventController@buscarEventos');

	//Rutas para el modelo beneficiarios
Route::get('mostrarBeneficiarios','BeneficiarioController@index');
Route::get('retorntarBeneficiarios','BeneficiarioController@retorntarBeneficiarios');

	//Rutas para el modelo personas
Route::get('crearPersona','PersonaController@create');
Route::get('editarPersona/{id}','PersonaController@edit');
Route::post('actualizarPersona/{id}','PersonaController@update');
Route::post('guardarPersona','PersonaController@store');
Route::get('existenciaCedula','PersonaController@existenciaCedula');
Route::get('existenciaEmail','PersonaController@existenciaEmail');
Route::get('listarPersonas','PersonaController@index');
Route::get('vistaEditarPersonas/{id}','PersonaController@vistaEditarPersonas');

	//Rutas para cerrar sesión
Route::any('logout','UserController@logout');

	//vista del administrador
Route::get('sessionAdministrador', function(){
	return View::make('themes.fullcalendar.calendario.createUsuario');
});


	//Rutas de las articulaciones
Route::get('mostrarArticulaciones','ArticulacionController@index');
Route::get('crearArticulacion','ArticulacionController@create');
Route::post('guardarArticulacion','ArticulacionController@store');
Route::get('editarArticulacion/{id}','ArticulacionController@edit');
Route::post('actualizarArticulacion/{id}','ArticulacionController@update');
Route::get('borrarArticulacion/{id}','ArticulacionController@destroy');
Route::post('verificarExistenciaNombreArticulacion','ArticulacionController@verificarExistenciaNombreArticulacion');

	//Rutas de los impactos
Route::get('mostrarImpactos','ImpactoController@index');
Route::get('crearImpactos','ImpactoController@create');
Route::post('guardarImpactos','ImpactoController@store');
Route::get('editarImpacto/{id}','ImpactoController@edit');
Route::post('actualizarImpacto/{id}','ImpactoController@update');
Route::post('verificarExistenciaNombreImpacto','ImpactoController@verificarExistenciaNombreImpacto');

	//Rutas de los subsistemas
Route::get('crearSubsistemas','SubsistemaController@create');
Route::get('mostrarSubsistemas','SubsistemaController@index');
Route::post('guardarSubsistemas','SubsistemaController@store');
Route::get('editarSubsistema/{id}','SubsistemaController@edit');
Route::post('actualizarSubsistema/{id}','SubsistemaController@update');
Route::post('verificarExistenciaNombreSubsistema','SubsistemaController@verificarExistenciaNombreSubsistema');

	//Rutas del controlador Munucipio
Route::get('mostrarMunicipios','MunicipioController@index');
Route::get('crearMunicipio','MunicipioController@create');
Route::post('guardarMunicipio','MunicipioController@store');
Route::get('editarMunicipio/{id}','MunicipioController@edit');
Route::post('actualizarMunicipio/{id}','MunicipioController@update');
Route::post('verificarNombreMunicipio','MunicipioController@verificarNombreMunicipio');
Route::get('borrarMunicipios/{id}','MunicipioController@destroy');

	//Rutas de el controlador Estado
Route::get('crearEstado','EstadoController@create');
Route::post('guardarEstado','EstadoController@store');
Route::post('verificarExistenciaNombreEstado','EstadoController@verificarExistenciaNombreEstado');
Route::get('mostrarEstados','EstadoController@index');
Route::get('editarEstado/{id}','EstadoController@edit');
Route::post('actualizarEstado/{id}','EstadoController@update');
Route::get('borrarEstado/{id}','EstadoController@destroy');
