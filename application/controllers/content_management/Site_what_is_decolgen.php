
<?php
defined("BASEPATH") OR exit("No direct script access allowed");

class Site_what_is_decolgen extends GS_Controller {

	public function __construct() {
		parent::__construct();
		if($this->session->userdata("sess_email")=="" ) { 
			redirect(base_url("content_management/login"));
		}
	}

	public function index()
	{
		$data["title"] = "Content Management";
		$data["PageName"] = ("What is Decolgen");
		$data['edit_title'] = true;
		$data["content"] = "content_management/module/what_is_decolgen/page";
		$data['breadcrumb'] = array('What is Decolgen' => '');
		$this->load->view("content_management/template/layout", $data);	
	}

	//controller_config
}
	    