
<?php
defined("BASEPATH") OR exit("No direct script access allowed");

class Site_no_drowse_products extends GS_Controller {

	public function __construct() {
		parent::__construct();
		if($this->session->userdata("sess_email")=="" ) { 
			redirect(base_url("content_management/login"));
		}
	}

	public function index()
	{
		$data["title"] = "Content Management";
		$data["PageName"] = ("Try Decolgen Now");
		$data['edit_title'] = true;
		$data["content"] = "content_management/module/no_drowse_decolgen/products/page";
		$data['breadcrumb'] = array('Try Decolgen Now' => '');
		$this->load->view("content_management/template/layout", $data);	
	}

	public function add()
{
	$data["title"] = "Content Management";
	$data["PageName"] = ("Try Decolgen Now Create");
	$data['breadcrumb'] = array('Try Decolgen Now' => '', "Create" => "");
	$data["content"] = "content_management/module/no_drowse_decolgen/products/add";
	$this->load->view("content_management/template/layout", $data);	
}

public function update()
{
	$data["title"] = "Content Management";
	$data["PageName"] = ("Try Decolgen Now Update");
	$data['breadcrumb'] = array('Try Decolgen Now' => '', "Update" => "");
	$data["content"] = "content_management/module/no_drowse_decolgen/products/edit";
	$this->load->view("content_management/template/layout", $data);	
}
}
	    