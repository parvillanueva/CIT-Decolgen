    <?php $this->load->view("site/home/header", $meta); ?>

    <body>

    	<div class="wrapper">

            <div>
				<div class="">		
					<?php $this->load->view($content); ?>
				</div>

            </div>

        </div>

        <?php $this->load->view("site/layout/footer"); ?>
        
    </body>
</html>