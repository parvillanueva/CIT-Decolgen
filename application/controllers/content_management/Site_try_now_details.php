
<?php
defined("BASEPATH") OR exit("No direct script access allowed");

class Site_try_now_details extends GS_Controller {

	public function __construct() {
		parent::__construct();
		if($this->session->userdata("sess_email")=="" ) { 
			redirect(base_url("content_management/login"));
		}
	}

	public function index()
	{
		$data["title"] = "Content Management";
		$data["PageName"] = ("Try Now Details");
		$data['edit_title'] = true;
		$data["content"] = "content_management/module/try_now/details/page";
		$data['breadcrumb'] = array('Try Now Details' => '');
		$this->load->view("content_management/template/layout", $data);	
	}

	//controller_config
}
	    