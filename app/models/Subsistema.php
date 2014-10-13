<?php

class Subsistema extends \Eloquent {
	use \Venturecraft\Revisionable\RevisionableTrait;
	protected $table = 'subsistemas';
	protected $fillable = array();
	public static $rules = array();
	
	public function Eventos(){
		return $this->hasMany('Evento');
	}

}
