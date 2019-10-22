<style type="text/css">
    th:first-child{
        width:20px;   
    }

    th:last-child{
        width: 30px;
    }

    td:last-child{
        text-align: center;
    }
</style>

<div class="box">
    <?php $data["buttons"] = ["add","search"]; ?>
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
        <div class="col-md-12 list-data tbl-content" id="list-data">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th><input class="selectall" type = "checkbox"></th>
                        <th>User Role</th>
                        <th>Date Modified</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody class="table_body"></tbody>
            </table>
            <div class="list_pagination"></div>
        </div>
        
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

    <?php 
        $url =  "http://{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";
        $escaped_url = htmlspecialchars( $url, ENT_QUOTES, 'UTF-8' );

        $urls = explode('/', $escaped_url);
        array_pop($urls);
    ?>
    
    var base_url = '<?=base_url();?>';
    var current_url = "<?= $url;?>";
    var role = '<?=$this->session->userdata("sess_role");?>';
    var content_management = '<?=base_url("content_management");?>';
    var global_controller = '<?=base_url("content_management/global_controller");?>';
    var confirm_update = '<?=$this->standard->confirm("confirm_update");?>';
    var confirm_delete = '<?= $this->standard->confirm("confirm_delete"); ?>';
    var update_success = '<?=$this->standard->dialog("update_success");?>';

</script>
