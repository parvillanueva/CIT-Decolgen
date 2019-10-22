<style type="text/css">
    
.module_content{
    overflow: auto;
    height: 300px;
}
.menu_header_ul {
    padding: 0;
    display: block;
    vertical-align: middle;
    margin: 0;
}
.menu_header_ul li{
    display: inline-block;
    width:15%;
    text-align: center;
}

.menu_header_ul li:first-child {
    width: 50%;
    text-align: left;
}

.menu_header_li span {
    padding-left: 10px;
}

.module_header_container {
    position: absolute;
    width: 100%;
    padding: 9px 0px;
    overflow: hidden;
    background: #222d32;
    color: #fff;
    font-weight: 600;
    font-size: 15px;
    z-index: 1;
}
.module_body_container {
    padding-top: 40px;
    width: 100%;
    position: relative;
}

.module_col {
    position: relative;
    width: 100%;
    overflow: hidden;
}
ul.parent_menu {
    padding: 0;
    display: block;
    vertical-align: middle;
    margin: 0;
    font-size: 16px;
}

ul.child_menu {
    padding: 0;
    display: block;
    vertical-align: middle;
    margin: 0;
}


.menu_title {
    display: inline-block;
    width: 52%;
    background: rgba(44, 59, 65, 0.15);
    color: #000;
    font-weight: 500;
    font-size : 17px;
}

.menu_title span {
    padding-left: 10px;
}

.menu_chkbx {
    display: inline-block;
    width: 16%;
    text-align: center;
    background: rgba(44, 59, 65, 0.15);
    font-size: 17px;
}



.sub_menu_title {
    display: inline-block;
    width: 52%;
}

.sub_menu_title span {
    padding-left: 20px;
}

.sub_menu_chkbx {
    display: inline-block;
    width: 16%;
    text-align: center;
}



</style>


<div class="box">
    <?php $data["buttons"] = ["update","close"]; ?>
    <?php $this->load->view("content_management/template/buttons", $data); ?>
    <div class="box-body">
        <?php
            $role_id = $this->uri->segment(4);
            $content_details = $this->load->details("cms_user_roles", $role_id);

            //for decoding html entities

            $inputs = [
                'name',
                'status'
            ];

            $values = [
                $this->standard->strReplaceAssoc($content_details[0]->name),
                $content_details[0]->status
            ];

            $content_id = $this->standard->inputs($inputs,$values);
        ?>

        <div class="form-group">
            <label class="control-label status_label col-sm-2">Display</label>
            <div class="col-sm-10">
                <div class="module_col">
                        <div class="module_content">
                                <div class= "module_header_container">
                                        <ul class= "menu_header_ul">
                                            <li class="menu_header_li"><span>Modules</span></li>
                                            <li class="menu_header_li"><input class="select_all_read" type = "checkbox"><span> Read</span></li>
                                            <li class="menu_header_li"><input class="select_all_write" type = "checkbox"><span> Write</span></li>
                                            <li class="menu_header_li"><input class="select_all_delete" type = "checkbox"><span> Delete</span></li>
                                        </ul>
                                  </div> 
                                <div class="module_body_container">
                              </div>
                        </div>
     
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>

</div> 

<script type="text/javascript">

    <?php 
        $url =  "http://{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";
        $escaped_url = htmlspecialchars( $url, ENT_QUOTES, 'UTF-8' );

        $urls = explode('/', $escaped_url);
        array_pop($urls);
    ?>

    var base_url = '<?=base_url();?>';
    var current_url = '<?=$url;?>';
    var menu_role_id = '<?=$role_id;?>';
    var content_id = '<?=$content_id;?>';

    var role = '<?=$this->session->userdata("sess_role");?>';
    var content_management = '<?=base_url("content_management");?>';
    var global_controller = '<?=base_url("content_management/global_controller");?>';
    var confirm_update = '<?=$this->standard->confirm("confirm_update");?>';
    var update_success = '<?=$this->standard->dialog("update_success");?>';

</script>