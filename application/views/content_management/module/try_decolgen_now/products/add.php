
<style type="text/css">
.input-icon {
  position: relative;
}

.input-icon > i {
  position: absolute;
  display: block;
  transform: translate(0, -50%);
  top: 50%;
  pointer-events: none;
  width: 25px;
  text-align: center;
    font-style: normal;
}

.input-icon > input {
  padding-left: 25px;
    padding-right: 0;
}

.input-icon-right > i {
  right: 0;
}

.input-icon-right > input {
  padding-left: 0;
  padding-right: 25px;
  text-align: right;
}
</style>

<div class="box">
	<?php
		$data['buttons'] = ['save', 'close'];
		$this->load->view("content_management/template/buttons",$data);
	?>
    <div class="box-body">
        <?php 
            $inputs = ["nd_product_name","nd_image_banner"];
            $id = $this->standard->inputs($inputs);
        ?>
             
        <div class="form-group">
            <label class="control-label col-sm-2">Product Price:</label>
            <div class="col-sm-10">
               <div class="input-icon"><input type="text" name="numeric" value="" class="form-control nd_product_price" id="nd_product_price" min="0.01" step="0.01" maxlength="6" placeholder="00.00" onkeypress="return validateFloatKeyPress(this,event);"> <i>₱</i>
               </div>
            </div>
            <div class="clearfix"></div>
        </div>

        <?php 
            $inputs = ["nd_download_label","no_drowse_pil","nd_product_description","status"];
            $id2 = $this->standard->inputs($inputs);
        ?>
                 
           
    </div>
</div>

<script>

    AJAX.config.base_url("<?=base_url();?>"); 
   
    $(document).ready(function(){

        $('.size_filter').addClass("sample_input");
    });

function validateFloatKeyPress(el, evt) {
    var charCode = (evt.which) ? evt.which : event.keyCode;
    var number = el.value.split('.');
    if (charCode != 46 && charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
    }
    //just one dot
    if(number.length>1 && charCode == 46){
         return false;
    }
    //get the carat position
    var caratPos = getSelectionStart(el);
    var dotPos = el.value.indexOf(".");
    if( caratPos > dotPos && dotPos>-1 && (number[1].length > 1)){
        return false;
    }
    return true;
}

//thanks: http://javascript.nwbox.com/cursor_position/
function getSelectionStart(o) {
    if (o.createTextRange) {
        var r = document.selection.createRange().duplicate()
        r.moveEnd('character', o.value.length)
        if (r.text == '') return o.value.length
        return o.value.lastIndexOf(r.text)
    } else return o.selectionStart
}

    $(document).on('click', '#btn_save', function(){
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

        form_data["orders"] = 1;
        form_data["create_date"] = moment(new Date()).format('YYYY-MM-DD HH:mm:ss');
        form_data["update_date"] = moment(new Date()).format('YYYY-MM-DD HH:mm:ss');

        if(validate.standard("<?= $id; ?>")){
            if(is_exists('pckg_no_drowse_products', 'nd_product_name', $('#nd_product_name').val(), 'status') != 0)
            {
                var error_message = "<span class='validate_error_message' style='color: red;'>The information already exists.<br></span>";
                $('#menu_name').css('border-color','red');
                $(error_message).insertAfter($('#nd_product_name'));
            }
            else{
            var modal_obj = '<?= $this->standard->confirm("confirm_save"); ?>'; 
                modal.standard(modal_obj, function(result){
                    if(result){
                        modal.loading(true);

                        AJAX.insert.table("pckg_no_drowse_products");
                        $.each(form_data, function(a,b) {
                            AJAX.insert.params(a, b);
                        });
                            AJAX.insert.params('nd_product_price', $('#nd_product_price').val());
                        AJAX.insert.exec(function(result){
                            modal.loading(false);
                            modal.alert("<?= $this->standard->dialog("add_success"); ?>", function(){
                                location.href = '<?=base_url("content_management/site_try_decolgen_products") ?>';
                            });
                        })
                    }
                });
            }
        }
    });

    $(document).on('click', '#btn_close', function(e){
        location.href = '<?=base_url("content_management/site_try_decolgen_products") ?>';
    });
</script>
<script type="text/javascript" > 
<?php
    $dir = dirname(__FILE__);
    include($dir . "/standardconfig.js");
?>
</script>