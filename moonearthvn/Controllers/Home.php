<?php namespace App\Controllers;

use App\Controllers\Admin\Home as AdminHome;

class Home extends BaseController
{
	public function index()
	{
		$data = [
			'metaTitle' => 'test meta title',
			'varia' => 'test variables'
		];
		return view('ver1/layouts/main', $data);
	}

	public function validation(){
		$adminHome = new AdminHome();
		$adminHome->product('aa', '11');
	}
	//--------------------------------------------------------------------

}
