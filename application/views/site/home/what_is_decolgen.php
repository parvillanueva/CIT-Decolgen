<?php
    $details = str_replace(base_url(), "", $this->load->details("pckg_what_is_decolgen",1));
?> 
	<!-- SECTION 2 -->
	<div class="dc-section" id="what_is_decolgen_forte">
	    <div class="dc-vs-garphic dc-noise" style='background-image: url("<?= base_url() . $details[0]->background_image;?>")'>
	        <div class="dc-container">
	            <div class="text-center">
	                <span class="dc-h3 sup-reggg"><?= $details[0]->title;?></span>
	            </div>


	            <div class="row dc-vs">
	                <div class="col-sm-4 col-xs-5 text-center dc-vcenter2">
	                    <img src="<?= base_url() . $details[0]->decolgen_img_1;?>" class="dc-tablet">
	                </div><!--
	                --><div class="col-sm-4 col-xs-2 text-center dc-vcenter2 dc-no-padding">
	                    <img src="<?= base_url() . $details[0]->vs_img;?>" class="dc-vs-image">
	                </div><!--
	                --><div class="col-sm-4 col-xs-5 text-center dc-vcenter2">
	                    <img src="<?= base_url() . $details[0]->others_img_1;?>" class="dc-tablet">
	                </div>
	            </div>

	            <div class="row dc-vs">
	                <div class="col-sm-4 col-sm-push-4 col-xs-12 text-center dc-vcenter2">
	                    <span class="dc-vs-title"><?= $details[0]->vs_img_title_1;?></span>
	                </div><!--
	                --><div class="col-sm-4 col-sm-pull-4 col-xs-6 text-center dc-vcenter2">
	                    <span class="dc-tx-1 sup-regg"><?= $details[0]->decolgen_img_title;?></span>
	                    <span class="dc-tx-2"><?= $details[0]->decolgen_img_sub_title;?></span>
	                </div><!--
	                --><div class="col-sm-4 col-xs-6 text-center dc-vcenter2">
	                    <span class="dc-tx-3"><?= $details[0]->others_img_title;?><br><?= $details[0]->others_img_sub_title;?></span>
	                </div>
	            </div>

	            <div class="row dc-vs">
	                <div class="col-sm-4 col-sm-push-4 col-xs-12 text-center dc-vcenter2">
	                    <span class="dc-vs-title"><?= $details[0]->vs_img_title_2;?></span>
	                    <p><?= $details[0]->vs_img_sub_title_2;?></p>
	                </div><!--
	                --><div class="col-sm-4 col-sm-pull-4 col-xs-6 text-center dc-vcenter2">
	                    <img src="<?= base_url() . $details[0]->decolgen_img_2;?>" class="dc-tablet">
	                </div><!--
	                --><div class="col-sm-4 col-xs-6 col-xs-6 text-center dc-vcenter2">
	                    <img src="<?= base_url() . $details[0]->others_img_2;?>" class="dc-tablet">
	                </div>
	            </div>

	            <div class="row dc-vs">
	                <div class="col-sm-4 col-sm-push-4 col-xs-12 text-center dc-vcenter2">
	                    <span class="dc-vs-title"><?= $details[0]->vs_img_title_3;?></span>
	                </div><!--
	                --><div class="col-sm-4 col-sm-pull-4 col-xs-6 text-center dc-vcenter2">
	                    <img src="<?= base_url() . $details[0]->decolgen_img_3;?>" class="dc-tablet">
	                </div><!--
	                --><div class="col-sm-4 col-xs-6 col-xs-6 text-center dc-vcenter2">
	                    <img src="<?= base_url() . $details[0]->others_img_3;?>" class="dc-tablet">
	                </div>
	            </div>

	        </div>
	    </div>
	</div>
	<!-- END SECTION 2 -->
	<script type="text/javascript">
        $(document).ready(function(){
            var text3 = $('.sup-reggg').text();
            var text2 = $('.sup-regg').text();
            //alert(text);
            text3 = text3.replace(/(®)/, "<sup>$1</sup>");
            $('.sup-reggg').html(text3);
            //alert(text);
            text2 = text2.replace(/(®)/, "<sup>$1</sup>");
            $('.sup-regg').html(text2);
        });
        
    </script>