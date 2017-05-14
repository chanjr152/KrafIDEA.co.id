<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->library('MasterPage');
	}

	public function index()
	{
		$this->masterpage->setMasterPage('masterpage_default');
		$this->masterpage->addContentPage('user/registration_view','Content');
		$this->masterpage->show();
	}
}