
<?php
defined("BASEPATH") OR exit("No direct script access allowed");

class Site_decolgen_forte_info extends GS_Controller {

	public function __construct() {
		parent::__construct();
		if($this->session->userdata("sess_email")=="" ) { 
			redirect(base_url("content_management/login"));
		}
	}

	public function index()
	{
		$data["title"] = "Content Management";
		$data["PageName"] = ("Decolgen Forte Info");
		$data['edit_title'] = true;
		$data["content"] = "content_management/module/decolgen_forte_info/products/page";
		$data['breadcrumb'] = array('Decolgen Forte Info' => '');
		$this->load->view("content_management/template/layout", $data);	
	}

	public function add()
{
	$data["title"] = "Content Management";
	$data["PageName"] = ("Info Create");
	$data['breadcrumb'] = array('Info' => '', "Create" => "");
	//$data["breadcrumb"] = array('Try New' => base_url('content_management/Site_try_now/add'),'Add Try Now' => '','TEST' => '','Another one' => '');
	$data["content"] = "content_management/module/decolgen_forte_info/products/add";
	$this->load->view("content_management/template/layout", $data);	
}

public function update()
{
	$data["title"] = "Content Management";
	$data["PageName"] = ("Info Update");
	$data['breadcrumb'] = array('Info' => '', "Update" => "");
	$data["content"] = "content_management/module/decolgen_forte_info/products/edit";
	$this->load->view("content_management/template/layout", $data);	
}
}
	    