
<?php
defined("BASEPATH") OR exit("No direct script access allowed");

class Site_landing_banner extends GS_Controller {

	public function __construct() {
		parent::__construct();
		if($this->session->userdata("sess_email")=="" ) { 
			redirect(base_url("content_management/login"));
		}
	}

	public function index()
	{
		$data["title"] = "Content Management";
		$data["PageName"] = ("Landing Banner");
		$data['edit_title'] = true;
		$data["content"] = "content_management/module/landing_banner/page";
		$data['breadcrumb'] = array('Landing Banner' => '');
		$this->load->view("content_management/template/layout", $data);	
	}

// 	public function add()
// {
// 	$data["title"] = "Content Management";
// 	$data["PageName"] = ("Landing Banner");
// 	$data["content"] = "content_management/module/landing_banner/add";
// 	$this->load->view("content_management/template/layout", $data);	
// }

// public function update()
// {
// 	$data["title"] = "Content Management";
// 	$data["PageName"] = ("Landing Banner");
// 	$data["content"] = "content_management/module/landing_banner/edit";
// 	$this->load->view("content_management/template/layout", $data);	
// }
}
	    