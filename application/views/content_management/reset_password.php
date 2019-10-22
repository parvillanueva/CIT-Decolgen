<?php $this->load->view("content_management/template/header"); 
    $token = $this->uri->segment(4);
    $get_token = 'token = "'.$token.'"';
    $user_token = $this->Global_model->get_list_query('cms_site_token',$get_token);
?>
<body class="hold-transition login-page">
    <div class="container">
        <div class="row vertical-offset-100">
            <div class="col-md-4 col-md-offset-4">
                <div class="panel panel-default">
                    <div class="panel-footer">                                
                        <div class="row-fluid user-row"> 
                            <button id="btn_close" type="button" class="close pull-right" data-dismiss="alert" aria-hidden="true">×</button>
                            <?php if($success){echo "Reset Password";}else{echo $title;} ?>
                        </div>
                    </div>
                    <?php if($success) : ?>
                        <div class="panel-body">
                            <div accept-charset="UTF-8" role="form" class="form-signin">
                                <fieldset>
                                    <div class="callout" hidden style="margin-bottom: 0px !important;"></div>
                                    <label>New Password</label>
                                    <div class="input-group" style="margin-bottom: 5px;">
                                        <span class="input-group-addon"><i class="fa fa-key"></i></span>
                                        <input id="password1" name="password1" type="password" class="txtlog form-control required new-password" placeholder="New Password">
                                    </div>
                                    <label>Confirm Password</label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-key"></i></span>
                                        <input id="password2" name="password2" type="password" class="txtlog form-control required re-password" placeholder="Confirm Password"/>
                                    </div>
                                    <div class="re-pw-err"></div>
                                    <div id="password_chcklist">
                                        <p>Password Must:</p>
                                        <div class="password_chcklist_contanier">
                                            <input type="checkbox"  id="min_ten_chckbx_p" class="min_ten_chckbx password_checkbox required_input hidden"> 
                                            <i class="fas fa-check-square min_ten_chck" ></i> <p class="min_ten_chckbx_p"> Minimum of 10 characters</p>
                                        </div>
                                        <div class="password_chcklist_contanier">
                                            <input type="checkbox" id="special_chckbx_p" class="special_chckbx password_checkbox required_input hidden"> 
                                            <i class="fas fa-check-square special_chck"></i> <p class="special_chckbx_p">Atleast 1 Special Characters</p>
                                        </div>
                                        <div class="password_chcklist_contanier">
                                            <input type="checkbox" id="upper_chckbx_p" class="upper_chckbx password_checkbox required_input hidden"> 
                                            <i class="fas fa-check-square upper_chck"></i> <p class="upper_chckbx_p">Atleast 1 Uppercase</p>
                                        </div>
                                        <div class="password_chcklist_contanier">
                                            <input type="checkbox" id="number_chckbx_p" class="number_chckbx password_checkbox required_input hidden"> 
                                            <i class="fas fa-check-square number_chck"></i> <p class="number_chckbx_p">Atleast 1 Number</p>
                                        </div>
                                    </div>
                                </fieldset>                  
                            </div>
                        </div>
                    <div class="panel-footer">                                
                        <div class="row-fluid user-row" style="text-align: center;"> 
                            <button id="reset_password" href="" class="btn btn-primary reset-password">Submit</button>
                        </div>
                    </div>
                    <?php else : ?>
                        <div class="panel-footer">                                
                            <div class="row-fluid user-row" style="text-align: center;"> 
                                <button id="request_new" href="" class="btn btn-primary request-new">Request New</button>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</body>

<script type="text/javascript">

    var user_id = '<?=$user_token[0]->user_id;?>';
    var user_id2 = '<?=$user_id;?>';
    var content_management = '<?=base_url("content_management");?>';
    var base_url = '<?= base_url();?>';

</script>

<script type="text/javascript" src="<?= base_url() . 'cms/js/cms/main/reset_password.js';?>"></script>