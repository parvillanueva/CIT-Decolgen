<div class="box">
        <?php   
            $data['buttons'] = ['update','close'];
            $this->load->view("content_management/template/buttons", $data);
        ?>  
        <div class="box-body">   
            <div class="form-horizontal">
                <?php
                	$shop_id = $this->uri->segment(4);
            		$shop = $this->load->details("site_shop_now", $shop_id);

                    $inputs = [
                        'redirect_url',
                        'image_banner',
                    ];

                    $values = [
                		$shop[0]->url,
                		$shop[0]->img_banner
            		];

                    $input_content = $this->standard->inputs($inputs, $values);
                ?>
            </div>
        </div>
 </div>

<script type="text/javascript">

    var base_url= '<?=base_url();?>';
    var content_management = '<?=base_url("content_management");?>';
    var confirm_update = '<?=$this->standard->confirm("confirm_update");?>';
    var update_success = '<?=$this->standard->dialog("update_success");?>';
    var shop_id = '<?=$shop_id;?>';
    var input_content = '<?=$input_content;?>';
    
</script>