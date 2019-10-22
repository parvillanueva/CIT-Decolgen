
<?php
defined("BASEPATH") OR exit("No direct script access allowed");

class Site_email_template extends GS_Controller {

	public function __construct() {
		parent::__construct();
		if($this->session->userdata("sess_email")=="" ) { 
			redirect(base_url("content_management/login"));
		}
	}

	public function index()
	{
		$data["listData"] = $this->Custom_model->select('cms_email_template')->result();
		$data["title"] = "Content Management";
		$data["PageName"] = ("EMAIL TEMPLATE");
		$data['edit_title'] = true;
		$data["content"] = "content_management/email_template/list";
		$data['breadcrumb'] = array('EMAIL TEMPLATE' => '');
		$this->load->view("content_management/template/layout", $data);	
	}
	
	public function add(){
		
		$data["title"] = "Content Management";
		$data["PageName"] = ("EMAIL TEMPLATE");
		$data['edit_title'] = true;
		$data["content"] = "content_management/email_template/add";
		$data['breadcrumb'] = array('EMAIL TEMPLATE' => '');
		$this->load->view("content_management/template/layout", $data);	
	}
	
	public function add_save(){
		date_default_timezone_set('Asia/Manila'); 
		$ArrySet = array(
			'name' => trim($_POST['name']),
			'message' => trim($_POST['message']),
			'logo' => trim($_POST['logo']),
			'headers' => trim($_POST['header']),
			'footer' => trim($_POST['footer']),
			'color' => trim($_POST['color']),
			'subject' => trim($_POST['subject']),
			'create_date' => date('Y-m-d H:i:s'),
			'status' => trim($_POST['status']),
		);
		$table = 'cms_email_template';
		$SqlResult = $this->Custom_model->add_save($table, $ArrySet);
		if($SqlResult != ''){
			$ArryReturn = array('response' => 'success');
			echo json_encode($ArryReturn);
		}
	}
	
	public function edit(){
		$ArryWhere = array(
			'id' => $_GET['id']
		);
		$data["title"] = "Content Management";
		$data["EditData"] = $this->Custom_model->select('cms_email_template')->where($ArryWhere)->result(); 
		$data["PageName"] = ("EMAIL TEMPLATE");
		$data['edit_title'] = true;
		$data["content"] = "content_management/email_template/edit";
		$data['breadcrumb'] = array('EMAIL TEMPLATE' => '');
		$this->load->view("content_management/template/layout", $data);	
	}
	
	public function edit_save(){
		date_default_timezone_set('Asia/Manila'); 
		$ArrySet = array(
			'name' => trim($_POST['name']),
			'message' => trim($_POST['message']),
			'status' => trim($_POST['status']),
			'headers' => trim($_POST['header']),
			'footer' => trim($_POST['footer']),
			'logo' => trim($_POST['logo']),
			'color' => trim($_POST['color']),
			'subject' => trim($_POST['subject']),
			'update_date' => date('Y-m-d H:i:s'),
		);
		$ArryWhere = array(
			'id' => trim($_POST['email_id'])
		);
		$table = 'cms_email_template';
		$SqlResult = $this->Custom_model->edit_save($table, $ArrySet, $ArryWhere);
		if($SqlResult != ''){
			$ArryReturn = array('response' => 'success');
			echo json_encode($ArryReturn);
		}
	}
	
	public function email_send(){
		$ArryWhere = array(
			'id' => $_POST['id']
		);
		$Sql_Result = $this->Custom_model->select('cms_email_template')->where($ArryWhere)->result();
		$Arry_data = array(
			'header' => $Sql_Result[0]->headers,
			'footer' => $Sql_Result[0]->footer,
			'message' => $Sql_Result[0]->message,
			'logo' => $Sql_Result[0]->logo,
			'name' => $Sql_Result[0]->name,
			'subject' => $Sql_Result[0]->subject,
			'color' => $Sql_Result[0]->color,
			'email_to' => 'dominicsobrevilla@gmail.com',
			'username' => 'username'
		);
		$Sql_send = $this->email_template->send_email($Arry_data); 
		if($Sql_send != ''){
			$ReturnVal = array('response'=>'success');
			echo json_encode($ReturnVal);
		}
	}

}
	    