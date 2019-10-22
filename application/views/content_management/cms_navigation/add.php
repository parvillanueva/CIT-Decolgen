<style type="text/css">
	.icon-picker-list .glyphicon {
	    font-size: 23px;
	    margin-bottom: 10px;
    	margin-top: 5px;
	}

	.chckbx_td{
		text-align:center;
	}
</style>

<div class="box">
		<?php	
			$data['buttons'] = ['save','close']; // add, save, update
			$this->load->view("content_management/template/buttons", $data);
		?>	
 		<div class="box-body">   
 			<div id = "menu" class="form-horizontal">
	            <div class="form-group">
	              	<label class="col-sm-2 control-label">Menu Name <span style="color: red;">*</span></label>
	              	<div class="col-sm-5">
	                	<input id="menu_name" class="form-control required_input" placeholder="Menu Name" required="required" accept="/[^a-zA-Z0-9\u00f1\u00d1 ._,-\/]/g" onkeyup="this.value=this.value.replace(/[^a-zA-Z0-9\u00f1\u00d1 ._,-\/]/g,'');">
	              	</div>
	            </div>
	            <div class="form-group">
	              	<label class="col-sm-2 control-label">Menu Icon <span style="color: red;">*</span></label>
	              	<div class="col-sm-5">
	              		<div class="input-group"> 
		                	<input id="icon" class="form-control required_input" placeholder="Click to Pick" readonly required="required">
		                	<span class="input-group-addon icon_preview"></span>
		              	</div>
	              	</div>
	            </div>
	            <div class="form-group">
	              	<label class="col-sm-2 control-label">Display</label>
	              	<div class="col-sm-5">
              			<div id='roles'>
              				<table class="table table-bordered">
					            <thead>
					                <tr>
					                    <th>Roles</th>
					                    <th>Read</th>
					                    <th >Write</th>
					                    <th >Delete</th>
					                </tr>
					            </thead>
					            <tbody class="table_body"></tbody>
					        </table>
              			</div>
	              	</div>
	            </div>
	            <div class="form-group">
	              	<label class="col-sm-2 control-label">Status</label>
	              	<div class="col-sm-5">
	              		<select id="status" class="form-control">
	                		<option value=1>Active</option>
	                		<option value=0>Inactive</option>
	                	</select>
	              	</div>
	            </div>
	            <div class="form-group div_type">
	              	<label class="col-sm-2 control-label">Type <span style="color: red;">*</span></label>
	              	<div class="col-sm-5">
	                	<select class="form-control menu_type required_input">
	                		<option selected disabled>Select..</option>
                            <option>Module</option>
	                		<option>Group Menu</option>
	                	</select>
	              	</div>
	            </div>
	        </div>
 		</div>
 </div>

<div id="iconPicker" class="modal fade">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title">Icon Picker</h4>
			</div>
			<div class="modal-body" style="max-height: 390px; overflow-y: scroll;">
				<div >
					<ul class="icon-picker-list"></ul>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">

	var base_url = '<?= base_url();?>';
    var content_management = '<?=base_url("content_management");?>';
    var confirm_save = '<?=$this->standard->confirm("confirm_save");?>';
    var save_success = '<?=$this->standard->dialog("save_success");?>';

    var menu_id = '<?=$this->uri->segment(4);?>';
	var menu_group = '<?=$this->uri->segment(5);?>';

</script>
