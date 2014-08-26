<?php

class Subsistema extends \Eloquent {
	protected $table = 'subsistemas';
	protected $fillable = array();
	public static $rules = array();
	
	public function Eventos(){
		return $this->hasMany('Evento');
	}

}
