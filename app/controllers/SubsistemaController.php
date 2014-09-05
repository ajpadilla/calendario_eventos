<?php

class SubsistemaController extends \BaseController {

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
		$subsistemas= Subsistema::all();
      	return View::make('themes.fullcalendar.subsistemas.create')->with('subsistemas', $subsistemas);
	}
	
	public function retornarSubsistemas(){
          $subsistemas = Subsistema::all()->lists('nombre', 'id');
	      if(count($subsistemas) > 0) {
                $response['success'] = true;
                $response['subsistemas'] = $subsistemas;
                return ($response);
            }

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
			$response['susses'] = true;
			$response['nombre'] = Input::get('nombre');
			
			$subsistema = new Subsistema;
			$subsistema->nombre = Input::get('nombre');
			$subsistema->save();	
					
			return json_encode($response);
		}
		return array('susses'=>'false');
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
