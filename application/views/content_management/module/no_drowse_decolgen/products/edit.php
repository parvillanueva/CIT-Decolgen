
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
        $data['buttons'] = ['update', 'close'];
        $this->load->view("content_management/template/buttons",$data);
    ?>
        <?php 
                if (!$this->uri->segment(4) === NULL || !empty($this->uri->segment(4))) {
                    $detailss = $this->load->details("pckg_no_drowse_products", $this->uri->segment(4));
                } 
        ?>

    <div class="box-body">
        <?php 
        if (!$this->uri->segment(4) === NULL || !empty($this->uri->segment(4))) {
            $details = $this->load->details("pckg_no_drowse_products", $this->uri->segment(4));
            $inputs = ["nd_product_name","nd_image_banner"];
            $values = [$details[0]->nd_product_name,$details[0]->nd_image_banner];
            $id = $this->standard->inputs($inputs, $values);
        } else {
            $inputs = ["nd_product_name","no_drowse_pil","nd_product_price"];
            $id = $this->standard->inputs($inputs);
        }
        ?>

        <div class="form-group">
            <label class="control-label col-sm-2">Product Price:</label>
            <div class="col-sm-10">
               <div class="input-icon"><input type="text" name="numeric" value="<?php echo $detailss[0]->nd_product_price;?>" class="form-control " id="nd_product_price" min="0.01" step="0.01" maxlength="6" placeholder="00.00" onkeypress="return validateFloatKeyPress(this,event);"> <i>₱</i>
               </div>
            </div>
            <div class="clearfix"></div>
        </div>

        <?php 
        if (!$this->uri->segment(4) === NULL || !empty($this->uri->segment(4))) {
            $details = $this->load->details("pckg_no_drowse_products", $this->uri->segment(4));
            $inputs = ["nd_download_label","no_drowse_pil","nd_product_description","status"];
            $values = [$details[0]->nd_download_label,$details[0]->nd_product_pil,$details[0]->nd_product_description,$details[0]->status];
            $id = $this->standard->inputs($inputs, $values);
        } else {
            $inputs = ["nd_download_label","no_drowse_pil","nd_product_description","status"];
            $id = $this->standard->inputs($inputs);
        }
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

                    AJAX.update.table("pckg_no_drowse_products");
                    AJAX.update.where("id", "<?=$this->uri->segment(4);?>");
                    $.each(form_data, function(a,b) {
                        AJAX.update.params(a, b);
                    });
                    AJAX.update.exec(function(result){
                        modal.loading(false);
                        modal.alert("<?= $this->standard->dialog("update_success"); ?>", function(){
                            location.href = '<?=base_url("content_management/site_no_drowse_products") ?>';
                        });
                    })
                }
            });
        }
    });

    $(document).on('click', '#btn_close', function(e){
        location.href = '<?=base_url("content_management/site_no_drowse_products") ?>';
    });
</script>
<script type="text/javascript" > 
<?php
    $dir = dirname(__FILE__);
    include($dir . "/standardconfig.js");
?>
</script>