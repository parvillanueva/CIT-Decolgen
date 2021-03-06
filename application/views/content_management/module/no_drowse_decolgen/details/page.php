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
                        $inputs = ["no_drowse_title","no_drowse_sub_title"];
                        $values = [$details[0]->no_drowse_title,$details[0]->no_drowse_sub_title];
                        $top_details =  $this->standard->inputs($inputs, $values);
                    } else {
                        $inputs = ["no_drowse_title","no_drowse_sub_title"];
                        $values = [$details[0]->no_drowse_title,$details[0]->no_drowse_sub_title];
                        $top_details = $this->standard->inputs($inputs, $values);
                    }
                ?> 
              </div>


        </div>
        <hr>
        <div class="row" style="border: 2px solid #d2d6de;">
          <hr>
          <div class="col-sm-12" style="">
            <?php 
                $details = $this->load->details("pckg_no_drowse_details", 1);
                if ($this->uri->segment(4) !== NULL || !empty($this->uri->segment(4))) {
                    $inputs = ["no_drowse_decolgen","no_drowse_decolgen_image","no_drowse_15mins_image","no_drowse_small_text","no_drowse_details_title1","no_drowse_details1","no_drowse_details_title2","no_drowse_details2"];
                    $values = [$details[0]->no_drowse_decolgen,$details[0]->no_drowse_decolgen_image,$details[0]->no_drowse_15mins_image,$details[0]->no_drowse_small_text,$details[0]->no_drowse_details_title1,$details[0]->no_drowse_details1,$details[0]->no_drowse_details_title2,$details[0]->no_drowse_details2];
                    $bottom_details =  $this->standard->inputs($inputs, $values);
                } else {
                    $inputs = ["no_drowse_decolgen","no_drowse_decolgen_image","no_drowse_15mins_image","no_drowse_small_text","no_drowse_details_title1","no_drowse_details1","no_drowse_details_title2","no_drowse_details2"];
                    $values = [$details[0]->no_drowse_decolgen,$details[0]->no_drowse_decolgen_image,$details[0]->no_drowse_15mins_image,$details[0]->no_drowse_small_text,$details[0]->no_drowse_details_title1,$details[0]->no_drowse_details1,$details[0]->no_drowse_details_title2,$details[0]->no_drowse_details2];
                    $bottom_details =  $this->standard->inputs($inputs, $values);
                }
            ?>             
          </div>
          <hr>   
        </div>
            <hr>

    </div>
</div>
<script>

    AJAX.config.base_url(base_url); 
    var top_content = '<?=$top_details;?>';
    var bottom_content = '<?=$bottom_details;?>';
    $(document).ready(function(){
        $('.size_filter').addClass("sample_input");
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

        if (validate.standard(top_content)) {
            if (validate.standard(bottom_content)) {
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
        }
    });
</script>
<script type="text/javascript" > 
<?php
    $dir = dirname(__FILE__);
    include($dir . "/standardconfig.js");
?>
</script>