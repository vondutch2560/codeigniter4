<?php 
namespace App\Controllers\Admin;

class Home extends BaseAdminController
{
	public function index()
	{
		echo 'test admin dsadasash';
	}

	public function product($name, $id){
		echo 'namaae is: ' .$name. ' - id ddis: ' .$id;
	}
	//--------------------------------------------------------------------
}
