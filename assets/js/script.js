    $(document).ready(function() {
        collbuffer();

        $(".navbar-default .navbar-nav a").click(function(){ 
            $('.navbar-collapse').removeClass("in");
        });
    });
    $(document).scroll(function() {
        collbuffer();
    });

    function collbuffer(){
        var body = document.body,
            html = document.documentElement;

        var height = Math.max( body.scrollHeight, body.offsetHeight, html.clientHeight, html.scrollHeight, html.offsetHeight );
        var vheight = $(window).height();
        var scrolly = $(this).scrollTop();
        var footerheight = $('footer').height();
        var buffer = footerheight + 40;
        var theight = scrolly + vheight;

        if (height <= theight) {
            $(".dc-to-top").css("bottom", buffer);
        }else{
            $(".dc-to-top").css("bottom", 40);            
        }
    }