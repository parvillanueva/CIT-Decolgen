<div class="box">
  <?php
      $data['buttons'] = ['update', 'close'];
      $this->load->view("content_management/template/buttons",$data);
  ?>
    <div class="box-body">
      <?php 
        $details = $this->load->details("pckg_footer", 1);
        if ($this->uri->segment(4) !== NULL || !empty($this->uri->segment(4))) {
            $inputs = 
                    ["footer_image",
                    "footer_image_url",
                    "footer_asc_name",
                    "footer_policy_name",
                    "footer_copyright",
                    "facebook","twitter",
                    "instagram",
                    "youtube_link",
                    "pinterest"];

            $values = 
                    [$details[0]->footer_image_banner,
                    $details[0]->footer_image_url,
                    $details[0]->footer_asc_name,
                    $details[0]->footer_policy_name
                    ,$details[0]->footer_copyright,
                    $details[0]->facebook,
                    $details[0]->twitter,
                    $details[0]->instagram,
                    $details[0]->youtube_link,
                    $details[0]->pinterest];

            $id =  $this->standard->inputs($inputs, $values);
        } else {
            $inputs = 
                    ["footer_image",
                    "footer_image_url",
                    "footer_asc_name",
                    "footer_policy_name",
                    "footer_copyright",
                    "facebook","twitter",
                    "instagram",
                    "youtube_link",
                    "pinterest"];

            $values = 
                    [$details[0]->footer_image_banner,
                    $details[0]->footer_image_url,
                    $details[0]->footer_asc_name,
                    $details[0]->footer_policy_name
                    ,$details[0]->footer_copyright,
                    $details[0]->facebook,
                    $details[0]->twitter,
                    $details[0]->instagram,
                    $details[0]->youtube_link,
                    $details[0]->pinterest];

            $id = $this->standard->inputs($inputs, $values);
        }
        ?>
    </div>
</div>
<script>

    AJAX.config.base_url(base_url); 

    $(document).ready(function(){
        $('.size_filter').addClass("sample_input");
    });
           
    $(document).on('click', '#btn_update', function(){
        var form_data = {};
        $(':input[class*="_input"]').each(function() {
            var input_id = $(this).attr('id');
            var db_field = $(this).attr('name');

            if ($(this).attr('type') === 'ckeditor') {
                form_data[db_field] = eval("CKEDITOR.instances."+input_id+".getData()");
            } else {
                form_data[db_field] = eval("$('#"+input_id+"').val()");
            }
        });
        
        form_data["update_date"] = moment(new Date()).format('YYYY-MM-DD HH:mm:ss');

        if(validate.standard("<?= $id; ?>")){
            var modal_obj = '<?= $this->standard->confirm("confirm_update"); ?>'; 
            modal.standard(modal_obj, function(result){
                if(result){
                    modal.loading(true);

                    AJAX.update.table("pckg_footer");
                    AJAX.update.where("id", 1);
                    $.each(form_data, function(a,b) {
                        AJAX.update.params(a, b);
                    });
                    
                    AJAX.update.exec(function(result){
                        modal.loading(false);
                        modal.alert("<?= $this->standard->dialog("update_success"); ?>", function(){
                            location.reload();
                        });
                    })
                }
            });
        }
    });

    $(document).on('click', '#btn_update', function(e){
    $('.error-msg').html(''); 
    validate_fields();
});

    function validate_fields(){
        var error_message = 'This field is required.';
        var error_message_link = 'Invalid URL.';

        var FB_url = /^(https?:\/\/)?((w{3}\.)?)facebook.com\/.*/i;
        var Twitter_url =/^(https?:\/\/)?((w{3}\.)?)twitter.com\/.*/i;
        var Instagram_url= /^(https?:\/\/)?((w{3}\.)?)instagram.com\/.*/i;
        var Linkedin_url = /(https?)?:?(\/\/)?(([w]{3}||\w\w)\.)?linkedin.com(\w+:{0,1}\w*@)?(\S+)(:([0-9])+)?(\/|\/([\w#!:.?+=&%@!\-\/]))?/;
        var Tumblr_url = /^(https?:\/\/)?((w{3}\.)?)tumblr.com\/.*/i;
        var Pinterest_url = /^(https?:\/\/)?((w{3}\.)?)pinterest.ph\/.*/i;
        var Youtube_url = /^(?:https?:\/\/)?(?:www\.)?youtube\.com\/watch\?(?=.*v=((\w|-){11}))(?:\S+)?$/;
        var facebook = $('#facebook').val();
        var twitter = $('#twitter').val();
        var instagram = $('#instagram').val();
        var linkedin = $('#linked_in').val();
        var tumblr = $('#tumblr').val();
        var pinterest = $('#pinterest').val();
        var youtube = $('#youtube_link').val();
        var shop_url = $('#shop_url').val();
        var g_tag_header = $('#gtm_header').val();
        var g_tag_body = $('#gtm_body').val();
        
        var counter =0;
        
        if(validate.standard(site_details)){

            if(validate.standard(notification_details)){
                if(is_valid_url(shop_url) == false && shop_url.length != 0){
                    $('.url_error').remove();  
                    $('<i class="url_error" style="color: red;" >Invalid URL.</i>').insertAfter('#shop_url');
                    counter++;  
                } else {
                    $('.url_error').remove(); 
                }

             
                if (facebook.match(FB_url)) {
                    $('.facebook_error').remove(); 
                } else {
                    if(facebook != ''){
                        $('.facebook_error').remove(); 
                       $('<i class="facebook_error" style="color: red;" >Please enter valid Facebook URL.</i>').insertAfter('#facebook');
                        counter++;
                    }else{
                        $('.facebook_error').remove();
                    }
                }

                if (twitter.match(Twitter_url)) {
                    $('.twitter_error').remove();
                } else {
                    if(twitter != ''){
                        $('.twitter_error').remove();
                        $('<i class="twitter_error" style="color: red;" >Please enter valid Twitter URL.</i>').insertAfter('#twitter');
                        counter++;
                    }else{
                        $('.twitter_error').remove();
                    }
                }

                if (instagram.match(Instagram_url)) {
                    $('.instagram_error').remove();
                } else {
                    if(instagram != ''){
                        $('.instagram_error').remove();
                        $('<i class="instagram_error" style="color: red;" >Please enter valid Instagram URL.</i>').insertAfter('#instagram');
                        counter++;
                    }else{
                        $('.instagram_error').remove();
                    }
                }

                if (linkedin.match(Linkedin_url)) {
                    $('.linkedin_error').remove();
                } else {
                    if(linkedin != ''){
                        $('.linkedin_error').remove();
                        $('<i class="linkedin_error" style="color: red;" >Please enter valid linkedin URL.</i>').insertAfter('#linked_in');
                        counter++;
                    }else{
                        $('.linkedin_error').remove();
                    }
                }

                if (tumblr.match(Tumblr_url)) {
                    $('.tumblr_error').remove();
                } else {
                    if(tumblr != ''){
                        $('.tumblr_error').remove();
                        $('<i class="tumblr_error" style="color: red;" >Please enter valid Tumbler URL.</i>').insertAfter('#tumblr');
                        counter++;
                    }else{
                        $('.tumblr_error').remove();
                    }
                }

                if (pinterest.match(Pinterest_url)) {
                    $('.pinterest_error').remove();
                } else {
                    if(pinterest != ''){
                        $('.pinterest_error').remove();
                        $('<i class="pinterest_error" style="color: red;" >Please enter valid Pinterest URL.</i>').insertAfter('#pinterest');
                        counter++;
                    }else{
                        $('.pinterest_error').remove();
                    }
                }
                
                if (youtube.match(Youtube_url)) {
                   $('.youtube_error').remove();
                } else { 
                    if(youtube != ''){
                        $('.youtube_error').remove();
                        $('<i class="youtube_error" style="color: red;" >Please enter valid Pinterest URL.</i>').insertAfter('#youtube_link');
                        counter++;
                    }else{
                        $('.youtube_error').remove();
                    }
                }

                if(g_tag_header.match(/<\?/) || g_tag_header.match(/<\?php/)){
                    $('#g_tag_header_err').html('Invalid script.');
                    counter++;  
                }

                if(g_tag_body.match(/<\?/) || g_tag_body.match(/<\?php/)){
                    $('#g_tag_body_err').html('Invalid script.');
                    counter++;  
                }
                if(counter == 0){
                    update_data();
                }
            }
        }     
        
    }
</script>

<script type="text/javascript" > 
<?php
    $dir = dirname(__FILE__);
    include($dir . "/standardconfig.js");
?>
</script>