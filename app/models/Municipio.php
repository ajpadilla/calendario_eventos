<?php

class Municipio extends \Eloquent {
	protected $table = 'municipios';
	protected $fillable = array();
	public static $rules = array();
    
    public function eventos(){
        return $this->hasMany('Evento');
    }
    	
	public function estado()
	{
		return $this->belongsTo('Estado');
	}

	public function personas()
   	{
   		return $this->hasMany('Persona');
    }

}
