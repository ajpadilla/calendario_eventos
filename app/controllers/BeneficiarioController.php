<?php

class BeneficiarioController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('themes.fullcalendar.beneficiario.create');
	}

	
	public function retorntarBeneficiarios(){
		
		if(Request::ajax())
		{
				$beneficiarios = Beneficiario::all();
				$beneficiarios_finales = array('algo','alvaro','padilla');
				$eventos = array();
				$datos_eventos = array();
				foreach($beneficiarios as $beneficiario){
					$evento = $beneficiario->evento;
					$persona = $beneficiario->persona;
				
					$eventos['title'] = $evento->title;
					$eventos['nombres'] = $persona->nombres;
					$eventos['apellidos'] = $persona->apellidos;	
					array_push($datos_eventos,$evento);
				}
				//print_r($datos_eventos);
				return json_encode($beneficiarios_finales);
		}
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
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
