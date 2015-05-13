<?php namespace Api;

class CartridgeController extends MasterController {

	public function getCartridge($apiKey, $cartridge)
	{
	
		$key = \Api::where('public_key', '=', $apiKey)->first();
			
		$request = new \ApiLog();
		$request->key_id = $key->id;
		$request->type = 'cartridge';
			
		$response = array();

		$cartridges = \Printer::where('Cartridge', 'LIKE', '%' . e($cartridge) . '%')
		->get();
		
		if($cartridges->count())
		{
			foreach($cartridges as $cartridge)
			{
				$response[] = array(
					'manufacturer' => $cartridge->Manufacturer, 
					'model' => $cartridge->Model,
					'cartridge' => $cartridge->Cartridge,
					'color' => $cartridge->Colour,
					'type' => $cartridge->Type
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


	/*public function getCartridgeColor($apiKey, $cartridge, $color)
	{
		$cartridges = \Printer::where('Cartridge', 'LIKE', '%' . e($cartridge) . '%')
		->where('Colour', '=', e($color))
		->get()
		->toJson();

		return \Response::json(array('status' => 'ok', 'response' => $cartridges));	
	}

	public function getCartridgeColorType($apiKey, $cartridge, $color, $type)
	{
		$cartridges = \Printer::where('Cartridge', 'LIKE', '%' . e($cartridge) . '%')
		->where('Colour', e($color))
		->where('Type', e($type))
		->get()
		->toJson();

		return \Response::json(array('status' => 'ok', 'response' => $cartridges));	
	}*/
}

?>