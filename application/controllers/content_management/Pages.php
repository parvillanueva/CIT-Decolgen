<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

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
		$data['PageName'] = "Page Maintenance";
		$data['content'] = "content_management/pages/pages";
		$data["breadcrumb"] = array('Page List' => '');
		$data["js"] = array('cms/js/cms/pages/pages.js');
		$this->load->view('content_management/template/layout', $data);	
	}

	public function edit_pages()
	{
		$data['title'] = "Content Management";
		$data['PageName'] = "Edit Page";
		$data['content'] = "content_management/pages/edit";
		$data["breadcrumb"] = array('Page List' => base_url('content_management/pages/edit'),'Edit Page' => '');
		$data["js"] = array('cms/js/cms/pages/edit.js');
		$this->load->view('content_management/template/layout', $data);

	}

	public function write_template(){
		$folder = $this->input->get('site');
		$package = $this->input->get('param');

		$template = file_get_contents('./cms/site_templates/'.$package.'.php');

		$file = fopen('./application/views/site/'.$folder.'/default.php', 'w'); 
        fwrite($file, $template);
        fclose($file);
	}

	public function test_mail(){
        $data = array(
            "from"      => "phpdeveloper12@unilab.com.ph",
            "from_name" => "PHPDEVELOPER12",
            "to"        => "phpdeveloper5@unilab.com.ph",
            "subject"   => "SAMPLE SUBJECT",
            "content"   => "SAMPLE BODY",
        );
        $result = $this->load->send_mail($data);
        echo $result;
    }
}