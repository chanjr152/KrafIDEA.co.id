<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->library('MasterPage');
		$this->load->library('Image');
	}

	public function index()
	{
		$this->masterpage->setMasterPage('masterpage_default');

		$data['slide'] = $this->image->ImageSlider();
		$data['product'] = $this->image->ImageProduct();

		$this->masterpage->addContentPage('home_view','Content',$data);
		$this->masterpage->show();
	}
}
