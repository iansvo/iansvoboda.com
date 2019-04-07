<?php 
    if( !is_home() ) {
        include get_template_directory() . '/parts/work-together.php'; 
    }
?>
<footer id="footer" class="c-footer" role="contentinfo">
	<div class="c-footer_content">
		<nav class="c-footer_nav" role="navigaion" aria-label="Footer Navigation">
			<ul class="c-footer_menu c-list--inline">
				<li>
					<a href="/">
						Home
					</a>
				</li>
				<li>
					<a href="/">
						Blog
					</a>
				</li>
				<li>
					<a href="/">
						Contact
					</a>
				</li>										
			</ul>
		</nav>
		<div class="c-footer_byline">
			Made with love in Jacksonville, FL.
		</div>
	</div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
