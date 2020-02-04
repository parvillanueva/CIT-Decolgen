    <?php $this->load->view("site/home/header", $meta); ?>

    <body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KJ257Z7"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    	<div class="wrapper">

            <div>
				<div class="">		
					<?php $this->load->view($content); ?>
				</div>

            </div>

        </div>

        <?php $this->load->view("site/home/footer"); ?>
        
    </body>
</html>