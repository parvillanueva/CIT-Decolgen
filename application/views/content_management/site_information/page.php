<?php

    $details = str_replace(base_url(), "", $this->load->details("site_information",1));
    $logo= "";
    $favicon = "";
    
    if($details[0]->logo != ""){
        $logo = '<img class="img_logo_img" src="'.base_url().$details[0]->logo.'" width="100%" />';
    }
    
    if($details[0]->favicon != ""){
        $favicon = '<img class="img_favicon_img" src="'.base_url().$details[0]->favicon.'" width="100%" />';
    }

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

?>

<div class="box">
  <?php
    $data['buttons'] = ['update']; // add, save, update
    $this->load->view("content_management/template/buttons", $data);
  ?>  
    <div class="box-body">
        <?php
            $site_inputs = [
                'title',
                'shop_url',
                'favicon_img',
                'brand_logo',
                'meta_keyword',
                'meta_description',
                'google_analytics',
                'gtm_header',
                'gtm_body',
                '[separator]',
                'facebook',
                'twitter',
                'instagram',
                'pinterest',
                'linked_in',
                'youtube_link',
                'tumblr',
                '[separator]'
            ];

            $site_values = [
                $details[0]->title,
                $details[0]->shop_url,
                $details[0]->favicon,
                $details[0]->logo,
                $details[0]->keyword,
                $details[0]->description,
                $details[0]->ga_id,
                $details[0]->google_tag_manager_header,
                $details[0]->google_tag_manager_body,
                '',
                $details[0]->facebook,
                $details[0]->twitter,
                $details[0]->instagram,
                $details[0]->pinterest,
                $details[0]->linkedin,
                $details[0]->youtube,
                $details[0]->tumblr,
                ''
            ];

            $site_details = $this->standard->inputs($site_inputs, $site_values);
        ?> 

        <h3>Notification</h3>
        <br>

        <?php
            $notification_inputs = [
                'notification_status',
                'notification_position',
                'browser_display',
                'notification_message'
            ];

            $notification_values = [
                $details[0]->notif_status,
                $details[0]->notif_position,
                $details[0]->notif_browser,
                $details[0]->notif_message,
            ];

            $notification_details = $this->standard->inputs($notification_inputs, $notification_values);
        ?>
        </div>
    </div>
</div>

<script type="text/javascript">

    var base_url = '<?= base_url();?>';
    var role = '<?=$this->session->userdata("sess_role");?>';
    var content_management = '<?=base_url("content_management");?>';
    var confirm_update = '<?=$this->standard->confirm("confirm_update");?>';
    var update_success = '<?=$this->standard->dialog("update_success");?>';

    var site_details = '<?=$site_details;?>';
    var notification_details = '<?=$notification_details;?>';

</script>