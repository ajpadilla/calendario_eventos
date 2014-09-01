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
			
						
			$evento = new Evento;
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
            foreach($eventos as $evento){
                $municipio = $evento->municipio;
                $estado = $municipio->estado;
                $impacto = $evento->impacto;
                $articulacion = $evento->articulacion;
                $subsistema = $evento->subsistema;
                $evento = $evento->toArray();
                
                        
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
