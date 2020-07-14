<?php get_header(); ?>
<main id="main" class="main py-4 px-3 p-6:lg">
	<div class="c-page-header mb-7">
		<h1 class="c-page-header_title">
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
	</div>
	<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
		<article id="post-<?php the_ID(); ?>" <?php post_class('c-loop-item mb-6'); ?>>
			<header class="c-loop-item_header">
				<h1 class="c-loop-item_title h2 m-0">
					<a href="<?php the_permalink(); ?>">
						<?php the_title(); ?>					
					</a>
				</h1>
				<?php 
				  $tags = get_the_tags();
				?>
				<?php if( $tags ) : ?>
					<div class="c-loop-item_tags my-2">
						<?php
							foreach( $tags as $tag ) {
								$name = $tag->name;
								$link = get_tag_link( $tag->term_id );
								
								echo "<a href='$link'>#$name</a>";
							}
						?>
					</div>
				<?php endif; ?>					
			</header>
			<div class="c-loop-item_excerpt">
				<?php the_excerpt(); ?>
			</div>
		</article>
	<?php endwhile; wp_reset_postdata(); endif; ?>
	
</main>
<?php get_footer(); ?>