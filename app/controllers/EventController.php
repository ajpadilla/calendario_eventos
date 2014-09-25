<?php

class EventController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$eventos = Evento::all();
		return View::make('themes.fullcalendar.eventos.index',compact('eventos','algo'));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('themes.fullcalendar.eventos.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$response = array();
		if(Request::ajax()){
			$response['datos'] = Input::all();
			$response['success'] = true;
						
			$evento = new Evento;
			$evento->title = Input::get('titulo');
			$evento->descripcion = Input::get('descripcion');
			$evento->start = Input::get('fecha_hora');
			$evento->direccion = Input::get('direccion');
			$evento->observacion = Input::get('observacion');
			$evento->articulacion_id = (int)Input::get('articulaciones');
			$evento->impacto_id = (int)Input::get('impactos');
			$evento->subsistema_id = (int)Input::get('subsistemas');
			$evento->municipio_id = (int)Input::get('municipios');
			$evento->save();
							
			return json_encode($response);
		}
		return array('success' => false);

	}
	
	 public function updateStartEvent($event_data){
          $event_decode = NULL;
          if(Request::ajax()){
              $event_decode = json_decode($event_data,true);
              $event = Evento::find($event_decode['id']);
			  $event->start = $event_decode['start'];
			  $event->save();
              return json_encode($event);
          }
          return array('success' => false);
     }

	public function allEvents(){
		if(Request::ajax())
	{
			$eventos = Evento::all();
			$eventos_finales = array();
			foreach($eventos as $evento)
			{
				$municipio = $evento->municipio;
				$estado = $municipio->estado;
				$impacto = $evento->impacto;
				$articulacion = $evento->articulacion;
				$subsistema = $evento->subsistema;
				
				//$evento['evento'] = $evento->toArray();
				$evento['estado'] = $estado->toArray();
				unset($evento['municipio_id']);
				$evento['municipio'] = $municipio->toArray();
				unset($evento['articulacion_id']);
				$evento['articulacion'] = $articulacion->toArray();
				unset($evento['subsistema_id']);
				$evento['subsistema'] = $subsistema->toArray();
				unset($evento['impacto_id']);
				$evento['impacto'] = $impacto->toArray();
				array_push($eventos_finales,$evento);
			}
			return json_encode($eventos_finales);
		}
		return array('success' => false);
	}

	public function retornarEventos(){
		$response = array();
        $eventos = Evento::all()->lists('title', 'id');
        if(count($eventos) > 0) {
       		$response['success'] = true;
        	$response['eventos'] = $eventos;
        	return ($response);
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
        $contador_personas = array();
        $contador_tipo = array();
        $porcentajes_sexo = array();
        $porcentaje_tipo = array();         

		$evento = Evento::find($id);
        $fecha = explode(' ', $evento->start);
                
        $contador_personas = $this->contarPersonasPorSexo($evento);
        $porcentajes_sexo = $this->porcentajePorSexo($contador_personas);
        $contador_tipo = $this->contarTipoPersonas($evento);
        $porcentaje_tipo = $this->porcentajePorTipoPersona($contador_tipo,$contador_personas);
        /*print_r($contador_personas);
        print_r($porcentajes_sexo);
        print_r($contador_tipo);
        print_r($porcentaje_tipo);*/
        
		return View::make('themes.fullcalendar.eventos.show',compact('evento',
                                                                     'fecha',
                                                                     'contador_personas',
                                                                     'porcentajes_sexo',
                                                                     'contador_tipo',
                                                                     'porcentaje_tipo'));
	}

    public function showPrint($id)
	{
        $contador_personas = array();
        $contador_tipo = array();
        $porcentajes_sexo = array();
        $porcentaje_tipo = array();         

		$evento = Evento::find($id);
        $fecha = explode(' ', $evento->start);
                
        $contador_personas = $this->contarPersonasPorSexo($evento);
        $porcentajes_sexo = $this->porcentajePorSexo($contador_personas);
        $contador_tipo = $this->contarTipoPersonas($evento);
        $porcentaje_tipo = $this->porcentajePorTipoPersona($contador_tipo,$contador_personas);
        /*print_r($contador_personas);
        print_r($porcentajes_sexo);
        print_r($contador_tipo);
        print_r($porcentaje_tipo);*/
        
		return View::make('themes.prints.form_content',compact('evento',
                                                                     'fecha',
                                                                     'contador_personas',
                                                                     'porcentajes_sexo',
                                                                     'contador_tipo',
                                                                     'porcentaje_tipo'));
	}

    public function contarPersonasPorSexo($evento){
        $contador = array('hombres'=>'','mujeres'=>'','total_personas'=>'');
        foreach($evento->personas as $persona){
            $contador['total_personas'] += 1;
            if($persona->sexo == 'm'){
                $contador['hombres'] += 1;     
            }else{
                $contador['mujeres'] += 1;
            }
        }
        return $contador;
    }
   
   public function porcentajePorSexo($contador){
        $porcentaje = array('hombres'=>'','mujeres'=>'');
        if($contador['total_personas'] > 0){
            $porcentaje['hombres'] = round(($contador['hombres'] * 100) / $contador['total_personas'],2);
            $porcentaje['mujeres'] = round(($contador['mujeres'] * 100) / $contador['total_personas'],2);
            return $porcentaje;
        }
        return 0;
   }

   public function contarTipoPersonas($evento){
        $contador = array('estudiante'=>'','directivo'=>'','administrativo'=>'','docente'=>'','obrero'=>'');
        foreach($evento->personas as $persona){
            switch($persona->pivot->tipo){
                case 'estudiante':
                    $contador['estudiante'] += 1; 
                    break;
                case 'directivo':
                    $contador['directivo'] += 1;
                    break;
                case 'administrativo':
                    $contador['administrativo'] += 1;
                    break;
                case 'docente':
                    $contador['docente'] += 1;
                    break;
                case 'obrero':
                    $contador['obrero'] += 1;
                    break;
            }
        }
        return $contador;
   }   

    public function porcentajePorTipoPersona($contador_tipo, $contador_personas){
        $porcentaje = array('estudiante'=>'','directivo'=>'','administrativo'=>'','docente'=>'','obrero'=>'');
        if($contador_personas['total_personas'] > 0){
            $porcentaje['estudiante'] = round(($contador_tipo['estudiante'] * 100) / $contador_personas['total_personas'],2);
            $porcentaje['directivo'] = round(($contador_tipo['directivo'] * 100) / $contador_personas['total_personas'],2);
            $porcentaje['docente'] = round(($contador_tipo['docente'] * 100) / $contador_personas['total_personas'],2);
            $porcentaje['administrativo'] = round(($contador_tipo['administrativo'] * 100) / $contador_personas['total_personas'],2);
            $porcentaje['obrero'] = round(($contador_tipo['obrero'] * 100) / $contador_personas['total_personas'],2);
            return $porcentaje;
        }
        return 0;
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
	public function update($id,$datos)
	{
		$response = array();
		if(Request::ajax())
		{
			$response['id'] = $id;
			$response['datos'] = $datos;
			$response['success'] = true;
			$datos_evento = json_decode($datos,true);
						
			$evento =  Evento::find($id);
			$evento->title = $datos_evento['title'];
			$evento->descripcion = $datos_evento['descripcion'];
			$evento->start = $datos_evento['start'];
			$evento->direccion = $datos_evento['direccion'];
			$evento->observacion = $datos_evento['observacion'];
			$evento->articulacion_id = (int)$datos_evento['articulacion'];
			$evento->impacto_id = (int)$datos_evento['impacto'];
			$evento->subsistema_id = (int)$datos_evento['subsistema'];
			$evento->municipio_id = (int)$datos_evento['municipio'];
			$evento->save();
							
			return json_encode($response);
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
		//
	}


}
