<?php
    $details = str_replace(base_url(), "", $this->load->details("pckg_privacy_policy",1));
?>     
    <div class="dc-main-content dc-fade-blue dc-noise">
        <div class="dc-section" id="asc">
            <div class="dc-container">
                <div class="text-center">
                    <span class="dc-h3"><?= $details[0]->title;?></span>
                    <p class="dc-main-desc" style="text-align: justify;" value="">
                        <?= strip_tags($details[0]->description,"<br>");?>

                    </p>
                </div>
            </div>
        </div>
    </div>
<script type="text/javascript">
    $(".dc-nav-item").click(function() {
        $(".dc-nav-item").removeClass("active");
        $(this).addClass("active");
    });

    $( ".sup" ).on('click',function(event) {
        var url = $(this).text();
        url = url.replace(/[ ]/gi, '-').replace(/[®]/gi, '').toLowerCase();
        $(this).attr("href",url);
     });
</script>