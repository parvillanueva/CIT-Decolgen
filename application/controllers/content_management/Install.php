<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Install extends CI_Controller {

	protected $admin_info = array();
	protected $permitted_ad = array();

	public function __construct(){
		parent::__construct();

		//Validates if CMS is installed
		$this->config->load('database');
		if($this->config->item('installed') == 'yes'){
			redirect(base_url('content_management/login'));
		}

		//Sets the default Super Admin credentials
		$this->admin_info = array(
			'admin_name' => 'Administrator',
			'admin_email' => 'phpdev.unilab@gmail.com',
			'admin_username' => 'citadmin',
			'admin_pass' => 'Unilab@123'
		);

		//Permitted AD Accounts to install CMS
		$this->permitted_ad = array(
			'c_jnzapanta@unilab.com.ph',
			'c_prvillanueva@unilab.com.ph',
			'phpdeveloper2@unilab.com.ph',
			'phpdeveloper12@unilab.com.ph',
			'phpdeveloper5@unilab.com.ph',
			'phpdeveloper18@unilab.com.ph',
			'phpdeveloper4@unilab.com.ph',
			'phpdeveloper8@unilab.com.ph'
		);
	}

	public function index()
	{
		if(!$this->dns()){
			$this->load->view('content_management/setup/setup_forbid');
		}else{
			$this->form_validation->run();
			$data['title'] = "Content Management Installer";
			$this->load->view("content_management/template/header_install", $data);
			$this->load->view('content_management/setup/setup');
		}	
	}

	public function success()
	{
		$data['title'] = "Content Management Installer";
		$this->load->view("content_management/template/header_install", $data);
		$this->load->view('content_management/setup/success');
	}

	public function get_theme()
	{
		$result = $this->Global_model->get_list_all("cms_color_preference");
		echo json_encode($result);
	}

	public function submit()
	{

		date_default_timezone_set('Asia/Manila');
		$errors = [];
		$post = $_POST;
		$database_name = str_replace(" ", "_", $post['db_default']);

		//update config/autoload.php
		$autoload = '<?php defined("BASEPATH") OR exit("No direct script access allowed");
		$autoload["packages"] = array();
		$autoload["libraries"] = array("database", "form_validation", "session","standard","minify","user_agent","display","social","send","form_table","themes");
		$autoload["drivers"] = array();
		$autoload["helper"] = array("url","html","file","captcha");
		$autoload["config"] = array();
		$autoload["language"] = array();
		$autoload["model"] = array("content_management/Global_model","content_management/Custom_model");';
		$file_handle1 = fopen('./application/config/autoload.php', 'w'); 
		fwrite($file_handle1, $autoload);
		fclose($file_handle1);


		//update config/database.php
		$value = '<?php defined("BASEPATH") OR exit("No direct script access allowed");

		$config["installed"] = "yes";

		$whitelist = array(
		    "127.0.0.1",
		    "::1"
		);

		if(in_array($_SERVER["REMOTE_ADDR"], $whitelist)){
		    $db_host = "'.$post['db_host'].'";
			$db_username = "'.$post['db_user'].'";
			$db_password = "'.$post['db_pass'].'";
			$db_database = "'.$database_name.'";
		}else{
			$url = "http://" . $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"];
			if (strpos($url,"webqa.unilab.com.ph") !== false) {
				/* WEBQA Credentials */
			    $db_host = preg_replace("(^https?://)", "", base_url() );
				$db_username = "";
				$db_password = "";
				$db_database = "";
			} else {
				/* PRODUCTION Credentials */
			    $db_host = preg_replace("(^https?://)", "", base_url() );
				$db_username = "";
				$db_password = "";
				$db_database = "";
			}
		}

		$active_group = "default";
		$query_builder = TRUE;
		$db["default"] = array(
			"dsn"	=> "",
			"hostname" => $db_host,
			"username" => $db_username,
			"password" => $db_password,
			"database" => $db_database,
			"dbdriver" => "mysqli",
			"dbprefix" => "",
			"pconnect" => FALSE,
			"db_debug" => (ENVIRONMENT !== "production"),
			"cache_on" => FALSE,
			"cachedir" => "",
			"char_set" => "utf8",
			"dbcollat" => "utf8_general_ci",
			"swap_pre" => "",
			"encrypt" => FALSE,
			"compress" => FALSE,
			"stricton" => FALSE,
			"failover" => array(),
			"save_queries" => TRUE
		);';
		$file_handle = fopen('./application/config/database.php', 'w'); 
		fwrite($file_handle, $value);
		fclose($file_handle);



		$input_data = array(
			'username' => $this->admin_info['admin_username'],
			'admin_name' => $this->admin_info['admin_name'],
			'admin_email' => $this->admin_info['admin_email'],
			'admin_pass' => $this->admin_info['admin_pass'],
			'cms_title'	=> $_POST['cms_title'],
			'cms_theme' => $_POST['cms_theme'],
			'ad_authentication' => $_POST['ad_authentication']
		);


		//create database to localhost
		$whitelist = array('127.0.0.1', "::1");

		if(in_array($_SERVER['REMOTE_ADDR'], $whitelist)){

			$conn = new mysqli($post['db_host'], $post['db_user'], $post['db_pass']);

			$sql = "CREATE DATABASE IF NOT EXISTS ".$database_name."";
			if ($conn->query($sql) === TRUE) {
			    echo "Database created successfully";
			    $this->insert_sql_query($post['db_host'],$post['db_user'], $post['db_pass'],$database_name,$input_data);
			} else {
			    echo "Error creating database: " . $conn->error;
			}

		}else{
			//check connection to db
			$conn = new mysqli($post['db_host'], $post['db_user'], $post['db_pass'], $database_name);
			//insert input data to database
			$this->insert_sql_query($post['db_host'],$post['db_user'], $post['db_pass'],$database_name,$input_data);
		}

		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		} 



		//create upload folders
	    if (!file_exists('./uploads')) {
		    mkdir('./uploads', 0777, true);
		}

		echo base_url('content_management/setup/success');
	}


	public function insert_sql_query($db_host, $db_user, $db_pass, $database_name,$input_data){

		$conn = new mysqli($db_host, $db_user, $db_pass, $database_name);

		$sql_data = file_get_contents('./cms/sql/install.sql');
		$sql_data = str_replace("{username}", $input_data['username'], $sql_data);
		$sql_data = str_replace("{email}",$input_data['admin_email'], $sql_data);
		$sql_data = str_replace("{admin_name}",$input_data['admin_name'], $sql_data);
		$sql_data = str_replace("{password}", sha1($input_data['admin_pass']), $sql_data);
		$sql_data = str_replace("{create_date}", date('Y-m-d H:i:s'), $sql_data);
		$sql_data = str_replace("{update_date}", date('Y-m-d H:i:s'), $sql_data);
		$sql_data = str_replace("{cms_title}", $input_data['cms_title'], $sql_data);
		$sql_data = str_replace("{cms_theme}", $input_data['cms_theme'], $sql_data);		
		$sql_data = str_replace("{ad_authentication}", $input_data['ad_authentication'], $sql_data);	

		write_file('./cms/sql/install.sql', $sql_data);

		$sql = file_get_contents('./cms/sql/install.sql');
		$sqls = explode(';', $sql);
		array_pop($sqls);

		foreach($sqls as $k => $sql_insert){
		    $query = @$conn->query($sql_insert);
		    if(!$query)
		       $errors[] = "Table $k : Creation failed ($conn->error)";
		    else
		       $errors[] = "Table $k : Creation done";
		}
		$errors = [];
	}

	public function show_hostname(){
		$proxy = (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) ? $_SERVER['HTTP_X_FORWARDED_FOR'] : false;

		if(!!$proxy){
			$ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
		    echo "Warning: Your cliend is using proxy, may could not determine hostname";
		}else{
		    $ipaddress = $_SERVER['REMOTE_ADDR']; //
		}
		
		$hostname = gethostbyaddr($ipaddress); //Its will return domain + machine-name inside a private network.

	    if($ipaddress  == $hostname){
	     	echo "Impossible to determine hostname for: ", $ipaddress ;
	    }else{
	      	echo "The hostname for ", $ipaddress, " is : ",  $hostname;
	    }

	    echo "<br>";

	    $domain = 'unilab.com.ph';
		if(checkdnsrr($domain, 'A')){
		 	return true;
		}else{
		  	return false;
		}

		echo "<br>";

	    $dns = dns_get_record($domain);

	    if($dns){
	    	echo json_encode($dns);
	    }else{
	    	echo 'NO DNS';
	    }

		die();
	}

	public function dns(){
		$domain = 'unilab.com.ph';
		if(checkdnsrr($domain, 'A')){
		 	return true;
		}else{
		  	return false;
		}
	}

	public function check_permitted(){
		$email = $this->input->post('ad_email');
		$counter = 0;
		foreach($this->permitted_ad as $ad){
			if($ad == $email){
				$counter++;
			}
		}
		echo json_encode($counter);
	}
	
}


