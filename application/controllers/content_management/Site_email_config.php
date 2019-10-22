
<?php
defined("BASEPATH") OR exit("No direct script access allowed");

class Site_email_config extends GS_Controller {

	public function __construct() {
		parent::__construct();
		if($this->session->userdata("sess_email")=="" ) { 
			redirect(base_url("content_management/login"));
		}
	}

	public function index()
	{
		$data["title"] = "Content Management";
		$data["PageName"] = ("Email Configuration");
		$data['edit_title'] = true;
		$data["content"] = "content_management/email_template/configuration/page";
		$data["breadcrumb"] = array('Email Configuration' => '');
		$this->load->view("content_management/template/layout", $data);	
	}

	//controller_config
}
	    