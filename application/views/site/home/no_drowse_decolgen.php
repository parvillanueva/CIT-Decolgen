
<style type="text/css">
    .dc-h3 {
 }
</style>
<?php
    $details = str_replace(base_url(), "", $this->load->details("pckg_no_drowse_details",1));
    $products = $this->load->active_list("pckg_no_drowse_products", "status = 1", "id", "asc");
?> 

    <!-- SECTION 3 -->
    <div class="dc-section" id="no_drowse_decolgen">
        <div class="dc-strip-title">
            <div class="dc-container">
                <span class="dc-h1"><?= $details[0]->no_drowse_title;?></span>
                <span class="dc-h2"><?= $details[0]->no_drowse_sub_title;?></span>
            </div>
        </div>
        <div class="dc-blue-graphic dc-noise">
            <div class="dc-container">
                <div class="row">
                    <div class="col-md-6 dc-bg-left dc-vcenter">
                        <div class="dc-padding">
                            
                            <img src="<?= base_url() . $details[0]->no_drowse_decolgen;?>" alt="Decolgen&reg;" class="dc-generic-name">
                            <div class="dc-product-shot-container">
                                <img src="<?= base_url() . $details[0]->no_drowse_decolgen_image;?>" alt="Decolgen&reg; Forte" class="dc-product-shot-small">

                                <img src="<?= base_url() . $details[0]->no_drowse_15mins_image;?>" alt="Works as fast as 15 minutes" class="dc-min">
                                <p class="dc-prod-disc"><?= $details[0]->no_drowse_small_text;?></p>
                            </div>

                            <div class="dc-desc">
                                <p>
                                    <strong><?= $details[0]->no_drowse_details_title1;?></strong>
                                    <br><?= $details[0]->no_drowse_details1;?>
                                </p>
                                <p>
                                    <strong><?= $details[0]->no_drowse_details_title2;?></strong>
                                    <br><?= $details[0]->no_drowse_details2;?>
                                </p>
                            </div>
                        </div>
                    </div><!--
                    --><div class="col-md-6 dc-vcenter">
                        <div class="dc-padding dc-mid">
                            <div class="dc-power">

                                <div class="dc-power-item">
                                    <div class="dc-power-content">
                                        <div class="dc-power-title">
                                            <span class="dc-h5"><?= $details[0]->power_title1;?></span>
                                        </div>
                                        <div class="dc-power-desc">
                                            <p><?= $details[0]->power_details1;?></p>
                                        </div>
                                    </div>
                                    <div class="dc-image">
                                        <div class="dc-inner">
                                            <img src="<?= base_url() . $details[0]->power_img1;?>">
                                        </div>
                                    </div>
                                </div>

                                <div class="dc-power-item">
                                    <div class="dc-power-content">
                                        <div class="dc-power-title">
                                            <span class="dc-h5"><?= $details[0]->power_title2;?></span>
                                        </div>
                                        <div class="dc-power-desc">
                                            <p><?= $details[0]->power_details2;?></p>
                                        </div>
                                    </div>
                                    <div class="dc-image">
                                        <div class="dc-inner">
                                            <img src="<?= base_url() . $details[0]->power_img2;?>">
                                        </div>
                                    </div>
                                </div>

                                <div class="dc-power-item">
                                    <div class="dc-power-content">
                                        <div class="dc-power-title">
                                            <span class="dc-h5"><?= $details[0]->power_title3;?></span>
                                        </div>
                                        <div class="dc-power-desc">
                                            <p><?= $details[0]->power_details3;?></p>
                                        </div>
                                    </div>
                                    <div class="dc-image">
                                        <div class="dc-inner">
                                            <img src="<?= base_url() . $details[0]->power_img3;?>">
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END SECTION 3 -->
        <!-- SECTION 4 -->
    <div class="dc-section" id="try_decolgen">
        <div class="dc-fade-dark-blue dc-noise">
            <div class="dc-container">
                <div class="text-center">
                    <span class="dc-h3 sup-reg"><?= $details[0]->try_decolgen_title;?></span>
                    <p class="dc-main-desc"><?= $details[0]->try_decolgen_brief_des;?></p>
                </div>
                <div class="row dc-product">
                    <?php foreach($products as $key=>$value){ ?>
                        <div class="col-sm-6">
                            <div class="dc-product-item text-center">
                                <span class="dc-h4 span_text"><?= $value->nd_product_name;?></span>
                                <img src="<?= base_url() . $value->nd_image_banner;?>" alt="Decolgen&reg; Forte" class="dc-product-shot">
                                <span class="dc-srp"><sup>srp</sup> <?= $value->nd_product_price;?></span>
                                <a href="" class="clsname <?= base_url() . $value->nd_product_pil;?>">
                                    <button type="button" class="dc-pcg-btn"><?= $value->nd_download_label;?></button>
                                </a>
                                <p><?= $value->nd_product_description;?></p>
                            </div>
                        </div>
                        <?php } ?>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        
        $(document).ready(function(){
            var text5 = $('.sup-reg').text();
           
            text5 = text5.replace(/(®)/, "<sup>$1</sup>");
            $('.sup-reg').html(text5);
        });

        $( ".span_text" ).each(function( index ) {
            var text6 = $(this).text();
            text6 = text6.replace(/(®)/, "<sup>$1</sup>");
            $(this).html(text6);
        });

        $('.clsname').click(function() {
            var url = $(this).attr("class");
            url = url.replace("clsname ","", url);
            window.open(url);   
        });
        
    </script>
    <!-- END SECTION 4 -->