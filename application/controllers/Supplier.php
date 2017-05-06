<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Supplier extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->library('MasterPage');
		$this->load->library('Image');
		$this->load->helper("url");
	}

	public function index()
	{
		$this->masterpage->setMasterPage('masterpage_default');
		$data['product'] = $this->image->ImageProduct2();
		$this->masterpage->addContentPage('supplier_view','Content',$data);
		$this->masterpage->show();
	}
}