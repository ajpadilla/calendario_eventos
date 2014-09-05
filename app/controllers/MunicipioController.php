<?php

class MunicipioController extends \BaseController {

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
		$municipios = Municipio::all();
		return View::make('themes.fullcalendar.municipios.create')->with('municipios',$municipios);
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		if(Request::ajax()){
              $response = array();
              $nombre_municipio = Input::get('nombre');
			  $id_estado = json_decode(Input::get('estado_id'));			  

              $response['susses'] = true;
              $response['nombre'] = $nombre_municipio;
			  $response['estado_id']= $id_estado;

			  $municipio = new Municipio;
			  $municipio->nombre = $nombre_municipio;
			  $municipio->estado_id =(int)$id_estado;
			  $municipio->save();

              return json_encode($response);
         }
          return array('susses'=>'false');	 
	
	}

	public function cargarMunicipios($id_estado){
		$municipios = Municipio::where('estado_id', '=', $id_estado)->lists('nombre', 'id');
		$response = array();
		if(count($municipios) > 0){
			$response['success'] = true;
            $response['municipios'] = ($municipios);
           	return $response;
		}
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
		$municipio = Municipio::find($id);
		$estado = Estado::find($municipio->estado_id);
		return View::make('themes.fullcalendar.municipios.editar',compact('municipio','estado'));
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		if(Request::ajax()){
                $response = array();
                $nombre_municipio = Input::get('nombre');
                $id_estado = json_decode(Input::get('estado_id'));
  
                $response['susses'] = true;
                $response['nombre'] = $nombre_municipio;
                $response['estado_id']= $id_estado;
  
                $municipio = Municipio::find($id);
                $municipio->nombre = $nombre_municipio;
                $municipio->estado_id =(int)$id_estado;
                $municipio->save();
  
                return json_encode($response);
           }
            return array('susses'=>'false');
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
