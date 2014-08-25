<?php

class Subsistema extends Model {
	protected $table = 'subsistemas';
	protected $fillable = array();
	public static $rules = array();
	
	public function Eventos(){
		return $this->hasMany('Evento');
	}

}
