<?php

class ArticulacionController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$articulaciones = Articulacion::all();
		return View::make('themes.fullcalendar.articulaciones.index')->with('articulaciones', $articulaciones);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('themes.fullcalendar.articulaciones.create');
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
  
              $articulacion = new Articulacion;
              $articulacion->nombre = Input::get('nombre');
              $articulacion->save();
  
              return json_encode($response);
          }
          return array('susses'=>'false');

	}

	public function retornarArticulaciones(){
	  $articulaciones = Articulacion::all()->lists('nombre', 'id');
		if(count($articulaciones) > 0) {
        	$response['success'] = true;
       		$response['articulaciones'] = $articulaciones;
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
		$articulacion = Articulacion::find($id);
        return View::make('themes.fullcalendar.articulaciones.edit')->with('articulacion', $articulacion);
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
                $response['susses'] = true;
                $response['nombre'] = Input::get('nombre');
  
                $articulacion = Articulacion::find($id);
               $articulacion->nombre = Input::get('nombre');
                $articulacion->save();
  
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
		$articulacion = Articulacion::find($id);
		$articulacion->delete();
		////return Redirect::to('nerds');
	}


}
