<?php get_header(); ?>
<main id="main" class="main" role="main">
    <?php 
        while( have_posts() ) {
            the_post();
            
            get_template_part('parts/page', 'content'); 
        }
    ?>
</main>
<?php 
get_footer();

