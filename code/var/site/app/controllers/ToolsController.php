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
	private function getLang() //string
	{
		$lang = Input::get("lang");
		if ($lang == "es")
		{
			return "es";
		}

		return "en";
	}

	private function getKey() //string
	{
		$k = Input::get("ref");


		if ($k != "")
		{
			return $k;
		}else{
			echo "bad ref";
			die;
		}
	}

	private function getProxy() //string
	{
		$k = Input::get("proxy");


		if ($k != "")
		{
			return $k;
		}else{
			return "self";
		}
	}		

	public function showTest()
	{
		return View::make('tools/test');
	}
	
	public function showOrt()
	{
		$data["lang"] = self::getLang();
		$data["ref"] = self::getKey();
		$data["proxy"] = self::getProxy();
		return View::make('tools/ort')->with($data);
	}

	public function setOrt()
	{
		print_r($_REQUEST);
		//return View::make('tools/cageaid')->with($data);
	}

	public function showCageaid()
	{
		$data["lang"] = self::getLang();
		$data["ref"] = self::getKey();
		$data["proxy"] = self::getProxy();
		return View::make('tools/cageaid')->with($data);
	}

	public function setCageaid()
	{
		print_r($_REQUEST);
		//return View::make('tools/cageaid')->with($data);
	}

	public function showPhq9()
	{
		$data["lang"] = self::getLang();
		$data["ref"] = self::getKey();
		$data["proxy"] = self::getProxy();
		return View::make('tools/phq9')->with($data);
	}

	public function setPhq9()
	{
		print_r($_REQUEST);
		//return View::make('tools/cageaid')->with($data);
	}


}
