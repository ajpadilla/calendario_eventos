<?php

class EstadoController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$estados = Estado::all();
		return View::make('themes.fullcalendar.estados.index')->with('estados', $estados);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('themes.fullcalendar.estados.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		/*$rules = array('nombre'=>'required|alpha|digits_between:3,45|unique:estados,nombre');
		$validator = Validator::make(Input::all(), $rules);
		$validator = Validator::make(Input::all(), $rules);
		if(!$validator->fails()){
			$estado = new Estado;
			$estado->nombre =Input::get('nombre');
			$estado->save();
			return Redirect::to('/');
		}*/
		if(Request::ajax()){
			$response = array();
			$nombre_estado = Input::get('nombre');
			$response['susses'] = true;
			$response['nombre'] = $nombre_estado;
			
			$estado = new Estado;
			$estado->nombre = $nombre_estado;
			$estado->save();
			
			return json_encode($response);
		}
		return array('susses'=>'true');
	}


	 public function cargarEstados(){
          $response = array();
          $estados = Estado::all()->lists('nombre', 'id');
          if(count($estados) > 0) {
              $response['success'] = true;
              $response['estados'] = $estados;
               return ($response);
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
