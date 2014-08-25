<?php

class Evento extends Model {
	protected $table = 'eventos';
	protected $fillable = array();
	public static $rules = array();

	public function subsistema(){
		 return $this->belongsTo('Subsistema');
	}
	
	public function impacto(){
		 return $this->belongsTo('Impacto');
	}
	
	public function articulacion(){
		return $this->belongsTo('Articulacion');
	}

	public function municipio(){
		return $this->belongsTo('Municipio');
	}
	
	public function personas(){
		return $this->belongsToMany('Persona','beneficiarios','evento_id','persona_id');
	}
}
