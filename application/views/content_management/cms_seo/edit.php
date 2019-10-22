<?php 
    $url =  "http://{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";
    $escaped_url = htmlspecialchars( $url, ENT_QUOTES, 'UTF-8' );

    $urls = explode('/', $escaped_url);
    array_pop($urls);
    array_pop($urls);
?>

<div class="box">
    <?php $data["buttons"] = ["update","close"]; ?>
    <?php $this->load->view("content_management/template/buttons", $data); ?>

    <div class="box-body">
        <div class="form-group">
            <label class="control-label meta_url_label col-sm-2">Meta Url<span style="color: red;">*</span> :</label>
            <div class = "col-sm-10">
                <div class="input-group ">
                    <span class="input-group-addon" id="basic-addon3" ><?=base_url().$fixed_url;?></span>
                    <input type="text" name="meta_url" value="<?=$this->uri->segment(5);?>" class="form-control meta_url_input required_input" data-url="url" id="meta_url" maxlength="255" placeholder="Meta Url" label="Meta Url">
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <?php
            $inputs = [
                // 'meta_url',
                'meta_title',
                'meta_description',
                'meta_keyword',
                'meta_image',
                // 'status',

            ];
            $values = [
                // $details[0]->meta_url,
                $details[0]->meta_title,
                $details[0]->meta_description,     
                $details[0]->meta_keyword,
                $details[0]->meta_image,
                // $details[0]->meta_status,      
            ];
            $id1 = $this->standard->inputs($inputs, $values);
        ?>
 
        <div class="form-group div_type">
            <label class="col-sm-2 control-label">Type</label>
            <div class="col-sm-10">
                <select class="form-control menu_type ">
                    <option value = '1' <?=($details[0]->meta_type == 1) ? "selected" : "";?>>Parent</option>
                    <option value = '2' <?=($details[0]->meta_type == 2) ? "selected" : "";?>>Child</option>
                </select>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="form-group parent-menu">
            <label class="control-label col-sm-2">Parent Meta Tags</label>
            <div class="col-sm-10">
                <select class="form-control" id = "meta_parent">
                    <option value="" data-level='0' data-url='' selected>Main Menu</option>
                <?php
                    foreach ($metatags as $key => $value) {
                ?>
                    <option value="<?=$value->id?>" data-level = "<?=$value->meta_level?>" <?=($details[0]->meta_parent_id == $value->id) ? "selected" : "";?> data-url = "<?=$value->meta_url;?>/">
                        <?=$value->meta_url?>
                    </option>
                <?php }
                ?>
                </select>
            </div>
            <div class="clearfix"></div>
        </div>

        <?php
            $inputs = [
                'asc_ref',
            ];
            $values = [
                $details[0]->asc_ref_code,   
            ];
            $id2 = $this->standard->inputs($inputs, $values);
        ?>
    </div>
</div> 

<script type="text/javascript">
    
    var base_url = '<?=base_url();?>';
    var content_management = '<?=base_url("content_management");?>';
    var global_controller = '<?=base_url("content_management/global_controller");?>';
    var confirm_update = '<?=$this->standard->confirm("confirm_update");?>';
    var update_success = '<?=$this->standard->dialog("update_success");?>';
    var has_under = "<?=$this->standard->dialog("hasUnder");?>";
    
    var level = '<?=$details[0]->meta_level;?>';
    var type = '<?=$details[0]->meta_type;?>';
    var fixed_url = '<?=$fixed_url;?>';
    var current_url = '<?=$url;?>';
    var og_type = '<?=$details[0]->og_type;?>';
    var id1 = '<?=$id1;?>';
    var id2 = '<?=$id2;?>';
    var segment_4 = '<?=$this->uri->segment(4);?>';
    var has_under_count = '<?=count($hasUnder);?>';

</script>