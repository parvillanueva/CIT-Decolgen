
<?php
defined("BASEPATH") OR exit("No direct script access allowed");

class Site_try_now_products extends GS_Controller {

	public function __construct() {
		parent::__construct();
		if($this->session->userdata("sess_email")=="" ) { 
			redirect(base_url("content_management/login"));
		}
	}

	public function index()
	{
		$data["title"] = "Content Management";
		$data["PageName"] = ("Try Now Products");
		$data['edit_title'] = true;
		$data["content"] = "content_management/module/try_now/products/page";
		$data['breadcrumb'] = array('Try Now Products' => '');
		$this->load->view("content_management/template/layout", $data);	
	}

	public function add()
{
	$data["title"] = "Content Management";
	$data["PageName"] = ("Try Now Products");
	//$data["breadcrumb"] = array('Try New' => base_url('content_management/Site_try_now/add'),'Add Try Now' => '','TEST' => '','Another one' => '');
	$data["content"] = "content_management/module/try_now/products/add";
	$this->load->view("content_management/template/layout", $data);	
}

public function update()
{
	$data["title"] = "Content Management";
	$data["PageName"] = ("Try Now Products");
	$data["content"] = "content_management/module/try_now/products/edit";
	$this->load->view("content_management/template/layout", $data);	
}
}
	    