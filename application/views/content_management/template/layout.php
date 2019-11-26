<!-- HTML Header -->
<?php $this->load->view("content_management/template/header"); ?>

<!-- Nav Menu-->
<?php $this->load->view("content_management/template/modals"); ?>

<!-- side Menu-->
<?php $this->load->view("content_management/template/sidemenu"); ?>

<div class="content-wrapper">
    <section class="content-header">
    	<?php
	    	$pref = $this->load->active_list('cms_preference', 'cms_edit_label = 1');
	    	$edit_icon = '';
	    	if(!empty($pref)){
				$edit_icon = '<i id="edit_title" class="glyphicon glyphicon-pencil edit-title"></i>';
			}
	    	// load Breadcrumbs
	    	$breadcrumb_html ='';
	    	$output='';

	    	if(isset($breadcrumb)){
	    		$breadcrumb_html .= '<ul id="breadcrumb">';
	    		$breadcrumb_html .=  '<li><a href="'.base_url("content_management").'"><span class="glyphicon glyphicon-home"></span></a></li>';
			         foreach ($breadcrumb as $key => $value) {
			         	if($value != ''){
			         			$breadcrumb_html .= '<li><a href='.$value.'>'.$key.'</a></li>';
			         	}else{
							/*if(isset($edit_title)){
						    	if($edit_title == true){
						 			$breadcrumb_html .= '<li><a href="#" id="edit_breadcrumb_title">'.$key.$edit_icon.'</a></li>';
						 			$output .= '<div class="package-title-containter">';
									$output .= '	<form id="package_form">';
									$output .= "		<input type='text' id='edit_package_title' class='form-control edit-package-title req'  value='".$PageName."'>
														<input type='text' class='form-control hidden old_title' value='".$PageName."''>
														<input type='text' class='form-control hidden module_path'  value='dirname(__FILE__);'/>
							   						<input type='text' class='form-control hidden reload_path'  value= 'http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]'/><span id='title_result'></span>
													<button type='button' id='edit_title_cancel' class='btn btn-default edit-title-cancel'>Cancel</button>
														<input class='btn btn-success btn-save-package-title' id='btn_save_package_title'  type='submit'  value='Save'/>";
									$output .= ' 	</form>';
									$output .= '</div>';

						 		}
			         		}else{*/
			         				$breadcrumb_html .= '<li><a href="#">'.ucwords($key).'</a></li>';
						  	/*}*/
			         	}
			         }
			    $breadcrumb_html .= '</ul>';
	    	}else{
	    		$breadcrumb_html .= '<h1>'.$PageName.'</h1>';
	    	}
	    	echo $breadcrumb_html;
	    	echo $output;
		?>
	</section>
    <section class="content">
    	<?php 
			$data['pageOption'] = ['10', '20', '30', '40', '50'];
			$this->load->view($content, $data); 
		?>
    </section>
</div>


<!-- Toast -->
<?php if($this->session->flashdata('toast_message')) : ?>
	<div class="toast">
		<i class="fa fa-times-circle close-toast"></i>
		<p><?=$this->session->flashdata('toast_message');?></p>
	</div>
<?php endif; ?>

<!-- footer Menu-->
<?php $this->load->view("content_management/template/footer"); ?>

<?php 
    $url =  "http://{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";
    $escaped_url = htmlspecialchars( $url, ENT_QUOTES, 'UTF-8' );

    $urls = explode('/', $escaped_url);
    array_pop($urls);
?>

<script type="text/javascript">

	var menu_session_role = "<?= $this->session->userdata('sess_role');?>";
	var confirm_edit = '<?=$this->standard->confirm("confirm_edit");?>';
	var content_management = '<?=base_url("content_management");?>';

</script>

<script type="text/javascript" src="<?=base_url();?>cms/js/cms/template/layout.js"></script>

<style type="text/css">

	.edit-title {
		font-size: 10px;
	    position: relative;
	    cursor:pointer;
	    top: -10px;
	    left: 5px;
	}

	.edit-package-title {
		width:50%;
		display: inline-block;
		vertical-align: top;
		margin-right: 5px;
	}

	.error_title_msg {
	    border: 1px solid #f00;
	}

	.success_title_msg {
		border: 1px solid #00a65a;
	}

	.box-header.with-border {
	    margin-top: 0px;
	}

</style>