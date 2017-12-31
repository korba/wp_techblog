<?php

	/* Template Name: Page w/ Slider & Promo Boxes */

?>
<?php get_header(); ?>
	
	<div class="container">
		
		<div id="content">
		
			<?php get_template_part('inc/featured/featured'); ?>
			
			<?php get_template_part('inc/promo/promo'); ?>
		
			<div id="main">
			
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				
					<?php get_template_part('content', 'page'); ?>
						
				<?php endwhile; ?>
				
				<?php endif; ?>
				
			</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>