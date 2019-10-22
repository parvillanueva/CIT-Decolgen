<div class="box">
	<?php
		$data['buttons'] = ['update','cancel'];
		$this->load->view("content_management/template/buttons",$data);
	?>
	<div class="box-body">
		<?php
			$user_id = $this->uri->segment(4);
            $top_details = $this->load->details("cms_users", $user_id);

            $replace = array(
              '&amp;' => '&',
              '&lt;' => '<',
              '&gt;' => '>',
              '&quot;' => '"',
              '&#39;' => "'",
              '&#x2F;' => '/',
              '&#x60;' => '`',
              '&#x3D;' => '='
            );
//for decoding html entities
            
			$inputs = [
                'name',
                'username',
                'email_address',
                'role',
                'status'
            ];

            $values = [
                $this->standard->strReplaceAssoc($top_details[0]->name),
                $top_details[0]->username,
                $top_details[0]->email,
                $top_details[0]->role,
                $top_details[0]->status
            ];

            $role_id = $top_details[0]->role;

            $top_content = $this->standard->inputs($inputs, $values);
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

            $values = [
                $top_details[0]->notif_signup,
                $top_details[0]->notif_contactus,
                $top_details[0]->notif_login
            ];

            $bottom_content = $this->standard->inputs($inputs, $values);
		?>
	</div>
</div>

<script type="text/javascript">

    var base_url = '<?=base_url();?>';
	var content_management = '<?=base_url("content_management");?>';
    var global_controller = '<?=base_url("content_management/global_controller");?>';
    var confirm_update = '<?=$this->standard->confirm("confirm_update");?>';
    var update_success = '<?=$this->standard->dialog("update_success");?>';
    var confirm_cancel = '<?=$this->standard->confirm("confirm_cancel");?>';

	var id = '<?=$this->uri->segment(4);?>';
	var role_id = '<?=$role_id;?>';
	var previous_email = '<?=$top_details[0]->email;?>';
	var top_content = '<?=$top_content;?>';
	var bottom_content = '<?=$bottom_content;?>';
    
</script>