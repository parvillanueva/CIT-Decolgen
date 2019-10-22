<div class="box">
	<?php
		$data['buttons'] = ['save','cancel'];
		$this->load->view("content_management/template/buttons",$data);
	?>
	<div class="box-body">
		<?php
			$inputs = [
                'name',
                'username',
                'email_address',
                'password_validated',
                'role',
                'status'
            ];

            $top_content = $this->standard->inputs($inputs);
		?>

		<br>
        <h2><strong>Notification</strong></h2>
        <hr>

        <?php
			$inputs = [
                'dd_user_sign_up',
                'dd_contact_us',
                'dd_notif_login'
            ];

            $bottom_content = $this->standard->inputs($inputs);
		?>
	</div>
</div>

<script type="text/javascript">

    var base_url = '<?=base_url();?>';
	var content_management = '<?=base_url("content_management");?>';
    var global_controller = '<?=base_url("content_management/global_controller");?>';
    var confirm_add = '<?=$this->standard->confirm("confirm_add");?>';
    var add_success = '<?=$this->standard->dialog("add_success");?>';
    var confirm_cancel = '<?=$this->standard->confirm("confirm_cancel");?>';

    var top_content = '<?=$top_content;?>';
	var bottom_content = '<?=$bottom_content;?>';
    
</script>