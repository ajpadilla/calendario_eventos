<?php

class PersonaController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$personas = Persona::all();
		return View::make('persona.index')->with('personas', $personas);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{		
		return View::make('themes.fullcalendar.persona.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$response = array();
		if(Request::ajax())
		{
			$response['datos'] = Input::all();
			$response['success'] = true;

			$persona = new Persona(json_decode(Input::all(),true));
			if($persona->validate()){
				return $response;
			}
			
			return array('success' => 'no valido');
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
		return "Vamos a ver la info de: $id";
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		return "Vamos al form de editar con: $id";
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		return "Aquí, actualizando a: $id";
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		return "Aquí, eliminando a: $id";
	}


	public function missingMethod($parameters = array())
	{
		/**
		 * Remove the specified resource from storage.
		 *
		 * @param  array with resources list
		 * @return Response
		 */
		return 'nada';
	}

	public function createRegister($datos){
		$response = array();
		if(Request::ajax()){
			$response['datos'] = $datos;
			$response['success'] = true;
			
			$persona = new Persona(json_decode($datos,true));
			if($persona->validate()){
				Session::put('persona',json_decode($datos,true));		
			}

			return $response;
		}
		return array('success' => false);
	}
	
	public function imageUpload(){
		
		$file = Input::file('foto');
		$destinationPath = 'files/';
        $filename = $file->getClientOriginalName();
		return Response::json(['success' => true]);
	}
	
	public function existenciaCedula(){
		
		if(Request::ajax()) 
		{
			$cedula = Input::get('cedula');
			$persona = Persona::getPersonaByCedula($cedula);
			if(count($persona) > 0){
				return Response::json(array('msg' => 'true'));
			}else{
				 return Response::json(array('msg' => 'false'));
			}
       	}
        
		return Response::json(array('respuesta' => 'false'));

    }

	public function existenciaEmail()
	{	
		if(Request::ajax())
         {
             $email = Input::get('email');
             $persona = Persona::getPersonaByEmail($email);
             if(count($persona) > 0){
                 return Response::json(array('msg' => 'true'));
             }else{
                  return Response::json(array('msg' => 'false'));
             }
         }
         return Response::json(array('respuesta' => 'false'));
	}	

	public function cancelRegister()
	{
		if(Session::has('direccion'))
			Session::remove('direccion');
		return Redirect::to('personas');
	}
	
}
