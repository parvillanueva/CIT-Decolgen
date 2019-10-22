<div class="box">
	<?php
		$data['buttons'] = ['update'];
		$this->load->view("content_management/template/buttons",$data);
	?>
	<div class="box-body">
		<div id="packages" style="width: 20%; float:left">
		</div>

		<div id="fields" style="width: 80%; float:right">
		</div>
	</div>
</div>

<script type="text/javascript">

	var base_url = '<?=base_url();?>';
	var content_management = '<?=base_url("content_management");?>';
    var global_controller = '<?=base_url("content_management/global_controller");?>';
    var confirm_update = '<?=$this->standard->confirm("confirm_update");?>';
    var update_success = '<?=$this->standard->dialog("update_success");?>';

    var segment_4 = '<?=$this->uri->segment(4);?>';

</script>