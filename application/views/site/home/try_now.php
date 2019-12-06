<?php
    $try_now_details = str_replace(base_url(), "", $this->load->details("pckg_try_now_details",1));
    $details = $this->load->active_list("pckg_try_now_products", "status = 1", "id", "asc");
?> 

<style type="text/css">
    .dc-blue-graphic{
      background-color: #203369;
      background-image: url("<?= base_url() . $try_now_details[0]->background_image;?>");
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
      position: relative;
    }
    @media only screen and (max-width: 992px) {
        .dc-blue-graphic{
             background-image: url("<?= base_url() . $try_now_details[0]->background_image_two;?>");
        }
    }
</style>
    <!-- SECTION 1 -->
        <div class="dc-section" id="try_now">
            <div class="dc-strip-title">
                <div class="dc-container">
                    <span class="dc-h1"><?= $try_now_details[0]->try_now_title;?></span>
                    <span class="dc-h2"><?= $try_now_details[0]->sub_title;?></span>
                </div>
            </div>
            <div class="dc-blue-graphic dc-noise" >
                <div class="dc-container">
                    <div class="row">
                        <div class="col-md-6 dc-bg-left dc-vcenter">
                            <div class="dc-padding">                                

                                <img src="<?= base_url() . $try_now_details[0]->image_banner;?>" alt="Decolgen&reg;" class="dc-generic-name">
                                <div class="dc-product-shot-container">
                                    <img src="<?= base_url() . $try_now_details[0]->image_banner_product;?>" alt="Decolgen&reg; Forte" class="dc-product-shot-small">

                                    <img src="<?= base_url() . $try_now_details[0]->image_banner_details;?>" alt="Works as fast as 15 minutes" class="dc-min">
                                    <p class="dc-prod-disc"><?= $try_now_details[0]->image_details;?></p>
                                </div>

                                <div class="dc-desc">
                                    <p>
                                        <strong><?= $try_now_details[0]->first_title;?></strong>
                                        <br> <?= $try_now_details[0]->first_description;?>
                                    </p>
                                    <p>
                                        <strong><?= $try_now_details[0]->second_title;?></strong>
                                        <br> <?= $try_now_details[0]->second_description;?>
                                    </p>
                                </div>
                            </div>
                        </div><!--
                    --><div class="col-md-6 dc-vcenter">
                            <div class="dc-padding dc-mid">
                                <div class="dc-power">

                                    
                                    	    <?php foreach($details as $key=>$value){ ?>
                                    	    	<div class="dc-power-item">
			                                         <div class="dc-power-content">
			                                            <div class="dc-power-title">
			                                                <span class="dc-h5"><?= $value->name;?></span>
			                                                <span class="dc-h6"><?= $value->dosage;?></span>
			                                            </div>
			                                            <div class="dc-power-desc">
			                                                <p><?= $value->content;?></p>
			                                            </div>
			                                        </div>
			                                        <div class="dc-image">
			                                            <div class="dc-inner">
			                                                <img src="<?= base_url() . $value->image_banner;?>">
			                                            </div>
			                                        </div>
			                                    </div>
										    <?php } ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!-- END SECTION 1 -->