<?php

class Persona extends Model {
	protected $table = 'personas';
	protected $fillable = array();
	public static $rules = array();
	
	public function municipio(){
		 return $this->belongsTo('Municipio');
	}
	
}
