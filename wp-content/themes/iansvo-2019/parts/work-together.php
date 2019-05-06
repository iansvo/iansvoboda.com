<?php 
    $show_triangle = apply_filters('work_show_triangle', true);
    $classes = [
        'l-section'
    ];
    
    if( $show_triangle ) {
        $classes[] = 'c-triangle-container--top';
    }
    else {
        $classes[] = 'u-section--dark';
    }
?>
<aside id="work-together" class="<?= implode(' ', $classes); ?>">
    <?php if( $show_triangle ) : ?>
        	<div class="c-triangle"></div>
	<?php endif; ?>
  	<header class="c-section-header c-section-header--center">
		<h2 class="c-section-header_title">
		 	LETS <strong>WORK TOGETHER</strong>
		</h2>
  	</header>
  	<div class="c-text c-text--center u-text--center">
		<p>Do you have a beautiful design concept or mockup you want brought to life? I can take your finished design (PSD/AI/Sketch) and turn it into a beautiful, responsive website, implement that slick UI that finally got approved, and more. Did you hire someone else and find out they didn’t have the experience to build the site you’ve designed? I can help.</p>
		<a href="/contact" class="c-button">Hire Me</a>
  	</div>
</aside>
