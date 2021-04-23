<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class LibrariesController extends BaseController
{
	public function workingWithFiles()
	{
		$data = [
			'title' 		=> 'Working With Files Library',
			'activeNav' => 'working-with-files-library'
		];

		return view('/libraries/v_workingWithFilesLibrary', $data);
	}
}
