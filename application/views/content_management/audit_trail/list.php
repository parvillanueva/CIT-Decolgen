<div class="box audit_trail_div">
    <?php   
        $data['buttons'] = ['search','date_range']; // add, save, update
        $this->load->view("content_management/template/buttons", $data);
    ?>  
	<?php 
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
             <table class= "table listdata table-striped">
               <thead>
                  <tr>
                        <th>Page</th>
                        <th>Username</th>
                        <th>Action</th>

                        <th colspan="2">Date &amp; Time</th>
                    </tr>  
                 </thead>
                <tbody class="table_body">
                    
                </tbody>

             </table>
        </div>
        <!-- PAGINATION -->
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

<style type="text/css">
    #header { position: fixed; top: 0; background: #fff;}
    body .breadcrumb {        
        border: none;
    }
    #form_search {
        width: 20%;
        display: inline-block;
    }
    .audit_trail_div .form-group.has-feedback {
        margin: 0;
    }

</style>

<script type="text/javascript">

    var base_url = '<?=base_url();?>';
    var content_management = '<?=base_url("content_management");?>';
    
</script>