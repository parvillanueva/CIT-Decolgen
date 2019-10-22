<style type="text/css">
	iframe{
		width: 100%;
	}
</style>

<div class="box">
	<div class="box-body">
		<iframe src="<?=base_url('content_management/php_info/info');?>" frameborder="0" scrolling="no" onload="resizeIframe(this)"></iframe>
	</div>
</div>

<script type="text/javascript">
	function resizeIframe(obj) {
    	obj.style.height = obj.contentWindow.document.body.scrollHeight + 'px';
  	}
</script>