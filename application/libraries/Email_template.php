<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class email_template {

        public function send_email($data)
        {
			$CI =& get_instance();
			$USERNAME = $data['username'];
			$FIRSTNAME = $data['name'];
			$logo = $data['logo'];
			$beforeStr = $data['message'];
			preg_match_all('/{{(\w+)}}/', $beforeStr, $matches);
			$afterStr = $beforeStr;
			foreach ($matches[0] as $index => $var_name) {
			  if (isset(${$matches[1][$index]})) {
				$afterStr = str_replace($var_name, ${$matches[1][$index]}, $afterStr);
			  }
			}
			$table = '<div style="background-color:lightgray; width:700px; height:350px">';
			$table .= '<br/>';
			$table .= '<table border="0" width="90%" height="300px" style="margin: 0 auto; ">';
			$table .= '<tr  bgcolor="'.$data['color'].'">';
			$table .= '<td height="50">';
			$table .= '<table width="100%" >';
			$table .= '<tr>';
			$table .= '<td width="95%">';
			$table .= '<center><p style="color:white">'.strtoupper($data['header']).'</p></center>';
			$table .= '</td>';
			$table .= '<td>';
			$table .= '<img src="'.base_url().$logo.'" style="width:50px;height:50px;" />';
			$table .= '</td>'; 
			$table .= '</tr>';
			$table .= '</table>';
			$table .= '</td>';
			$table .= '</tr>';
			$table .= '<tr bgcolor="#fff">';
			$table .= '<td height="200">';
			$table .= '<p style="margin-left: 20px;">'.nl2br($afterStr).'</p>';
			$table .= '</td>';
			$table .= '</tr>';
			$table .= '<tr bgcolor="'.$data['color'].'">';
			$table .= '<td height="35">';
			$table .= '<p style="margin-left: 10px; color:white; font-size:10px;">'.strtoupper($data['footer']).'</p>';
			$table .= '</td>';
			$table .= '</tr>';
			$table .= '</table>';
			$table .= '</div>';
			$CI->load->library('email'); 
			$CI->config->load('email');
			$email_from = $CI->config->item("default_email");
			$result = $CI->email->from($email_from)->to($data['email_to'])->subject($data['subject'])->message($table)->send();
			return $result;
		}
}