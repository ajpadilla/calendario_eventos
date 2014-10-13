<?php

class Municipio extends \Eloquent {
    use \Venturecraft\Revisionable\RevisionableTrait;
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
    
    public static function retornarListaMunicipios($id_estado)
    {
        $municipios = Municipio::where('estado_id', '=', $estado_id)->get();
        return $municipios;
    }
}
