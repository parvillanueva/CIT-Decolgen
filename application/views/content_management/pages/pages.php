<div class="box audit_trail_div">
    <?php   
        $data['buttons'] = []; // add, save, update
        $this->load->view("content_management/template/buttons", $data);
    ?>  

    <div class="box-body">
    <!-- LIST TABLE -->
    <div class="col-md-12 list-data tbl-content" id="list-data">
            <table class="table table-bordered sorted_table">
                <thead>
                    <tr id="sortable">
                        <th>Menu</th>
                        <th>Url</th>
                        <th>Type</th>
                        <th>Modified</th>
                        <th>Status</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody class="table_body">
                    
                </tbody>
            </table>
        </div>
        <!-- PAGINATION -->
        <div class="list_pagination"></div>
    </div>

</div>

<style type="text/css">
    #header { position: fixed; top: 0; background: #fff;}
    body .breadcrumb {        
        border: none;
    }
    #form_search {
        width: 20%;
        display: inline-block;
    }
    .audit_trail_div .form-group.has-feedback {
        margin: 0;
    }

</style>

<script type="text/javascript">

    var base_url = '<?=base_url();?>';
    var content_management = '<?=base_url("content_management");?>';
    var global_controller = '<?=base_url("content_management/global_controller");?>';

</script>