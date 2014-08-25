<?php

class Estado extends Model {
	protected $table = 'estados';
	protected $fillable = array();
	public static $rules = array();
	
	public function albums()
	{
		return $this->hasMany('Album');
	}
}
