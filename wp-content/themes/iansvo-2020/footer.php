<footer class="c-footer hide--desktop mt-auto text-center mb-3">
	<div class="c-back-to-top px-3 py-1">
		<a class="c-back-to-top_link" href="#">Back to Top</a>
	</div>	
	<div class="c-theme-controls px-3 py-1">
		<button class="c-theme-controls_control" type="button" aria-pressed="false" data-setting="color-scheme" data-setting-value>
			Enable Dark Mode
		</button>
	</div>	
</footer>
</div> <!-- end .page-wrapper -->
<script>
	var hireMeContent = `<?= preg_replace('/<!--(.*)-->/Uis', '', get_the_content(204)); ?>`;
</script>
<?php wp_footer(); ?>
</body>
</html>