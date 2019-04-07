<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">	  
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header id="header" class="c-header">
	<a class="c-header_wordmark" href="/">
		<span class="c-header_text">Ian Svoboda</span>
		<div class="c-header_tagline">
			<strong>WordPress</strong> and <strong>Frontend</strong> Developer
		</div>
	</a>
	<nav class="c-header_nav" role="navigation" aria-label="Main Navigation">
        <?php
            wp_nav_menu([
                'theme_location' => 'header-menu',
                'container'      => false,
                'menu_class'     => 'c-header_menu',
                'depth'          => 1,
                'fallback_cb'    => false
            ]);
        ?>
	</nav>
</header>
