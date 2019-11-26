
<?php
defined("BASEPATH") OR exit("No direct script access allowed");

class Site_no_drowse_decolgen extends GS_Controller {

	public function __construct() {
		parent::__construct();
		if($this->session->userdata("sess_email")=="" ) { 
			redirect(base_url("content_management/login"));
		}
	}

	public function index()
	{
		$data["title"] = "Content Management";
		$data["PageName"] = ("No Drowse Decolgen");
		$data['edit_title'] = true;
		$data["content"] = "content_management/module/no_drowse_decolgen/page";
		$data['breadcrumb'] = array('No Drowse Decolgen' => '');
		$this->load->view("content_management/template/layout", $data);	
	}

	//controller_config
}
	    