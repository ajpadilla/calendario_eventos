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
		return View::make('themes.fullcalendar.persona.index')->with('personas', $personas);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{	
		$estados = Estado::lists('nombre', 'id');
		return View::make('themes.fullcalendar.persona.create')->with('estados',$estados);
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
			
			
			$persona = new Persona;
			$persona->cedula = Input::get('cedula');
			$persona->nombres = Input::get('nombres');
			$persona->apellidos = Input::get('apellidos');
			$persona->nacionalidad = Input::get('nacionalidad');
			$persona->sexo = Input::get('sexo');
			$persona->direccion = Input::get('direccion');
			$persona->telefono = Input::get('telefono');
			$persona->email = Input::get('email');
			$persona->municipio_id = Input::get('municipio');
			$persona->save();
		
			//$persona->eventos()->sync(Input::get('evento_ids'));			
			
			foreach(Input::get('evento_ids') as $evento_id){
				$persona->eventos()->attach( $evento_id, array('tipo'=>Input::get('tipo') ) );			
			}		

			return $response;
				
		}
		return array('success' => false);
	}

	public function verificarPersona()
	{
		if(Request::ajax()) 
		{
			$cedula = Input::get('cedula');
			$persona = Persona::getPersonaByCedula($cedula);
			if(count($persona) > 0){
				return Response::json(true);
			}else{
				 return Response::json(false);
			}
       	}
        
		return Response::json(array('respuesta' => 'false'));

	}

	public function invitarPersona()
	{
		$response = array();
		if(Request::ajax())
		{
			$response['datos'] = Input::all();
			$response['success'] = true;

			$persona = Persona::getPersonaByCedula(Input::get('cedula'));
			$response['persona'] = $persona[0]['id'];
			$objPersona = Persona::find($persona[0]['id']);
			$objPersona->eventos()->attach( Input::get('evento_ids') , array('tipo'=>Input::get('tipo')));
			$objPersona->save();
			return $response;
				
		}
		return array('success' => false);
	}

	public function invitar()
	{
		return View::make('themes.fullcalendar.persona.invitar');
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
		$persona = Persona::find($id);
		$estados = Estado::lists('nombre', 'id');
		$municipios = Municipio::lists('nombre','id');
		$eventos =  $persona->eventos->lists('title','id');
		return View::make('themes.fullcalendar.persona.edit',compact('persona','estados','municipios','eventos'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		if(Request::ajax())
		{
			$response['datos'] = Input::all();
			$response['success'] = true;
			
			
			$persona = Persona::find($id);
			$persona->cedula = Input::get('cedula');
			$persona->nombres = Input::get('nombres');
			$persona->apellidos = Input::get('apellidos');
			$persona->nacionalidad = Input::get('nacionalidad');
			$persona->sexo = Input::get('sexo');
			$persona->direccion = Input::get('direccion');
			$persona->telefono = Input::get('telefono');
			$persona->email = Input::get('email');
			$persona->municipio_id = Input::get('municipio');
			$persona->save();
		
			$persona->eventos()->sync(Input::get('evento_ids'));			
		
			return $response;
				
		}
		return array('success' => false);

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
				return Response::json(false);
			}else{
				 return Response::json(true);
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
                 return Response::json(false);
             }else{
                  return Response::json(true);
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
	
	public function vistaPersonasUsuario($value='')
	{
		$estados = Estado::lists('nombre', 'id');
		return View::make('themes.fullcalendar.persona.formUsuario')->with('estados',$estados);
	}

	public function vistaListaPersonas()
	{
		$personas = Persona::all();
		return View::make('themes.fullcalendar.persona.indexUsuarios')->with('personas', $personas);
	}

	public function vistaEditarPersonas($id)
	{
		$persona = Persona::find($id);
		$estados = Estado::lists('nombre', 'id');
		$municipios = Municipio::lists('nombre','id');
		$eventos =  $persona->eventos->lists('title','id');
		return View::make('themes.fullcalendar.persona.editUsuario',compact('persona','estados','municipios','eventos'));
	
	}

	public function invitar2()
	{
		return View::make('themes.fullcalendar.persona.invitarUsuario');
	}
}
