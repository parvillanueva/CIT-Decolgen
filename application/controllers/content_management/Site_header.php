
<?php
defined("BASEPATH") OR exit("No direct script access allowed");

class Site_header extends GS_Controller {

	public function __construct() {
		parent::__construct();
		if($this->session->userdata("sess_email")=="" ) { 
			redirect(base_url("content_management/login"));
		}
	}

	public function index()
	{
		$data["title"] = "Content Management";
		$data["PageName"] = ("Header");
		$data['edit_title'] = true;
		$data["content"] = "content_management/module/header/page";
		$data['breadcrumb'] = array('Header' => '');
		$this->load->view("content_management/template/layout", $data);	
	}
}
	    