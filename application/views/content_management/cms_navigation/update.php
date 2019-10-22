<div class="box">
		<?php	
			$data['buttons'] = ['update','cancel']; // add, save, update
			$this->load->view("content_management/template/buttons", $data);
			$menu_id = $this->uri->segment(4);
		?>	


 		<div class="box-body">   
 			<div id = "menu" class="form-horizontal">
	            <div class="form-group">
	              	<label class="col-sm-2 control-label">Menu Name <span style="color: red;">*</span></label>
	              	<div class="col-sm-5">
	                	<input id="name" class="form-control required_input">
	              	</div>
	            </div>
	            <div class="form-group">
	              	<label class="col-sm-2 control-label">Menu Icon  <span style="color: red;">*</span></label>
	              	<div class="col-sm-5">
	              		<div class="input-group"> 
		                	<input id="icon" class="form-control required_input" readonly>
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
	              	<label class="col-sm-2 control-label">Type  <span style="color: red;">*</span></label>
	              	<div class="col-sm-5">
	                	<select class="form-control type required_input">
                            <option value = '2'>Module</option>
	                		<option value = '1'>Group Menu</option>

	                	</select>
	              	</div>
	            </div>
	            <div class="form-group div_type">
	              	<label class="col-sm-2 control-label">Menu</label>
	              	<div class="col-sm-5">
	                	<select class="form-control" id = "parent">
	                        <option value = "0" data-level = '0' selected>Main Menu</option>
	                    <?php
	                        foreach ($menus as $key => $value) {
	                    ?>
	                        <option value="<?=$value->id?>" data-level = "<?=$value->menu_level?>" <?=($details[0]->menu_parent_id == $value->id) ? "selected" : "";?> >
	                            <?=$value->menu_name?>
	                        </option>
	                    <?php }
	                    ?>
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

<style type="text/css">
	.icon-picker-list .glyphicon {
	    font-size: 23px;
	    margin-bottom: 10px;
    	margin-top: 5px;
	}
</style>

<script type="text/javascript">

	var base_url = '<?= base_url();?>';
	var content_management = '<?=base_url("content_management");?>';
    var global_controller = '<?=base_url("content_management/global_controller");?>';
    var confirm_update = '<?=$this->standard->confirm("confirm_update");?>';
    var update_success = '<?=$this->standard->dialog("update_success");?>';
    var menu_has_under = "<?=$this->standard->dialog("menu_hasUnder");?>";
    var confirm_cancel = '<?=$this->standard->confirm("confirm_cancel");?>';
    var base_url = '<?= base_url();?>';
    var old_title = '<?=$details[0]->menu_name;?>';
	var old_title_id = '<?=$details[0]->id;?>';
	var old_url = '<?=$details[0]->menu_url;?>';
	var menu_id = '<?=$menu_id;?>';
	var ids = '<?=$this->uri->segment(4);?>';
	var hasUnder = '<?=count($hasUnder);?>';

</script>