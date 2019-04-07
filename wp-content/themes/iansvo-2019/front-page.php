<?php get_header(); ?>
<main id="main" class="main" role="main">
    <?php
        get_template_part('parts/home', 'hero');
        get_template_part('parts/home', 'capabilities');
        get_template_part('parts/home', 'about');
        get_template_part('parts/home', 'work');
    ?>
</main>
<?php
get_footer();
