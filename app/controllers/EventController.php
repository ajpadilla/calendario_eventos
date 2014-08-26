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
			
			$a = new Articulacion;           
            $a->nombre = "Algo";
            $a->save();
			
			$i = new Impacto;
			$i->nombre="Algo";
			$i->save();
		
			$s= new Subsistema;
			$s->nombre = "Algo";
			$s->save();
			
			$m= new Municipio;
			$m->nombre="colon";
			$m->estado_id = 1;
			$m->save();
			
			$evento = new Evento;
			$evento->titulo = "algo";
			$evento->descripcion ="algo";
			$evento->fecha = '98-12-31 11:30:45';
			$evento->direccion = "algo";
			$evento->observacion = "asdfsd";
			$evento->articulacion_id = $a->id;
			$evento->impacto_id = $i->id;
			$evento->subsistema_id = 1;
			$evento->municipio_id = 1;
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
