<?php

class EventController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		var_dump(Session::get('persona'));
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store($datos)
	{
		$response = array();
		if(Request::ajax()){
			$response['datos'] = $datos;
			$response['success'] = true;
			$datos_evento = json_decode($datos,true);
			Session::put('persona',$datos_evento);	
			
						
			$evento = new Evento;
			$evento->titulo = $datos_evento['titulo'];
			$evento->descripcion = $datos_evento['descripcion'];
			$evento->fecha = $datos_evento['fecha'];
			$evento->direccion = $datos_evento['direccion'];
			$evento->observacion = $datos_evento['observacion'];
			$evento->articulacion_id = $datos_evento['articulacion'];
			$evento->impacto_id = $datos_evento['impacto'];
			$evento->subsistema_id = $datos_evento['subsistema'];
			$evento->municipio_id = $datos_evento['municipio'];
			$evento->save();
							
			return json_encode($response);
		}
		return array('success' => false);

	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
