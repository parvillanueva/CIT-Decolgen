<div class="box">
        <?php   
            $data['buttons'] = ['save','close']; // add, save, update
            $this->load->view("content_management/template/buttons", $data);
        ?>  
        <div class="box-body">   
            <div class="form-horizontal">
                <div class="form-group">
                    <label class="col-sm-2 control-label">Menu Name<span style="color: red;">*</span>:</label>
                    <div class="col-sm-5">
                        <input id="menu_name" class="form-control required" placeholder="Menu Name" maxlength="250" accept="/[^a-zA-Z0-9\u00f1\u00d1 ._,-\/]/g" onkeyup="this.value=this.value.replace(/[^a-zA-Z0-9\u00f1\u00d1 ._,-\/]/g,'');">
                        <small class="standard-max"><i>Maximum character count is 250.</i></small>
                    </div>
                </div>

                <div class="form-group div_type">
                    <label class="col-sm-2 control-label">Type<span style="color: red;">*</span>:</label>
                    <div class="col-sm-5">
                        <select class="form-control menu_type required">
                            <option selected disabled>Select..</option>
                            <option value='Module' >Module</option>
                            <option value='Url' >Url</option>
                            <option value='Group Menu'>Group Menu</option>
                            <option value='Buy Now'>Buy Now</option>
                        </select>
                    </div>
                     <div id="buy_now_add" class="buy_now_add_btn" style="display: none;"><span class="fa fa fa-plus "></span></div>
                </div>

                <div class="form-group div_default">
                    <label class="col-sm-2 control-label"></label>
                    <div class="col-md-5 checkbox">
                        <label><input id="default" type="checkbox" value="">Set as Default</label>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Status<span style="color: red;">*</span>:</label>
                    <div class="col-sm-5 ">
                        <select id="status" class="form-control required">
                            <option value=1 selected>Active</option>
                            <option value=0>Inactive</option>
                        </select>
                    </div>
                </div>

                <div class="buy_now_container" style="display: none;">

                    <?php
                        $inputs = [
                            'redirect_url',
                            'image_banner',
                        ];

                        $buy_now_content = $this->standard->inputs($inputs);
                    ?>

                </div>
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
                <hr>
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

    .buy_now_add_btn {
        display: inline-block;
        width: 30px;
        height: 30px;
        border-radius: 50%;
        position: relative;
        background: #60c0ef;
        cursor: pointer;
    }

    .buy_now_add_btn span {
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        margin: auto;
        color: #fff;
        text-align: center;
        font-size: 15px;
        width: 16px;
        height: 15px;
        cursor: pointer;
    }

    .buy_now_add_btn:active {
      background-color: #5cabd2;
      transform: translateY(4px);
    }

    .remove_buy_now_btn {
        width: 30px;
        height: 30px;
        border-radius: 50%;
        position: absolute;
        background: #60c0ef;
        cursor: pointer;
        right: 0;
        top: -15px;
    }

    .remove_buy_now_btn span {
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        margin: auto;
        color: #fff;
        text-align: center;
        font-size: 15px;
        width: 16px;
        height: 15px;
        cursor: pointer;
    }

    .remove_buy_now_btn:active {
      background-color: #5cabd2;
      transform: translateY(4px);
    }

    .buy_now_div {
        padding: 20px 0px;
        position: relative;
    }

</style>

<script type="text/javascript">

    var base_url = '<?=base_url();?>';
    var content_management = '<?=base_url("content_management");?>';
    var global_controller = '<?=base_url("content_management/global_controller");?>';
    var confirm_add = '<?=$this->standard->confirm("confirm_add");?>';
    var add_success = '<?=$this->standard->dialog("add_success");?>';

    var parent_id = '<?=$parentid;?>';
    var menu_orders = '<?=$order;?>';
    var menu_level = '<?=$level;?>';
    var menu_group = '<?=$menu_group;?>';
    var sess_uid = '<?=$this->session->userdata("sess_uid");?>';

</script>







