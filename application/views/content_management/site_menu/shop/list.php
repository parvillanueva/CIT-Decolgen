<div class="box">
    <div class="box-body">   
        <div class="col-md-12 list-data tbl-content" id="list-data">
            <?php
                $data['table'] = ['site_shop_now' => 'site_'];
                $data['order'] = ['desc' => 'update_date'];
                $data['join'] = [];

                $data['checkbox'] = 1;
                $data['display_fields'] = [
                                            'url' => ['URL'],
                                            'img_banner'  => ['Banner', 150], 
                                            'status'     => ['Status'],
                                            'create_date' => ['Date Created'],
                                            'update_date' => ['Date Updated'],
                                          ];

                $data['search_keyword'] = ['img_banner', 'url', 'status'];
                $data['query'] = "status >= 0";
                $data['sortable'] = ['column'];
                $data['button'] = ['add', 'close', 'search'];
            ?>
            <?php $this->form_table->display_data($data); ?>
        </div>
 	</div>
</div>

<script type="text/javascript">

    var base_url = '<?=base_url();?>';
    var content_management = '<?=base_url("content_management");?>';
    var confirm_update = '<?=$this->standard->confirm("confirm_update");?>';
    var update_success = '<?=$this->standard->dialog("update_success");?>';

</script>