
<?php
defined("BASEPATH") OR exit("No direct script access allowed");

class Site_asc_reference_code extends GS_Controller {

	public function __construct() {
		parent::__construct();
		if($this->session->userdata("sess_email")=="" ) { 
			redirect(base_url("content_management/login"));
		}
	}

	public function index()
	{
		$data["title"] = "Content Management";
		$data["PageName"] = ("ASC Reference Code");
		$data['edit_title'] = true;
		$data["content"] = "content_management/module/asc_reference_code/page";
		$data['breadcrumb'] = array('ASC Reference Code' => '');
		$this->load->view("content_management/template/layout", $data);	
	}

	public function add()
{
	$data["title"] = "Content Management";
	$data["PageName"] = ("Asc Reference Code");
	$data["content"] = "content_management/module/asc_reference_code/add";
	$this->load->view("content_management/template/layout", $data);	
}

public function update()
{
	$data["title"] = "Content Management";
	$data["PageName"] = ("Asc Reference Code");
	$data["content"] = "content_management/module/asc_reference_code/edit";
	$this->load->view("content_management/template/layout", $data);	
}
}
	    