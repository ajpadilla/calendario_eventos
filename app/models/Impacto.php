<?php

class Impacto extends \Eloquent {
	protected $table = 'impactos';
   	protected $fillable = array();
  	public static $rules = array();

	public function Eventos(){
    	return $this->hasMany('Evento');
    }

}
