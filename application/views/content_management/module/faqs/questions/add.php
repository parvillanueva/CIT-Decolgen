<div class="box">
	<?php
		$data['buttons'] = ['save', 'close'];
		$this->load->view("content_management/template/buttons",$data);
	?>
    <div class="box-body">
    	<?php 
            $inputs = ["question","answer","status"];
            $id = $this->standard->inputs($inputs);
        ?>
    </div>
</div>

<script>

    AJAX.config.base_url("<?=base_url();?>"); 

    $(document).ready(function(){
        $('.size_filter').addClass("sample_input");
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

            var modal_obj = '<?= $this->standard->confirm("confirm_save"); ?>'; 
            modal.standard(modal_obj, function(result){
                if(result){
                    modal.loading(true);

                    AJAX.insert.table("pckg_faqs_questions");
                    $.each(form_data, function(a,b) {
                        AJAX.insert.params(a, b);
                    });

                    AJAX.insert.exec(function(result){
                        modal.loading(false);
                        modal.alert("<?= $this->standard->dialog("add_success"); ?>", function(){
                            location.href = '<?=base_url("content_management/site_faqs_questions") ?>';
                        });
                    })
                }
            });
        }
    });

    $(document).on('click', '#btn_close', function(e){
        location.href = '<?=base_url("content_management/site_faqs_questions") ?>';
    });
</script>
<script type="text/javascript" > 
<?php
    $dir = dirname(__FILE__);
    include($dir . "/standardconfig.js");
?>
</script>