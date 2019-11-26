
<?php
defined("BASEPATH") OR exit("No direct script access allowed");

class Site_faqs_details extends GS_Controller {

	public function __construct() {
		parent::__construct();
		if($this->session->userdata("sess_email")=="" ) { 
			redirect(base_url("content_management/login"));
		}
	}

	public function index()
	{
		$data["title"] = "Content Management";
		$data["PageName"] = ("details");
		$data['edit_title'] = true;
		$data["content"] = "content_management/module/faqs/details/page";
		$data['breadcrumb'] = array('detailss' => '');
		$this->load->view("content_management/template/layout", $data);	
	}

	//controller_config
}
	    