 <?php
    $asc = $this->load->active_list("pckg_asc_reference_code", "status = 1", "id", "asc");
?> 
    <div class="dc-main-content dc-fade-blue dc-noise">
        <div class="dc-section" id="asc">
            <div class="dc-container">
                <div class="text-center">
                    <span class="dc-h3">ASC Reference Code</span>
                    <p class="dc-main-desc">
                        <?php foreach($asc as $key=>$value){ ?>
                            <?= $value->name;?><br>
                        <?php } ?>
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

    $( ".sup" ).each(function( index ) {
        var text10 = $(this).text();
        text10 = text10.replace(/(®)/, "<sup>$1</sup>");
        $(this).html(text10);
    });
</script>