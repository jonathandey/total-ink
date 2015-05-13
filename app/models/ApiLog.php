<?php

class ApiLog extends Eloquent {
	
	protected $table = 'api_logs';
	protected $softDelete = true;
	
	public function key()
	{
		return $this->belongsTo('Api');
	}
	
}