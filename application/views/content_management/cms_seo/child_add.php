<div class="box">
    <?php $data["buttons"] = ["save","close"]; ?>
    <?php $this->load->view("content_management/template/buttons", $data); ?>

    <div class="box-body">
        <div class="form-group">
            <label class="control-label meta_url_label col-sm-2">Meta Url<span style="color: red;">*</span> :</label>
            <div class = "col-sm-10">
                <div class="input-group ">
                    <span class="input-group-addon" id="basic-addon3" ><?=base_url().$fixed_url;?></span>
                    <input type="text" name="meta_url" value="" class="form-control meta_url_input required_input" data-url="url" id="meta_url" maxlength="255" placeholder="Meta Url" label="Meta Url">
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <!-- <div class="form-group">
            <label class="control-label col-sm-2">Meta Tags</label>
            <div class="col-sm-10">
                <select type = "dropdown" class="form-control required_input" id = "metaparent" >
                    <option value = "main">Main Menu</option>
                <?php
                    foreach ($metatags as $key => $value) {
                ?>
                    <option value="<?=$value->id?>"><?=$value->meta_title?></option>
                <?php }
                ?>
                </select>
            </div>
            <div class="clearfix"></div>
        </div> -->
        <?php
            $inputs = [
                // 'meta_url',
                'meta_title',
                'meta_description',
                'meta_keyword',
                'meta_image',
                'status',

            ];

            $this->standard->inputs($inputs);
        ?>

        <div class="form-group div_type">
            <label class="col-sm-2 control-label">Type</label>
            <div class="col-sm-10">
                <select class="form-control menu_type required_input">
                    <option selected disabled>Select..</option>
                    <option value = '1'>Parent</option>
                    <option value = '2'>Child</option>
                </select>
            </div>
            <div class="clearfix"></div>
        </div>

        <?php
            $inputs = [
                'asc_ref',   
            ];

            $this->standard->inputs($inputs);
        ?>
    </div>
</div> 

<script type="text/javascript">

    var base_url = '<?=base_url();?>';
    var content_management = '<?=base_url("content_management");?>';
    var global_controller = '<?=base_url("content_management/global_controller");?>';
    var confirm_add = '<?=$this->standard->confirm("confirm_add");?>';
    var add_success = '<?=$this->standard->dialog("add_success");?>';

    var parent_id = '<?=$menu_id;?>';
    var level = '<?=$menu_level;?>';
    var fixed_url = '<?=$fixed_url."/";?>';
    var menu_group = '<?=$menu_group;?>';

</script>