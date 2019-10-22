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
                <p><b>CRS API Link: </b> <span><?=base_url()?>crs_api/registration</span></p>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    
</div>

<script type="text/javascript">

    var base_url = '<?= base_url();?>';
    var content_management = '<?=base_url("content_management");?>';
    var confirm_update = '<?=$this->standard->confirm("confirm_update");?>';
    var update_success = '<?=$this->standard->dialog("update_success");?>';
    var form_id = '<?= $id;?>';

</script>