<div class="box">
    <?php
        $data['buttons'] = ['update', 'close'];
        $this->load->view("content_management/template/buttons",$data);
    ?>
    <div class="box-body">
        <?php 
        if (!$this->uri->segment(4) === NULL || !empty($this->uri->segment(4))) {
            $details = $this->load->details("pckg_no_drowse_products", $this->uri->segment(4));
            $inputs = ["nd_product_name","nd_image_banner","nd_product_price","nd_download_label","nd_product_pil","nd_product_description","status"];
            $values = [$details[0]->nd_product_name,$details[0]->nd_image_banner,$details[0]->nd_product_price,$details[0]->nd_download_label,$details[0]->nd_product_pil,$details[0]->nd_product_description,$details[0]->status];
            $id = $this->standard->inputs($inputs, $values);
        } else {
            $inputs = ["nd_product_name","nd_image_banner","nd_product_price","nd_download_label","nd_product_pil","nd_product_description","status"];
            $id = $this->standard->inputs($inputs);
        }
        ?>
    </div>
</div>

<script>

    AJAX.config.base_url("<?=base_url();?>"); 

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

                    AJAX.update.table("pckg_no_drowse_products");
                    AJAX.update.where("id", "<?=$this->uri->segment(4);?>");
                    $.each(form_data, function(a,b) {
                        AJAX.update.params(a, b);
                    });
                    AJAX.update.exec(function(result){
                        modal.loading(false);
                        modal.alert("<?= $this->standard->dialog("update_success"); ?>", function(){
                            location.href = '<?=base_url("content_management/site_no_drowse_products") ?>';
                        });
                    })
                }
            });
        }
    });

    $(document).on('click', '#btn_close', function(e){
        location.href = '<?=base_url("content_management/site_no_drowse_products") ?>';
    });
</script>
<script type="text/javascript" > 
<?php
    $dir = dirname(__FILE__);
    include($dir . "/standardconfig.js");
?>
</script>