<?php

class ToolsController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showOrt()
	{
		return View::make('tools/ort');
	}

	public function showCageaid()
	{
		return View::make('tools/cageaid');
	}

	public function showPhq9()
	{
		return View::make('tools/phq9');
	}


}
