<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

ApiLog::observe(new ApiLogObserver);

Route::get('/', function()
{
	return View::make('home');
});

Route::get('beta-release', function(){
	return View::make('blog.beta');	
});

Route::post('/register', function()
{
	$rules = array('email' => array('required', 'email'));

	$validator = Validator::make(Input::all(), $rules);

	if($validator->fails())
	{
		return Redirect::to('/')
		->withErrors($validator);
	}
	else
	{
		$user = new User;
		$user->email = Input::get('email');
		$user->save();

		return Redirect::to('/')
		->with('success', 'Thank you for registering your interest with TotalInk. You\'ll receive an invitation soon!');
	}
});

/**
 * @todo JRD Move API key in to local config
 */
Route::post('demo', array('before' => 'csrf', function()
{
	$rules = array('model' => array('required', 'regex:^[a-zA-Z0-9 ]^', 'min:2'));
	
	$validator = Validator::make(Input::all(), $rules);
	
	if($validator->fails())
	{
		return Redirect::to('/')
		->withErrors($validator);
	}
	else
	{
		$privateKey = Config::get('totalink.privateKey');
		$client = new Guzzle\Http\Client('http://totalink.co.uk');
		$request = $client->get('/api/v1/' . $privateKey . '/printer/' . Input::get('model'));
		$response = $request->send();
		
		return Redirect::to('/#demo')
		->with('demo', $response->json());
	}
}));


Route::group(array('before' => 'api', 'prefix' => 'api/v1/{key}'), function()
{
	Route::get('/', function()
	{
		return Response::json(array('status' => 'ok'));
	});

	/*Route::get('/cartridge/{cartridge}/color/{color}/type/{type}', 'Api\CartridgeController@getCartridgeColorType')
	->where('cartridge', '^[a-zA-Z0-9]*$')
	->where('color', '^[a-zA-Z]*$')
	->where('type', '^[a-zA-Z]*$');

	Route::get('/cartridge/{cartridge}/color/{color}', 'Api\CartridgeController@getCartridgeColor')
	->where('cartridge', '^[a-zA-Z0-9]*$')
	->where('color', '^[a-zA-Z]*$');*/

	Route::get('/cartridge/{cartridge}', 'Api\CartridgeController@getCartridge')
	->where('cartridge', '^[a-zA-Z0-9 ]{2,}$');

	Route::get('/printer/{model}/{manufacturer}', 'Api\PrinterController@getModelManufacturer')
	->where('model', '^[a-zA-Z0-9 ]{2,}$')
	->where('manufacturer', '^[a-zA-Z0-9]{2,}$');

	Route::get('/printer/{model}', 'Api\PrinterController@getModel')
	->where('model', '^[a-zA-Z0-9 ]{2,}$');
});