<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class HelpersController extends BaseController
{
	public function array()
	{
		$data = [
			'title' 		=> 'Array Helper',
			'activeNav' => 'array-helper'
		];

		return view('/helpers/v_arrayHelper', $data);
	}

	public function filesystem()
	{
		$data = [
			'title' 		=> 'Filesystem Helper',
			'activeNav' => 'filesystem-helper'
		];

		return view('/helpers/v_filesystemHelper', $data);
	}

	public function form()
	{
		$data = [
			'title' 		=> 'Form Helper',
			'activeNav' => 'form-helper'
		];

		return view('/helpers/v_formHelper', $data);
	}

	public function html()
	{
		$data = [
			'title' 		=> 'HTML Helper',
			'activeNav' => 'html-helper'
		];

		return view('/helpers/v_htmlHelper', $data);
	}

	public function htmlMemes()
	{
		return base_url('/images/memes/hide_the_pain_harold.jpg');
		// return '/images/memes/hide_the_pain_harold.jpg';
		// return 'hide_the_pain_harold.jpg';
	}

	public function inflector()
	{
		$data = [
			'title' 		=> 'Inflector Helper',
			'activeNav' => 'inflector-helper'
		];

		return view('/helpers/v_inflectorHelper', $data);
	}

	public function number()
	{
		$data = [
			'title' 		=> 'Number Helper',
			'activeNav' => 'number-helper'
		];

		return view('/helpers/v_numberHelper', $data);
	}

	public function url()
	{
		$data = [
			'title' 		=> 'URL Helper',
			'activeNav' => 'url-helper'
		];

		return view('/helpers/v_urlHelper', $data);
	}
}
