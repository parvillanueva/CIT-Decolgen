<style type="text/css">
	::selection { background-color: #f07746; color: #fff; }
	::-moz-selection { background-color: #f07746; color: #fff; }

	body {
		background-color: #edeee8;
		margin: 40px auto;
		max-width: 1024px;
		font: 16px/24px normal "Helvetica Neue",Helvetica,Arial,sans-serif;
		color: #808080;
	}

	a {
		color: #dd4814;
		background-color: transparent;
		font-weight: normal;
		text-decoration: none;
	}

	a:hover {
	   color: #97310e;
	}

	h1 {
		color: #fff;
		background-color: #205e87;
		border-bottom: 1px solid #d0d0d0;
		font-size: 22px;
		font-weight: bold;
		margin: 0 0 14px 0;
		padding: 5px 10px;
		line-height: 40px;
		border-top-left-radius: 25px;
    	border-top-right-radius: 25px;
	}

	.form-horizontal h4 {
		background-color:#c9c9d4;
		padding: 5px;
		color:#095f88;
	}

	h2 {
		color:#404040;
		margin:0;
		padding:0 0 10px 0;
	}

	#body {
		margin: 0 15px 0 15px;
		min-height: 96px;
	}

	p {
		 margin: 0 0 10px;
		 padding:0;
	}

	p.footer {
		text-align: right;
		font-size: 12px;
		border-top: 1px solid #d0d0d0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
		background:#8ba8af;
		color:#fff;
	}

	#container {
		background: #fff;
		margin: 10px;
		border: 1px solid #d0d0d0;
		box-shadow: 5px 5px 8px #9c9c9c;
		border-radius: 25px;
	}

</style>

<div id="container">
	<h1 class="text-center"><i class="fa fa-wrench"></i>&nbsp; Content Management Setup</h1>

	<div id="body">
		<?php echo validation_errors(); ?>
		<form id="setup_form" class="form-horizontal" action="<?= base_url('content_management/global_controller/save_data');?>">
			<center><h4><i class="fa fa-info-circle"></i>&nbsp; Information</h4></center><br>
		  	<div class="form-group">
		    	<label class="control-label col-sm-2">CMS Title</label>
		    	<div class="col-sm-6">
		      		<input type="text" name="cms_title" class="form-control required">
		    	</div>
		  	</div>
		  	<div class="form-group">
		    	<label class="control-label col-sm-2">Theme</label>
		    	<div class="col-sm-5">
		      		<select name="cms_theme" class="form-control theme required">
		      			<option>skin-black</option>
		      			<option>skin-blue-light</option>
		      			<option>skin-blue</option>
		      			<option>skin-green-light</option>
		      			<option>skin-green</option>
		      			<option>skin-purple-light</option>
		      			<option>skin-purple</option>
		      			<option>skin-red-light</option>
		      			<option>skin-red</option>
		      			<option>skin-yellow-light</option>
		      			<option>skin-yellow</option>
		      		</select>
		    	</div>
		  	</div>
		  	<div class="form-group">
		  		<label class="control-label col-sm-2">AD Authentication</label>
		  		<div class="col-sm-5">
		  			<select name="ad_authentication" class="form-control theme required">
			  			<option value="" selected>Select..</option>
			  			<option value="1">Yes</option>
			  			<option value="0">No</option>
			  		</select>
		  		</div>
		  	</div>
		  	<br><br>
		  	<center><h4><i class="fa fa-database"></i>&nbsp; Database Connection</h4></center><br>
		  	<div class="form-group">
		    	<label class="control-label col-sm-2">Host/Address</label>
		    	<div class="col-sm-5">
		      		<input type="text" name="db_host" id="db_host" class="form-control required">
		    	</div>
		  	</div>
		  	<div class="form-group">
		    	<label class="control-label col-sm-2">Username</label>
		    	<div class="col-sm-5">
		      		<input type="text" name="db_user" id="db_user" class="form-control required">
		    	</div>
		  	</div>
		  	<div class="form-group">
		    	<label class="control-label col-sm-2">Password</label>
		    	<div class="col-sm-5">
		      		<input type="password" name="db_pass" id="db_pass" class="form-control">
		    	</div>
		  	</div>
		  	<div class="form-group">
		    	<label class="control-label col-sm-2">Database</label>
		    	<div class="col-sm-5">
		      		<input type="text" name="db_default" id="db_default" class="form-control required">
		    	</div>
		  	</div>
		  	<br><br>
		  	<center><h4><i class="fa fa-user-circle"></i>&nbsp; Administrator Account</h4></center><br>
		  	<div class="form-group">
		    	<label class="control-label col-sm-2">Name</label>
		    	<div class="col-sm-5">
		      		<input type="text" name="admin_name" class="form-control required">
		    	</div>
		  	</div>
		  	<div class="form-group">
		    	<label class="control-label col-sm-2">Email</label>
		    	<div class="col-sm-5">
		      		<input type="email" name="admin_email" class="form-control required admin_email">
		    	</div>
		  	</div>
		  	<div class="form-group">
		    	<label class="control-label col-sm-2">Username</label>
		    	<div class="col-sm-5">
		      		<input type="text" name="admin_username" class="form-control required">
		    	</div>
		  	</div>
		  	<div class="form-group" style="margin-bottom: 5px;">
		    	<label class="control-label col-sm-2">Password</label>
		    	<div class="col-sm-5">
		      		<input id="password" type="password" name="admin_pass" class="form-control required">
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
            <br><br>
		  	<div class="form-group" >
		    	<label class="control-label col-sm-2">Confirm Password</label>
		    	<div class="col-sm-5">
		      		<input type="password" name="admin_pass_confirm" class="form-control required confirm_password">
		      		<div class="password_error"></div>
		    	</div>
		  	</div>
		  	<br><br>
		  	<div class="form-group">
		    	<div class="col-sm-12" style="text-align: center;">
		      		<a id="btn_install" class="btn btn-primary btn-install"><i class="fa fa-wrench"></i>&nbsp; Install Content Management</a>
		    	</div>
		  	</div>
		</form>
	</div>
</div>


<script type="text/javascript">

	var content_management = '<?=base_url("content_management");?>';
    var global_controller = '<?=base_url("content_management/global_controller");?>';

</script>

<script type="text/javascript" src="<?= base_url() . 'cms/js/cms/setup/setup_old.js';?>"></script>