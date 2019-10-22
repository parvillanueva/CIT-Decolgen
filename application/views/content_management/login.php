<?php
    if($this->session->userdata('sess_uid') != null){
        redirect(base_url('content_management'));
    }
?>

<?php $this->load->view("content_management/template/header"); ?>

<?php
    $details = $this->load->details("site_information",1);
    $details_cms = $this->load->details("cms_preference",1);
    $account_type = '';

    if($details_cms[0]->ad_authentication == 1){
        $account_type = 'Email';
    }else if($details_cms[0]->ad_authentication == 2){
        $account_type = 'Email/Username';
    }else{
        $account_type = 'Username';
    }
?>

<style type="text/css">
    @font-face{
        font-family: 'password';
        font-style: normal;
        font-weight: 400;
        src: url('<?=base_url("cms/fonts/password.ttf");?>');
    }

    .masked-password{
        font-family: 'password';
    }
</style>

<body class="hold-transition login-page">
    <div class="container">
        <div class="row vertical-offset-100">
            <div class="col-md-4 col-md-offset-4">
                <div class="panel panel-default">
                    <div class="panel-footer">                                
                        <div class="row-fluid user-row"> 
                            Content Management
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="logo text-center">
                            <?php if(isset($details[0]->logo) == '') : ?>
                                <img class="cms-logo" src="<?=base_url().$details[0]->logo;?>" alt="logo" style="    display: none;">
                            <?php else : ?>
                                <img class="cms-logo" src="<?=base_url().$details[0]->logo;?>" alt="logo">
                            <?php endif; ?>
                        </div>

                        <div accept-charset="UTF-8" role="form" class="form-signin">
                            <fieldset>
                                <div class="callout callout-warning" hidden style="margin-bottom: 0px !important;"></div>
                                <div class="callout callout-success logout-success" style="margin-bottom: 0px !important; display: none;"></div>
                                <label class="panel-login">
                                    <div class="login_result"></div>
                                </label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                    <input id="username" type="text" class="username txtlog form-control" name="username" type="text" placeholder="<?=$account_type;?>" autocomplete="off">                                        
                                </div>
                                <br>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                    <input id="password" type="text" class="password txtlog form-control" name="password" placeholder="Password">
                                </div>   
                                <br>
                                <button id="btn_login" data-loading-text="<i class='fa fa-spinner fa-spin '></i> Loading" class="btn btn-md btn-info btnblog btn-block" type="button">Login »</button>
                            </fieldset>                  
                        </div>
                    </div>
                    <div class="panel-footer">                                
                        <div class="row-fluid user-row" style="text-align: center;"> 
                            <a id="reset_password" href="" class="reset-password" data-toggle="modal">Forgot Password</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<script type="text/javascript">

    var content_management = '<?=base_url("content_management");?>';
    var global_controller = '<?=base_url("content_management/global_controller");?>';

    var logout_data = "<?= $this->session->flashdata('logout_data');?>";
    var is_ad = "<?=$details_cms[0]->ad_authentication;?>";
    var account_type = "<?=$account_type;?>";
    var azure_pwgrant = "<?= base_url('azure/pwgrant.php');?>";

</script>

<script type="text/javascript" src="<?= base_url() . 'cms/js/cms/main/login.js'; ?>"></script>