<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">	
	<?php wp_head(); ?>
</head>
<body>
<?php do_action('wp_body_open'); ?>
<div id="wrapper" class="l-wrapper">
<header id="header" class="c-header py-3 px-2">
	<div class="c-header_container">
		<div class="c-header_branding">
			<a class="c-header_logo h2 mt-0" href="<?php bloginfo('url'); ?>" aria-label="Ian Svoboda">
				<?= get_svg('logo'); ?>
			</a>
			<div class="c-header_tagline">
				Frontend Developer
			</div>
		</div>
		<div class="c-header_mobile-toggle">
			<button class="c-header_toggle button" type="button" aria-controls="header-nav">
				Menu
			</button>
		</div>
		<input id="header-menu-checkbox" type="checkbox" class="c-header_menu-checkbox"">			
		<nav id="header-nav" class='c-header_nav' aria="Main Menu">
			<?php
				wp_nav_menu([
					'theme_location' => 'main-menu',
					'container'      => false,
					'menu_id'        => 'header-menu',
					'menu_class'     => 'c-header_menu',
					'fallback_cb'    => false,
					'depth'          => 1,
				]);
			?>
		</nav>
	</div>
	<div class="c-theme-controls mt-auto mb-3:sm mt-1:sm">
		<button class="c-theme-controls_control" type="button" aria-pressed="false" data-setting="color-scheme" data-setting-value>
			Enable Dark Mode
		</button>
	</div>		
</header>
