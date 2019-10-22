<?php
    $this->config->load('email');

    $host = "";
    if($this->config->item("smtp_host")){
        $host = $this->config->item("smtp_host");
    }

    $email = "";
    if($this->config->item("smtp_user")){
        $email = $this->config->item("smtp_user");
    }

    $password = "";
    if($this->config->item("smtp_pass")){
        $password = $this->config->item("smtp_pass");
    }

    $port = "";
    if($this->config->item("smtp_port")){
        $port = $this->config->item("smtp_port");
    }

    $default_email = "";
    if($this->config->item("default_email")){
        $default_email = $this->config->item("default_email");
    }

    $protocol = $this->config->item("protocol");

    $sendgrid_details = str_replace(base_url(), "", $this->load->details("cms_email_config",1));
?>

<div class="box">
    <?php
        $data['buttons'] = ['update', 'cancel'];
        $this->load->view("content_management/template/buttons", $data);
    ?> 
 	<div class="box-body">
        <?php
            $email_inputs = [
                'email_protocol',
                'email_host',
                'email_default',
                'email_user',
                'email_password',
                'email_port',
                'sendgrid_from_email',
                'sendgrid_from_name',
                'sendgrid_token'
            ];

            $email_values = [
                $protocol,
                $host,
                $default_email,
                $email,
                $password,
                $port,
                $sendgrid_details[0]->sendgrid_from_email,
                $sendgrid_details[0]->sendgrid_from_name,
                $sendgrid_details[0]->sendgrid_token
            ];

            $email_details = $this->standard->inputs($email_inputs, $email_values);
        ?> 
    </div>
</div>


<script type="text/javascript">
    $(function(){
        change_protocol();
    });

    function change_protocol(value){
        var protocol = (value == null) ? "<?=$protocol;?>" : value;

        switch(protocol){
            case "smtp":
                $(".email_default_label").parent().hide();
                $(".sendgrid_from_email_label").parent().hide();
                $(".sendgrid_from_name_label").parent().hide();
                $(".sendgrid_token_label").parent().hide();
                $("#email_default").val("<?=$default_email;?>");
                $("#sendgrid_from_email").val("<?=$sendgrid_details[0]->sendgrid_from_email;?>");
                $("#sendgrid_from_name").val("<?=$sendgrid_details[0]->sendgrid_from_name;?>");
                $("#sendgrid_token").val("<?=$sendgrid_details[0]->sendgrid_token;?>");
                break;
            case "sendmail":
                $(".host_label").parent().hide();
                $(".email_label").parent().hide();
                $(".email_password_label").parent().hide();
                $(".port_label").parent().hide();
                $(".sendgrid_from_email_label").parent().hide();
                $(".sendgrid_from_name_label").parent().hide();
                $(".sendgrid_token_label").parent().hide();
                $("#host").val("<?=$host;?>");
                $("#email").val("<?=$email;?>");
                $("#email_password").val("<?=$password;?>");
                $("#port").val("<?=$port;?>");
                $("#sendgrid_from_email").val("<?=$sendgrid_details[0]->sendgrid_from_email;?>");
                $("#sendgrid_from_name").val("<?=$sendgrid_details[0]->sendgrid_from_name;?>");
                $("#sendgrid_token").val("<?=$sendgrid_details[0]->sendgrid_token;?>");
                break;
            default:
                $(".host_label").parent().hide();
                $(".email_label").parent().hide();
                $(".password_label").parent().hide();
                $(".port_label").parent().hide();
                $(".email_default_label").parent().hide();
                $(".email_password_label").parent().hide();
                $("#email_default").val("<?=$default_email;?>");
                $("#host").val("<?=$host;?>");
                $("#email").val("<?=$email;?>");
                $("#email_password").val("<?=$password;?>");
                $("#port").val("<?=$port;?>");
        }
    }

    $(document).on('change', '#protocol', function(e){
        var value = $(this).val();
        $('.form-group').show();
        change_protocol(value);
    });

    $(document).on('click', '#btn_update', function(){
        var protocol = $('#protocol').val();
        var host = $("#host").val();
        var email = $("#email").val();
        var email_sendmail = $("#email_default").val();
        var password = $("#email_password").val();
        var port = $("#port").val();
        var sendgrid_from_email = $("#sendgrid_from_email").val();
        var sendgrid_from_name = $("#sendgrid_from_name").val();
        var sendgrid_token = $("#sendgrid_token").val();

        if(validate.standard('<?=$email_details;?>')){
            modal.standard('<?=$this->standard->confirm("confirm_update");?>', function(result){
                if(result){
                    modal.loading(true);
                    aJax.post(
                        '<?= base_url("content_management/preference/config_email");?>',
                        {
                            protocol : protocol,
                            host : host,
                            email : email,
                            email_sendmail : email_sendmail,
                            password : password,
                            port : port
                        },
                        function(result){}
                    );

                    aJax.post(
                        '<?= base_url("content_management/global_controller"); ?>',
                        {
                            event : "update",
                            table : "cms_email_config", 
                            field : "id", 
                            where : 1,
                            data : {
                                sendgrid_from_email : sendgrid_from_email,
                                sendgrid_from_name : sendgrid_from_name,
                                sendgrid_token : sendgrid_token,
                                update_date : moment(new Date()).format('YYYY-MM-DD HH:mm:ss')
                            }
                        },
                        function(result){
                            modal.loading(false);
                            modal.alert('<?=$this->standard->dialog("update_success");?>',function(){
                                location.reload();
                            }); 
                        }
                    );
                }
            });
        }
    });

    $(document).on('click', '#btn_cancel', function(e){
        modal.standard('<?= $this->standard->confirm("confirm_cancel"); ?>',function(result){
            if(result){
                location.href = '<?=base_url("content_management/site_email_config"); ?>';
            }
        });
    });

</script>