<?php defined("BASEPATH") OR exit("No direct script access allowed");
        $route["default_controller"] = "home";
        $route["content_management"] = "content_management/home";
        $route["404_override"] = "";
        $route['(asc_ref_code|privacy_policy)'] = "$1";
		$route['(:any)'] = "home";
        $route["translate_uri_dashes"] = FALSE;
        