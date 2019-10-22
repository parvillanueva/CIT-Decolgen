<?php 
    $url =  "http://{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";
    $escaped_url = htmlspecialchars( $url, ENT_QUOTES, 'UTF-8' );

    $urls = explode('/', $escaped_url);
    array_pop($urls);
?>

<div class="box">
 <?php $data["buttons"] = ["save","close"]; ?>
    <?php $this->load->view("content_management/template/buttons", $data); ?>
    <div class="box-body">
        <div class="form-group">
            <label class="control-label meta_url_label col-sm-2">Meta Url<span style="color: red;">*</span> :</label>
            <div class = "col-sm-10">
                <div class="input-group ">
                    <span class="input-group-addon" id="basic_addon3" ><?=base_url();?></span>
                    <input type="text" name="meta_url" value="" class="form-control meta_url_input required_input" data-url="url" id="meta_url" maxlength="255" placeholder="Meta Url" label="Meta Url" accept="/[^a-zA-Z0-9\u00f1\u00d1 .@#$_,-\/]/g" onkeyup="this.value=this.value.replace(/[^a-zA-Z0-9\u00f1\u00d1 .@#$_,-\/]/g,'');">
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
                // 'status',

            ];

            $id1 = $this->standard->inputs($inputs);
        ?>
        <!-- <div class="form-group div_meta">
            <label class="control-label col-sm-2">Meta Type</label>
            <div class="col-sm-10">
                <select class="form-control og-type">
                    <option selected disabled>Select..</option>
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
            <div class="clearfix"></div>
        </div> -->
      

        <!-- <div class="form-group div_type">
            <label class="col-sm-2 control-label">Type</label>
            <div class="col-sm-10">
                <select id="menu_type" class="form-control menu_type required_input">
                    <option value = '0' selected disabled>Select..</option>
                    <option value = '1'>Parent</option>
                    <option value = '2'>Child</option>
                </select>
            </div>       
            <div class="clearfix"></div>     
        </div> -->

        <?php
            $inputs = [
                'link_type',
                'asc_ref',   
            ];

            $id2 = $this->standard->inputs($inputs);
        ?>
        


   
    </div>

    

</div> 

<script type="text/javascript">

    var base_url = '<?=base_url();?>';
    var content_management = '<?=base_url("content_management");?>';
    var global_controller = '<?=base_url("content_management/global_controller");?>';
    var confirm_add = '<?=$this->standard->confirm("confirm_add");?>';
    var add_success = '<?=$this->standard->dialog("add_success");?>';

    var id1 = '<?=$id1;?>';
    var id2 = '<?=$id2;?>';
    var return_url = '<?=implode("/", $urls);?>';
    var message = '<?= $this->standard->dialog("data_exist"); ?>';

</script>