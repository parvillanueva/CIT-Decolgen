<?php $this->load->view("content_management/template/header"); ?>
<body class="hold-transition login-page">
    <div class="container">
        <div class="row vertical-offset-100">
            <div class="col-md-4 col-md-offset-4">
                <div class="panel panel-default">
                    <div class="panel-footer">                                
                        <div class="row-fluid user-row"> 
                            <button id="btn_close" type="button" class="close pull-right" data-dismiss="alert" aria-hidden="true">×</button>
                            Forgot Password
                        </div>
                    </div>
                    <div class="panel-body">
                        <div accept-charset="UTF-8" role="form" class="form-signin">
                            <fieldset>
                                <div class="callout callout-warning" hidden style="margin-bottom: 0px !important;"></div>
                                <label class="panel-login">
                                    <div class="login_result"> Please enter email address </div>
                                </label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                    <input id="email" type="email" class="email txtlog form-control" placeholder="Email Address">                                        
                                </div>
                            </fieldset>                  
                        </div>
                    </div>
                    <div class="panel-footer">                                
                        <div class="row-fluid user-row" style="text-align: center;"> 
                            <button id="reset_password" href="" class="btn btn-primary reset-password">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<script type="text/javascript">

    var content_management = '<?=base_url("content_management");?>';
  
</script>

<script type="text/javascript" src="<?= base_url() . 'cms/js/cms/main/login_forgot.js'; ?>"></script>