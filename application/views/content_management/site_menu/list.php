<style type="text/css">
.hide {
    display: none;
}
.move-menu {
    cursor: all-scroll;
}
</style>
<div class="box">
	<?php	
		$data['buttons'] = ['add','close','search']; // add, save, update
		$this->load->view("content_management/template/buttons", $data);
      
      $optionSet = '';
      foreach($pageOption as $pageOptionLoop){
          $optionSet .= "<option value='".$pageOptionLoop."'>".$pageOptionLoop."</option>";
        } 

	?>	
 	<div class="box-body">   
    <div class="form-group">
      <div class="col-sm-12">
        <div class="clearfix"></div>
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
   		<!-- LIST TABLE -->
     <div class="col-md-12 list-data tbl-content" id="list-data">
    		<table id ="list_table" class="table table-bordered ">
    			<thead >
    				<tr >
                <th  style="width: 10px;"></th>
                <th><input class ="selectall" type ="checkbox"></th>
        				<th>Menu</th>
        				<th>Url</th>
        				<th>Type</th>
                <th>Date Modified</th>
                <th>Status</th>
                <th>Edit</th>
    				</tr>
    			</thead>
    			<tbody class="table_body">
    				
    			</tbody>
    		</table>
      </div>
      <div class="list_pagination"></div>
      <div class="form-group">
        <div class="col-sm-12">
          <div class="clearfix"></div>
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
 </div>
</div>

<script type="text/javascript">

    var base_url = '<?=base_url();?>';
    var content_management = '<?=base_url("content_management");?>';
    var global_controller = '<?=base_url("content_management/global_controller");?>';
    var confirm_update = '<?=$this->standard->confirm("confirm_update");?>';
    var update_success = '<?=$this->standard->dialog("update_success");?>';

    var menu_id = '<?=$menu_id;?>';
    var menu_group = '<?=$menu_group;?>';

</script>