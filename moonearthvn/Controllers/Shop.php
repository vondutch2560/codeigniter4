<?php namespace App\Controllers;

class Shop extends BaseController
{
    public function product($name, $id){
		echo 'name is: ' .$name. ' - id is: ' .$id;
	}
}
