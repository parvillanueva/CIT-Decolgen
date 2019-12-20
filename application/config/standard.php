<?php
/*
|--------------------------------------------------------------------------
| DIALOG Standards
|--------------------------------------------------------------------------
|
| Sample Calling function :
|   <script>
|        var message = '<?= $this->standard->dialog("add_success"); ?>';
|        modal.alert(message);
|    </script>
|
| you can add your own custom
|
*/

// ALERT SUCCESS
$config['add_success']          = "<b>Success!</b> Record(s) have been added.";
$config['save_success']         = "<b>Success!</b> Record(s) has been saved.";
$config['update_success']       = "<b>Success!</b> Record(s) have been updated.";
$config['delete_success']       = "<b>Success!</b> Record(s) have been deleted.";
$config['activate_success']     = "<b>Success!</b> Record(s) have been activated.";
$config['deactivate_success']   = "<b>Success!</b> Record(s) have been deactivated.";
$config['save_draft_success']   = "<b>Success!</b> Record has been saved as draft.";
$config['sent_success']         = "<b>Success!</b> Record has been sent.";
$config['submitted_success']    = "<b>Success!</b> Record has been submitted.";
$config['cancelled_success']    = "<b>Success!</b> Record has been cancelled.";
$config['declined_success']     = "<b>Success!</b> Record has been declined.";
$config['package_success']      = "<b>Success!</b> Package has been installed.";
$config['publish_success']      = "<b>Success!</b> Record(s) have been published.";
$config['unpublish_success']    = "<b>Success!</b> Record(s) have been unpublished.";
$config['deleted_file_success'] = "<b>Success!</b> File(s) has been deleted.";
$config['export_success']       = "<b>Success!</b> Export completed!";

//ALERT FAILED
$config['no_file']              = "<b>Error!</b> File does not exists.";
$config['insert_failed']        = "<b>Error!</b> Failed to Insert Data.";
$config['update_failed']        = "<b>Error!</b> Failed to Update Data.";
$config['sent_failed']         = "<b>Error!</b> Failed to send.";

//VALIDATION
$config['data_exist']           = "The information already exists.";
$config['email_exist']          = "This email address is already registered.";
$config['mobile_exist']         = "This mobile number is already registered.";
$config['username_exist']       = "Username already exists.";
$config['hasUnder']             = "Meta has under links, Can't change to child type!";
$config['menu_hasUnder']        = "Menu has under links, Can't change to module type!";
$config['package_field_duplicate']  = "Required fields has duplicate values.";



//ERRORS
$config['invalid_user_password']        = "Invalid username and password. Please try again.";
$config['invalid_password']             = "Incorrect password. Please try again.";

//CUSTOM MESSAGE
$config['newsletter_subscribed']       = "Success!<br>You have subscribed to our newsletter.";
$config['newsletter_unsubscribed']     = "Thank you!<br>You have unsubscribed from our news and updates.";
$config['category_limit']              = "Maximum Category";
$config['package_empty']                = "Package builder is empty.";
//FORM VALIDATION
//Note : Declare your custom dialog in your header if you are using javascript
//Ex : var form_invalid_email = '<php $this->standard->dialog('form_invalid_email') >';
$config['form_empty']               = "This field is required."; // do not remove, required in custom.js
$config['form_invalid_email']       = "Please enter a valid email address."; // do not remove, required in custom.js
$config['form_script']              = "Code Script are not allowed."; // do not remove, required in custom.js
$config['form_invalid_mobile_no']   = "Invalid mobile number. Required format : 09XXXXXXXXX"; // do not remove, required in custom.js
$config['form_nohtml']              = "HTML Tags are not allowed"; // do not remove, required in custom.js
$config['form_invalid_extension']   = "File type is not supported."; // do not remove, required in custom.js
$config['form_max_size']            = "Maximum file size exceeded"; // do not remove, required in custom.js
$config['form_invalid_captcha']     = "Invalid Captcha"; // do not remove, required in custom.js`


/*
|--------------------------------------------------------------------------
| Modal Confirmation Standards
|--------------------------------------------------------------------------
|
| Sample calling function :
|    <script>
|        var modal_obj = '<?= $this->standard->confirm("confirm_update"); ?>';
|        modal.standard(modal_obj, function(result){
|            if(result){
|                  //your code here
|            }
|        });
|    </script>
|
| $this->standard->confirm("add_success");
|
| you can add your own custom
|
*/
$config['confirm_add'] = array(
                            "message"  => "Are you sure you want to add this record?",
                            "confirm"  => "Add",
                            "cancel"   => "Cancel",
                        );

$config['confirm_update'] = array(
                            "message"  => "Are you sure you want to update this record?",
                            "confirm"  => "Update",
                            "cancel"   => "Cancel",
                        );

$config['confirm_delete'] = array(
                            "message"  => "Are you sure you want to delete this record?",
                            "confirm"  => "Delete",
                            "cancel"   => "Cancel",
                        );

$config['confirm_save'] = array(
                            "message"  => "Are you sure you want to save this record?",
                            "confirm"  => "Save",
                            "cancel"   => "Cancel",
                        );

$config['confirm_draft'] = array(
                            "message"  => "Are you sure you want to save this record as draft?",
                            "confirm"  => "Save as Draft",
                            "cancel"   => "Cancel",
                        );

$config['confirm_upload'] = array(
                            "message"  => "Are you sure you want to upload this file?",
                            "confirm"  => "Upload",
                            "cancel"   => "Cancel",
                        );

$config['confirm_activate'] = array(
                            "message"  => "Are you sure you want to activate this record?",
                            "confirm"  => "Activate",
                            "cancel"   => "Cancel",
                        );

$config['confirm_deactivate'] = array(
                            "message"  => "Are you sure you want to deactivate this record?",
                            "confirm"  => "Deactivate",
                            "cancel"   => "Cancel",
                        );

$config['confirm_send'] = array(
                            "message"  => "Are you sure you want to send this record?",
                            "confirm"  => "Send",
                            "cancel"   => "Cancel",
                        );

$config['confirm_submit'] = array(
                            "message"  => "Are you sure you want to submit this record?",
                            "confirm"  => "Submit",
                            "cancel"   => "Cancel",
                        );

$config['confirm_cancel'] = array(
                            "message"  => "Are you sure you want to cancel this record?",
                            "confirm"  => "Yes",
                            "cancel"   => "No",
                        );

$config['confirm_publish'] = array(
                            "message"  => "Are you sure you want to publish this record?",
                            "confirm"  => "Publish",
                            "cancel"   => "Cancel",
                        );

$config['confirm_unpublish'] = array(
                            "message"  => "Are you sure you want to unpublish this record?",
                            "confirm"  => "Unpublish",
                            "cancel"   => "Cancel",
                        );

$config['package_install'] = array(
                            "message"  => "Are you sure you want to install this package?",
                            "confirm"  => "Install",
                            "cancel"   => "Cancel",
                        );

$config['confirm_export'] = array(
                            "message"  => "Are you sure  you want to extract this file?",
                            "confirm"  => "Export",
                            "cancel"   => "Cancel",
                        );

$config['confirm_edit'] = array(
                            "message"  => "Are you sure you want to edit this record?",
                            "confirm"  => "Yes",
                            "cancel"   => "Cancel",
                        );

$config['confirm_publish_meta'] = array(
                            "message"  => "Are you sure you want to publish this record? The records under this will also be published.",
                            "confirm"  => "Publish",
                            "cancel"   => "Cancel",
                        );

$config['confirm_unpublish_meta'] = array(
                            "message"  => "Are you sure you want to unpublish this record? The records under this will also be unpublished.",
                            "confirm"  => "Unpublish",
                            "cancel"   => "Cancel",
                        );

$config['confirm_delete_meta'] = array(
                            "message"  => "Are you sure you want to delete this record? The records under this will also be deleted.",
                            "confirm"  => "Delete",
                            "cancel"   => "Cancel",
                        );




/*
|--------------------------------------------------------------------------
| Input Standards
|--------------------------------------------------------------------------
|
|   $config = array(
|        'type'         => (string),        // text, email, dropdown, radio, textarea, filemanager, ckeditor, timepicker, date, mobile_number, youtube, captcha
|        'name'         => (string),        // element name
|        'form-align'   => (string),        // vertical, horizontal : default is vertical
|        'id'           => (string),        // element id
|        'max'          => (int),           // max length
|        'required'     => (boolean),       // if input is required
|        'alphaonly'    => (boolean),       // if input requires alpha only A-Z
|        'class'        => (string),        // adding custom class
|        'placeholder'  => (string),        // input placeholder
|        'label'        => (string),        // input label text
|        'accept'       => (string),        // accepted characters *for TYPE:TEXT only ex : /[^a-zA-Z .,-]/g
|        'rows'         => (int),           // no of rows for TYPE: TEXTAREA only
|        'note'         => (string),        // input note
|        'minDate'      => (date),          // minimum date for TYPE: DATE format(mm-dd-yyyy)
|        'maxDate'      => (date),          // minimum date for TYPE: DATE format(mm-dd-yyyy)
|        'yearRange'    => (date : date),   // minimum date range for TYPE: DATE : ex. '2013 : 2018'
|        'list_value'   => (array()),       // array list of values for TYPE: DROPDOWN & RADIO only
|        'youtube'      => (boolean),       // include youtube for CKEditor Only *True Default
|        'filemanager'  => (boolean),       // include filemanger for CKEditor Only *True Default
|        'source'       => (boolean),       // include source for CKEditor Only *True Default
|        'list_style'   => (boolean),       // include list style for CKEditor Only *True Default
|        'no_html'      => (boolean),       // if HTML TAg not allowed for text and textarea type only
|        'accept'       => (string),        // a comma separated file type for filemanager only. ex. jpg,gif,png,jpeg
|        'max_size'     => (int)            // maximum file size to accept in MB for filemanager only
|        'preview'      => (boolean)        // display video preview for youtube only, default is true
|        'captcha'      => (string)         // captcha option if : codeigniter or google
|        'site_key'     => (string)         // for google recaptcha : site key (required)
|   );
|
| you can add your custom input
|
|
| Note : To validate all inputs generated by this function
|
|   Sample Code :
|
|   <?php
|       //to display
|       $inputs = ['first_name','middle_name',];
|       $this->standard->inputs($inputs);
|   ?>
|
|   <script>
|       $('.btn_save').on('click', function(){
|           if(validate.standard()){
|               //your code here
|           }
|       });
|   </script>
*/

$config['[separator]']      = array(
                                'type'          => 'separator',
                                'id'            => 'separator'
                            );

$config['captcha']       = array(
                                'type'          => 'captcha',
                                'name'          => 'captcha',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control',
                                'id'            => 'captcha',
                                'required'      => true,
                                'maxlength'     => 8,
                                'placeholder'   => 'Enter above text',
                                'label'         => 'Captcha',
                                
                            );


$config['meta_title']       = array(
                                'type'          => 'text',
                                'name'          => 'meta_title',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control',
                                'id'            => 'meta_title',
                                'required'      => true,
                                'maxlength'     => 255,
                                'alphaonly'     => true,
                                'accept'        => '/[^a-zA-Z0-9 .,-]/g',
                                'placeholder'   => 'Meta Title',
                                'label'         => 'Meta Title'
                            );

$config['meta_description'] = array(
                                'type'          => 'textarea',
                                'name'          => 'meta_description',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control meta_description_input',
                                'id'            => 'meta_description',
                                'required'      => true,
                                'maxlength'     => 255,
                                'placeholder'   => 'Meta Description',
                                'label'         => 'Meta Description'
                            );

$config['meta_keyword'] = array(
                                'type'          => 'textarea',
                                'name'          => 'meta_keyword',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control meta_keyword_input',
                                'id'            => 'meta_keyword',
                                'required'      => true,
                                'maxlength'     => 255,
                                'placeholder'   => 'Meta Keywords',
                                'label'         => 'Meta Keywords'
                            );

$config['meta_image'] = array(
                                'type'          => 'filemanager',
                                'name'          => 'meta_img',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control',
                                'id'            => 'meta_img',
                                'accept'        => 'jpg,png,jpeg',
                                'max_size'      => '5',
                                'required'      => true,
                                'placeholder'   => 'Meta Image',
                                'label'         => 'Meta Image',
                            );

$config['asc_ref']       = array(
                                'type'          => 'textarea',
                                'name'          => 'asc_ref',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control',
                                'id'            => 'asc_ref',
                                'required'      => true,
                                'placeholder'   => 'ASC Ref Code',
                                'label'         => 'ASC Ref Code'
                            );


$config['first_name']       = array(
                                'type'          => 'text',
                                'name'          => 'first_name',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control',
                                'id'            => 'first_name',
                                'maxlength'     => 250,
                                'required'      => true,
                                'alphaonly'     => true,
                                'accept'        => '/[^a-zA-Z .,-]/g',
                                'placeholder'   => 'First Name',
                                'label'         => 'First Name',
                                'align'         => 'vertical',
                                
                            );

$config['middle_name']      = array(
                                'type'          => 'text',
                                'name'          => 'middle_name',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control',
                                'id'            => 'middle_name',
                                'maxlength'     => 250,
                                'required'      => true,
                                'alphaonly'     => true,
                                'placeholder'   => 'Middle Name',
                                'label'         => 'Middle Name',
                                
                            );

$config['last_name']        = array(
                                'type'          => 'text',
                                'name'          => 'last_name',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control',
                                'id'            => 'last_name',
                                'maxlength'     => 250,
                                'required'      => true,
                                'alphaonly'     => true,
                                'placeholder'   => 'Last Name',
                                'label'         => 'Last Name',
                                
                            );

$config['suffix_name']      = array(
                                'type'          => 'text',
                                'name'          => 'suffix_name',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control',
                                'id'            => 'suffix_name',
                                'maxlength'     => 10,
                                'required'      => false,
                                'alphaonly'     => true,
                                'placeholder'   => 'Suffix',
                                'label'         => 'Suffix',
                                
                            );

$config['civil_status']     = array(
                                'type'          => 'dropdown',
                                'name'          => 'civil_status',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control',
                                'id'            => 'civil_status',
                                'required'      => true,
                                'placeholder'   => 'Civil Status',
                                'label'         => 'Civil Status',
                                'list_value'    => array(
                                                    'Single'    => 'Single',
                                                    'Married'   => 'Married',
                                                    'Separated' => 'Separated',
                                                    'Divorced'  => 'Divorced',
                                                    'Widowed'   => 'Widowed',
                                                ),
                                
                            );

$config['gender']           = array(
                                'type'          => 'dropdown',
                                'name'          => 'gender',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control',
                                'id'            => 'gender',
                                'required'      => true,
                                'placeholder'   => 'Gender',
                                'label'         => 'Gender',
                                'list_value'    => array(
                                                    'Male'     => 'Male',
                                                    'Female'     => 'Female'
                                                ),
                                
                            );

$config['status']           = array(
                                'type'          => 'dropdown',
                                'name'          => 'status',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control status_input',
                                'id'            => 'status',
                                'required'      => true,
                                'placeholder'   => 'Status',
                                'label'         => 'Status',
                                'list_value'    => array(
                                                    '1'     => 'Active',
                                                    '0'     => 'Inactive'
                                                )
                            );

$config['birthday']        = array(
                                'type'          => 'date',
                                'name'          => 'birthday',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control',
                                'id'            => 'birthday',
                                'required'      => true,
                                'placeholder'   => 'Birth Date',
                                'label'         => 'Birthday',
                                'yearRange'     => '-100:+0',
                                'maxDate'       => '0',
                                
                            );

$config['email_address']    = array(
                                'type'          => 'email',
                                'name'          => 'email_address',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control',
                                'id'            => 'email_address',
                                'required'      => true,
                                'maxlength'     => 250,
                                'placeholder'   => 'Email Address',
                                'label'         => 'Email Address'
                            );

$config['password']         = array(
                                'type'          => 'password',
                                'name'          => 'password',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control',
                                'id'            => 'password',
                                'required'      => true,
                                'validated'     => false,
                                'placeholder'   => 'Password',
                                'label'         => 'Password'
                            );

$config['home_address']          = array(
                                'type'          => 'ckeditor',
                                'name'          => 'home_address',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control',
                                'id'            => 'home_address',
                                'required'      => true,
                                'youtube'       => false,
                                'filemanager'   => false,
                                'maxlength'     => 500,
                                'placeholder'   => 'House No. and Street Address',
                                'label'         => 'House No. and Street Address',
                                
                            );

$config['timepicker']       = array(
                                'type'          => 'timepicker',
                                'name'          => 'timepicker',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control',
                                'id'            => 'timepicker',
                                'required'      => true,
                                'placeholder'   => 'Time Picker',
                                'label'         => 'Time Picker',
                                
                            );

$config['image']           = array(
                                'type'          => 'filemanager',
                                'name'          => 'image',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control',
                                'id'            => 'image',
                                'accept'        => 'jpg,gif,png,jpeg,mp4',
                                'max_size'      => '5',
                                'required'      => true,
                                'placeholder'   => 'Image',
                                'label'         => 'Image',
                                
                            );

$config['image_banner']           = array(
                                'type'          => 'filemanager',
                                'name'          => 'image_banner',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control',
                                'id'            => 'image_banner',
                                'accept'        => 'jpg,gif,png,jpeg,svg',
                                'required'      => true,
                                'max_size'      => '5',
                                'placeholder'   => 'Image Banner',
                                'label'         => 'Image Banner',
                            );

$config['image_thumbnail']          = array(
                                'type'          => 'filemanager',
                                'name'          => 'banner_thumbnail',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control',
                                'id'            => 'banner_thumbnail',
                                'accept'        => 'jpg,gif,png,jpeg',
                                'max_size'      => '5',
                                'required'      => true,
                                'placeholder'   => 'Image Thumbnail',
                                'label'         => 'Image Thumbnail',
                                
                            );

$config['date_start']        = array(
                                'type'          => 'date',
                                'name'          => 'date_start',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control',
                                'id'            => 'date_start',
                                'required'      => true,
                                'minDate'       => '0',
                                'placeholder'   => 'Start Date',
                                'label'         => 'Start Date',
                                
                            );


$config['date_end']        = array(
                                'type'          => 'date',
                                'name'          => 'date_end',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control',
                                'id'            => 'date_end',
                                'required'      => true,
                                'minDate'       => '0',
                                'placeholder'   => 'End Date',
                                'label'         => 'End Date',
                                
                            );

$config['article_body']          = array(
                                'type'          => 'ckeditor',
                                'name'          => 'article_body',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control',
                                'id'            => 'article_body',
                                'required'      => true,
                                'placeholder'   => 'Article Body',
                                'label'         => 'Article Body',
                                
                            );

$config['article_thumbnail']          = array(
                                'type'          => 'filemanager',
                                'name'          => 'article_thumbnail',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control',
                                'id'            => 'article_thumbnail',
                                'accept'        => 'jpg,gif,png,jpeg',
                                'max_size'      => '5',
                                'required'      => true,
                                'placeholder'   => 'Article Thumbnail',
                                'label'         => 'Article Thumbnail',
                                
                            );

$config['mobile_number']       = array(
                                'type'          => 'mobile_number',
                                'name'          => 'mobile_number',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control',
                                'id'            => 'mobile_number',
                                'required'      => true,
                                'placeholder'   => 'Mobile Number',
                                'label'         => 'Mobile Number',
                                'maxlength'     => 11,
                                'note'          => 'Required Format : 09XXXXXXXXX',
                            );

$config['zip_code']       = array(
                                'type'          => 'text',
                                'name'          => 'zip_code',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control',
                                'id'            => 'zip_code',
                                'maxlength'     => 5,
                                'accept'        => '/[^0-9]/g',
                                'placeholder'   => 'Zip Code',
                                'label'         => 'Zip Code',
                                
                            );


$config['youtube']       = array(
                                'type'          => 'youtube',
                                'name'          => 'youtube',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control',
                                'id'            => 'youtube',
                                'required'      => true,
                                'placeholder'   => 'Youtube Video',
                                'label'         => 'Youtube Video',
                                
                            );


//STANDARD FOR HOME
$config['title']       = array(
                                'type'          => 'text',
                                'name'          => 'title',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control',
                                'id'            => 'title',
                                'maxlength'     => 255,
                                'required'      => true,
                                'placeholder'   => 'Title',
                                'label'         => 'Title',
                            );

$config['title']       = array(
                                'type'          => 'text',
                                'name'          => 'name',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control',
                                'id'            => 'name',
                                'maxlength'     => 255,
                                'required'      => true,
                                'placeholder'   => 'Name',
                                'label'         => 'Name',
                            );

$config['description']      = array(
                                'type'          => 'ckeditor',
                                'name'          => 'description',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control',
                                'id'            => 'description',
                                'required'      => true,
                                'no_html'      => false,
                                'filemanager'   => false,
                                'youtube'       => false,
                                'placeholder'   => 'Description',
                                'label'         => 'Description',
                            );

$config['product_title']    = array(
                                'type'          => 'text',
                                'name'          => 'product_title',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control',
                                'id'            => 'product_title',
                                'maxlength'     => 255,
                                'required'      => true,
                                'placeholder'   => 'Product Title',
                                'label'         => 'Product Title',
                                
                            );


$config['product_description'] = array(
                                'type'          => 'ckeditor',
                                'name'          => 'product_description',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control',
                                'id'            => 'product_description',
                                'required'      => true,
                                'filemanager'   => false,
                                'youtube'       => false,
                                'placeholder'   => 'Product Description',
                                'label'         => 'Product Description',
                                
                            );

$config['product_image']       = array(
                                'type'          => 'filemanager',
                                'name'          => 'product_image',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control',
                                'id'            => 'product_image',
                                'accept'        => 'jpg,gif,png,jpeg',
                                'max_size'      => '5',
                                'required'      => true,
                                'placeholder'   => 'Product Image',
                                'label'         => 'Product Image',
                                
                            );


$config['privacy_title']       = array(
                                'type'          => 'text',
                                'name'          => 'title',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control',
                                'id'            => 'title',
                                'maxlength'     => 255,
                                'required'      => true,
                                'placeholder'   => 'Privacy Policy Title',
                                'label'         => 'Privacy Policy Title',
                                
                            );


$config['privacy_statement']    = array(
                                'type'          => 'ckeditor',
                                'name'          => 'privacy_statement_description',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control',
                                'id'            => 'privacy_statement_description',
                                'required'      => true,
                                'youtube'       => false,
                                'filemanager'   => false,
                                'placeholder'   => 'Privacy Statement',
                                'label'         => 'Privacy Statement',

                            );

$config['terms_title']       = array(
                                'type'          => 'text',
                                'name'          => 'terms_title',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control',
                                'id'            => 'terms_title',
                                'maxlength'     => 255,
                                'required'      => true,
                                'placeholder'   => 'Terms of Use - Title',
                                'label'         => 'Title',
                                
                            );


$config['terms_statement']    = array(
                                'type'          => 'ckeditor',
                                'name'          => 'terms_statement',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control',
                                'id'            => 'terms_statement',
                                'required'      => true,
                                'filemanager'   => false,
                                'youtube'       => false,
                                'placeholder'   => 'Terms of Use Statement',
                                'label'         => 'Content',
                                
                            );

$config['brief_description'] = array(
                                'type'          => 'textarea',
                                'name'          => 'brief_description',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control brief_description_input',
                                'id'            => 'brief_description',
                                'required'      => true,
                                'no_html'      => true,
                                'maxlength'     => 150,
                                'placeholder'   => 'Brief Description',
                                'label'         => 'Brief Description',
                                
                            );

$config['question']       = array(
                                'type'          => 'text',
                                'name'          => 'question',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control question_input',
                                'id'            => 'question',
                                'required'      => true,
                                'maxlength'     => 255,
                                'placeholder'   => 'Question',
                                'label'         => 'Question'
                            );

$config['answer']       = array(
                                'type'          => 'ckeditor',
                                'name'          => 'answer',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control answer_input',
                                'id'            => 'answer',
                                'required'      => true,
                                'maxlength'     => 500,
                                'placeholder'   => 'Answer',
                                'label'         => 'Answer',
                                'youtube'       => false
                            );

$config['article_date_start']        = array(
                                'type'          => 'date',
                                'name'          => 'article_date_start',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control',
                                'id'            => 'article_date_start',
                                'minDate'       => '0',
                                'placeholder'   => 'Start Date',
                                'label'         => 'Start Date',
                                'note'          => 'Leave blank if no Expiration/Duration'
                            );


$config['article_date_end']        = array(
                                'type'          => 'date',
                                'name'          => 'article_date_end',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control',
                                'id'            => 'article_date_end',
                                'minDate'       => '0',
                                'placeholder'   => 'End Date',
                                'label'         => 'End Date',
                                'note'          => 'Leave blank if no Expiration/Duration'
                            );

$config['contact_inquiry'] = array(
                                'type'          => 'textarea',
                                'name'          => 'inquiry',
                                'form-align'    => 'vertical',
                                'class'         => 'form-control',
                                'id'            => 'inquiry',
                                'required'      => true,
                                'placeholder'   => 'Inquiry',
                                'label'         => 'Inquiry',
                                
                            );

$config['contact_mobile_number']       = array(
                                'type'          => 'mobile_number',
                                'name'          => 'mobile_number',
                                'form-align'    => 'vertical',
                                'class'         => 'form-control',
                                'id'            => 'mobile_number',
                                'required'      => true,
                                'placeholder'   => 'Mobile Number',
                                'label'         => 'Mobile Number',
                                'maxlength'     => 11,
                                'note'          => 'Required Format : 09XXXXXXXXX',
                            );
$config['contact_email_address']    = array(
                                'type'          => 'email',
                                'name'          => 'email_address',
                                'form-align'    => 'vertical',
                                'class'         => 'form-control',
                                'id'            => 'email_address',
                                'required'      => true,
                                'maxlength'     => 250,
                                'placeholder'   => 'Email Address',
                                'label'         => 'Email Address',
                                
                            );

$config['contact_first_name']       = array(
                                'type'          => 'text',
                                'name'          => 'first_name',
                                'form-align'    => 'vertical',
                                'class'         => 'form-control',
                                'id'            => 'first_name',
                                'maxlength'     => 250,
                                'required'      => true,
                                'alphaonly'     => true,
                                'accept'        => '/[^a-zA-Z .,-]/g',
                                'placeholder'   => 'First Name',
                                'label'         => 'First Name',
                                'align'         => 'vertical',
                                
                            );

$config['contact_middle_name']      = array(
                                'type'          => 'text',
                                'name'          => 'middle_name',
                                'form-align'    => 'vertical',
                                'class'         => 'form-control',
                                'id'            => 'middle_name',
                                'maxlength'     => 250,
                                'required'      => true,
                                'alphaonly'     => true,
                                'placeholder'   => 'Middle Name',
                                'label'         => 'Middle Name',
                                
                            );

$config['contact_last_name']        = array(
                                'type'          => 'text',
                                'name'          => 'last_name',
                                'form-align'    => 'vertical',
                                'class'         => 'form-control',
                                'id'            => 'last_name',
                                'maxlength'     => 250,
                                'required'      => true,
                                'alphaonly'     => true,
                                'placeholder'   => 'Last Name',
                                'label'         => 'Last Name',
                                
                            );

$config['contact_captcha']       = array(
                                'type'          => 'captcha',
                                'captcha'       => 'google',
                                'site_key'      => '6Lf8i2cUAAAAACaKQohJ3nFyBCGHMmDVQBK4sjVK',
                                'name'          => 'captcha',
                                'form-align'    => 'vertical',
                                'class'         => 'form-control',
                                'id'            => 'captcha',
                                'required'      => true,
                                'maxlength'     => 8,
                                'placeholder'   => 'Enter above text',
                                'label'         => 'Captcha',
                                
                            );



$config['sign_up_first_name']       = array(
                                'type'          => 'text',
                                'name'          => 'first_name',
                                'form-align'    => 'vertical',
                                'class'         => 'form-control',
                                'id'            => 'first_name',
                                'maxlength'     => 250,
                                'required'      => true,
                                'alphaonly'     => true,
                                'accept'        => '/[^a-zA-Z .,-]/g',
                                'placeholder'   => 'First Name',
                                'label'         => 'First Name',
                                'align'         => 'vertical',
                                
                            );

$config['sign_up_middle_name']      = array(
                                'type'          => 'text',
                                'name'          => 'middle_name',
                                'form-align'    => 'vertical',
                                'class'         => 'form-control',
                                'id'            => 'middle_name',
                                'maxlength'     => 250,
                                'required'      => true,
                                'alphaonly'     => true,
                                'placeholder'   => 'Middle Name',
                                'label'         => 'Middle Name',
                                
                            );

$config['sign_up_last_name']        = array(
                                'type'          => 'text',
                                'name'          => 'last_name',
                                'form-align'    => 'vertical',
                                'class'         => 'form-control',
                                'id'            => 'last_name',
                                'maxlength'     => 250,
                                'required'      => true,
                                'alphaonly'     => true,
                                'placeholder'   => 'Last Name',
                                'label'         => 'Last Name',
                                
                            );

$config['sign_up_civil_status']     = array(
                                'type'          => 'dropdown',
                                'name'          => 'civil_status',
                                'form-align'    => 'vertical',
                                'class'         => 'form-control',
                                'id'            => 'civil_status',
                                'required'      => true,
                                'placeholder'   => 'Civil Status',
                                'label'         => 'Civil Status',
                                'list_value'    => array(
                                                    'Single'    => 'Single',
                                                    'Married'   => 'Married',
                                                    'Separated' => 'Separated',
                                                    'Divorced'  => 'Divorced',
                                                    'Widowed'   => 'Widowed',
                                                ),
                                
                            );

$config['sign_up_gender']           = array(
                                'type'          => 'dropdown',
                                'name'          => 'gender',
                                'form-align'    => 'vertical',
                                'class'         => 'form-control',
                                'id'            => 'gender',
                                'required'      => true,
                                'placeholder'   => 'Gender',
                                'label'         => 'Gender',
                                'list_value'    => array(
                                                    'Male'     => 'Male',
                                                    'Female'     => 'Female'
                                                ),
                                
                            );

$config['sign_up_birthday']        = array(
                                'type'          => 'date',
                                'name'          => 'birthday',
                                'form-align'    => 'vertical',
                                'class'         => 'form-control',
                                'id'            => 'birthday',
                                'required'      => true,
                                'placeholder'   => 'Birth Date',
                                'label'         => 'Birthday',
                                'yearRange'     => '-100:+0',
                                'maxDate'       => '0',
                                
                            );

$config['sign_up_mobile_number']       = array(
                                'type'          => 'mobile_number',
                                'name'          => 'mobile_number',
                                'form-align'    => 'vertical',
                                'class'         => 'form-control',
                                'id'            => 'mobile_number',
                                'required'      => true,
                                'placeholder'   => 'Mobile Number',
                                'label'         => 'Mobile Number',
                                'maxlength'     => 11,
                                'note'          => 'Required Format : 09XXXXXXXXX',
                            );

$config['sign_up_email_address']    = array(
                                'type'          => 'email',
                                'name'          => 'email_address',
                                'form-align'    => 'vertical',
                                'class'         => 'form-control',
                                'id'            => 'email_address',
                                'required'      => true,
                                'maxlength'     => 250,
                                'placeholder'   => 'Email Address',
                                'label'         => 'Email Address',
                                
                            );

$config['sign_up_country']     = array(
                                'type'          => 'dropdown',
                                'name'          => 'country',
                                'form-align'    => 'vertical',
                                'class'         => 'form-control',
                                'id'            => 'country',
                                'required'      => true,
                                'placeholder'   => 'Country',
                                'label'         => 'Country',
                                'list_value'    => array(
                                                    'PH'    => 'Philippines',
                                                ),
                                
                            );

$config['sign_up_region']     = array(
                                'type'          => 'dropdown',
                                'name'          => 'region',
                                'form-align'    => 'vertical',
                                'class'         => 'form-control',
                                'id'            => 'region',
                                'required'      => true,
                                'placeholder'   => 'Region',
                                'label'         => 'Region',
                                'list_value'    => array(),
                                
                            );

$config['sign_up_province']     = array(
                                'type'          => 'dropdown',
                                'name'          => 'province',
                                'form-align'    => 'vertical',
                                'class'         => 'form-control',
                                'id'            => 'province',
                                'required'      => true,
                                'placeholder'   => 'Province',
                                'label'         => 'Province',
                                'list_value'    => array(),
                                
                            );

$config['sign_up_city']     = array(
                                'type'          => 'dropdown',
                                'name'          => 'city',
                                'form-align'    => 'vertical',
                                'class'         => 'form-control',
                                'id'            => 'city',
                                'required'      => true,
                                'placeholder'   => 'City',
                                'label'         => 'City',
                                'list_value'    => array(),
                                
                            );

$config['sign_up_captcha']   = array(
                                'type'          => 'captcha',
                                'name'          => 'captcha',
                                'captcha'          => 'codeigniter',
                                'form-align'    => 'vertical',
                                'class'         => 'form-control',
                                'id'            => 'captcha',
                                'required'      => true,
                                'maxlength'     => 8,
                                'placeholder'   => 'Enter above text',
                                'label'         => 'Captcha',
                                
                            );

$config['video_type'] = array(
                                'type'          => 'radio',
                                'name'          => 'video_type',
                                'form-align'    => 'horizontal',
                                'class'         => 'video_type',
                                'id'            => 'video_type',
                                'required'      => true,
                                'placeholder'   => 'Video Type',
                                'label'         => 'Video Type',
                                'list_value'    => array(
                                                    '0'     => 'Upload Video',
                                                    '1'     => 'Youtube Video'
                                                ),
                                
                            );


$config['upload_video'] = array(
                                'type'          => 'filemanager',
                                'name'          => 'upload_video',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control',
                                'id'            => 'upload_video',
                                'accept'        => 'mp4',
                                'required'      => true,
                                'placeholder'   => 'Upload Video',
                                'label'         => 'Upload Video'
                            );


$config['upload_thumbnail'] = array(
                                'type'          => 'filemanager',
                                'name'          => 'upload_thumbnail',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control',
                                'id'            => 'upload_thumbnail',
                                'accept'        => 'jpg,gif,png,jpeg',
                                'required'      => true,
                                'placeholder'   => 'Upload Video Thumbnail',
                                'label'         => 'Upload Video Thumbnail',
                                
                            );

$config['banner_type'] = array(
                                'type'          => 'radio',
                                'name'          => 'banner_type',
                                'form-align'    => 'horizontal',
                                'class'         => 'banner_type',
                                'id'            => 'banner_type',
                                'required'      => true,
                                'placeholder'   => 'Upload Type',
                                'label'         => 'Upload Type',
                                'list_value'    => array(
                                                    '0'     => 'Image / Video Upload',
                                                    '1'     => 'Youtube Link',

                                                ),
                            );

$config['image_video_banner']           = array(
                                'type'          => 'filemanager',
                                'name'          => 'image_video',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control',
                                'id'            => 'image_video',
                                'accept'        => 'jpg,gif,png,jpeg,mp4',
                                'required'      => true,
                                'placeholder'   => 'Image / Video Upload',
                                'label'         => 'Image / Video Upload'
                            );



/* Custom Config */


$config['banner']           = array(
                                'type'          => 'filemanager',
                                'name'          => 'banner',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control ',
                                'id'            => 'banner_img',
                                'accept'        => 'jpg,gif,png,jpeg,mp4',
                                'required'      => true,
                                'max_size'      => '5',
                                'placeholder'   => 'Banner',
                                'label'         => 'Banner',

                            );


$config['thumbnail']          = array(
                                'type'          => 'filemanager',
                                'name'          => 'banner_thumbnail',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control',
                                'id'            => 'banner_thumbnail',
                                'accept'        => 'jpg,gif,png,jpeg',
                                'max_size'      => '5',
                                'required'      => true,
                                'placeholder'   => 'Image Thumbnail',
                                'label'         => 'Image Thumbnail',
                            );

$config['url']              = array(
                                'type'          => 'text',
                                'name'          => 'url',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control',
                                'id'            => 'url',
                                'required'      => true,
                                'placeholder'   => 'URL',
                                'label'         => 'URL'
                            );


$config['start']            = array(
                                'type'          => 'date',
                                'name'          => 'date_start',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control start_input',
                                'id'            => 'date_start',
                                'minDate'       => '0',
                                'placeholder'   => '',
                                'label'         => '',
                                
                            );

$config['end']              = array(
                                'type'          => 'date',
                                'name'          => 'date_end',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control end_input',
                                'id'            => 'date_end',
                                'minDate'       => '0',
                                'placeholder'   => '',
                                'label'         => '',
                                
                            );


$config['statement']        = array(

                                'type'          => 'ckeditor', 
                                'name'          => 'statement',
                                'form-align'    => 'horizontal', 
                                'class'         => 'form-control statement_input', 
                                'id'            => 'statement', 
                                'filemanager'   => false, 
                                'youtube'       => false, 
                                'placeholder'   => '', 
                                'label'         => 'Statement',
                            );

$config['name']             = array(
                                'type'          => 'text',
                                'name'          => 'name',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control',
                                'id'            => 'name',
                                'maxlength'     => 250,
                                'required'      => true,
                                'accept'        => '/[^a-zA-Z0-9\u00f1\u00d1 .,-\/\']/g',
                                'placeholder'   => 'Name',
                                'label'         => 'Name'
                            );

$config['username']         = array(
                                'type'          => 'text',
                                'name'          => 'username',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control',
                                'id'            => 'username',
                                'maxlength'     => 25,
                                'required'      => true,
                                'alphaonly'     => true,
                                'placeholder'   => 'Username',
                                'label'         => 'Username'
                            );

$config['role']             = array(
                                'type'          => 'dropdown',
                                'name'          => 'role',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control role',
                                'id'            => 'role',
                                'required'      => true,
                                'placeholder'   => 'Role',
                                'label'         => 'User Role',
                                'list_value'    => array()
                            );

$config['dd_user_sign_up']         = array(
                                    'type'          => 'dropdown',
                                    'name'          => 'dd_user_sign_up',
                                    'form-align'    => 'horizontal',
                                    'class'         => 'form-control dd_user_sign_up',
                                    'id'            => 'dd_user_sign_up',
                                    'required'      => true,
                                    'placeholder'   => 'User Signup',
                                    'label'         => 'User Signup',
                                    'list_value'    => array(
                                                        '0'     => 'Disable',
                                                        '1'     => 'Enable'
                                                    )
                                );

$config['dd_contact_us']           = array(
                                    'type'          => 'dropdown',
                                    'name'          => 'dd_contact_us',
                                    'form-align'    => 'horizontal',
                                    'class'         => 'form-control dd_contact_us',
                                    'id'            => 'dd_contact_us',
                                    'required'      => true,
                                    'placeholder'   => 'Contact Us',
                                    'label'         => 'Contact Us',
                                    'list_value'    => array(
                                                        '0'     => 'Disable',
                                                        '1'     => 'Enable'
                                                    )
                                );

$config['dd_notif_login']           = array(
                                    'type'          => 'dropdown',
                                    'name'          => 'dd_notif_login',
                                    'form-align'    => 'horizontal',
                                    'class'         => 'form-control dd_notif_login',
                                    'id'            => 'dd_notif_login',
                                    'required'      => true,
                                    'placeholder'   => 'Login',
                                    'label'         => 'Login',
                                    'list_value'    => array(
                                                        '0'     => 'Disable',
                                                        '1'     => 'Enable'
                                                    )
                                );

$config['dd_privacy_statement_option']         = array(
                                    'type'          => 'dropdown',
                                    'name'          => 'dd_privacy_statement_option',
                                    'form-align'    => 'horizontal',
                                    'class'         => 'form-control dd_privacy_statement_option',
                                    'id'            => 'dd_privacy_statement_option',
                                    'required'      => true,
                                    'placeholder'   => 'Privacy Statement Option',
                                    'label'         => 'Privacy Statement Option',
                                    'list_value'    => array(
                                                        '0'     => 'Redirect Url',
                                                        '1'     => 'Page'
                                                    )
                                );

$config['crs_host']       = array(
                                'type'          => 'text', 
                                'name'          => 'crs_host', 
                                'form-align'    => 'horizontal', 
                                'class'         => 'form-control', 
                                'id'            => 'crs_host', 
                                'required'      => true, 
                                'maxlength'     => 255, 
                                'alphaonly'     => false, 
                                'placeholder'   => 'Host', 
                                'label'         => 'Host'
                            );

$config['crs_token']       = array(
                                'type'          => 'text', 
                                'name'          => 'crs_token', 
                                'form-align'    => 'horizontal', 
                                'class'         => 'form-control', 
                                'id'            => 'crs_token', 
                                'required'      => true, 
                                'maxlength'     => 255, 
                                'alphaonly'     => false, 
                                'placeholder'   => 'Token', 
                                'label'         => 'Token'
                            );


$config['link_type']        = array(
                                'type'          => 'dropdown',
                                'name'          => 'link_type',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control',
                                'id'            => 'link_type',
                                'required'      => true,
                                'placeholder'   => 'Link Type',
                                'label'         => 'Link Type',
                                'list_value'    => array(
                                                    '1'     => 'Parent',
                                                    '2'     => 'Child'
                                                )
                            );

$config['shop_url']              = array(
                                'type'          => 'text',
                                'name'          => 'shop_url',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control',
                                'id'            => 'shop_url',
                                'required'      => false,
                                'placeholder'   => '',
                                'label'         => 'Shop URL'
                            );

$config['favicon_img']           = array(
                                'type'          => 'filemanager',
                                'name'          => 'favicon_img',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control',
                                'id'            => 'favicon_img',
                                'accept'        => 'jpg,gif,png,jpeg,ico',
                                'required'      => false,
                                'placeholder'   => '',
                                'label'         => 'Favicon',
                            );

$config['brand_logo']           = array(
                                'type'          => 'filemanager',
                                'name'          => 'brand_logo',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control',
                                'id'            => 'brand_logo',
                                'accept'        => 'jpg,gif,png,jpeg',
                                'max_size'      => '5',
                                'required'      => false,
                                'placeholder'   => '',
                                'label'         => 'Brand Logo',
                            );

$config['google_analytics']       = array(
                                'type'          => 'text',
                                'name'          => 'google_analytics',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control',
                                'id'            => 'google_analytics',
                                'required'      => false,
                                'placeholder'   => 'Tracking ID',
                                'label'         => 'Google Analytics',
                            );

$config['gtm_header'] = array(
                                'type'          => 'textarea',
                                'name'          => 'gtm_header',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control',
                                'id'            => 'gtm_header',
                                'required'      => false,
                                'placeholder'   => '',
                                'label'         => 'Google Tag Manager(Header)'
                            );

$config['gtm_body'] = array(
                                'type'          => 'textarea',
                                'name'          => 'gtm_body',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control',
                                'id'            => 'gtm_body',
                                'required'      => false,
                                'placeholder'   => '',
                                'label'         => 'Google Tag Manager(Body)'
                            );

$config['facebook']          = array(
                                'type'          => 'text',
                                'name'          => 'facebook',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control',
                                'id'            => 'facebook',
                                'required'      => false,
                                'maxlength'     => 255,
                                'placeholder'   => '',
                                'label'         => 'Facebook Link'
                            );

$config['twitter']          = array(
                                'type'          => 'text',
                                'name'          => 'twitter',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control',
                                'id'            => 'twitter',
                                'required'      => false,
                                'maxlength'     => 255,                                
                                'placeholder'   => '',
                                'label'         => 'Twitter Link'
                            );

$config['instagram']          = array(
                                'type'          => 'text',
                                'name'          => 'instagram',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control',
                                'id'            => 'instagram',
                                'required'      => false,
                                'maxlength'     => 255,
                                'placeholder'   => '',
                                'label'         => 'Instagram Link'
                            );

$config['pinterest']          = array(
                                'type'          => 'text',
                                'name'          => 'pinterest',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control',
                                'id'            => 'pinterest',
                                'required'      => false,
                                'maxlength'     => 255,
                                'placeholder'   => '',
                                'label'         => 'Pinterest Link'
                            );

$config['linked_in']          = array(
                                'type'          => 'text',
                                'name'          => 'linked_in',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control',
                                'id'            => 'linked_in',
                                'required'      => false,
                                'maxlength'     => 255,
                                'placeholder'   => '',
                                'label'         => 'Linked in Link'
                            );

$config['youtube_link']       = array(
                                'type'          => 'text',
                                'name'          => 'youtube_link',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control',
                                'id'            => 'youtube_link',
                                'required'      => false,
                                'maxlength'     => 255,
                                'placeholder'   => '',
                                'label'         => 'Youtube Link'
                            );

$config['tumblr']             = array(
                                'type'          => 'text',
                                'name'          => 'tumblr',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control',
                                'id'            => 'tumblr',
                                'required'      => false,
                                'placeholder'   => '',
                                'label'         => 'Tumblr Link'
                            );

$config['email_protocol']     = array(
                                'type'          => 'dropdown',
                                'name'          => 'protocol',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control',
                                'id'            => 'protocol',
                                'required'      => false,
                                'placeholder'   => '',
                                'label'         => 'Protocol',
                                'list_value'    => array(
                                                    'sendgrid' => 'Sendgrid',
                                                    'smtp'     => 'SMTP',
                                                    'sendmail'     => 'Sendmail'
                                                )
                            );

$config['email_host']         = array(
                                'type'          => 'text',
                                'name'          => 'host',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control',
                                'id'            => 'host',
                                'required'      => true,
                                'placeholder'   => '',
                                'label'         => 'Host'
                            );

$config['email_user']         = array(
                                'type'          => 'text',
                                'name'          => 'email',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control',
                                'id'            => 'email',
                                'required'      => true,
                                'placeholder'   => '',
                                'label'         => 'Email'
                            );

$config['email_password']     = array(
                                'type'          => 'password',
                                'name'          => 'email_password',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control',
                                'id'            => 'email_password',
                                'required'      => true,
                                'validated'     => false,
                                'placeholder'   => '',
                                'label'         => 'Password'
                            );

$config['email_port']         = array(
                                'type'          => 'text',
                                'name'          => 'port',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control',
                                'id'            => 'port',
                                'required'      => true,
                                'placeholder'   => '',
                                'label'         => 'Port'
                            );

$config['email_default']         = array(
                                'type'          => 'text',
                                'name'          => 'email_default',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control',
                                'id'            => 'email_default',
                                'required'      => true,
                                'placeholder'   => '',
                                'label'         => 'Default Email'
                            );

$config['notification_status']   = array(
                                'type'          => 'dropdown',
                                'name'          => 'notification_status',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control',
                                'id'            => 'notification_status',
                                'required'      => false,
                                'placeholder'   => '',
                                'label'         => 'Status',
                                'list_value'    => array(
                                                    '1'     => 'Show',
                                                    '0'     => 'Hide'
                                                )
                            );

$config['notification_position']  = array(
                                'type'          => 'dropdown',
                                'name'          => 'notification_position',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control',
                                'id'            => 'notification_position',
                                'required'      => false,
                                'placeholder'   => '',
                                'label'         => 'Position',
                                'list_value'    => array(
                                                    'top'     => 'Top',
                                                    'bottom'  => 'Bottom'
                                                )
                            );

$config['browser_display']  = array(
                                'type'          => 'checkbox',
                                'name'          => 'notification_browser',
                                'form-align'    => 'horizontal',
                                'class'         => 'notification_browser',
                                'id'            => 'browser_display',
                                'label'         => 'Browser Display',
                                'list_value'    => array(
                                                    'mozilla_firefox'   => 'Mozilla Firefox',
                                                    'google_chrome'     => 'Google Chrome',
                                                    'internet_explorer' => 'Internet Explorer',
                                                    'safari'            => 'Safari'
                                                )
                            );

$config['notification_message'] = array(
                                'type'          => 'textarea',
                                'name'          => 'notification_message',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control',
                                'id'            => 'notification_message',
                                'required'      => false,
                                'placeholder'   => '',
                                'label'         => 'Notification Message'
                            );


$config['cms_title']       = array(
                                'type'          => 'text',
                                'name'          => 'cms_title',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control',
                                'id'            => 'cms_title',
                                'required'      => true,
                                'placeholder'   => 'CMS Title',
                                'label'         => 'CMS Title',
                            );

$config['skin']  = array(
                                'type'          => 'dropdown',
                                'name'          => 'skin',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control',
                                'id'            => 'skin',
                                'required'      => true,
                                'label'         => 'Skin',
                                'list_value'    => array(
                                                    '_all-skins'     => '_all-skins',
                                                    'skin-black-light'  => 'skin-black-light',
                                                    'skin-black'  => 'skin-black',
                                                    'skin-blue-light'  => 'skin-blue-light',
                                                    'skin-blue'  => 'skin-blue',
                                                    'skin-green-light'  => 'skin-green-light',
                                                    'skin-green'  => 'skin-green',
                                                    'skin-purple-light'  => 'skin-purple-light',
                                                    'skin-purple'  => 'skin-purple',
                                                    'skin-red-light'  => 'skin-red-light',
                                                    'skin-red'  => 'skin-red',
                                                    'skin-yellow-light'  => 'skin-yellow-light',
                                                    'skin-yellow'  => 'skin-yellow'
                                                )
                            );

$config['edit_header_label']  = array(
                                'type'          => 'dropdown',
                                'name'          => 'edit_header_label',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control',
                                'id'            => 'edit_header_label',
                                'required'      => true,
                                'label'         => 'Edit Header Label',
                                'list_value'    => array(
                                                    '1'  => 'Yes',
                                                    '0'  => 'No',
                                                )
                            );

$config['ad_authentication']  = array(
                                'type'          => 'dropdown',
                                'name'          => 'ad_authentication',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control',
                                'id'            => 'ad_authentication',
                                'required'      => true,
                                'label'         => 'AD Authentication',
                                'list_value'    => array(
                                                    '0'  => 'No',
                                                    '1'  => 'Yes',
                                                    '2'  => 'Both',
                                                )
                            );

$config['password_validated'] = array(
                                'type'          => 'password',
                                'name'          => 'password',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control',
                                'id'            => 'password',
                                'required'      => true,
                                'validated'     => true,
                                'placeholder'   => 'Password',
                                'label'         => 'Password'
                            );

$config['navigation_position'] = array(
                                'type'          => 'radio',
                                'name'          => 'navigation_position',
                                'form-align'    => 'horizontal',
                                'class'         => 'navigation_position',
                                'id'            => 'navigation_position',
                                'placeholder'   => 'Navigation Position',
                                'label'         => 'Navigation Postion',
                                'list_value'    => array(
                                                    'top'     => 'Top',
                                                    'left'    => 'Left',
                                                    'right'   => 'Right',
                                                ),
                            );

$config['email_template_name'] = array(
                                'type'          => 'text',
                                'name'          => 'email_name',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control',
                                'id'            => 'email_name',
                                'required'      => true,
                                'placeholder'   => 'Name',
                                'label'         => 'Name',
                            );
							
$config['email_template_message'] = array(
                                'type'          => 'textarea',
                                'name'          => 'email_message',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control',
                                'id'            => 'email_message',
                                'required'      => true,
                                'placeholder'   => 'Message',
                                'label'         => 'Message',
                            );
							
$config['email_template_status'] = array(
                                'type'          => 'dropdown',
                                'name'          => 'email_status',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control',
                                'id'            => 'email_status',
                                'required'      => true,
                                'placeholder'   => 'Status',
                                'label'         => 'Status',
                                'list_value'    => array(
                                                    '1'    => 'Active',
                                                    '0'   => 'Inactive',
                                                ),
                            );

$config['email_template_logo'] = array(
                                'type'          => 'filemanager',
                                'name'          => 'email_logo',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control',
                                'id'            => 'email_logo',
                                'accept'        => 'jpg,gif,png,jpeg',
                                'required'      => true,
                                'placeholder'   => 'Logo',
                                'label'         => 'Logo',
                            );	

$config['email_template_header'] = array(
                                'type'          => 'text',
                                'name'          => 'email_header',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control',
                                'id'            => 'email_header',
                                'required'      => true,
                                'placeholder'   => 'Header',
                                'label'         => 'Header',
                            );

$config['email_template_footer'] = array(
                                'type'          => 'text',
                                'name'          => 'email_footer',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control',
                                'id'            => 'email_footer',
                                'required'      => true,
                                'placeholder'   => 'Footer',
                                'label'         => 'Footer',
                            );
							
$config['email_template_subject'] = array(
                                'type'          => 'text',
                                'name'          => 'email_subject',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control',
                                'id'            => 'email_subject',
                                'required'      => true,
                                'placeholder'   => 'Subject',
                                'label'         => 'Subject',
                            );	
							
$config['email_template_color'] = array(
                                'type'          => 'text',
                                'name'          => 'email_color',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control',
                                'id'            => 'email_color',
                                'required'      => true,
                                'placeholder'   => 'Color',
                                'label'         => 'Color',
                            );

$config['sendgrid_from_email'] = array(
                                'type'          => 'text',
                                'name'          => 'sendgrid_from_email',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control',
                                'id'            => 'sendgrid_from_email',
                                'required'      => true,
                                'placeholder'   => 'From Email',
                                'label'         => 'From Email',
                            );  

$config['sendgrid_from_name'] = array(
                                'type'          => 'text',
                                'name'          => 'sendgrid_from_name',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control',
                                'id'            => 'sendgrid_from_name',
                                'required'      => true,
                                'placeholder'   => 'From Name',
                                'label'         => 'From Name'
                            );

$config['sendgrid_token'] = array(
                                'type'          => 'text',
                                'name'          => 'sendgrid_token',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control',
                                'id'            => 'sendgrid_token',
                                'required'      => true,
                                'placeholder'   => 'Token',
                                'label'         => 'Token',
                            );

$config['disclaimer_title'] = array(
                                'type'          => 'text',
                                'name'          => 'disclaimer_title',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control',
                                'id'            => 'disclaimer_title',
                                'maxlength'     => 255,
                                'required'      => true,
                                'placeholder'   => 'Title',
                                'label'         => 'Title',
                            );

$config['disclaimer_description'] = array(
                                'type'          => 'ckeditor',
                                'name'          => 'disclaimer_description',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control',
                                'id'            => 'disclaimer_description',
                                'required'      => true,
                                'filemanager'   => false,
                                'youtube'       => false,
                                'placeholder'   => 'Description',
                                'label'         => 'Description',
                            );

$config['media_type'] = array(
                                'type'          => 'dropdown',
                                'name'          => 'media_type',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control',
                                'id'            => 'media_type',
                                'required'      => true,
                                'label'         => 'Media Type',
                                'list_value'    => array(
                                                    'album'  => 'Album',
                                                    'image'  => 'Image',
                                                    'video'  => 'Video',
                                                )
                            );

$config['media_image'] = array(
                                'type'          => 'filemanager',
                                'name'          => 'media_image',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control',
                                'id'            => 'media_image',
                                'accept'        => 'jpg,gif,png,jpeg',
                                'max_size'      => '15',
                                'required'      => true,
                                'placeholder'   => 'Image',
                                'label'         => 'Image',    
                            );

$config['media_video'] = array(
                                'type'          => 'filemanager',
                                'name'          => 'media_video',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control',
                                'id'            => 'media_video',
                                'accept'        => 'mp4',
                                'required'      => true,
                                'placeholder'   => 'Upload Video',
                                'label'         => 'Upload Video'
                            );				

 $config['banner_thumbnail']          = array(
                                'type'          => 'filemanager',
                                'name'          => 'banner_thumbnail',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control',
                                'id'            => 'banner_thumbnail',
                                'accept'        => 'jpg,gif,png,jpeg',
                                'max_size'      => '5',
                                'required'      => false,
                                'placeholder'   => 'Image Thumbnail',
                                'label'         => 'Image Thumbnail',
                                
                            );

$config['wid_image_banner']           = array(
                                'type'          => 'filemanager',
                                'name'          => 'image_banner',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control',
                                'id'            => 'image_banner',
                                'accept'        => 'jpg,gif,png,jpeg',
                                'required'      => false,
                                'max_size'      => '5',
                                'placeholder'   => 'Image Banner',
                                'label'         => 'Image Banner',
                            );

$config['landing_title']       = array(
                                'type'          => 'text',
                                'name'          => 'title',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control',
                                'id'            => 'title',
                                'maxlength'     => 255,
                                'required'      => true,
                                'placeholder'   => 'Title',
                                'label'         => 'Title',
                            );

$config['landing_asc']       = array(
                                'type'          => 'text',
                                'name'          => 'landing_asc',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control',
                                'id'            => 'landing_asc',
                                'maxlength'     => 255,
                                'required'      => true,
                                'placeholder'   => 'ASC Ref No.',
                                'label'         => 'ASC Ref No.',
                            );

$config['landing_bg_img']       = array(
                                'type'          => 'filemanager',
                                'name'          => 'landing_bg',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control',
                                'id'            => 'landing_bg',
                                'accept'        => 'jpg,gif,png,jpeg',
                                'required'      => false,
                                'max_size'      => '5',
                                'placeholder'   => 'Background Image',
                                'label'         => 'Background Image',
                            );

$config['landing_logo_image']       = array(
                                'type'          => 'filemanager',
                                'name'          => 'landing_logo',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control',
                                'id'            => 'landing_logo',
                                'accept'        => 'jpg,gif,png,jpeg',
                                'required'      => false,
                                'max_size'      => '5',
                                'placeholder'   => 'Logo Image',
                                'label'         => 'Logo Image',
                            );


$config['sub_title']       = array(
                                'type'          => 'text',
                                'name'          => 'sub_title',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control',
                                'id'            => 'sub_title',
                                'maxlength'     => 255,
                                'required'      => true,
                                'placeholder'   => 'Sub Title',
                                'label'         => 'Sub Title',
                            );

$config['landing_third_title']       = array(
                                'type'          => 'text',
                                'name'          => 'mini-description',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control',
                                'id'            => 'mini_description',
                                'maxlength'     => 255,
                                'required'      => true,
                                'placeholder'   => 'Mini Description',
                                'label'         => 'Mini Description',
                            );

$config['try_now_separator_title']       = array(
                                'type'          => 'text',
                                'name'          => 'separator-title',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control',
                                'id'            => 'separator_title',
                                'maxlength'     => 255,
                                'required'      => true,
                                'placeholder'   => 'Separator Title',
                                'label'         => 'Separator Title',
                            );

$config['landing_description']       = array(
                                'type'          => 'text',
                                'name'          => 'description',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control',
                                'id'            => 'description',
                                'maxlength'     => 255,
                                'required'      => true,
                                'placeholder'   => 'Description',
                                'label'         => 'Description',
                            );

$config['landing_image_banner']           = array(
                                'type'          => 'filemanager',
                                'name'          => 'landing_banner',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control',
                                'id'            => 'landing_banner',
                                'accept'        => 'jpg,gif,png,jpeg,svg',
                                'required'      => false,
                                'max_size'      => '5',
                                'placeholder'   => 'Image Banner',
                                'label'         => 'Image Banner',
                            );

$config['redirect_url']          = array(
                                'type'          => 'text',
                                'name'          => 'redirect_link',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control',
                                'id'            => 'redirect_link',
                                'required'      => false,
                                'no_html'       => true,
                                'placeholder'   => 'eg. http:// or https://link.com',
                                'label'         => 'Redirect Url'
                                
                            );

$config['try_now_title']       = array(
                                'type'          => 'text',
                                'name'          => 'try_now_title',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control',
                                'id'            => 'try_now_title',
                                'maxlength'     => 255,
                                'required'      => true,
                                'placeholder'   => 'Title',
                                'label'         => 'Title',
                            );

$config['try_now_sub_title']       = array(
                                'type'          => 'text',
                                'name'          => 'sub_title',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control',
                                'id'            => 'sub_title',
                                'maxlength'     => 255,
                                'required'      => true,
                                'placeholder'   => 'Sub Title',
                                'label'         => 'Sub Title',
                            );
$config['tn_product_name']       = array(
                                'type'          => 'text',
                                'name'          => 'name',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control',
                                'id'            => 'name',
                                'maxlength'     => 255,
                                'required'      => true,
                                'placeholder'   => 'Name',
                                'label'         => 'Name',
                            );

$config['tn_product_dosage']       = array(
                                'type'          => 'text',
                                'name'          => 'dosage',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control',
                                'id'            => 'dosage',
                                'maxlength'     => 255,
                                'required'      => true,
                                'placeholder'   => 'dosage',
                                'label'         => 'dosage',
                            );

$config['tn_product_content']       = array(
                                'type'          => 'text',
                                'name'          => 'content',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control',
                                'id'            => 'content',
                                'maxlength'     => 255,
                                'required'      => true,
                                'placeholder'   => 'content',
                                'label'         => 'content',
                            );

$config['tn_image_banner']           = array(
                                'type'          => 'filemanager',
                                'name'          => 'image_banner',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control',
                                'id'            => 'image_banner',
                                'accept'        => 'jpg,gif,png,jpeg',
                                'required'      => false,
                                'max_size'      => '5',
                                'placeholder'   => 'Image Banner',
                                'label'         => 'Image Banner',
                            );

$config['try_now_image_banner']           = array(
                                'type'          => 'filemanager',
                                'name'          => 'image_banner',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control',
                                'id'            => 'image_banner',
                                'accept'        => 'jpg,gif,png,jpeg,svg',
                                'required'      => false,
                                'max_size'      => '5',
                                'placeholder'   => 'Image Banner',
                                'label'         => 'Image Banner',
                            );

$config['try_now_image_background']           = array(
                                'type'          => 'filemanager',
                                'name'          => 'background_image',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control',
                                'id'            => 'background_image',
                                'accept'        => 'jpg,gif,png,jpeg,svg',
                                'required'      => false,
                                'max_size'      => '5',
                                'placeholder'   => 'Background Image',
                                'label'         => 'Background Image',
                            );

$config['try_now_image_background_two']           = array(
                                'type'          => 'filemanager',
                                'name'          => 'background_image_two',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control',
                                'id'            => 'background_image_two',
                                'accept'        => 'jpg,gif,png,jpeg,svg',
                                'required'      => false,
                                'max_size'      => '5',
                                'placeholder'   => 'Background Image 2',
                                'label'         => 'Background Image 2',
                            );

$config['try_now_image_banner_product']           = array(
                                'type'          => 'filemanager',
                                'name'          => 'image_banner_product',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control',
                                'id'            => 'image_banner_product',
                                'accept'        => 'jpg,gif,png,jpeg,svg',
                                'required'      => false,
                                'max_size'      => '5',
                                'placeholder'   => 'Image Banner Product',
                                'label'         => 'Image Banner Product',
                            );

$config['try_now_image_banner_details']           = array(
                                'type'          => 'filemanager',
                                'name'          => 'image_banner_details',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control',
                                'id'            => 'image_banner_details',
                                'accept'        => 'jpg,gif,png,jpeg,svg',
                                'required'      => false,
                                'max_size'      => '5',
                                'placeholder'   => 'Image Banner Details',
                                'label'         => 'Image Banner Details',
                            );

$config['try_now_banner_details']       = array(
                                'type'          => 'text',
                                'name'          => 'image_details',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control',
                                'id'            => 'image_details',
                                'maxlength'     => 255,  
                                'placeholder'   => 'Small Text Label',
                                'label'         => 'Small Text Label',
                            );

$config['try_now_details_first_title']       = array(
                                'type'          => 'text',
                                'name'          => 'first_title',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control',
                                'id'            => 'first_title',
                                'maxlength'     => 255,
                                'placeholder'   => 'Article Title 1',
                                'label'         => 'Article Title 1',
                            );

$config['try_now_first_description']      = array(
                                'type'          => 'text',
                                'name'          => 'first_description',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control',
                                'maxlength'     => 255,
                                'id'            => 'first_description',
                                'placeholder'   => 'Article Description 1',
                                'label'         => 'Article Description 1',
                            );

$config['try_now_details_second_title']       = array(
                                'type'          => 'text',
                                'name'          => 'second_title',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control',
                                'maxlength'     => 255,
                                'id'            => 'second_title',
                                'placeholder'   => 'Article Title 2',
                                'label'         => 'Article Title 2',
                            );

$config['try_now_second_description']      = array(
                                'type'          => 'text',
                                'name'          => 'second_description',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control',
                                'maxlength'     => 255,
                                'id'            => 'second_description',
                                'placeholder'   => 'Article Description 2',
                                'label'         => 'Article Description 2',
                            );

$config['try_now_name']       = array(
                                'type'          => 'text',
                                'name'          => 'name',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control',
                                'id'            => 'name',
                                'maxlength'     => 255,
                                'required'      => true,
                                'placeholder'   => 'Name',
                                'label'         => 'Name',
                            );

$config['try_now_image']           = array(
                                'type'          => 'filemanager',
                                'name'          => 'try_now_image',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control',
                                'id'            => 'try_now_image',
                                'accept'        => 'jpg,gif,png,jpeg,svg',
                                'max_size'      => '5',
                                'required'      => false,
                                'placeholder'   => 'Image',
                                'label'         => 'Image',
                                
                            );

$config['try_now_brief_description']      = array(
                                'type'          => 'ckeditor',
                                'name'          => 'try_now_brief_description',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control',
                                'id'            => 'try_now_brief_description',
                                'required'      => true,
                                'no_html'      => false,
                                'filemanager'   => false,
                                'youtube'       => false,
                                'placeholder'   => 'Brief Description',
                                'label'         => 'Brief Description',
                            );

$config['wid_title']       = array(
                                'type'          => 'text',
                                'name'          => 'title',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control',
                                'id'            => 'title',
                                'maxlength'     => 255,
                                'required'      => true,
                                'placeholder'   => 'Title',
                                'label'         => 'Title',
                            );

$config['wid_background_image']       = array(
                                'type'          => 'filemanager',
                                'name'          => 'background_image',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control',
                                'id'            => 'background_image',
                                'accept'        => 'jpg,gif,png,jpeg,svg',
                                'max_size'      => '5',
                                'required'      => false,
                                'placeholder'   => 'Background Image',
                                'label'         => 'Background Image',
                            );

$config['decolgen_img_title']       = array(
                                'type'          => 'text',
                                'name'          => 'decolgen_img_title',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control',
                                'id'            => 'decolgen_img_title',
                                'maxlength'     => 255,
                                'required'      => true,
                                'placeholder'   => 'Decolgen Label',
                                'label'         => 'Decolgen Label',
                            );

$config['others_img_title']       = array(
                                'type'          => 'text',
                                'name'          => 'others_img_title',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control',
                                'id'            => 'others_img_title',
                                'maxlength'     => 255,
                                'required'      => true,
                                'placeholder'   => 'Others Label',
                                'label'         => 'Others Label',
                            );

$config['decolgen_img_sub_title']       = array(
                                'type'          => 'text',
                                'name'          => 'decolgen_img_sub_title',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control',
                                'id'            => 'decolgen_img_sub_title',
                                'maxlength'     => 255,
                                'required'      => true,
                                'placeholder'   => 'Decolgen Sub Label',
                                'label'         => 'Decolgen Sub Label',
                            );

$config['others_img_sub_title']       = array(
                                'type'          => 'text',
                                'name'          => 'others_img_sub_title',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control',
                                'id'            => 'others_img_sub_title',
                                'maxlength'     => 255,
                                'required'      => true,
                                'placeholder'   => 'Others Sub Label',
                                'label'         => 'Others Sub Label',
                            );

$config['decolgen_img_1']       = array(
                                'type'          => 'filemanager',
                                'name'          => 'decolgen_img_1',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control',
                                'id'            => 'decolgen_img_1',
                                'accept'        => 'jpg,gif,png,jpeg,svg',
                                'max_size'      => '5',
                                'required'      => false,
                                'placeholder'   => 'Decolgen Image 1',
                                'label'         => 'Decolgen Image 1',
                            );

$config['decolgen_img_2']       = array(
                                'type'          => 'filemanager',
                                'name'          => 'decolgen_img_2',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control',
                                'id'            => 'decolgen_img_2',
                                'accept'        => 'jpg,gif,png,jpeg,svg',
                                'max_size'      => '5',
                                'required'      => false,
                                'placeholder'   => 'Decolgen Image 2',
                                'label'         => 'Decolgen Image 2',
                            );

$config['decolgen_img_3']       = array(
                                'type'          => 'filemanager',
                                'name'          => 'decolgen_img_3',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control',
                                'id'            => 'decolgen_img_3',
                                'accept'        => 'jpg,gif,png,jpeg,svg',
                                'max_size'      => '5',
                                'required'      => false,
                                'placeholder'   => 'Decolgen Image 3',
                                'label'         => 'Decolgen Image 3',
                            );

$config['others_img_1']       = array(
                                'type'          => 'filemanager',
                                'name'          => 'others_img_1',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control',
                                'id'            => 'others_img_1',
                                'accept'        => 'jpg,gif,png,jpeg,svg',
                                'max_size'      => '5',
                                'required'      => false,
                                'placeholder'   => 'Others Image 1',
                                'label'         => 'Others Image 1',
                            );

$config['others_img_2']       = array(
                                'type'          => 'filemanager',
                                'name'          => 'others_img_2',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control',
                                'id'            => 'others_img_2',
                                'accept'        => 'jpg,gif,png,jpeg,svg',
                                'max_size'      => '5',
                                'required'      => false,
                                'placeholder'   => 'Others Image 2',
                                'label'         => 'Others Image 2',
                            );

$config['others_img_3']       = array(
                                'type'          => 'filemanager',
                                'name'          => 'others_img_3',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control',
                                'id'            => 'others_img_3',
                                'accept'        => 'jpg,gif,png,jpeg,svg',
                                'max_size'      => '5',
                                'required'      => false,
                                'placeholder'   => 'Others Image 3',
                                'label'         => 'Others Image 3',
                            );

$config['vs_img']       = array(
                                'type'          => 'filemanager',
                                'name'          => 'vs_img',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control',
                                'id'            => 'vs_img',
                                'accept'        => 'jpg,gif,png,jpeg,svg',
                                'max_size'      => '5',
                                'required'      => false,
                                'placeholder'   => 'Vs Image',
                                'label'         => 'Vs Image',
                            );

$config['vs_img_title_1']       = array(
                                'type'          => 'text',
                                'name'          => 'vs_img_title_1',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control',
                                'id'            => 'vs_img_title_1',
                                'maxlength'     => 255,
                                'required'      => true,
                                'placeholder'   => 'Vs Title',
                                'label'         => 'Vs Title',
                            );

$config['vs_img_sub_title_2']       = array(
                                'type'          => 'text',
                                'name'          => 'vs_img_sub_title_2',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control',
                                'id'            => 'vs_img_sub_title_2',
                                'maxlength'     => 255,
                                'required'      => true,
                                'placeholder'   => 'Vs Sub Title 2',
                                'label'         => 'Vs Sub Title 2',
                            );

$config['vs_img_title_2']       = array(
                                'type'          => 'text',
                                'name'          => 'vs_img_title_2',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control',
                                'id'            => 'vs_img_title_2',
                                'maxlength'     => 255,
                                'required'      => true,
                                'placeholder'   => 'Vs Title 2',
                                'label'         => 'Vs Title 2',
                            );

$config['vs_img_title_3']       = array(
                                'type'          => 'text',
                                'name'          => 'vs_img_title_3',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control',
                                'id'            => 'vs_img_title_3',
                                'maxlength'     => 255,
                                'required'      => true,
                                'placeholder'   => 'Vs Title 3',
                                'label'         => 'Vs Title 3',
                            );

$config['wid_sub_title_1']       = array(
                                'type'          => 'text',
                                'name'          => 'wid_sub_title_1',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control',
                                'id'            => 'wid_sub_title_1',
                                'maxlength'     => 255,
                                'required'      => true,
                                'placeholder'   => 'Sub Title 1',
                                'label'         => 'Sub Title 1',
                            );

$config['wid_sub_title_2']       = array(
                                'type'          => 'text',
                                'name'          => 'wid_sub_title_2',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control',
                                'id'            => 'wid_sub_title_2',
                                'maxlength'     => 255,
                                'required'      => true,
                                'placeholder'   => 'Sub Title 2',
                                'label'         => 'Sub Title 2',
                            );

$config['wid_brief_description']      = array(
                                'type'          => 'ckeditor',
                                'name'          => 'description',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control',
                                'id'            => 'description',
                                'required'      => true,
                                'no_html'      => false,
                                'filemanager'   => false,
                                'youtube'       => false,
                                'placeholder'   => 'Description',
                                'label'         => 'Description',
                            );

$config['wid_image']           = array(
                                'type'          => 'filemanager',
                                'name'          => 'image',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control',
                                'id'            => 'image',
                                'accept'        => 'jpg,gif,png,jpeg,svg',
                                'max_size'      => '5',
                                'required'      => false,
                                'placeholder'   => 'Image',
                                'label'         => 'Image',
                                
                            );

$config['no_drowse_title']       = array(
                                'type'          => 'text',
                                'name'          => 'no_drowse_title',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control',
                                'id'            => 'no_drowse_title',
                                'maxlength'     => 255,
                                'required'      => true,
                                'placeholder'   => 'Title',
                                'label'         => 'Title',
                            );

$config['no_drowse_sub_title']       = array(
                                'type'          => 'text',
                                'name'          => 'no_drowse_sub_title',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control',
                                'id'            => 'no_drowse_sub_title',
                                'maxlength'     => 255,
                                'required'      => true,
                                'placeholder'   => 'Sub Title',
                                'label'         => 'Sub Title',
                            );

$config['no_drowse_decolgen']           = array(
                                'type'          => 'filemanager',
                                'name'          => 'no_drowse_decolgen',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control',
                                'id'            => 'no_drowse_decolgen',
                                'accept'        => 'jpg,gif,png,jpeg,svg',
                                'max_size'      => '5',
                                'required'      => false,
                                'placeholder'   => 'No Drowse Decolgen',
                                'label'         => 'No Drowse Decolgen',
                                
                            );

$config['no_drowse_decolgen_image']           = array(
                                'type'          => 'filemanager',
                                'name'          => 'no_drowse_decolgen_image',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control',
                                'id'            => 'no_drowse_decolgen_image',
                                'accept'        => 'jpg,gif,png,jpeg,svg',
                                'max_size'      => '5',
                                'required'      => false,
                                'placeholder'   => 'No Drowse Decolgen Image',
                                'label'         => 'No Drowse Decolgen Image',
                                
                            );

$config['no_drowse_15mins_image']           = array(
                                'type'          => 'filemanager',
                                'name'          => 'no_drowse_15mins_image',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control',
                                'id'            => 'no_drowse_15mins_image',
                                'accept'        => 'jpg,gif,png,jpeg,svg',
                                'max_size'      => '5',
                                'required'      => false,
                                'placeholder'   => '15 Mins Image',
                                'label'         => '15 Mins Image',
                                
                            );

$config['no_drowse_small_text']       = array(
                                'type'          => 'text',
                                'name'          => 'no_drowse_small_text',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control',
                                'id'            => 'no_drowse_small_text',
                                'maxlength'     => 255,
                                'required'      => true,
                                'placeholder'   => 'Small Text',
                                'label'         => 'Small Text',
                            );

$config['no_drowse_details_title1']       = array(
                                'type'          => 'text',
                                'name'          => 'no_drowse_details_title1',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control',
                                'id'            => 'no_drowse_details_title1',
                                'maxlength'     => 255,
                                'required'      => true,
                                'placeholder'   => 'Details Title 1',
                                'label'         => 'Details Title 1',
                            );

$config['no_drowse_details1']       = array(
                                'type'          => 'text',
                                'name'          => 'no_drowse_details1',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control',
                                'id'            => 'no_drowse_details1',
                                'maxlength'     => 255,
                                'required'      => true,
                                'placeholder'   => 'Details 1',
                                'label'         => 'Details 1',
                            );


$config['no_drowse_details_title2']       = array(
                                'type'          => 'text',
                                'name'          => 'no_drowse_details_title2',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control',
                                'id'            => 'no_drowse_details_title2',
                                'maxlength'     => 255,
                                'required'      => true,
                                'placeholder'   => 'Details Title 2',
                                'label'         => 'Details Title 2',
                            );

$config['no_drowse_details2']       = array(
                                'type'          => 'text',
                                'name'          => 'no_drowse_details2',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control',
                                'id'            => 'no_drowse_details2',
                                'maxlength'     => 255,
                                'required'      => true,
                                'placeholder'   => 'Details 2',
                                'label'         => 'Details 2',
                            );

$config['power_title']       = array(
                                'type'          => 'text',
                                'name'          => 'power_title',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control',
                                'id'            => 'power_title',
                                'maxlength'     => 255,
                                'required'      => true,
                                'placeholder'   => 'Power Title',
                                'label'         => 'Power Title',
                            );

$config['power_details']       = array(
                                'type'          => 'text',
                                'name'          => 'power_details',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control',
                                'id'            => 'power_details',
                                'maxlength'     => 255,
                                'required'      => true,
                                'placeholder'   => 'Power Details',
                                'label'         => 'Power Details',
                            );



$config['power_img']       = array(
                                'type'          => 'filemanager',
                                'name'          => 'power_img',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control',
                                'id'            => 'power_img',
                                'required'      => false,
                                'accept'        => 'jpg,gif,png,jpeg,svg',
                                'max_size'      => '5',
                                'placeholder'   => 'Power Image',
                                'label'         => 'Power Image',
                            );

$config['try_decolgen_title']       = array(
                                'type'          => 'text',
                                'name'          => 'try_decolgen_title',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control',
                                'id'            => 'try_decolgen_title',
                                'maxlength'     => 255,
                                'required'      => true,
                                'placeholder'   => 'Try Decolgen Title',
                                'label'         => 'Try Decolgen Title',
                            );

$config['try_decolgen_brief_des']       = array(
                                'type'          => 'textarea',
                                'name'          => 'try_decolgen_brief_des',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control',
                                'id'            => 'try_decolgen_brief_des',
                                'maxlength'     => 500,
                                'required'      => true,
                                'placeholder'   => 'Description',
                                'label'         => 'Description',
                            );

$config['nd_product_name']       = array(
                                'type'          => 'text',
                                'name'          => 'nd_product_name',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control',
                                'id'            => 'nd_product_name',
                                'maxlength'     => 255,
                                'required'      => true,
                                'placeholder'   => 'Product Name',
                                'label'         => 'Product Name',
                            );

$config['nd_image_banner']       = array(
                                'type'          => 'filemanager',
                                'name'          => 'nd_image_banner',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control',
                                'id'            => 'nd_image_banner',
                                'required'      => false,
                                'accept'        => 'jpg,gif,png,jpeg,svg',
                                'max_size'      => '5',
                                'placeholder'   => 'Image Banner',
                                'label'         => 'Image Banner',
                            );

$config['nd_product_price']       = array(
                                'type'          => 'text',
                                'name'          => 'nd_product_price',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control',
                                'id'            => 'nd_product_price',
                                'maxlength'     => 255,
                                'required'      => true,
                                'placeholder'   => 'Product Price',
                                'label'         => 'Product Price',
                            );

$config['nd_download_label']       = array(
                                'type'          => 'text',
                                'name'          => 'nd_download_label',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control',
                                'id'            => 'nd_download_label',
                                'maxlength'     => 255,
                                'required'      => false,
                                'placeholder'   => 'Download Button Label',
                                'label'         => 'Download Button Label',
                            );

$config['no_drowse_pil']       = array(
                                'type'          => 'filemanager',
                                'name'          => 'nd_product_pil',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control',
                                'id'            => 'nd_product_pil',
                                'required'      => false,
                                'accept'        => 'jpg,gif,png,jpeg,pdf',
                                'max_size'      => '5',
                                'placeholder'   => 'Product PIL',
                                'label'         => 'Product PIL',
                            );

$config['nd_product_description']       = array(
                                'type'          => 'text',
                                'name'          => 'nd_product_description',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control',
                                'id'            => 'nd_product_description',
                                'maxlength'     => 255,
                                'required'      => true,
                                'placeholder'   => 'Brief Description',
                                'label'         => 'Brief Description',
                            );

$config['faqs_title']       = array(
                                'type'          => 'text',
                                'name'          => 'faqs_title',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control',
                                'id'            => 'faqs_title',
                                'maxlength'     => 255,
                                'required'      => true,
                                'placeholder'   => 'Title',
                                'label'         => 'Title',
                            );

$config['faqs_description']       = array(
                                'type'          => 'ckeditor',
                                'name'          => 'faqs_description',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control',
                                'id'            => 'faqs_description',
                                'maxlength'     => 255,
                                'required'      => true,
                                'placeholder'   => 'Description',
                                'label'         => 'Description',
                            );

$config['footer_image_url']       = array(
                                'type'          => 'text',
                                'name'          => 'footer_image_url',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control',
                                'id'            => 'footer_image_url',
                                'maxlength'     => 255,
                                'required'      => true,
                                'placeholder'   => 'Image Url',
                                'label'         => 'Image Url',
                            );

$config['footer_image']       = array(
                                'type'          => 'filemanager',
                                'name'          => 'footer_image_banner',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control',
                                'id'            => 'footer_image_banner',
                                'accept'        => 'jpg,gif,png,jpeg,svg',
                                'max_size'      => '5',
                                'required'      => false,
                                'placeholder'   => 'Image',
                                'label'         => 'Image',
                            );

$config['footer_asc_name']       = array(
                                'type'          => 'text',
                                'name'          => 'footer_asc_name',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control',
                                'id'            => 'footer_asc_name',
                                'maxlength'     => 255,
                                'required'      => true,
                                'placeholder'   => 'ASC Ref Code',
                                'label'         => 'ASC Ref Code',
                            );

$config['footer_asc_url']       = array(
                                'type'          => 'text',
                                'name'          => 'footer_asc_url',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control',
                                'id'            => 'footer_asc_url',
                                'maxlength'     => 255,
                                'required'      => true,
                                'placeholder'   => 'ASC Ref Url',
                                'label'         => 'ASC Ref Url',
                            );

$config['footer_policy_name']       = array(
                                'type'          => 'text',
                                'name'          => 'footer_policy_name',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control',
                                'id'            => 'footer_policy_name',
                                'maxlength'     => 255,
                                'required'      => true,
                                'placeholder'   => 'Privacy Policy',
                                'label'         => 'Privacy Policy',
                            );

$config['footer_policy_url']       = array(
                                'type'          => 'text',
                                'name'          => 'footer_policy_url',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control',
                                'id'            => 'footer_policy_url',
                                'maxlength'     => 255,
                                'required'      => true,
                                'placeholder'   => 'Privacy Policy Url',
                                'label'         => 'Privacy Policy Url',
                            );

$config['footer_copyright']       = array(
                                'type'          => 'text',
                                'name'          => 'footer_copyright',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control',
                                'id'            => 'footer_copyright',
                                'maxlength'     => 255,
                                'required'      => false,
                                'placeholder'   => 'Copyright',
                                'label'         => 'Copyright',
                            );

$config['header_image_banner']       = array(
                                'type'          => 'filemanager',
                                'name'          => 'header_image',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control',
                                'id'            => 'header_image',
                                'accept'        => 'jpg,gif,png,jpeg,svg',
                                'max_size'      => '5',
                                'required'      => false,
                                'placeholder'   => 'Image',
                                'label'         => 'Image',
                            );

$config['header_image_url']       = array(
                                'type'          => 'text',
                                'name'          => 'header_image_url',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control',
                                'id'            => 'header_image_url',
                                'maxlength'     => 255,
                                'required'      => true,
                                'placeholder'   => 'Image Url',
                                'label'         => 'Image Url',
                            );

$config['home']       = array(
                                'type'          => 'text',
                                'name'          => 'home',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control',
                                'id'            => 'home',
                                'maxlength'     => 255,
                                'required'      => true,
                                'placeholder'   => 'Home',
                                'label'         => 'Home',
                            );

$config['try_now']       = array(
                                'type'          => 'text',
                                'name'          => 'try_now',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control',
                                'id'            => 'try_now',
                                'maxlength'     => 255,
                                'required'      => true,
                                'placeholder'   => 'Try Now',
                                'label'         => 'Try Now',
                            );

$config['what_is_decolgen']       = array(
                                'type'          => 'text',
                                'name'          => 'what_is_decolgen',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control',
                                'id'            => 'what_is_decolgen',
                                'maxlength'     => 255,
                                'required'      => true,
                                'placeholder'   => 'What Is Decolgen',
                                'label'         => 'What Is Decolgen',
                            );

$config['faqs']       = array(
                                'type'          => 'text',
                                'name'          => 'faqs',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control',
                                'id'            => 'faqs',
                                'maxlength'     => 255,
                                'required'      => true,
                                'placeholder'   => 'Faqs',
                                'label'         => 'Faqs',
                            );

$config['validator_image']       = array(
                                'type'          => 'filemanager',
                                'name'          => 'validator_image',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control',
                                'id'            => 'validator_image',
                                'accept'        => 'jpg,gif,png,jpeg,svg',
                                'max_size'      => '5',
                                'required'      => false,
                                'placeholder'   => 'Validator Image',
                                'label'         => 'Validator Image',
                            );

$config['unilab_logo']       = array(
                                'type'          => 'filemanager',
                                'name'          => 'unilab_logo',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control',
                                'id'            => 'unilab_logo',
                                'accept'        => 'jpg,gif,png,jpeg,svg',
                                'max_size'      => '5',
                                'required'      => false,
                                'placeholder'   => 'Unilab Logo',
                                'label'         => 'Unilab Logo',
                            );

$config['unilab_logo_url']       = array(
                                'type'          => 'text',
                                'name'          => 'unilab_logo_url',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control',
                                'id'            => 'unilab_logo_url',
                                'maxlength'     => 255,
                                'required'      => true,
                                'placeholder'   => 'Logo Url',
                                'label'         => 'Logo Url',
                            );

$config['header_name']       = array(
                                'type'          => 'text',
                                'name'          => 'name',
                                'form-align'    => 'horizontal',
                                'class'         => 'form-control',
                                'id'            => 'name',
                                'maxlength'     => 255,
                                'required'      => true,
                                'placeholder'   => 'Name',
                                'label'         => 'Name',
                            );
?>
