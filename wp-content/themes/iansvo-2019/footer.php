<?php 
	    $footer_cta_enabled = get_field('footer_cta_display');
	    
	    if( $footer_cta_enabled ) {    	    
    	    get_template_part('parts/work-together'); 
	    }
?>
<footer id="footer" class="c-footer" role="contentinfo">
	<div class="c-footer_content">
		<nav class="c-footer_nav" role="navigation" aria-label="Footer Navigation">
            <?php
                wp_nav_menu([
                    'theme_location' => 'footer-menu',
                    'menu_class'     => 'c-footer_menu c-list--inline',
                    'container'      => false,
                    'depth'          => 1,
                    'fallback_cb'    => false
                ]);
            ?>
		</nav>
		<div class="c-footer_byline">
			Made with love in Jacksonville, FL.
		</div>
	</div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
