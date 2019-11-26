<div class="box">
	<?php
    	$data['buttons'] = ['update', 'close'];
    	$this->load->view("content_management/template/buttons",$data);
	?>
    <div class="box-body">
       
        <div class="row" style="border: 2px solid #d2d6de;">
           <hr>
              <div class="col-sm-12" >
                <?php 
                    $details = $this->load->details("pckg_no_drowse_details", 1);
                    if ($this->uri->segment(4) !== NULL || !empty($this->uri->segment(4))) {
                        $inputs = ["no_drowse_title"];
                        $values = [$details[0]->no_drowse_title];
                        $id =  $this->standard->inputs($inputs, $values);
                    } else {
                        $inputs = ["no_drowse_title"];
                        $values = [$details[0]->no_drowse_title];
                        $id = $this->standard->inputs($inputs, $values);
                    }
                ?> 
              </div>
              <div class="col-sm-12" style="">
                <?php 
                    $details = $this->load->details("pckg_no_drowse_details", 1);
                    if ($this->uri->segment(4) !== NULL || !empty($this->uri->segment(4))) {
                        $inputs = ["no_drowse_sub_title"];
                        $values = [$details[0]->no_drowse_sub_title];
                        $id =  $this->standard->inputs($inputs, $values);
                    } else {
                        $inputs = ["no_drowse_sub_title"];
                        $values = [$details[0]->no_drowse_sub_title];
                        $id = $this->standard->inputs($inputs, $values);
                    }
                ?>  
              </div>

        </div>
        <hr>
        <div class="row" style="border: 2px solid #d2d6de;">
          <hr>
          <div class="col-sm-6" style="">
            <?php 
                $details = $this->load->details("pckg_no_drowse_details", 1);
                if ($this->uri->segment(4) !== NULL || !empty($this->uri->segment(4))) {
                    $inputs = ["no_drowse_decolgen","no_drowse_decolgen_image","no_drowse_15mins_image","no_drowse_small_text","no_drowse_details_title1","no_drowse_details1","no_drowse_details_title2","no_drowse_details2"];
                    $values = [$details[0]->no_drowse_decolgen,$details[0]->no_drowse_decolgen_image,$details[0]->no_drowse_15mins_image,$details[0]->no_drowse_small_text,$details[0]->no_drowse_details_title1,$details[0]->no_drowse_details1,$details[0]->no_drowse_details_title2,$details[0]->no_drowse_details2];
                    $id =  $this->standard->inputs($inputs, $values);
                } else {
                    $inputs = ["no_drowse_decolgen","no_drowse_decolgen_image","no_drowse_15mins_image","no_drowse_small_text","no_drowse_details_title1","no_drowse_details1","no_drowse_details_title2","no_drowse_details2"];
                    $values = [$details[0]->no_drowse_decolgen,$details[0]->no_drowse_decolgen_image,$details[0]->no_drowse_15mins_image,$details[0]->no_drowse_small_text,$details[0]->no_drowse_details_title1,$details[0]->no_drowse_details1,$details[0]->no_drowse_details_title2,$details[0]->no_drowse_details2];
                    $id =  $this->standard->inputs($inputs, $values);
                }
            ?>             
          </div>
          <div class="col-sm-6" style="">
            <?php 
                $details = $this->load->details("pckg_no_drowse_details", 1);
                if ($this->uri->segment(4) !== NULL || !empty($this->uri->segment(4))) {
                    $inputs = ["power_title1","power_details1","power_img1","power_title2","power_details2","power_img2","power_title3","power_details3","power_img3"];
                    $values = [$details[0]->power_title1,$details[0]->power_details1,$details[0]->power_img1,$details[0]->power_title2,$details[0]->power_details2,$details[0]->power_img2,$details[0]->power_title3,$details[0]->power_details3,$details[0]->power_img3];
                    $id =  $this->standard->inputs($inputs, $values);
                } else {
                    $inputs = ["power_title1","power_details1","power_img1","power_title2","power_details2","power_img2","power_title3","power_details3","power_img3"];
                    $values = [$details[0]->power_title1,$details[0]->power_details1,$details[0]->power_img1,$details[0]->power_title2,$details[0]->power_details2,$details[0]->power_img2,$details[0]->power_title3,$details[0]->power_details3,$details[0]->power_img3];
                    $id = $this->standard->inputs($inputs, $values);
                }
            ?>   
          </div>
          <hr>   
        </div>
            <hr>
                
        <div class="row" style="border: 2px solid #d2d6de;">
            <div class="col-sm-12" style=""><b>For Try Decolgen Now:</b></div>
              <hr>
              <div class="col-sm-12" style="">
                <?php 
                    $details = $this->load->details("pckg_no_drowse_details", 1);
                    if ($this->uri->segment(4) !== NULL || !empty($this->uri->segment(4))) {
                        $inputs = ["try_decolgen_title"];
                        $values = [$details[0]->try_decolgen_title];
                        $id =  $this->standard->inputs($inputs, $values);
                    } else {
                        $inputs = ["try_decolgen_title"];
                        $values = [$details[0]->try_decolgen_title];
                        $id = $this->standard->inputs($inputs, $values);
                    }
                ?> 
              </div>
              <div class="col-sm-12" style="">
                <?php 
                    $details = $this->load->details("pckg_no_drowse_details", 1);
                    if ($this->uri->segment(4) !== NULL || !empty($this->uri->segment(4))) {
                        $inputs = ["try_decolgen_brief_des"];
                        $values = [$details[0]->try_decolgen_brief_des];
                        $id =  $this->standard->inputs($inputs, $values);
                    } else {
                        $inputs = ["try_decolgen_brief_des"];
                        $values = [$details[0]->try_decolgen_brief_des];
                        $id = $this->standard->inputs($inputs, $values);
                    }
                ?> 
              </div>
            <hr>  
        </div>

    </div>
</div>
<script>

    AJAX.config.base_url(base_url); 
    
    $(document).ready(function(){
        $('.no_drowse_decolgen_label').attr("id","no_drowse_decolgen_label");
        $('.no_drowse_decolgen_label').removeAttr("class"); 
        $('#no_drowse_decolgen_label').attr("class", "control-label no_drowse_decolgen_label col-sm-12");

        $('.no_drowse_decolgen_image_label').attr("id","no_drowse_decolgen_image_label");
        $('.no_drowse_decolgen_image_label').removeAttr("class"); 
        $('#no_drowse_decolgen_image_label').attr("class", "control-label no_drowse_decolgen_image_label col-sm-12");

        $('.no_drowse_15mins_image_label').attr("id","no_drowse_15mins_image_label");
        $('.no_drowse_15mins_image_label').removeAttr("class"); 
        $('#no_drowse_15mins_image_label').attr("class", "control-label no_drowse_15mins_image_label col-sm-12");

        $('.no_drowse_small_text_label').attr("id","no_drowse_small_text_label");
        $('.no_drowse_small_text_label').removeAttr("class"); 
        $('#no_drowse_small_text_label').attr("class", "control-label no_drowse_small_text_label col-sm-12");

        $('.no_drowse_details_title1_label').attr("id","no_drowse_details_title1_label");
        $('.no_drowse_details_title1_label').removeAttr("class"); 
        $('#no_drowse_details_title1_label').attr("class", "control-label no_drowse_details_title1_label col-sm-12");

        $('.no_drowse_details_title2_label').attr("id","no_drowse_details_title2_label");
        $('.no_drowse_details_title2_label').removeAttr("class"); 
        $('#no_drowse_details_title2_label').attr("class", "control-label no_drowse_details_title2_label col-sm-12");

        $('.no_drowse_details2_label').attr("id","no_drowse_details2_label");
        $('.no_drowse_details2_label').removeAttr("class"); 
        $('#no_drowse_details2_label').attr("class", "control-label no_drowse_details2_label col-sm-12");

        $('.no_drowse_details1_label').attr("id","no_drowse_details1_label");
        $('.no_drowse_details1_label').removeAttr("class"); 
        $('#no_drowse_details1_label').attr("class", "control-label no_drowse_details1_label col-sm-12");

        $('.power_title1_label').attr("id","power_title1_label");
        $('.power_title1_label').removeAttr("class"); 
        $('#power_title1_label').attr("class", "control-label power_title1_label col-sm-12");

        $('.power_details1_label').attr("id","power_details1_label");
        $('.power_details1_label').removeAttr("class"); 
        $('#power_details1_label').attr("class", "control-label power_details1_label col-sm-12");

        $('.power_img1_label').attr("id","power_img1_label");
        $('.power_img1_label').removeAttr("class"); 
        $('#power_img1_label').attr("class", "control-label power_img1_label col-sm-12");

        $('.power_title2_label').attr("id","power_title2_label");
        $('.power_title2_label').removeAttr("class"); 
        $('#power_title2_label').attr("class", "control-label power_title2_label col-sm-12");

        $('.power_details2_label').attr("id","power_details2_label");
        $('.power_details2_label').removeAttr("class"); 
        $('#power_details2_label').attr("class", "control-label power_details2_label col-sm-12");

        $('.power_img2_label').attr("id","power_img2_label");
        $('.power_img2_label').removeAttr("class"); 
        $('#power_img2_label').attr("class", "control-label power_img2_label col-sm-12");

        $('.power_title3_label').attr("id","power_title3_label");
        $('.power_title3_label').removeAttr("class"); 
        $('#power_title3_label').attr("class", "control-label power_title3_label col-sm-12");

        $('.power_details3_label').attr("id","power_details3_label");
        $('.power_details3_label').removeAttr("class"); 
        $('#power_details3_label').attr("class", "control-label power_details3_label col-sm-12");

        $('.power_img3_label').attr("id","power_img3_label");
        $('.power_img3_label').removeAttr("class"); 
        $('#power_img3_label').attr("class", "control-label power_img3_label col-sm-12");
    });

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

                    AJAX.update.table("pckg_no_drowse_details");
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