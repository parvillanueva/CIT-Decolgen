<div class="box">
  <?php
      $data['buttons'] = ['update', 'close'];
      $this->load->view("content_management/template/buttons",$data);
  ?>
    <div class="box-body">
      <?php 
        $details = $this->load->details("pckg_footer", 1);
        if ($this->uri->segment(4) !== NULL || !empty($this->uri->segment(4))) {
            $inputs = ["footer_image","footer_image_url","footer_asc_name","footer_asc_url","footer_policy_name","footer_policy_url","footer_copyright","facebook","twitter","instagram","youtube_link","pinterest"];
            $values = [$details[0]->footer_image_banner,$details[0]->footer_image_url,$details[0]->footer_asc_name,$details[0]->footer_asc_url,$details[0]->footer_policy_name,$details[0]->footer_policy_url,$details[0]->footer_copyright,$details[0]->facebook,$details[0]->twitter,$details[0]->instagram,$details[0]->youtube_link,$details[0]->pinterest];
            $id =  $this->standard->inputs($inputs, $values);
        } else {
            $inputs = ["footer_image","footer_image_url","footer_asc_name","footer_asc_url","footer_policy_name","footer_policy_url","footer_copyright","facebook","twitter","instagram","youtube_link","pinterest"];
            $values = [$details[0]->footer_image_banner,$details[0]->footer_image_url,$details[0]->footer_asc_name,$details[0]->footer_asc_url,$details[0]->footer_policy_name,$details[0]->footer_policy_url,$details[0]->footer_copyright,$details[0]->facebook,$details[0]->twitter,$details[0]->instagram,$details[0]->youtube_link,$details[0]->pinterest];
            $id = $this->standard->inputs($inputs, $values);
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

                    AJAX.update.table("pckg_footer");
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