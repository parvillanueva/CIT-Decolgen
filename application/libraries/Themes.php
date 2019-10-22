<?php

	class Themes{

		function menu_top(){
			
			$html= '<div class="title-header">
					    <h4>'.$this->site_title().'</h4>
					</div>
					<nav class="navbar navbar-default">
					    <div class="container-fluid">

					        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					            <ul class="nav navbar-nav">
					                '.$this->site_menu().'
					            </ul>
					        </div>
					    </div>
					</nav>';

			if($this->menu_position() == 'menu_top'){
				echo $html;
			}
			
		}

		function menu_left(){
			$html= '<nav id="sidebar-left">
					    <div class="sidebar-header">
					        <h3>'.$this->site_title().'</h3>
					    </div>

					    <ul class="list-unstyled components">
					        '.$this->site_menu().'
					    </ul>
					</nav>';
			
			if($this->menu_position() == 'menu_left'){
				echo $html;
			}
		}

		function menu_right(){
			$html= '<nav id="sidebar-right">
					    <div class="sidebar-header">
					        <h3>'.$this->site_title().'</h3>
					    </div>

					    <ul class="list-unstyled components">
					        '.$this->site_menu().'
					    </ul>
					</nav>';
			
			if($this->menu_position() == 'menu_right'){
				echo $html;
			}
		}

		function site_title($string = null){
			$CI =& get_instance();
			$result = $CI->Global_model->get_by_id("site_information",1);
			if($string != null){
				return $string . " | " . $result[0]->title;
			} else {
				return $result[0]->title;
			}	
		}

		function site_menu(){
			$CI =& get_instance();
			return $CI->load->site_menu();
		}

		function menu_position(){
			$CI =& get_instance();
			$CI->config->load('themes');
			return $CI->config->item('menu_position');
		}
	}