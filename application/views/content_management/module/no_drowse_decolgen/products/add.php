<div class="box">
	<?php
		$data['buttons'] = ['save', 'close'];
		$this->load->view("content_management/template/buttons",$data);
	?>
    <div class="box-body">
                    <hr>
                  
                    <?php 
                    $inputs = ["nd_product_name","nd_image_banner"];
                    $id = $this->standard->inputs($inputs);
                    ?>
             
                    
                <div class="form-group">
                    <label class="control-label col-sm-2">Product Price:</label>
                    <div class="col-sm-10">
                        <input type="number" name="numeric" value="" class="form-control allownumericwithdecimal" id="test" min="0.01" step="0.01" max="99999" placeholder="00.00">
                    </div>
                    <div class="clearfix"></div>
                </div>
            <hr>

            
                  
                  
                    <?php 
                    $inputs = ["nd_download_label","no_drowse_pil","nd_product_description","status"];
                    $id = $this->standard->inputs($inputs);
                    ?>
                 
           
    </div>
</div>

<script>

    AJAX.config.base_url("<?=base_url();?>"); 
   
    $(document).ready(function(){

        $('.size_filter').addClass("sample_input");
    });

    $(".allownumericwithdecimal").on("keypress keyup blur",function (event) {
            //this.value = this.value.replace(/[^0-9\.]/g,'');
     $(this).val($(this).val().replace(/[^0-9\.]/g,''));
            if ((event.which != 46 || $(this).val().indexOf('.') != -1) && (event.which < 48 || event.which > 57)) {
                event.preventDefault();
            }
    });

    $(document).on('click', '#btn_save', function(){
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

        form_data["orders"] = 1;
        form_data["create_date"] = moment(new Date()).format('YYYY-MM-DD HH:mm:ss');
        form_data["update_date"] = moment(new Date()).format('YYYY-MM-DD HH:mm:ss');

        if(validate.standard("<?= $id; ?>")){
            if(is_exists('pckg_no_drowse_products', 'nd_product_name', $('#nd_product_name').val(), 'status') != 0)
            {
                var error_message = "<span class='validate_error_message' style='color: red;'>The information already exists.<br></span>";
                $('#menu_name').css('border-color','red');
                $(error_message).insertAfter($('#nd_product_name'));
            }
            else{
            var modal_obj = '<?= $this->standard->confirm("confirm_save"); ?>'; 
                modal.standard(modal_obj, function(result){
                    if(result){
                        modal.loading(true);

                        AJAX.insert.table("pckg_no_drowse_products");
                        $.each(form_data, function(a,b) {
                            AJAX.insert.params(a, b);
                        });

                        AJAX.insert.exec(function(result){
                            modal.loading(false);
                            modal.alert("<?= $this->standard->dialog("add_success"); ?>", function(){
                                location.href = '<?=base_url("content_management/site_no_drowse_products") ?>';
                            });
                        })
                    }
                });
            }
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