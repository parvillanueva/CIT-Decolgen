
<?php
defined("BASEPATH") OR exit("No direct script access allowed");

class crs_customers extends GS_Controller {

	public function __construct() {
		parent::__construct();
		if($this->session->userdata("sess_email")=="" ) { 
			redirect(base_url("content_management/login"));
		}
	}

	public function index()
	{
		$data["title"] = "Content Management";
		$data["PageName"] = ("CRS Customers");
		$data['edit_title'] = true;
		$data["content"] = "content_management/CRS/crs_customers/page";
		$data["breadcrumb"] = array('CRS Customers' => '');
		$this->load->view("content_management/template/layout", $data);	
	}

	//controller_config
}
	    