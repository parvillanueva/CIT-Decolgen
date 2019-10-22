<div class="box">
    <?php   
        $data['buttons'] = ['update','close']; // add, save, update
        $this->load->view("content_management/template/buttons", $data);
    ?>  
    <div class="box-body">   
        <div class="form-horizontal">
            <div class="form-group">
                <label class="col-sm-2 control-label">Group</label>
                <div class="col-sm-5">
                    <select class="form-control" id = "parent">
                        <option value = "0" data-level = '0' selected>Main Menu</option>
                    <?php
                        foreach ($menus as $key => $value) {
                    ?>
                        <option value="<?=$value->id?>" data-level = "<?=$value->menu_level?>" <?=($details[0]->menu_parent_id == $value->id) ? "selected" : "";?> >
                            <?=$value->menu_name?>
                        </option>
                    <?php }
                    ?>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Menu Name</label>
                <div class="col-sm-5">
                    <input id="menu_name" class="form-control required" maxlength="250">
                    <small class="standard-max"><i>Maximum character count is 250.</i></small>
                </div>
            </div>
            <div class="form-group div_type">
                <label class="col-sm-2 control-label">Type</label>
                <div class="col-sm-5">
                    <select class="form-control menu_type required">
                        <option selected disabled>Select..</option>
                        <option value = "Module">Module</option>
                        <option value = "Url">Url</option>
                        <option value = "Group Menu">Group Menu</option>
                        <option value = "Buy Now">Buy Now</option>
                    </select>
                </div>
            </div>

            <!--  <div class="form-group">
                <label class="col-sm-2 control-label">URL</label>
                <div class="col-sm-5 url"></div>
            </div> -->
            <div class="form-group div_default">
                <label class="col-sm-2 control-label"></label>
                <div class="col-md-5 checkbox">
                    <label><input id="default" type="checkbox" value="">Set as Default</label>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Status</label>
                <div class="col-sm-5">
                    <select id="status" class="form-control">
                        <option value=1>Active</option>
                        <option value=0>Inactive</option>
                    </select>
                </div>
            </div>

            <!-- div class="form-group div_type">
                <label class="col-sm-2 control-label"></label>
                <div class="col-md-5 checkbox">
                    <label><input id="default" type="checkbox" value="">Set as Default</label>
                </div>
            </div> -->
            <!-- <div class="form-group div_meta">
                <label class="col-sm-2 control-label">Meta Keywords</label>
                <div class="col-sm-7">
                    <textarea id="keyword" class="text form-control" rows="10" placeholder=""></textarea>
                </div>
            </div>
            <div class="form-group div_meta">
                <label class="col-sm-2 control-label">Meta Description</label>
                <div class="col-sm-7">
                    <textarea id="description" class="text form-control" rows="10" placeholder=""></textarea>
                </div>
            </div>
            <div class="form-group div_meta">
                <label class="control-label col-sm-2">OG Type</label>
                <div class="col-sm-5">
                    <select class="form-control og-type">
                        <option value="article">article</option>
                        <option value="book">book</option>
                        <option value="books.author">books.author</option>
                        <option value="books.book">books.book</option>
                        <option value="books.genre">books.genre</option>
                        <option value="business.business">business.business</option>
                        <option value="fitness.course">fitness.course</option>
                        <option value="game.achievement">game.achievement</option>
                        <option value="music.album">music.album</option>
                        <option value="music.playlist">music.playlist</option>
                        <option value="music.radio_station">music.radio_station</option>
                        <option value="music.song">music.song</option>
                        <option value="place">place</option>
                        <option value="product">product</option>
                        <option value="product.group">product.group</option>
                        <option value="product.item">product.item</option>
                        <option value="profile">profile</option>
                        <option value="restaurant.menu">restaurant.menu</option>
                        <option value="restaurant.menu_item">restaurant.menu_item</option>
                        <option value="restaurant.menu_section">restaurant.menu_section</option>
                        <option value="restaurant.restaurant">restaurant.restaurant</option>
                        <option value="video.episode">video.episode</option>
                        <option value="video.movie">video.movie</option>
                        <option value="video.other">video.other</option>
                        <option value="video.tv_show">video.tv_show</option>
                    </select>
                </div>
            </div>
            <div class="form-group div_meta">
                <label class="control-label col-sm-2">OG Title</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control og-title" rows="5">
                </div>
            </div>
            <div class="form-group div_meta">
                <label class="control-label col-sm-2">OG Image</label>
                <div class="col-sm-5">
                    <div class="input-group">
                        <input class="form-control og-img" readonly value="" id="og_image_img" required>
                        <input type="hidden" id="og_image_alt">
                        <span class="input-group-btn ">
                            <button type="button" class="btn btn-primary open_filemanager" data-id="og_image">Open File Manager</button>
                        </span>
                    </div>
                    <small><strong>Note:</strong> Acceptable file types are jpg, jpeg and png.</small>
                    <div id="og_image_container">

                    </div>
                    <span id="og_image_img_err" class="error-msg"></span>
                </div>
            </div> -->
        </div>
    </div>
</div>

<style type="text/css">
    .icon-picker-list .glyphicon {
        font-size: 23px;
        margin-bottom: 10px;
        margin-top: 5px;
    }
</style>

<script type="text/javascript">

    var base_url = '<?=base_url();?>';
    var content_management = '<?=base_url("content_management");?>';
    var global_controller = '<?=base_url("content_management/global_controller");?>';
    var confirm_update = '<?=$this->standard->confirm("confirm_update");?>';
    var update_success = '<?=$this->standard->dialog("update_success");?>';

    var old_title = '<?=$details[0]->menu_name?>';
    var hasUnder_count = '<?=count($hasUnder);?>';
    var hasUnder = "<?= $this->standard->dialog("hasUnder"); ?>";
    var segment_4 = '<?= $this->uri->segment(4);?>';
    var sess_uid = '<?=$this->session->userdata("sess_uid");?>';

</script>