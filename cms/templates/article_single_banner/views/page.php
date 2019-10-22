<div class="box">
	<?php	
		$data["buttons"] = ["update"]; // add, save, update
		$this->load->view("content_management/template/buttons", $data);
	?>
	<div class="box-body">
		<div class="form-horizontal">
			<div class="form-group">
              	<div class="col-sm-6">
              		<div class="input-group img_banner"> 
	              		<input id="img_banner" class="form-control required" readonly value="<?= $details[0]->banner_img;?>" />
	              		<span class="input-group-btn ">
	              			<button type="button" data-id="img_banner" class="btn open_filemanager btn-info btn-flat">Open File Manager</button>
	              		</span>
	              	</div>
	              	<?php
	              	if($details[0]->banner_img != ""){
	              		$extension = pathinfo($details[0]->banner_img, PATHINFO_EXTENSION);
		              	switch (strtolower($extension)) {
		              		case 'jpg':
		              		case 'gif':
		              		case 'png':
		              			echo '<img class="img_banner_preview" src="'.$details[0]->banner_img.'" width="100%" />';
		              			break;
		              		case 'mp4':
		              			echo '<video class="img_banner_preview" style="width : 100%" controls>';
		              			echo '	<source src="'.$details[0]->banner_img.'" type="video/mp4">';
		              			echo '	Your browser does not support HTML5 video.';
		              			echo '</video>';
		              			break;
		              		default:
		              			# code...
		              			break;
		              	}
	              	}
	              	?>

              	</div>
            </div>
            <div class="form-group">
              	<div class="col-sm-12">
                	<textarea id="body" class="form-control" rows="10"></textarea>
              	</div>
            </div>
        </div>
	</div>
</div>

<script type="text/javascript">

	AJAX.config.base_url(base_url);
	
	CKEDITOR.replace( 'body',{height: '500px'});
	CKEDITOR.instances.body.setData('<?= $details[0]->body;?>');
	$('.ui-tooltip').attr("stlye","hidden");

	$(document).on("click", ".open_filemanager", function(e){
		var data_id = $(this).attr("data-id");
		modal.file_manager(data_id); //open filemanager modal
	});

	$(document).on("click", ".btn_insert", function(e){
		//get source
		var data_id = $(this).attr("indentifier");

		//path of file
		var path = $('#file_url').val();
		var ext =  path.split('.').pop();
		switch(ext.toLowerCase()) {
            case 'jpg':
            case 'png':
            case 'gif':
               var preview = '<img class="img_banner_preview" src="'+path+'" width="100%" />';
            break;                         // the alert ended with pdf instead of gif.
            case 'mp4':
                var preview = '<video class="img_banner_preview" style="width : 100%" controls>';
                preview += '<source src="'+path+'" type="video/mp4">';
                preview += 'Your browser does not support HTML5 video.';
                preview += '</video>';
            break;
            default:
				modal.alert("Selected file is not valid.",function(){});
        }

		if(data_id == "img_banner"){
			$('.img_banner').next('.img_banner_preview').remove();
			$('#img_banner').val(path);
			$(preview).insertAfter('.img_banner');
		}
		//close modal
		$("#ckeditor_filemanager_modal").modal("hide");

	});

	$(document).on("click", "#btn_update", function(e){
		modal.confirm("Are you sure you want to save this record?",function(result){
			if(result){
				// if(validate.required('.required') == 0){
					var editor = CKEDITOR.instances.body.getData();

				    AJAX.update.table("{table}");
				    AJAX.update.where("id", 1);
				    AJAX.update.params("body", editor);
				    AJAX.update.params("banner_img", $("#img_banner").val());
				    AJAX.update.params("update_date", moment(new Date()).format('YYYY-MM-DD HH:mm:ss'));
				    AJAX.update.params("user", "<?= $this->session->userdata('sess_uid');?>");

				    AJAX.update.exec(function(result){
			    		//success code here
			    		modal.alert("Successfully Saved!",function(){
							location.href = "<?= base_url('content_management/site_{menu}');?>";		
						});
				    });
				// }
			}
		});
		
	});

</script>