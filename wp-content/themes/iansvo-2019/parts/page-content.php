<article id="post-<?php the_ID(); ?>" <?php post_class('l-container--sm'); ?>>
    <header class="c-page-header">
        <h1 class="c-page-title">
            <strong>
                <?php the_title(); ?>
            </strong>
        </h1>
    </header>
    <section class="c-page-content">
        <?php the_content(); ?>
    </section>
</article>
