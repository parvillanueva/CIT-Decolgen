
<?php
defined("BASEPATH") OR exit("No direct script access allowed");

class Site_themes extends GS_Controller {

	public function __construct() {
		parent::__construct();
		if($this->session->userdata("sess_email")=="" ) { 
			redirect(base_url("content_management/login"));
		}
	}

	public function index()
	{
		$data["title"] = "Content Management";
		$data["PageName"] = ("Themes");
		$data['edit_title'] = true;
		$data["content"] = "content_management/themes/page";
		$data['breadcrumb'] = array('Themes' => '');
		$data["js"] = array('cms/js/cms/themes/page.js');
		$this->load->view("content_management/template/layout", $data);	
	}

	public function set_menu_position(){
		$position = $this->load->details('site_themes', 1)[0]->navigation_position;

		$themes_config = '';
		$themes_config .= '<?php defined("BASEPATH") OR exit("No direct script access allowed");'."\n\n";
		$themes_config .= '$config["menu_position"] = "menu_'.$position.'";';

		$file_handle = fopen('./application/config/themes.php', 'w'); 
		fwrite($file_handle, $themes_config);
		fclose($file_handle);
	}

}
	    