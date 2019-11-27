<?php
    $footer = str_replace(base_url(), "", $this->load->details("pckg_footer",1));
?> 

    <footer class="dc-section">
        <div class="dc-footer">
            <div class="dc-container">
                <div class="container-fluid">
                    <div class="row dc-footer-flex">
                        <div class="col-sm-4 col-sm-push-4 dc-footer-col2">
                            <div class="row">
                                <ul class="dc-footer-nav">
                                    <li><a href="<?=base_url("asc_ref_code");?>" ><?= $footer[0]->footer_asc_name;?></a></li>
                                    <!--
                                            -->
                                    <li><a href="<?=base_url("privacy_policy");?>" ><?= $footer[0]->footer_policy_url;?></a></li>
                                </ul>
                            </div>
                            <div class="row">
                                <span class="dc-social-label">Follow Us:</span>
                                <ul class="dc-footer-nav dc-social">

                                    <li><a href="javascript:void(0);" title="Facebook" class="quicklink" data-url='<?= $footer[0]->facebook;?>'><i class="fab fa-facebook-f"></i></a></li>

                                    <li><a href="javascript:void(0);" title="Twitter" class="quicklink" data-url='<?= $footer[0]->twitter;?>'><i class="fab fa-twitter"></i></a></li>
                                    <!--
                                            -->
                                    <li>
                                        <a href="javascript:void(0);" title="Instagram" class="quicklink" data-url='<?= $footer[0]->instagram;?>'>
                                            <i class="fab fa-instagram"></i></a>
                                    </li>
                                    <!--
                                            -->
                                    <li><a href="javascript:void(0);" title="Youtube" class="quicklink" data-url='<?= $footer[0]->youtube_link;?>'><i class="fab fa-youtube"></i></a></li>
                                    <!--
                                            -->
                                    <li><a href="javascript:void(0);" title="Pinterest" class="quicklink" data-url='<?= $footer[0]->pinterest;?>'><i class="fab fa-pinterest"></i></a></li>
                                    <!--
                                            -->
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-4 col-sm-pull-4 dc-footer-col1">
                            <div class="row">
                                <a href="<?= $footer[0]->footer_image_url;?>" class="dc-footer-logo" target="_Blank" title="United Laboratories, Inc."><img src="<?= base_url() . $footer[0]->footer_image_banner;?>" alt="UNILAB LOGO"></a>
                            </div>
                        </div>
                        <div class="col-sm-4 dc-footer-col3">
                            <div class="row">
                                <span class="dc-footer-note "><?= $footer[0]->footer_copyright;?></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <a href="#" class="dc-scroll dc-to-top"><i class="fas fa-chevron-up"></i></a>

    <script type="text/javascript">
    	
        $(document).on('click', '.quicklink', function(){
            // a = 'How are you?';
            url = $(this).attr('data-url');
            var https = '';

            if (url.indexOf("https://") != 0){
                https = "https://";
            }
                new_url =  https+url;
            window.open(new_url)
        });

        $(document).scroll(function() {
            var y = $(this).scrollTop();
            if (y > 1000) {
                $('.dc-to-top').fadeIn();
            } else {
                $('.dc-to-top').fadeOut();
            }
        });

    </script>