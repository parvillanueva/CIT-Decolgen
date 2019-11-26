
<?php
defined("BASEPATH") OR exit("No direct script access allowed");

class Site_no_drowse_details extends GS_Controller {

	public function __construct() {
		parent::__construct();
		if($this->session->userdata("sess_email")=="" ) { 
			redirect(base_url("content_management/login"));
		}
	}

	public function index()
	{
		$data["title"] = "Content Management";
		$data["PageName"] = ("Details");
		$data['edit_title'] = true;
		$data["content"] = "content_management/module/no_drowse_decolgen/details/page";
		$data['breadcrumb'] = array('Details' => '');
		$this->load->view("content_management/template/layout", $data);	
	}

	//controller_config
}
	    