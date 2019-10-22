<style type="text/css">
	::selection { background-color: #f07746; color: #fff; }
	::-moz-selection { background-color: #f07746; color: #fff; }

	body{
		background-color: #edeee8;
		margin: 40px auto;
		max-width: 1024px;
		font: 16px/24px normal "Helvetica Neue",Helvetica,Arial,sans-serif;
		color: #808080;
	}

	a{
		color: #dd4814;
		background-color: transparent;
		font-weight: normal;
		text-decoration: none;
	}

	a:hover{
	   color: #97310e;
	}

	h1{
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

	.form-horizontal h4{
		background-color:#c9c9d4;
		padding: 5px;
		color:#095f88;
	}

	h2{
		color:#404040;
		margin:0;
		padding:0 0 10px 0;
	}

	#body{
		margin: 0 15px 0 15px;
		min-height: 96px;
	}

	p{
		margin: 0 0 10px;
		padding:0;
	}

	p.footer{
		text-align: right;
		font-size: 12px;
		border-top: 1px solid #d0d0d0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
		background:#8ba8af;
		color:#fff;
	}

	#container{
		background: #fff;
		margin: 10px;
		border: 1px solid #d0d0d0;
		box-shadow: 5px 5px 8px #9c9c9c;
		border-radius: 25px;
	}

	#AD_modal .modal-dialog{
		min-height: calc(100vh - 60px);
	    display: flex;
	    flex-direction: column;
	    justify-content: center;
	    overflow: auto;
	    width: 385px;
	    box-shadow: transparent;
	}

	#AD_modal .modal-content{
	    border-top-right-radius: 8px;
	    border-top-left-radius: 8px;
	}

	#AD_modal .modal-header{
		text-align: center;
		color: #fff;
	    background-color: #205e87;
	    border-top-right-radius: 8px;
	    border-top-left-radius: 8px;
	}

	#AD_modal .modal-body{
	    text-align: center;
	}

	.modal-footer{
		text-align: center;
	    border-bottom-right-radius: 8px;
	    border-bottom-left-radius: 8px;
	}

    @font-face{
        font-family: 'password';
        font-style: normal;
        font-weight: 400;
        src: url('<?=base_url("cms/fonts/password.ttf");?>');
    }

    .masked-password{
        font-family: 'password';
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
		    	<div class="col-sm-5">
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
		  				<option value="0">No</option>
		  				<option value="1">Yes</option>
			  			<option value="2">Both</option>
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
		  	<div class="form-group">
		    	<div class="col-sm-12" style="text-align: center;">
		      		<a id="btn_install" class="btn btn-primary btn-install"><i class="fa fa-wrench"></i>&nbsp; Install Content Management</a>
		    	</div>
		  	</div>
		</form>
	</div>
</div>

<div class="modal" id="AD_modal" role="dialog">
    <div class="modal-dialog">
      	<div class="modal-content">
	        <div class="modal-header">
	        	<h4 class="modal-title">Installation Permission</h4>
	        </div>
	        <div class="modal-body">
	        	<div class="form-group input-group">
	        	</div>
			    <div class="form-group input-group" style="margin-bottom: 0px;">
			    	<span class="input-group-addon"><i class="fa fa-user"></i></span>
			    	<input class="form-control ad_required ad_input" type="text" id="ad_email" placeholder="AD Email">
			    </div>
			    <div class="form-group input-group" style="margin-bottom: 0px; margin-top: 15px;">
			    	<span class="input-group-addon"><i class="fa fa-key"></i></span>
			    	<input class="form-control ad_required ad_input" type="text" id="ad_password" placeholder="AD Password">
			    </div>
	        </div>
	        <div class="modal-footer">
	        	<button type="button" id="btn_authenticate" class="btn btn-primary"><span class="fa fa-sign-in"></span>&nbsp;&nbsp;Authenticate</button>
	        </div>
      	</div>  
    </div>
</div>

<script type="text/javascript">

	var content_management = '<?=base_url("content_management");?>';
    var global_controller = '<?=base_url("content_management/global_controller");?>';
    var azure_pwgrant = '<?=base_url("azure/pwgrant.php");?>';

</script>

<script type="text/javascript" src="<?= base_url() . 'cms/js/cms/setup/setup.js';?>"></script>