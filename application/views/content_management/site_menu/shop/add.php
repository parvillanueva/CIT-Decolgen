<div class="box">
        <?php   
            $data['buttons'] = ['save','close'];
            $this->load->view("content_management/template/buttons", $data);
        ?>  
        <div class="box-body">   
            <div class="form-horizontal">
                <?php
                    $inputs = [
                        'redirect_url',
                        'image_banner',
                    ];

                    $input_content = $this->standard->inputs($inputs);
                ?>
            </div>
        </div>
 </div>

<script type="text/javascript">
    
    var base_url = '<?=base_url();?>';
    var content_management = '<?=base_url("content_management");?>';
    var confirm_add = '<?=$this->standard->confirm("confirm_add");?>';
    var add_success = '<?=$this->standard->dialog("add_success");?>';
    var input_content = '<?=$input_content;?>';
    
</script>