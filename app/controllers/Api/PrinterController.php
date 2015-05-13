<?php namespace Api;

class PrinterController extends MasterController {

	public function getModel($apiKey, $model)
	{
		$key = \Api::where('public_key', '=', $apiKey)->first();
			
		$request = new \ApiLog();
		$request->key_id = $key->id;
		$request->type = 'model';
	
		$response = array();

		$models = \Printer::where('Model', 'LIKE', '%' . e($model) . '%')
		->get();
		
		if($models->count())
		{
			foreach($models as $model)
			{
				$response[] = array(
					'manufacturer' => $model->Manufacturer, 
					'model' => $model->Model, 
					'cartridge' => $model->Cartridge,
					'color' => $model->Colour,
					'type' => $model->Type
				);
			}
			
			$request->status = 'ok';
			$request->save();
			
			return \Response::json(array('status' => 'ok', 'response' => $response));
		}
		
		$request->status = 'missing';
		$request->save();
		
		return \Response::json(array('status' => 'missing'));
	}

	public function getModelManufacturer($apiKey, $model, $manufacturer)
	{
		$key = \Api::where('public_key', '=', $apiKey)->first();
			
		$request = new \ApiLog();
		$request->key_id = $key->id;
		$request->type = 'model-manufacturer';
	
		$response = array();

		$models = \Printer::where('Model', 'LIKE', '%' . e($model) . '%')
		->where('Manufacturer', 'LIKE', '%' . e($manufacturer) . '%')
		->get();
		
		if($models->count())
		{
			foreach($models as $model)
			{
				$response[] = array(
					'manufacturer' => $model->Manufacturer, 
					'model' => $model->Model, 
					'cartridge' => $model->Cartridge,
					'color' => $model->Colour,
					'type' => $model->Type
				);
			}
			
			$request->status = 'ok';
			$request->save();
			
			return \Response::json(array('status' => 'ok', 'response' => $response));
		}
		
		$request->status = 'missing';
		$request->save();
		
		return \Response::json(array('status' => 'missing'));
	}

}