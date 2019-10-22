<div class="box">
    <?php $data["buttons"] = ["add","close"]; ?>
    <?php $this->load->view("content_management/template/buttons", $data); ?>
    <div class="box-body">   
        <!-- LIST TABLE -->
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th style="width: 50px"><input class="selectall" type = "checkbox"></th>
                        <th>Url</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Link Type</th>
                        <th>Status</th>
                        <th style="width: 50px;">Action</th>
                    </tr>
                </thead>
                <tbody class="table_body"></tbody>
            </table>
            <!-- PAGINATION -->
            <div class="list_pagination"> </div>
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
    var content_management = '<?=base_url("content_management");?>';
    var global_controller = '<?=base_url("content_management/global_controller");?>';
    var confirm_update = '<?=$this->standard->confirm("confirm_update");?>';
    var update_success = '<?=$this->standard->dialog("update_success");?>';

    var confirm_unpublish_meta = '<?=$this->standard->confirm("confirm_unpublish_meta");?>';
    var confirm_publish_meta = '<?=$this->standard->confirm("confirm_publish_meta");?>';
    var confirm_delete_meta = '<?=$this->standard->confirm("confirm_delete_meta");?>';

    var current_url = '<?=$url;?>';
    var parent_id = '<?=$menu_id;?>';
    var menu_group = '<?=$menu_group;?>';
    var sitemap_html = '<?= base_url("sitemap.html");?>';
    var sitemap_xml = '<?= base_url("sitemap.xml");?>';
    
</script>