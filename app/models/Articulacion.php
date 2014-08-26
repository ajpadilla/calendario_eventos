<?php

class Articulacion extends \Eloquent {
	protected $table = 'articulaciones';
	protected $fillable = array();
	public static $rules = array();

	public function Eventos(){
   		return $this->hasMany('Evento');
    }

}
