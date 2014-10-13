<?php

class ImpactoController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$impactos = Impacto::all();
        return View::make('themes.fullcalendar.impactos.index')->with('impactos', $impactos);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        return View::make('themes.fullcalendar.impactos.create');

	}

	public function retornarImpactos(){
           $impactos = Impacto::all()->lists('nombre', 'id');
		  if(count($impactos) > 0) {
              $response['success'] = true;
              $response['impactos'] = $impactos;
              return ($response);
          }   
      }

    public function verificarExistenciaNombreImpacto(){
        if(Request::ajax())
        {
            $nombre= Input::get('nombre');
            $impacto = Impacto::where('nombre','=',$nombre)->get();
            if(count($impacto) > 0){
                return Response::json(false);
            }else{
                return Response::json(true);
            }
        }
        return Response::json(array('respuesta' => false));  
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
			
			$impacto = new Impacto;
			$impacto->nombre = Input::get('nombre');
			$impacto->save();
					
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
		$impacto = Impacto::find($id);
        return View::make('themes.fullcalendar.impactos.edit')->with('impacto', $impacto);
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
  
              $impacto = Impacto::find($id);
              $impacto->nombre = Input::get('nombre');
              $impacto->save();
  
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
