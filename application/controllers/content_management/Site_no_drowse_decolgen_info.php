
<?php
defined("BASEPATH") OR exit("No direct script access allowed");

class Site_no_drowse_decolgen_info extends GS_Controller {

	public function __construct() {
		parent::__construct();
		if($this->session->userdata("sess_email")=="" ) { 
			redirect(base_url("content_management/login"));
		}
	}

	public function index()
	{
		$data["title"] = "Content Management";
		$data["PageName"] = ("Info");
		$data['edit_title'] = true;
		$data["content"] = "content_management/module/no_drowse_decolgen/page";
		$data['breadcrumb'] = array('Info' => '');
		$this->load->view("content_management/template/layout", $data);	
	}

	public function add()
{
	$data["title"] = "Content Management";
	$data["PageName"] = ("Info Create");
	$data['breadcrumb'] = array('Info' => '', "Create" => "");
	$data["content"] = "content_management/module/no_drowse_decolgen/add";
	$this->load->view("content_management/template/layout", $data);	
}

public function update()
{
	$data["title"] = "Content Management";
	$data["PageName"] = ("Info Update");
	$data['breadcrumb'] = array('Info' => '', "Update" => "");
	$data["content"] = "content_management/module/no_drowse_decolgen/edit";
	$this->load->view("content_management/template/layout", $data);	
}
}
	    