<?php

class Estado extends Eloquent {
	protected $table = 'estados';
	protected $fillable = array();
	public static $rules = array();
	
	public function municipios()
	{
		return $this->hasMany('Municipio');
	}

}
