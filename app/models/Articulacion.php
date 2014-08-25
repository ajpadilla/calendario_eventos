<?php

class Articulacion extends Model {
	protected $table = 'articulaciones';
	protected $fillable = array();
	public static $rules = array();

	public function Eventos(){
   		return $this->hasMany('Evento');
    }

}
