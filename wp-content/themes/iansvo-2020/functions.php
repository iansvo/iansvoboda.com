<?php

// Adding WP Functions & Theme Support
add_action( 'after_setup_theme', function() {
	// Add WP Thumbnail Support
	add_theme_support( 'post-thumbnails' );
	
	// Add RSS Support
	add_theme_support('automatic-feed-links');
	
	// Add Support for WP Controlled Title Tag
	add_theme_support('title-tag');
	
	// Add HTML5 Support
	add_theme_support('html5', [
		'comment-list', 
		'comment-form', 
		'search-form', 
	]);
});

// launching operation cleanup
add_action('init', function () {
	// Remove category feeds
	// remove_action( 'wp_head', 'feed_links_extra', 3 );
	// Remove post and comment feeds
	// remove_action( 'wp_head', 'feed_links', 2 );
	// Remove EditURI link
	remove_action( 'wp_head', 'rsd_link' );
	// Remove Windows live writer
	remove_action( 'wp_head', 'wlwmanifest_link' );
	// Remove index link
	remove_action( 'wp_head', 'index_rel_link' );
	// Remove previous link
	remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 );
	// Remove start link
	remove_action( 'wp_head', 'start_post_rel_link', 10, 0 );
	// Remove links for adjacent posts
	remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );
	// Remove WP version
	remove_action( 'wp_head', 'wp_generator' );
});

// clean up comment styles in the head
add_action('wp_head', function () {
	if ( has_filter('wp_head', 'wp_widget_recent_comments_style') ) {
		remove_filter('wp_head', 'wp_widget_recent_comments_style' );
	}
}, 1);

// cleaning up excerpt
add_filter('excerpt_more', function() {
	global $post;
	$url = get_permalink(get_the_id());
	
	return "&hellip; <a class='read-more' href='$url'>Read More</a>";
});

add_action('wp_enqueue_scripts', function() {
	// wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Merriweather:wght@400;700&family=Roboto+Mono:wght@400;700&display=swap');
	wp_enqueue_style('app', get_theme_file_uri('dist/app.min.css'), '', filemtime(get_template_directory() . '/dist/app.min.css'));
	wp_enqueue_script('app', get_theme_file_uri('dist/app.min.js'), '', filemtime(get_template_directory() . '/dist/app.min.js'), true);
});

add_action('init', function() {
	register_nav_menus([
		'main-menu' => __('Main Menu')
	]);
});

add_action('wp_head', function() {
	echo '
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@400;700&family=Roboto+Mono:wght@400;700&display=swap" rel="stylesheet">	
	';
});

function get_svg($filename) {
	$path = get_template_directory() . "/dist/$filename.svg";
	
	if( file_exists($path) ) {
		return file_get_contents($path);
	}
	
	return '';
}

function get_post_pagination() {
	global $post;
	
	$output    = '';
	$prev_post = get_previous_post();
	$next_post = get_next_post();
	$template  = '
		<a class="c-pagination_link c-pagination_link--%s" href="%s">
			%s
		</a>
	';
	
	if( !$prev_post && !$next_post ) return $output;
	
	$output = '<nav class="c-pagination" aria-label="Post Navigation">';
	
	
	if( $prev_post ) {
		$prev_post_id    = $prev_post->ID;
		$prev_post_url   = get_permalink($prev_post_id);
		$prev_post_title = $prev_post->post_title; 
		$output         .= sprintf($template, 'prev', $prev_post_url, $prev_post_title);
	}
	
	
	if( $next_post ) {		
		$next_post_id     = $next_post->ID;
		$next_post_url	  = get_permalink($next_post_id);
		$next_post_title  = $next_post->post_title; 
		$output          .= sprintf($template, 'next', $next_post_url, $next_post_title);
	}	
	
	$output .= '</nav>';
	
	return $output;
}

add_action( 'enqueue_block_editor_assets', function () {
	wp_enqueue_script(
		'blocks',
		get_theme_file_uri('dist/blocks.js'),
		['wp-blocks', 'wp-element']
	);
});