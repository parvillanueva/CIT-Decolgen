
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
		$data["PageName"] = ("Products");
		$data['edit_title'] = true;
		$data["content"] = "content_management/module/no_drowse_decolgen/products/page";
		$data['breadcrumb'] = array('No-Drowse Decolgen' => '');
		$this->load->view("content_management/template/layout", $data);	
	}

	public function add()
{
	$data["title"] = "Content Management";
	$data["PageName"] = ("No Drowse Add");
	$data["content"] = "content_management/module/no_drowse_decolgen/products/add";
	$this->load->view("content_management/template/layout", $data);	
}

public function update()
{
	$data["title"] = "Content Management";
	$data["PageName"] = ("No Drowse Edit");
	$data["content"] = "content_management/module/no_drowse_decolgen/products/edit";
	$this->load->view("content_management/template/layout", $data);	
}
}
	    