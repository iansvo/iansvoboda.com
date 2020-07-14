<?php get_header(); ?>
<main id="main" class="main py-4 px-3 p-6:lg">
	<article id="post-<?php the_ID(); ?>" <?php post_class('c-page'); ?>>
		<header class="c-page-header mb-7">
			<h1 class="c-page-header_title">
				404 - Page Not Found
			</h1>
		</header>		
		<div class="c-page_content l-container">
			<p>The page or content you are looking for could not be found.</p>
		</div>
	</article>
</main>
<?php get_footer(); ?>