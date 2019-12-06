<div class="box">
	<?php
    	$data['buttons'] = ['update', 'close'];
    	$this->load->view("content_management/template/buttons",$data);
	?>
    <div class="box-body">
    	<?php 
        $details = $this->load->details("pckg_try_now_details", 1);
        if ($this->uri->segment(4) !== NULL || !empty($this->uri->segment(4))) {
            $inputs = ["try_now_title","try_now_sub_title","try_now_image_banner","try_now_image_background","try_now_image_background_two","try_now_image_banner_product","try_now_image_banner_details","try_now_banner_details","try_now_details_first_title","try_now_first_description","try_now_details_second_title","try_now_second_description"];
            $values = [$details[0]->try_now_title,$details[0]->sub_title,$details[0]->image_banner,$details[0]->background_image,$details[0]->background_image_two,$details[0]->image_banner_product,$details[0]->image_banner_details,$details[0]->image_details,$details[0]->first_title,$details[0]->first_description,$details[0]->second_title,$details[0]->second_description];
            $id =  $this->standard->inputs($inputs, $values);
        } else {
            $inputs = ["try_now_title","try_now_sub_title","try_now_image_banner","try_now_image_background","try_now_image_background_two","try_now_image_banner_product","try_now_image_banner_details","try_now_banner_details","try_now_details_first_title","try_now_first_description","try_now_details_second_title","try_now_second_description"];
            $values = [$details[0]->try_now_title,$details[0]->sub_title,$details[0]->image_banner,$details[0]->background_image,$details[0]->background_image_two,$details[0]->image_banner_product,$details[0]->image_banner_details,$details[0]->image_details,$details[0]->first_title,$details[0]->first_description,$details[0]->second_title,$details[0]->second_description];
            $id =  $this->standard->inputs($inputs, $values);
        }
        ?>
    </div>
</div>
<script>

    AJAX.config.base_url(base_url); 
       
    $(document).on('click', '#btn_update', function(){
        var form_data = {};
        $(':input[class*="_input"]').each(function() {
            var input_id = $(this).attr('id');
            var db_field = $(this).attr('name');

            if ($(this).attr('type') === 'ckeditor') {
                form_data[db_field] = eval("CKEDITOR.instances."+input_id+".getData()");
            } else {
                form_data[db_field] = eval("$('#"+input_id+"').val()");
            }
        });
        
        form_data["update_date"] = moment(new Date()).format('YYYY-MM-DD HH:mm:ss');

        if(validate.standard("<?= $id; ?>")){
            var modal_obj = '<?= $this->standard->confirm("confirm_update"); ?>'; 
            modal.standard(modal_obj, function(result){
                if(result){
                    modal.loading(true);

                    AJAX.update.table("pckg_try_now_details");
                    AJAX.update.where("id", 1);
                    $.each(form_data, function(a,b) {
                        AJAX.update.params(a, b);
                    });
                    
                    AJAX.update.exec(function(result){
                        modal.loading(false);
                        modal.alert("<?= $this->standard->dialog("update_success"); ?>", function(){
                            location.reload();
                        });
                    })
                }
            });
        }
    });
</script>
<script type="text/javascript" > 
<?php
    $dir = dirname(__FILE__);
    include($dir . "/standardconfig.js");
?>
</script>