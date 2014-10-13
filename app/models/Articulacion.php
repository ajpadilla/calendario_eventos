<?php


class Articulacion extends \Eloquent {
	use \Venturecraft\Revisionable\RevisionableTrait;

	protected $revisionEnabled = true;
	protected $table = 'articulaciones';
	protected $fillable = array();
	public static $rules = array();

	public function Eventos(){
   		return $this->hasMany('Evento');
    }

}
