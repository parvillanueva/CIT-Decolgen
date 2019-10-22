<footer class="main-footer">
    <strong>All rights reserved.</strong>
</footer>

<!-- Javascript per Module -->
<?php if(!empty($js)) : ?>
	<?php foreach($js as $path) : ?>
		<script type="text/javascript" src="<?= base_url() . $path; ?>"></script>
	<?php endforeach; ?>
<?php endif; ?>