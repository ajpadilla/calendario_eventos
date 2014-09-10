<?php

class Beneficiario extends \Eloquent {
	protected $table = 'beneficiarios';
	protected $fillable = [];

	public function evento(){
    	return $this->belongsTo('Evento');
    }
	
	public function persona(){
    	return $this->belongsTo('Persona');
    }

	
}
