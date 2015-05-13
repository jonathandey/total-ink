<?php

class ApiLogObserver {
	
	public function saving($model)
	{
		$model->query = Request::path();
		$model->ip = Request::getClientIp();
		return true;
	}
	
}