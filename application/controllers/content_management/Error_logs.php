
<?php
defined("BASEPATH") OR exit("No direct script access allowed");

class Error_logs extends GS_Controller {

	public function __construct() {
		parent::__construct();
		if($this->session->userdata("sess_email")=="" ) { 
			redirect(base_url("content_management/login"));
		}
		$this->load->helper('directory');
		$this->load->config('standard');
	}

	public function index()
	{
		$data["title"] = "Content Management";
		$data["PageName"] = ("Error Logs");
		$data['edit_title'] = true;
		$data["content"] = "content_management/error_logs/page";
		$data['breadcrumb'] = array('Error Logs' => '');
		$data["js"] = array('cms/js/cms/error_logs/page.js');
		$this->load->view("content_management/template/layout", $data);	
	}

	public function get_error_log_files(){
		$map = directory_map('./application/logs'); //logs directory
		$map = array_splice($map, 1); //removes the index.html from array
		$multi_map = array();

		foreach($map as $file){
			$date = str_replace('log-', '', $file);
			$date = str_replace('.php', '', $date);
			$date_id = $date;
			$date = date_format(date_create($date), 'F d, Y');
			$multi_map[] = array(
				'filename' => $file,
				'date' => $date,
				'date_id' => $date_id,
				'lines' => $this->get_lines('./application/logs/'.$file)
			);
		}

		echo json_encode(array_reverse($multi_map));
	}

	public function get_lines($file){
		$a = rtrim(file_get_contents($file), ",");
		$b = json_decode('['.$a.']');

		return count($b);
	}

	public function get_array_logs($file){
		$a = rtrim(file_get_contents($file), ",");
		$b = json_decode('['.$a.']', true);

		return array_reverse($b);
	}

	public function log($date){
		$date = str_replace('#', '', $date);
		if($this->log_exists($date) == 0){
			$this->session->set_flashdata('no_log', $this->standard->dialog_return("no_file"));
			redirect(base_url('content_management/error_logs'));
		}

		$data["title"] = "Content Management";
		$data["PageName"] = ("Error Logs");
		$data['edit_title'] = true;
		$data["content"] = "content_management/error_logs/error_view";
		$data['breadcrumb'] = array(
					'Error Logs' => base_url('content_management/error_logs'),
					'log-'.$date.'.php' => '');
		$data["js"] = array('cms/js/cms/error_logs/error_view.js');
		$this->load->view("content_management/template/layout", $data);
	}

	public function error_data(){
		$date = $this->input->post('date_id');
		$date = './application/logs/log-'.$date.'.php';
		echo json_encode($this->get_array_logs($date));
	}

	public function log_exists($date){
		$map = directory_map('./application/logs'); //logs directory
		$map = array_splice($map, 1); //removes the index.html from array
		$date = 'log-'.$date.'.php';
		$counter = 0;

		foreach($map as $file){
			if($file == $date){
				$counter++;
			}
		}

		return $counter;
	}
}
	    