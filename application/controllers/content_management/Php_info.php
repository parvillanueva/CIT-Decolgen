
<?php
defined("BASEPATH") OR exit("No direct script access allowed");

class Php_info extends GS_Controller {

	public function __construct() {
		parent::__construct();
		if($this->session->userdata("sess_email")=="" ) { 
			redirect(base_url("content_management/login"));
		}
	}

	public function index()
	{
		$data["title"] = "Content Management";
		$data["PageName"] = ("PHP Info");
		$data['edit_title'] = true;
		$data["content"] = "content_management/php_info/page";
		$data['breadcrumb'] = array('PHP Information' => '');
		//$data["js"] = array('cms/js/cms/php_info/page.js');
		$this->load->view("content_management/template/layout", $data);	
	}

	public function info()
	{
		phpinfo();
	}
}
	    