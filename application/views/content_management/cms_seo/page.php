<?php 
    $url =  "http://{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";
    $escaped_url = htmlspecialchars( $url, ENT_QUOTES, 'UTF-8' );

    $urls = explode('/', $escaped_url);
    array_pop($urls);
?>

<div class="box">
    <?php $data["buttons"] = ["add","search","sitemap"]; ?>
    <?php
        $this->load->view("content_management/template/buttons", $data);

        $optionSet = '';
        foreach($pageOption as $pageOptionLoop){
            $optionSet .= "<option value='".$pageOptionLoop."'>".$pageOptionLoop."</option>";
        }
    ?>
    <div class="box-body">
        <div class="form-group pull-right">
            <label>Show</label> 
                <select class="record-entries">
                    <?php echo $optionSet;?>
                    <option value="999">ALL</option>
                </select>
            <label>Entries</label>
        </div>   
        <!-- LIST TABLE -->
        <div class="col-md-12 list-data tbl-content" id="list-data">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th style="width: 50px"><input class="selectall" type = "checkbox"></th>
                        <th>Url</th>
                        <th>Title</th>
                        <th>Description</th>
                        <!-- <th>Link Type</th> -->
                        <th>Status</th>
                        <th style="width: 50px;">Action</th>
                    </tr>
                </thead>
                <tbody class="table_body"></tbody>
            </table>
            <!-- PAGINATION -->  
        </div>

        <div class="list_pagination"></div>

        <div class="form-group pull-right">
            <label>Show</label> 
                <select class="record-entries">
                    <?php echo $optionSet;?>
                    <option value="999">ALL</option>
                    </select>
            <label>Entries</label>
        </div>
    </div>
</div> 

<script type="text/javascript">
    
    var base_url = '<?=base_url();?>';
    var content_management = '<?=base_url("content_management");?>';
    var global_controller = '<?=base_url("content_management/global_controller");?>';
    var confirm_update = '<?=$this->standard->confirm("confirm_update");?>';
    var update_success = '<?=$this->standard->dialog("update_success");?>';
    var confirm_unpublish_meta = '<?=$this->standard->confirm("confirm_unpublish_meta");?>';
    var confirm_publish_meta = '<?=$this->standard->confirm("confirm_publish_meta");?>';
    var confirm_delete_meta = '<?=$this->standard->confirm("confirm_delete_meta");?>';

    var current_url = '<?=$url;?>';
    var limit = '<?=$pageOption[0];?>';

</script>