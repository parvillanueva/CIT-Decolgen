<div class="box">
    <?php
        $data['buttons'] = ['update']; // add, save, update
        $this->load->view("content_management/template/buttons", $data);
    ?> 
 	<div class="box-body">
        <?php

            $details = str_replace(base_url(), "", $this->load->details("cms_preference",1));

            $inputs = [
                'cms_title',
                'skin',
                //'edit_header_label',
                'ad_authentication'
            ];

            $db_values = [
                $details[0]->cms_title,
                $details[0]->cms_skin,
                //$details[0]->cms_edit_label,
                $details[0]->ad_authentication
            ];

            $display = $this->standard->inputs($inputs, $db_values);
        ?> 
    </div>
 
<script type="text/javascript">

    var base_url ="<?= base_url();?>";
    var sess_role = '<?=$this->session->userdata("sess_role");?>';
    var display = '<?=$display;?>';
    var content_management = '<?=base_url("content_management");?>';
    var confirm_update = '<?=$this->standard->confirm("confirm_update");?>';
    var update_success = '<?=$this->standard->dialog("update_success");?>';

</script>