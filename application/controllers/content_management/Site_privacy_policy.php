
<?php
defined("BASEPATH") OR exit("No direct script access allowed");

class Site_privacy_policy extends GS_Controller {

	public function __construct() {
		parent::__construct();
		if($this->session->userdata("sess_email")=="" ) { 
			redirect(base_url("content_management/login"));
		}
	}

	public function index()
	{
		$data["title"] = "Content Management";
		$data["PageName"] = ("Privacy Policy");
		$data['edit_title'] = true;
		$data["content"] = "content_management/module/privacy_policy/page";
		$data['breadcrumb'] = array('Privacy Policy' => '');
		$this->load->view("content_management/template/layout", $data);	
	}

	//controller_config
}
	    