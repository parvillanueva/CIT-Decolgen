<div class="box">
  <?php
      $data['buttons'] = ['update', 'close'];
      $this->load->view("content_management/template/buttons",$data);
  ?>
    <div class="box-body">
      <?php 
        $details = $this->load->details("pckg_header", 1);
        if ($this->uri->segment(4) !== NULL || !empty($this->uri->segment(4))) {
            $inputs = ["header_image_banner","header_image_url","home","try_now","what_is_decolgen","no_drowse_decolgen","faqs","validator_image","unilab_logo","unilab_logo_url"];
            $values = [$details[0]->header_image,$details[0]->header_image_url,$details[0]->home,$details[0]->try_now,$details[0]->what_is_decolgen,$details[0]->no_drowse_decolgen,$details[0]->faqs,$details[0]->validator_image,$details[0]->unilab_logo,$details[0]->unilab_logo_url];
            $id =  $this->standard->inputs($inputs, $values);
        } else {
            $inputs = ["header_image_banner","header_image_url","home","try_now","what_is_decolgen","no_drowse_decolgen","faqs","validator_image","unilab_logo","unilab_logo_url"];
            $values = [$details[0]->header_image,$details[0]->header_image_url,$details[0]->home,$details[0]->try_now,$details[0]->what_is_decolgen,$details[0]->no_drowse_decolgen,$details[0]->faqs,$details[0]->validator_image,$details[0]->unilab_logo,$details[0]->unilab_logo_url];
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

                    AJAX.update.table("pckg_header");
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