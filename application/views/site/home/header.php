<!-- HTML Header -->
<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- <title><?php //$this->load->site_title($title);?></title> -->
        <!-- <meta name="description" content="<?php //$this->load->site_description($description);?>" /> -->
        <!-- <meta name="keywords" content="<?php //$this->load->site_keyword($keyword);?>" /> -->
        <meta equiv="Content-type" content="text/html; charset=utf-8" />
        <meta name="robots" content="no-cache" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge;" />
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Styles -->

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/decolgen/css/main-style.css">
        <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon-96x96.png">
        <script src="<?= base_url();?>/assets/decolgen/js/jquery.min.js"></script>
        <script src="<?= base_url();?>/assets/decolgen/js/bootstrap.min.js"></script>
            <!-- Scripts -->

        <script type="text/javascript" src="<?= base_url();?>/assets/js/masking.js" ></script>
        <script type="text/javascript" src="<?= base_url();?>/assets/js/numeral.min.js" ></script>
        <script type="text/javascript" src="<?= base_url();?>/cms/js/jquery-ui.js" ></script>
        <script type="text/javascript" src="<?= base_url();?>/cms/js/bootbox.min.js" ></script>
        <script type="text/javascript" src="<?= base_url();?>/cms/js/moment.js" ></script>
        <script type="text/javascript" src="<?= base_url();?>/cms/js/custom.js" ></script>
        <script type="text/javascript" src="<?= base_url();?>/cms/js/placeholder.js" ></script>
        <script type="text/javascript" src="<?= base_url();?>/cms/js/gcontroller.js" ></script>
        
        <script src='https://www.google.com/recaptcha/api.js'></script>



        <style type="text/css">
        
            #loading_div_standard {
                position: absolute;
                top: 50%;
                left: 50%;
                width: 200px;
                height: 50px;
                margin-top: -25px;
                margin-left: -100px;
                text-align: center;
                display: none;
            }

        </style>
    </head>
    

    <?php
    $header = str_replace(base_url(), "", $this->load->details("pckg_header",1));
?> 
        <!-- HEADER -->
        <header id="mainHeader">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="dc-container">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar7">
                                <i class="fas fa-bars"></i>
                            </button>
                            <a class="navbar-brand" href="<?php base_url()?>"><img src="<?= base_url() . $header[0]->header_image;?>" alt="Decolgen&reg;">
                            </a>
                        </div>
                        <div id="navbar7" class="navbar-collapse collapse">
                            <ul class="nav navbar-nav navbar-left">
                                <li class="dc-nav-item active"><a href="#home"><?= $header[0]->home;?></a></li><!--
                            --><li class="dc-nav-item"><a href="#try_now"><?= $header[0]->try_now;?></a></li><!--
                            --><li class="dc-nav-item"><a href="#what_is_decolgen_forte" class="sup"><?= $header[0]->what_is_decolgen;?></a></li><!--
                            --><li class="dc-nav-item"><a href="#no_drowse_decolgen" class="sup"><?= $header[0]->no_drowse_decolgen;?></a></li><!--
                            --><li class="dc-nav-item"><a href="#faqs"><?= $header[0]->faqs;?></a></li>
                            </ul>
                        </div>
                        <a href="<?= $header[0]->unilab_logo_url;?>" class="dc-violator" target="_Blank" title="United Laboratories, Inc.">
                            <img src="<?= base_url() . $header[0]->unilab_logo;?>" class="unilab-violator" alt="UNILAB LOGO">
                        </a>
                        <img src="<?= base_url() . $header[0]->validator_image;?>" class="img-violator" alt="UNILAB Website Violator">
                    </div>
                </div>
            </nav>
        </header>

        <script type="text/javascript">

        $( ".sup" ).each(function( index ) {
            var text10 = $(this).text();
            text10 = text10.replace(/(®)/, "<sup>$1</sup>");
            $(this).html(text10);
        });
        </script>