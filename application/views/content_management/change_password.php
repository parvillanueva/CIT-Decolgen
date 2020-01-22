<body>

<div class="box-body">
	<div class="box "style="margin-top: 5em !important;">
		<?php
			$data['buttons'] = ['update'];
			$this->load->view("content_management/template/buttons",$data);
		?>

		<div class="form-horizontal col-md-12" style="margin-top: 2em;">
			<div class="form-group">
				<label class="control-label col-sm-2">Old Password <span style="color: red;">*</span></label>
				<div class="col-sm-5">
		     		<input type="password" class="form-control old-password required">
		     		<div class="old-pw-err"></div>
		   		</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2">New Password <span style="color: red;">*</span></label>
				<div class="col-sm-5">
		     		<input id="password" type="password" class="form-control new-password required">
		     		<div class="new-pw-err"></div>
		   		</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2">Confirm Password <span style="color: red;">*</span></label>
				<div class="col-sm-5">
			     	<input type="password" class="form-control re-password required">
			     	<div class="re-pw-err"></div>
			   	</div>
			</div>
			<label class="control-label col-sm-2"></label>
            <div class="col-sm-10">
                <div id="password_chcklist">
                    <p>Password Must:</p>
                    <div class="password_chcklist_contanier">
                        <input type="checkbox"  id="min_ten_chckbx_p" class="min_ten_chckbx password_checkbox required_input hidden"> 
                       <i class="fas fa-check-square min_ten_chck" ></i> <p class="min_ten_chckbx_p"> Minimum of 10 characters</p>
                    </div>
                    <div class="password_chcklist_contanier">
                        <input type="checkbox" id="special_chckbx_p" class="special_chckbx password_checkbox required_input hidden"> 
                      <i class="fas fa-check-square special_chck"></i> <p class="special_chckbx_p">Atleast 1 Special Characters</p>
                    </div>
                    <div class="password_chcklist_contanier">
                        <input type="checkbox" id="upper_chckbx_p" class="upper_chckbx password_checkbox required_input hidden"> 
                      <i class="fas fa-check-square upper_chck"></i> <p class="upper_chckbx_p">Atleast 1 Uppercase</p>
                    </div>
                    <div class="password_chcklist_contanier">
                        <input type="checkbox" id="number_chckbx_p" class="number_chckbx password_checkbox required_input hidden"> 
                      <i class="fas fa-check-square number_chck"></i> <p class="number_chckbx_p">Atleast 1 Number</p>
                    </div>
                 </div>
            </div>
		</div>
	</div>
</div>
</body>

<script type="text/javascript">

var user_id = "<?= $this->session->userdata('sess_uid')?>";
var global_controller = "<?= base_url('content_management/global_controller');?>";
var update_password = "<?= base_url('content_management/change_password/update_password');?>";
var update_success = "<?= base_url('content_management/change_password');?>";

</script>