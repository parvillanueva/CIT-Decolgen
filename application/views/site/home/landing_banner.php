
<?php
    $banner = str_replace(base_url(), "", $this->load->details("pckg_landing_banner",1));
?> 
    <div class="dc-main-content">
        <!-- KV SECTION -->
        <div class="dc-section">       
            <div class="dc-kv" id="home" style='background-image: url("<?= base_url() . $banner[0]->landing_bg;?>")'>
                <div class="dc-container">
                    <div class="row">
                        <div class="col-md-5 text-center">
                            <img src="<?= base_url() . $banner[0]->landing_logo;?>" class="dc-dec-logo">
                        </div><!-- 
                        --><div class="col-md-7 text-center">
                            <img src="<?= base_url() . $banner[0]->landing_banner;?>" alt="Decolgen&reg;" class="dc-kv-logo">
                            <span class="dc-h4"> <?= $banner[0]->title;?> </span>
                            <p> <?= $banner[0]->sub_title;?> </p>
                            <p><?= $banner[0]->landing_asc;?> </p>
                        </div>

                        <a href="#try_now" class="dc-scroll"><i class="fas fa-chevron-down"></i></a>

                    </div>
                </div>
            </div>
        </div>