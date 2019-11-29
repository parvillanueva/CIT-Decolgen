
<?php   $section = $this->uri->segment(1);?>

<?php $this->load->view("site/home/landing_banner"); ?>

<?php $this->load->view("site/home/try_now"); ?>

<?php $this->load->view("site/home/what_is_decolgen"); ?>

<?php $this->load->view("site/home/no_drowse_decolgen"); ?>

<?php $this->load->view("site/home/faqs"); ?>

       <script type="text/javascript">
            $(document).ready(function(){
                var url = window.location.href;  
               // alert(url);
                var section = "<?= $section;?>";
               //alert(lol);

                if(section != ''){
                    section = section.replace(/[-]/gi, '_');
                    $([document.documentElement, document.body]).animate({
                        scrollTop: $("#"+section).offset().top
                    }, 10);
                }
            });

            $( ".sup" ).each(function( index ) {
                var text10 = $(this).text();
                text10 = text10.replace(/(®)/, "<sup>$1</sup>");
                $(this).html(text10);
            });

            $(".dc-nav-item").click(function() {
                $(".dc-nav-item").removeClass("active");
                $(this).addClass("active");
            });

            $( ".sup" ).on('click',function(event) {
                var url = $(this).text();
                url = url.replace(/[ ]/gi, '-').replace(/[®]/gi, '').toLowerCase();
                history.pushState("", "", url);

                url = url.replace(/[-]/gi, '_');
                    $([document.documentElement, document.body]).animate({
                        scrollTop: $("#"+url).offset().top
                    }, 10);
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
		        if(scroll >= $('#what_is_decolgen_forte').offset().top-100){
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
        </script>