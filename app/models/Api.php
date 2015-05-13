<?php

class Api extends Eloquent {

	protected $table = 'keys';
	protected $softDelete = true;

	public function user()
	{
		return $this->belongsTo('User');
	}
	
	public function logs()
	{
		return $this->hasMany('ApiLog', 'key_id');
	}
	
	public static function validateKey($api_key = null)
	{
		$apiLookup = self::where('public_key', '=', $api_key)
		->first();
		
		if(is_null($apiLookup))
		{
			return null;
		}
		
		if(!is_null($apiLookup->expires_at) && strtotime($apiLookup->expires_at) <= time())
		{
			return null;
		}

		return $apiLookup;
	}

}