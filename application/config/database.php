<?php defined("BASEPATH") OR exit("No direct script access allowed");

		$config["installed"] = "yes";

		$root = $_SERVER['HTTP_HOST'];
		switch ($root) {
			case 'decolgen.com.ph':
				$db_host = "db-ulch-rds-01.ckzpvfwtpnna.ap-southeast-1.rds.amazonaws.com:3306";
				$db_username = "decol_user";
				$db_password = "Qkvq92*6";
				$db_database = "decolgencomph_2020";
				break;

			case 'decolgen.webqa.unilab.com.ph':
				$db_host = 'app-ulch-phg-server-02.cklr8bwd3nrd.ap-southeast-1.rds.amazonaws.com:3306';
				$db_username = 'decol_user';
				$db_password = '8Vlu@d21';
				$db_database = 'decolgenqa_db';
				break;
			
			default:
				$db_host = "172.29.70.125";
				$db_username = "phpdevsite";
				$db_password = "unilab123";
				$db_database = "decolgen";
				break;
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
		);