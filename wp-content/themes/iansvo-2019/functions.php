<?php
    
// Theme Support

add_action('init', function() {
    register_nav_menu('header-menu', 'Header Menu');
    register_nav_menu('footer-menu', 'Footer Menu');
});

add_action('after_setup_theme', function() {
    add_theme_support('post-thumbnails');
    add_theme_support('html5', ['comment-list', 'comment-form', 'search-form', 'gallery', 'caption']);
    add_theme_support('title-tag');
});

// Enqueues
add_action('wp_enqueue_scripts', function() {
    wp_enqueue_style('fonts', '//use.typekit.net/dmi3vbr.css');
    wp_enqueue_style('app', get_theme_file_uri('assets/css/style.css'), '', filemtime(get_template_directory() . '/assets/css/style.css')); 
});

add_filter('work_show_triangle', function() {
    $show_triangle = get_field('show_triangle') ? get_field('show_triangle') : false;
    
    if( is_front_page() || $show_triangle ) {
        return true;
    }
    
    return false;
});
