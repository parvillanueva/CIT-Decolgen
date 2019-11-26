
<?php
defined("BASEPATH") OR exit("No direct script access allowed");

class Site_decolgen_detailer extends GS_Controller {

	public function __construct() {
		parent::__construct();
		if($this->session->userdata("sess_email")=="" ) { 
			redirect(base_url("content_management/login"));
		}
	}

	public function index()
	{
		$data["title"] = "Content Management";
		$data["PageName"] = ("Decolgen Detailer");
		$data['edit_title'] = true;
		$data["content"] = "content_management/module/decolgen_detailer/page";
		$data['breadcrumb'] = array('Decolgen Detailer' => '');
		$this->load->view("content_management/template/layout", $data);	
	}

	public function add()
{
	$data["title"] = "Content Management";
	$data["PageName"] = ("Decolgen Detailer");
	$data["content"] = "content_management/module/decolgen_detailer/add";
	$this->load->view("content_management/template/layout", $data);	
}

public function update()
{
	$data["title"] = "Content Management";
	$data["PageName"] = ("Decolgen Detailer");
	$data["content"] = "content_management/module/decolgen_detailer/edit";
	$this->load->view("content_management/template/layout", $data);	
}
}
	    