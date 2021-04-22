<?php

namespace App\Controllers;

class HomeController extends BaseController
{
	public function index()
	{
		$data = [
			'title' 		=> 'Home',
			'activeNav' => 'home'
		];

		return view('v_home', $data);
	}
}
