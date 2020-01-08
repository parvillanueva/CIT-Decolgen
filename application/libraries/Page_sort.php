<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class page_sort{
	public function page_number(){
		$pageOption = ['10', '20', '30', '40', '50'];
			$optionSet = '';
			$html = '';
		foreach($pageOption as $pageOptionLoop){
			$optionSet .= "<option value='".$pageOptionLoop."'>".$pageOptionLoop."</option>";
		}
		$html .= '<div class="form-group pull-right">';
		$html .= '<label>Show</label>'; 
		$html .= '<select class="record-entries">';
		$html .= $optionSet;
		$html .= '<option value="9999">ALL</option>';
		$html .= '</select>';
		$html .= '<label>Entries</label>';
		$html .= '</div>';
		return $html;
	 }
	 public function count_records(){
	 		$html = '';
		$html .= '<div class="form-group pull-left">';
		$html .= '<label class=""> Display Count:&nbsp;</label>';
		$html .= '<label class="num-record">&nbsp;</label>'; 
		$html .= '&nbsp;<label><div class="total-record"></div></label>';
		$html .= '</div>';
		return $html;
	 }
}