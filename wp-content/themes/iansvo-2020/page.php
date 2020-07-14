<?php get_header(); ?>
<main id="main" class="main py-4 px-3 p-6:lg">
	<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
		<article id="post-<?php the_ID(); ?>" <?php post_class('c-page'); ?>>
			<header class="c-page-header mb-7">
				<h1 class="c-page-header_title">
					<?php the_title(); ?>
				</h1>
			</header>		
			<div class="c-page_content l-container">
				<?php the_content(); ?>
			</div>
		</article>
	<?php endwhile; wp_reset_postdata(); endif; ?>	
</main>
<?php get_footer(); ?>