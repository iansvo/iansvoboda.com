<?php get_header(); ?>
<main id="main" class="main l-container--sm l-section" role="main">
    <?php while( have_posts() ) : the_post(); ?>
        <article <?php post_class('c-post'); ?>>
            <header class="c-post_header">
                <h1 class="c-post_title">
                    <?php the_title(); ?>
                </h1>
                <div class="c-post_meta">
                    Posted in: <?php the_category(); ?>
                    on: <time class="c-post_date"><?php the_date('F j, Y'); ?></time>
                </div>
            </header>
            <div class="c-post_content">
                <?php the_content(); ?>
            </div>
            <footer class="c-post_footer">
            </footer>
        </article>
    <?php endwhile; ?>
</main>
<?php 
get_footer();
