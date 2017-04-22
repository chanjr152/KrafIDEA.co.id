<?php
defined("BASEPATH")OR exit("No direct script access allowed");

/**
* 
*/
class Db_common extends CI_Model
{
	
	public function __construct()
	{
		parent::__construct();
	}

	public function listProduct(){
		return array("1","2","3","4","5","6","7","8");
		// return "abs";
	}
}
?>