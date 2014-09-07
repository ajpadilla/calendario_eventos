<?php

class Persona extends \Eloquent  {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'personas';

		
	public static $rules = array(
					'cedula' => 'required|unique:personas,cedula|numeric|digits_between:5,10',
					'nombre' => 'required|alpha|between:1,45',
					'apellido' => 'required|alpha|between:1,45',
					'nacionalidad' => 'required',
					'sexo' => 'required|in:m,f',
					'direccion' => 'required',
					'telefono' => 'required|between:7,12',
					'email' => 'email|unique:personas,email',
					'municipio_id'=>'required'
				   );

	public function eventos(){
		return $this->belongsToMany('Evento','beneficiarios','persona_id','evento_id')->withPivot('id');
	}	

	public static function getPersonaByCedula($cedula){
		return Persona::whereCedula($cedula)->get();
	}
	
	public static function getPersonaByEmail($email){
		return Persona::whereEmail($email)->get();
	}
}
