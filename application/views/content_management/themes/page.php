<div class="box">
    <?php
        $data['buttons'] = ['update', 'cancel']; // add, save, update
        $this->load->view("content_management/template/buttons", $data);
    ?>
    <div class="box-body">
        <?php
            $details = str_replace(base_url(), "", $this->load->details("site_themes",1));

            $inputs = [
                'navigation_position'
            ];

            $db_values = [
                $details[0]->navigation_position
            ];

            $display = $this->standard->inputs($inputs, $db_values);
        ?>
        <div class="form-group">
            <div class="col-sm-2"></div>
            <div class="col-sm-10">
                <img class="position_image" src="<?=base_url('cms/images/menu_position/menu_').$details[0]->navigation_position.'.png';?>" width="450" height="225">
            </div>
            <div class="clear-fix"></div>
        </div>
    </div>
</div>

<script type="text/javascript">

    var base_url = '<?=base_url();?>';
    var role = '<?=$this->session->userdata("sess_role");?>';
    var content_management = '<?=base_url("content_management");?>';
    var global_controller = '<?=base_url("content_management/global_controller");?>';
    var confirm_update = '<?=$this->standard->confirm("confirm_update");?>';
    var confirm_cancel = '<?=$this->standard->confirm("confirm_cancel");?>';
    var update_success = '<?=$this->standard->dialog("update_success");?>';

</script>