<?php get_header(); ?>
	
	<div class="container">
		
		<div id="content">
			
			<?php
			
			if( function_exists( 'solopine_custom_meta' ) ) {
				
				function sp_get_post_layout() {
				
					$default_template_setting = get_theme_mod('sp_sidebar_post');
					$single_template = get_post_meta( get_the_ID(), 'meta-select', true );
					
					if($single_template == 'default-post') {
						
						if($default_template_setting == true) {
							$current_layout = 'full_width_layout';
							return $current_layout;
							
						} else {
							$current_layout = 'sidebar_layout';
							return $current_layout;
							
						}
						
					} elseif($single_template == 'full-post') {
						
						$current_layout = 'full_width_layout';
						return $current_layout;
						
					} elseif($single_template == 'sidebar-post') {
						
						$current_layout = 'sidebar_layout';
						return $current_layout;
					
					} elseif($default_template_setting == true) {
						
						$current_layout = 'full_width_layout';
						return $current_layout;
						
					} else {
						$current_layout = 'sidebar_layout';
						return $current_layout;
					}
				
				}
			
			} else {
				
				$default_template_setting = get_theme_mod('sp_sidebar_post');
				
				if($default_template_setting == true) {
					
					$current_layout = 'full_width_layout';
					
				} else {
					$current_layout = 'sidebar_layout';
				}
				
			}
				
			?>
			
			<div id="main" <?php if( function_exists( 'solopine_custom_meta' ) ) { if(sp_get_post_layout() == 'full_width_layout') : ?>class="fullwidth"<?php endif; } else { if($current_layout == 'full_width_layout') { ?>class="fullwidth"<?php } } ?>>
			
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				
					<?php get_template_part('content'); ?>
						
				<?php endwhile; ?>
				
				<?php endif; ?>
				
			</div>

<?php if( function_exists( 'solopine_custom_meta' ) ) { if(sp_get_post_layout() == 'full_width_layout') : else : ?><?php get_sidebar(); ?><?php endif; } else { if($current_layout == 'full_width_layout') {} else { get_sidebar(); } } ?>
<?php get_footer(); ?>