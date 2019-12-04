
<?php
defined("BASEPATH") OR exit("No direct script access allowed");

class Site_header_menu extends GS_Controller {

	public function __construct() {
		parent::__construct();
		if($this->session->userdata("sess_email")=="" ) { 
			redirect(base_url("content_management/login"));
		}
	}

	public function index()
	{
		$data["title"] = "Content Management";
		$data["PageName"] = ("Section menu");
		$data['edit_title'] = true;
		$data["content"] = "content_management/module/header_menu/page";
		$data['breadcrumb'] = array('Section menu' => '');
		$this->load->view("content_management/template/layout", $data);	
	}

	public function add()
{
	$data["title"] = "Content Management";
	$data["PageName"] = ("Section Menu");
	$data['breadcrumb'] = array('Section menu' => '', "Create" => "");
	$data["content"] = "content_management/module/header_menu/add";
	$this->load->view("content_management/template/layout", $data);	
}

public function update()
{
	$data["title"] = "Content Management";
	$data["PageName"] = ("Section Menu");
	$data['breadcrumb'] = array('Section menu' => '', "Update" => "");
	$data["content"] = "content_management/module/header_menu/edit";
	$this->load->view("content_management/template/layout", $data);	
}
}
	    