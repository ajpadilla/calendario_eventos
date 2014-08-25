<?php

class Municipio extends Model {
	protected $table = 'municipios';
	protected $fillable = array();
	public static $rules = array();
	
	public function estado()
	{
		return $this->belongsTo('Estado');
	}
}
