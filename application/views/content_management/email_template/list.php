<style>
.edit {cursor: pointer;}
.send_mail {cursor: pointer;}
</style>
<div class="box">
    <?php
        $data['buttons'] = ['add', 'search'];
        $this->load->view("content_management/template/buttons",$data);
    ?>

  <div class="box-body">
   <div class="col-md-12 list-data tbl-content" id="list-data">
         <table class= "table listdata table-striped">
           <thead>
              <tr>
                <th><input class ="selectall" type ="checkbox"></th>
                    <th class='center-content'>Name</th>
                    <th class='center-content'>Status</th>
                    <th class='center-content'>Edit</th>
					<th class='center-content'>Send Email</th>
                </tr>  
             </thead>
            <tbody>
				<?php 
				foreach($listData as $DataLoop){
					echo '<tr>
							<td><input class ="selectall" type ="checkbox"></td>
							<td><center>'.$DataLoop->name.'</center></td>
							<td><center>'.(($DataLoop->status == "1") ? "Active" : "Inactive").'</center></td>
							<td><center><a onClick="EditData(\''.$DataLoop->id.'\')" class="edit" title="Edit"><span class="glyphicon glyphicon-pencil"></span></a></center></td>
							<td><center><a data-id="'.$DataLoop->id.'" class="send_mail" title="Send Email"><span class="glyphicon glyphicon-send"></span></a></center></td>
						  </tr>';
				}
				?>
			</tbody>
         </table>
    </div>
   </div>
</div>

<script type="text/javascript">
	function EditData(id){
		location.href = '<?=base_url("content_management/site_email_template/edit?id=");?>'+id;
	}
	
	$(document).on('click', '.send_mail', function(e){
		modal.loading(true);
		e.preventDefault();
		var data_id = $(this).attr("data-id");
		if(data_id != ''){
			var url = '<?=base_url("content_management/site_email_template/email_send?id=");?>';
			var data = {
				id: data_id
			}
			aJax.post(url, data, 
			function(result){
				var obj = is_json(result);		
				if(obj.response == 'success'){
					var message = '<?= $this->standard->dialog("sent_success"); ?>';
					modal.loading(false);
					modal.alert(message);
				}
				else{					
					var message = '<?= $this->standard->dialog("sent_failed"); ?>';
					modal.loading(false);
					modal.alert(message);
				}
			});
		}
	});
	
	$(document).on("click", "#btn_add", function(){
	    location.href = '<?=base_url("content_management/site_email_template/add");?>';
	});  
</script>

