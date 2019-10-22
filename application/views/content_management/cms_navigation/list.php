<div class="box">
	<?php
		$data['buttons'] = ['add', 'search','close']; // add, save, update
		$this->load->view("content_management/template/buttons", $data);
		  
      $optionSet = '';
      foreach($pageOption as $pageOptionLoop){
          $optionSet .= "<option value='".$pageOptionLoop."'>".$pageOptionLoop."</option>";
        } 
	?>	
		<div class="box-body">
      <div class="form-group record-entries pull-right">
        <label>Show</label> 
           <select id="record-entries">
             <?php echo $optionSet;?>
               <option value="999">ALL</option>
           </select>
        <label>Entries</label>
      </div>
      <div class="col-md-12 list-data tbl-content" id="list-data">
	  
 		<!-- LIST TABLE -->
    		<table class="table table-bordered sorted_table">
    			<thead>
				
    				<tr id="sortable">
                <th style="width: 10px;"></th>
                <th><input class ="selectall" type ="checkbox"></th>
      					<th>Menu</th>
      					<th>Icon</th>
      					<th>Url</th>
      					<th>Type</th>
		                <th>Date Modified</th>
		                <th>Status</th>
		                <th>Package</th>
		                <th>Edit</th>
    				</tr>
    			</thead>
    			<tbody class="table_body">
    				
    			</tbody>
    		</table>
			
      </div>
	  <div class="list_pagination"></div>
	  <div class="form-group record-entries pull-right">
			<label>Show</label> 
			   <select id="record-entries">
			     <?php echo $optionSet;?>
			       <option value="999">ALL</option>
			   </select>
			<label>Entries</label>
		</div>
		</div>
</div>

<script type="text/javascript">

    var base_url = '<?= base_url();?>';
    var content_management = '<?=base_url("content_management");?>';
    var global_controller = '<?=base_url("content_management/global_controller");?>';
    var confirm_update = '<?=$this->standard->confirm("confirm_update");?>';
    var update_success = '<?=$this->standard->dialog("update_success");?>';
    
    var menu_id = '<?=$menu_id;?>';
    var menu_group = '<?=$menu_group;?>';

</script>