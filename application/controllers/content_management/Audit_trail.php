<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Audit_trail extends CI_Controller {

	public function __construct() 
	{
		parent::__construct();
		if($this->session->userdata('sess_email')=='' ) { 
			redirect(base_url("content_management/login"));
		}
	}

	public function index()
	{
		$data['title'] = "Content Management";
		$data['PageName'] = "Audit Trail";
		$data['content'] = "content_management/audit_trail/list";
		$data['breadcrumb'] = array('Audit Trail' => '');
		$data["js"] = array('cms/js/cms/audit_trail/list.js');
		$this->load->view('content_management/template/layout', $data);
	}

}
