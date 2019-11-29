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
        <link rel="icon" type="image/png" sizes="96x96" href="assets/decolgen/img/favicon-96x96.png">
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
    $header_menu = $this->load->active_list("pckg_header_menu", "status = 1", "orders", "asc");
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
                            <a class="navbar-brand" href= "<?= base_url();?>" ><img src="<?= base_url() . $header[0]->header_image;?>" alt="Decolgen&reg;">
                            </a>
                        </div>
                        <div id="navbar7" class="navbar-collapse collapse">
                            <ul class="nav navbar-nav navbar-left">
                                <?php foreach($header_menu as $key=>$value){ ?>
                                <li class="dc-nav-item" id="a<?= str_replace(' ', '_', preg_replace('/[^A-Za-z0-9\- ]/', '', strtolower($value->name)));?>" ><a class="sup" href="#<?= str_replace(' ', '_', preg_replace('/[^A-Za-z0-9\- ]/', '', strtolower($value->name)));?>"><?= $value->name;?></a></li>
                                <?php } ?>
                               
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

        $(".dc-nav-item").click(function() {
            $(".dc-nav-item").removeClass("active");
            $(this).addClass("active");
        });


        // Select all links with hashes
$('a[href*="#"]')
  // Remove links that don't actually link to anything
  .not('[href="#"]')
  .not('[href="#0"]')
  .click(function(event) {
    // On-page links
    if (
      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
      && 
      location.hostname == this.hostname
    ) {
      // Figure out element to scroll to
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      // Does a scroll target exist?
      if (target.length) {
        // Only prevent default if animation is actually gonna happen
        event.preventDefault();
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 10, function() {
          // Callback after animation
          // Must change focus!
          var $target = $(target);
          $target.focus();
          if ($target.is(":focus")) { // Checking if the target was focused
            return false;
          } else {
            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
            $target.focus(); // Set focus again
          };
        });
      }
    }
  });

  $(window).scroll(function () {
    var scroll = $(window).scrollTop();
    
    if(scroll >= $('#home').offset().top-100){
        $(".dc-nav-item").removeClass("active");
        $('#ahome').toggleClass('active');
    }
    if(scroll >= $('#try_now').offset().top){
        $(".dc-nav-item").removeClass("active");
        $('#atry_now').toggleClass('active');
    }
    if(scroll >= $('#what_is_decolgen_forte').offset().top){
        $(".dc-nav-item").removeClass("active");
        $('#awhat_is_decolgen_forte').toggleClass('active');
    }
    if(scroll >= $('#no_drowse_decolgen').offset().top){
        $(".dc-nav-item").removeClass("active");
        $('#ano_drowse_decolgen').toggleClass('active');
    }
    if(scroll >= $('.dc-srp').offset().top-80){
        $(".dc-nav-item").removeClass("active");
        $('#afaqs').toggleClass('active');
    }  

});
//trigger the scroll
$(window).scroll();

$(document).ready(function(){

    $( ".sup" ).click(function( index ) {
        var test = $(this).text();
        test = test.replace(/ /g, "_").toLowerCase().replace(/[®]+/g, "");
        test = test;
        window.history.replaceState("", "", test)
    });
});
        </script>