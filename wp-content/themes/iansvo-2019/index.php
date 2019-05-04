<?php get_header(); ?>
<main id="main" class="main" role="main">
    <div class="c-page-header--right l-container">
        <h1>
            <strong>
                <?php
                    if( is_home() ) {
                        echo "Blog";
                    }
                    elseif( is_404() ) {
                        echo 'Error - Page not Found (404)';
                    }
                    else {
                        the_archive_title();
                    }
                ?>
            </strong>
        </h1>
        <?php if( is_home() ) : ?>
            <?php
                $categories = get_categories(); 
            ?>
            <?php if( $categories ) : ?>
            <ul class="c-category-nav c-list--inline">
                <?php foreach( $categories as $category ) : ?>
                    <?php
                        $id   = $category->term_id;
                        $url  = get_category_link($id);
                        $name = $category->name;  
                    ?>
                    <li>
                        <a href="<?= $url; ?>">
                            <?= $name; ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
            <?php endif; ?>
        <?php elseif( is_category() ) : ?>
            <a href="<?= get_permalink( get_option('page_for_posts') ); ?>">Back to Blog</a>
        <?php endif; ?>
    </div>
    <div class="c-loop l-container--sm">
        <?php if( have_posts() ) : ?>
            <?php while( have_posts() ) : the_post(); ?>
                <article <?php post_class('c-loop-item'); ?>>
                    <header class="c-loop-item_header">
                        <h2 class="c-loop-item_title">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_title(); ?>
                            </a>
                        </h2>
                    </header>
                    <div class="c-loop-item_text">
                        <?php the_excerpt(); ?>
                    </div>
                    <footer class="c-loop-item_footer">
                        <a class="c-button" href="<?php the_permalink(); ?>">
                            Read More
                        </a>
                    </footer>
                </article>
            <?php endwhile; ?>
        <?php else : ?>
            <?php get_template_part('parts/not-found'); ?>
        <?php endif; ?>
    </div>
</main>
<?php 
get_footer();
