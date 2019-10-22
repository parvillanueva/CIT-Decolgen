<?php defined("BASEPATH") OR exit("No direct script access allowed");
		$autoload["packages"] = array();
		$autoload["libraries"] = array("form_validation", "session","standard","minify","user_agent","load_form");
		$autoload["drivers"] = array();
		$autoload["helper"] = array("url","html","file");
		$autoload["config"] = array();
		$autoload["language"] = array();
		$autoload["model"] = array("content_management/Global_model","content_management/Custom_model");