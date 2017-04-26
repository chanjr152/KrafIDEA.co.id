<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DetailProduct extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->library('MasterPage');
		$this->load->library('Image');
	}

	public function index()
	{
		$this->masterpage->setMasterPage('masterpage_default');
		$data['product'] = $this->image->ImageSlider();
		$this->masterpage->addContentPage('detailproduct_view','Content',$data);
		$this->masterpage->show();
	}
}