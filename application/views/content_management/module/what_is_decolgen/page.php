<div class="box">
	<?php
    	$data['buttons'] = ['update', 'close'];
    	$this->load->view("content_management/template/buttons",$data);
	?>
    <div class="box-body">
        <div class="row" style="border: 2px solid #d2d6de;">
            <hr>
            <div class="col-sm-12" style="">
            <?php 
            $details = $this->load->details("pckg_what_is_decolgen", 1);
            if ($this->uri->segment(4) !== NULL || !empty($this->uri->segment(4))) {
                $inputs = ["wid_title","wid_background_image"];
                $values = [$details[0]->title,$details[0]->background_image];
                $id =  $this->standard->inputs($inputs, $values);
            } else {
                $inputs = ["wid_title","wid_background_image"];
                $values = [$details[0]->title,$details[0]->background_image];
                $id = $this->standard->inputs($inputs, $values);
            }
            ?>
            </div>
        </div>
        <hr>

<div class="row" style="border: 2px solid #d2d6de;">
  <hr>
  <div class="col-sm-4" style="">
    <?php 
        $details = $this->load->details("pckg_what_is_decolgen", 1);
        if ($this->uri->segment(4) !== NULL || !empty($this->uri->segment(4))) {
            $inputs = ["decolgen_img_1"];
            $values = [$details[0]->decolgen_img_1];
            $id =  $this->standard->inputs($inputs, $values);
        } else {
            $inputs = ["decolgen_img_1"];
            $values = [$details[0]->decolgen_img_1];
            $id = $this->standard->inputs($inputs, $values);
        }
    ?> 
  </div>
  <div class="col-sm-4" style="">
    <?php 
        $details = $this->load->details("pckg_what_is_decolgen", 1);
        if ($this->uri->segment(4) !== NULL || !empty($this->uri->segment(4))) {
            $inputs = ["vs_img"];
            $values = [$details[0]->vs_img];
            $id =  $this->standard->inputs($inputs, $values);
        } else {
            $inputs = ["vs_img"];
            $values = [$details[0]->vs_img];
            $id = $this->standard->inputs($inputs, $values);
        }
    ?> 
  </div>
  <div class="col-sm-4" style="">
    <?php 
        $details = $this->load->details("pckg_what_is_decolgen", 1);
        if ($this->uri->segment(4) !== NULL || !empty($this->uri->segment(4))) {
            $inputs = ["others_img_1"];
            $values = [$details[0]->others_img_1];
            $id =  $this->standard->inputs($inputs, $values);
        } else {
            $inputs = ["others_img_1"];
            $values = [$details[0]->others_img_1];
            $id = $this->standard->inputs($inputs, $values);
        }
    ?> 
  </div>
</div>
<hr>

  <div class="row" style="border: 2px solid #d2d6de;">
    <hr>
    <div class="col-sm-4">
        <?php 
            $details = $this->load->details("pckg_what_is_decolgen", 1);
            if ($this->uri->segment(4) !== NULL || !empty($this->uri->segment(4))) {
                $inputs = ["decolgen_img_title","decolgen_img_sub_title"];
                $values = [$details[0]->decolgen_img_title,$details[0]->decolgen_img_sub_title];
                $id =  $this->standard->inputs($inputs, $values);
            } else {
                $inputs = ["decolgen_img_title","decolgen_img_sub_title"];
                $values = [$details[0]->decolgen_img_title,$details[0]->decolgen_img_sub_title];
                $id = $this->standard->inputs($inputs, $values);
            }
        ?> 
    </div>
    <div class="col-sm-4">
        <?php 
            $details = $this->load->details("pckg_what_is_decolgen", 1);
            if ($this->uri->segment(4) !== NULL || !empty($this->uri->segment(4))) {
                $inputs = ["vs_img_title_1"];
                $values = [$details[0]->vs_img_title_1];
                $id =  $this->standard->inputs($inputs, $values);
            } else {
                $inputs = ["vs_img_title_1"];
                $values = [$details[0]->vs_img_title_1];
                $id = $this->standard->inputs($inputs, $values);
            }
        ?> 
    </div>
    <div class="col-sm-4">
    <?php 
        $details = $this->load->details("pckg_what_is_decolgen", 1);
        if ($this->uri->segment(4) !== NULL || !empty($this->uri->segment(4))) {
            $inputs = ["others_img_title","others_img_sub_title"];
            $values = [$details[0]->others_img_title,$details[0]->others_img_sub_title];
            $id =  $this->standard->inputs($inputs, $values);
        } else {
            $inputs = ["others_img_title","others_img_sub_title"];
            $values = [$details[0]->others_img_title,$details[0]->others_img_sub_title];
            $id = $this->standard->inputs($inputs, $values);
        }
    ?> 
    </div>
  </div>
  <hr>

  <div class="row" style="border: 2px solid #d2d6de;">
    <hr>
    <div class="col-sm-4">
        <?php 
            $details = $this->load->details("pckg_what_is_decolgen", 1);
            if ($this->uri->segment(4) !== NULL || !empty($this->uri->segment(4))) {
                $inputs = ["decolgen_img_2"];
                $values = [$details[0]->decolgen_img_2];
                $id =  $this->standard->inputs($inputs, $values);
            } else {
                $inputs = ["decolgen_img_2"];
                $values = [$details[0]->decolgen_img_2];
                $id = $this->standard->inputs($inputs, $values);
            }
        ?>
    </div>
    <div class="col-sm-4">
        <?php 
            $details = $this->load->details("pckg_what_is_decolgen", 1);
            if ($this->uri->segment(4) !== NULL || !empty($this->uri->segment(4))) {
                $inputs = ["vs_img_title_2","vs_img_sub_title_2"];
                $values = [$details[0]->vs_img_title_2,$details[0]->vs_img_sub_title_2];
                $id =  $this->standard->inputs($inputs, $values);
            } else {
                $inputs = ["vs_img_title_2","vs_img_sub_title_2"];
                $values = [$details[0]->vs_img_title_2,$details[0]->vs_img_sub_title_2];
                $id = $this->standard->inputs($inputs, $values);
            }
        ?> 
    </div>
    <div class="col-sm-4">
        <?php 
            $details = $this->load->details("pckg_what_is_decolgen", 1);
            if ($this->uri->segment(4) !== NULL || !empty($this->uri->segment(4))) {
                $inputs = ["others_img_2"];
                $values = [$details[0]->others_img_2];
                $id =  $this->standard->inputs($inputs, $values);
            } else {
                $inputs = ["others_img_2"];
                $values = [$details[0]->others_img_2];
                $id = $this->standard->inputs($inputs, $values);
            }
        ?>
    </div>
  </div>
  <hr>
    <div class="row" style="border: 2px solid #d2d6de;">
        <hr>
        <div class="col-sm-4">
            <?php 
                $details = $this->load->details("pckg_what_is_decolgen", 1);
                if ($this->uri->segment(4) !== NULL || !empty($this->uri->segment(4))) {
                    $inputs = ["decolgen_img_3"];
                    $values = [$details[0]->decolgen_img_3];
                    $id =  $this->standard->inputs($inputs, $values);
                } else {
                    $inputs = ["decolgen_img_3"];
                    $values = [$details[0]->decolgen_img_3];
                    $id = $this->standard->inputs($inputs, $values);
                }
            ?>
        </div>
        <div class="col-sm-4">
            <?php 
                $details = $this->load->details("pckg_what_is_decolgen", 1);
                if ($this->uri->segment(4) !== NULL || !empty($this->uri->segment(4))) {
                    $inputs = ["vs_img_title_3"];
                    $values = [$details[0]->vs_img_title_3];
                    $id =  $this->standard->inputs($inputs, $values);
                } else {
                    $inputs = ["vs_img_title_3"];
                    $values = [$details[0]->vs_img_title_3];
                    $id = $this->standard->inputs($inputs, $values);
                }
            ?> 
        </div>
        <div class="col-sm-4">
            <?php 
                $details = $this->load->details("pckg_what_is_decolgen", 1);
                if ($this->uri->segment(4) !== NULL || !empty($this->uri->segment(4))) {
                    $inputs = ["others_img_3"];
                    $values = [$details[0]->others_img_3];
                    $id =  $this->standard->inputs($inputs, $values);
                } else {
                    $inputs = ["others_img_3"];
                    $values = [$details[0]->others_img_3];
                    $id = $this->standard->inputs($inputs, $values);
                }
            ?>
        </div>
  </div>

    </div>
</div>
<script>

    AJAX.config.base_url(base_url); 
    
    $(document).ready(function(){

        $('.size_filter').addClass("sample_input");

        $('.img_banner_preview').attr("style","width: 130px; background-color: #9c9c9c;");

        $('.decolgen_img_1_label').attr("id","decolgen_img_1_label");
        $('.decolgen_img_1_label').removeAttr("class"); 
        $('#decolgen_img_1_label').attr("class", "control-label decolgen_img_1_label col-sm-12");

        $('.vs_img_label').attr("id","vs_img_label");
        $('.vs_img_label').removeAttr("class"); 
        $('#vs_img_label').attr("class", "control-label vs_img_label col-sm-12");

        $('.others_img_1_label').attr("id","others_img_1_label");
        $('.others_img_1_label').removeAttr("class"); 
        $('#others_img_1_label').attr("class", "control-label others_img_1_label col-sm-12");

        $('.decolgen_img_title_label').attr("id","decolgen_img_title_label");
        $('.decolgen_img_title_label').removeAttr("class"); 
        $('#decolgen_img_title_label').attr("class", "control-label decolgen_img_title_label col-sm-12");

        $('.decolgen_img_sub_title_label').attr("id","decolgen_img_sub_title_label");
        $('.decolgen_img_sub_title_label').removeAttr("class"); 
        $('#decolgen_img_sub_title_label').attr("class", "control-label decolgen_img_sub_title_label col-sm-12");

        $('.others_img_sub_title_label').attr("id","others_img_sub_title_label");
        $('.others_img_sub_title_label').removeAttr("class"); 
        $('#others_img_sub_title_label').attr("class", "control-label others_img_sub_title_label col-sm-12");

        $('.vs_img_title_1_label').attr("id","vs_img_title_1_label");
        $('.vs_img_title_1_label').removeAttr("class"); 
        $('#vs_img_title_1_label').attr("class", "control-label vs_img_title_1_label col-sm-12");

        $('.others_img_title_label').attr("id","others_img_title_label");
        $('.others_img_title_label').removeAttr("class"); 
        $('#others_img_title_label').attr("class", "control-label others_img_title_label col-sm-12");

        $('.decolgen_img_2_label').attr("id","decolgen_img_2_label");
        $('.decolgen_img_2_label').removeAttr("class"); 
        $('#decolgen_img_2_label').attr("class", "control-label decolgen_img_2_label col-sm-12");

        $('.vs_img_title_2_label').attr("id","vs_img_title_2_label");
        $('.vs_img_title_2_label').removeAttr("class"); 
        $('#vs_img_title_2_label').attr("class", "control-label vs_img_title_2_label col-sm-12");

        $('.vs_img_sub_title_2_label').attr("id","vs_img_sub_title_2_label");
        $('.vs_img_sub_title_2_label').removeAttr("class"); 
        $('#vs_img_sub_title_2_label').attr("class", "control-label vs_img_sub_title_2_label col-sm-12");

        $('.others_img_2_label').attr("id","others_img_2_label");
        $('.others_img_2_label').removeAttr("class"); 
        $('#others_img_2_label').attr("class", "control-label others_img_2_label col-sm-12");

        $('.decolgen_img_3_label').attr("id","decolgen_img_3_label");
        $('.decolgen_img_3_label').removeAttr("class"); 
        $('#decolgen_img_3_label').attr("class", "control-label decolgen_img_3_label col-sm-12");

        $('.vs_img_title_3_label').attr("id","vs_img_title_3_label");
        $('.vs_img_title_3_label').removeAttr("class"); 
        $('#vs_img_title_3_label').attr("class", "control-label vs_img_title_3_label col-sm-12");

        $('.others_img_3_label').attr("id","others_img_3_label");
        $('.others_img_3_label').removeAttr("class"); 
        $('#others_img_3_label').attr("class", "control-label others_img_3_label col-sm-12");
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

                    AJAX.update.table("pckg_what_is_decolgen");
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