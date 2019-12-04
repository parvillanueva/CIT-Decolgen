
<?php
defined("BASEPATH") OR exit("No direct script access allowed");

class Site_faqs_questions extends GS_Controller {

	public function __construct() {
		parent::__construct();
		if($this->session->userdata("sess_email")=="" ) { 
			redirect(base_url("content_management/login"));
		}
	}

	public function index()
	{
		$data["title"] = "Content Management";
		$data["PageName"] = ("Faqs");
		$data['edit_title'] = true;
		$data["content"] = "content_management/module/faqs/questions/page";
		$data['breadcrumb'] = array('Faqs' => '');
		$this->load->view("content_management/template/layout", $data);	
	}

	public function add()
{
	$data["title"] = "Content Management";
	$data["PageName"] = ("Faqs");
	$data['breadcrumb'] = array('Faqs' => '', "Create" => "");
	$data["content"] = "content_management/module/faqs/questions/add";
	$this->load->view("content_management/template/layout", $data);	
}

public function update()
{
	$data["title"] = "Content Management";
	$data["PageName"] = ("Faqs");
	$data['breadcrumb'] = array('Faqs' => '', "Update" => "");
	$data["content"] = "content_management/module/faqs/questions/edit";
	$this->load->view("content_management/template/layout", $data);	
}
}
	    