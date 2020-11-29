<?php get_header(); ?>
<main id="main" class="main py-4 px-3 p-6:lg">
	<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
		<article id="post-<?php the_ID(); ?>" <?php post_class('c-post'); ?>>
			<header class="c-page-header mb-5">
				<h1 class="c-page-header_title mb-3">
					<?php
						if( is_home() ) {
							$post_id = get_option('page_for_posts');
							echo get_the_title($post_id);
						}
						elseif( is_archive() ) {
							the_archive_title(); 
						}
						else {
							the_title();
						}
					?>
				</h1>
				<div class="c-post-meta">
					Published on <?php the_date('F j, Y'); ?>
					<?php 
						$categories = get_the_category_list(', ');
						
						if( $categories ) {
							echo " in $categories";
						}
					?>
				</div>
			</header>		
			<section class="c-post_content l-container">
				<?php the_content(); ?>
			</section>
			<?php if( false ) : ?>
				<footer class="c-post_footer pt-4 l-container">
					<?= get_post_pagination(); ?>
				</footer>
			<?php endif ?>
		</article>
	<?php endwhile; wp_reset_postdata(); endif; ?>	
</main>
<?php get_footer(); ?>