<div class="box">
    <?php $data["buttons"] = ["update","close"]; ?>
    <?php $this->load->view("content_management/template/buttons", $data); ?>

    <div class="box-body">
        <?php
            $details = $this->load->details("pckg_crs_config",1);
            $inputs = [
                'crs_host',
                'crs_token',
            ];
 
            $values = [
                $details[0]->host,
                $details[0]->token,
            ];
            
           $id = $this->standard->inputs($inputs, $values);
        ?>

        <div class="form-group">
            <div class="col-sm-10 col-sm-offset-2">
                <p><b>Note:</b> <span>The host and token data are used for CRS Signup.</span></p>
                <!-- <p><b>Controller:</b> <span>./application/controllers/CRS_controller.php</span></p>
                <p><b>Model:</b> <span>./application/models/CRS_model.php</span></p> -->
                <p><b>CRS API Link: </b> <span><?=base_url()?>crs_controller/api_registration</span></p>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    
</div>

<script type="text/javascript">
    
    AJAX.config.base_url(base_url);

    $(document).on('click', '#btn_update', function(){   
        if(validate.standard('<?= $id;?>')){
            var modal_obj = '<?= $this->standard->confirm("confirm_update"); ?>'; 
            modal.standard(modal_obj, function(result){
                if(result){
                    modal.loading(true);

                    AJAX.update.table("pckg_crs_config");
                    AJAX.update.where("id", 1);
                    AJAX.update.params("host", $('#crs_host').val());
                    AJAX.update.params("token", $('#crs_token').val();
                    AJAX.update.params("config_update_date", moment(new Date()).format('YYYY-MM-DD HH:mm:ss'));

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