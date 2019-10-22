<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

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
		$data['PageName'] = "User Maintenance";
		$data['content'] = "content_management/user/users";
		$data["breadcrumb"] = array('Users List' => '');
		$data["js"] = array('cms/js/cms/user/list.js');
		$this->load->view('content_management/template/layout', $data);	
	}

	public function get_list()
	{
		$result = $this->Global_model->get_users_model("cms_users");
		echo json_encode($result);
	}

	public function edit_users()
	{
		$data['title'] = "Content Management";
		$data['PageName'] = "Edit  User";
		$data['content'] = "content_management/user/edit";
		$data["breadcrumb"] = array('Users List' => base_url('content_management/users'),'Edit User' => '');
		$data["js"] = array('cms/js/cms/user/edit.js');
		$this->load->view('content_management/template/layout', $data);

	}

	public function add_users()
	{
		$data['title'] = "Content Management";
		$data['PageName'] = "Add User";
		$data['content'] = "content_management/user/add";
		$data["breadcrumb"] = array('Users List' => base_url('content_management/users'),'Add User' => '');
		$data["js"] = array('cms/js/cms/user/add.js');
		$this->load->view('content_management/template/layout', $data);
	}
	
}