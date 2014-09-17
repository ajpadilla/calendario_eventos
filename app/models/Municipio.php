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
    
    public static function verificarNombresMunicipio($nombre,$id_estado){
        $municipio = Municipio::where('nombre','=',$nombre)->where('estado_id','=',$id_estado)->lists('nombre', 'id');
        if(count($municipio) > 0){
            return $municipio;
        }   
        return 0;
    }

}
