	
		<!-- END CONTENT -->
		</div>
	
	<!-- END CONTAINER -->
	</div>
	
	<div id="instagram-footer">

		<?php	/* Widgetised Area */	if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('Instagram Footer') ) ?>
		
	</div>
	
	<footer id="footer">
		
		<div class="container">
			
			<?php if(!get_theme_mod('sp_footer_share')) : ?>
			<div id="footer-social">
				
				<?php if(get_theme_mod('sp_facebook')) : ?><a href="https://facebook.com/<?php echo esc_html(get_theme_mod('sp_facebook')); ?>" target="_blank"><i class="fa fa-facebook"></i> <span>Facebook</span></a><?php endif; ?>
				<?php if(get_theme_mod('sp_twitter')) : ?><a href="https://twitter.com/<?php echo esc_html(get_theme_mod('sp_twitter')); ?>" target="_blank"><i class="fa fa-twitter"></i> <span>Twitter</span></a><?php endif; ?>
				<?php if(get_theme_mod('sp_instagram')) : ?><a href="https://instagram.com/<?php echo esc_html(get_theme_mod('sp_instagram')); ?>" target="_blank"><i class="fa fa-instagram"></i> <span>Instagram</span></a><?php endif; ?>
				<?php if(get_theme_mod('sp_pinterest')) : ?><a href="https://pinterest.com/<?php echo esc_html(get_theme_mod('sp_pinterest')); ?>" target="_blank"><i class="fa fa-pinterest"></i> <span>Pinterest</span></a><?php endif; ?>
				<?php if(get_theme_mod('sp_bloglovin')) : ?><a href="https://bloglovin.com/<?php echo esc_html(get_theme_mod('sp_bloglovin')); ?>" target="_blank"><i class="fa fa-heart"></i> <span>Bloglovin</span></a><?php endif; ?>
				<?php if(get_theme_mod('sp_google')) : ?><a href="https://plus.google.com/<?php echo esc_html(get_theme_mod('sp_google')); ?>" target="_blank"><i class="fa fa-google-plus"></i> <span>Google +</span></a><?php endif; ?>
				<?php if(get_theme_mod('sp_tumblr')) : ?><a href="https://<?php echo esc_html(get_theme_mod('sp_tumblr')); ?>.tumblr.com/" target="_blank"><i class="fa fa-tumblr"></i> <span>Tumblr</span></a><?php endif; ?>
				<?php if(get_theme_mod('sp_youtube')) : ?><a href="https://youtube.com/<?php echo esc_html(get_theme_mod('sp_youtube')); ?>" target="_blank"><i class="fa fa-youtube-play"></i> <span>Youtube</span></a><?php endif; ?>
				<?php if(get_theme_mod('sp_dribbble')) : ?><a href="https://dribbble.com/<?php echo esc_html(get_theme_mod('sp_dribbble')); ?>" target="_blank"><i class="fa fa-dribbble"></i> <span>Dribbble</span></a><?php endif; ?>
				<?php if(get_theme_mod('sp_soundcloud')) : ?><a href="https://soundcloud.com/<?php echo esc_html(get_theme_mod('sp_soundcloud')); ?>" target="_blank"><i class="fa fa-soundcloud"></i> <span>Soundcloud</span></a><?php endif; ?>
				<?php if(get_theme_mod('sp_vimeo')) : ?><a href="https://vimeo.com/<?php echo esc_html(get_theme_mod('sp_vimeo')); ?>" target="_blank"><i class="fa fa-vimeo-square"></i> <span>Vimeo</span></a><?php endif; ?>
				<?php if(get_theme_mod('sp_linkedin')) : ?><a href="<?php echo esc_html(get_theme_mod('sp_linkedin')); ?>" target="_blank"><i class="fa fa-linkedin"></i> <span>LinkedIn</span></a><?php endif; ?>
				<?php if(get_theme_mod('sp_snapchat')) : ?><a href="https://snapchat.com/add/<?php echo esc_html(get_theme_mod('sp_snapchat')); ?>" target="_blank"><i class="fa fa-snapchat-ghost"></i> <span>Snapchat</span></a><?php endif; ?>
				<?php if(get_theme_mod('sp_rss')) : ?><a href="<?php echo esc_url(get_theme_mod('sp_rss')); ?>" target="_blank"><i class="fa fa-rss"></i> <span>RSS</span></a><?php endif; ?>
				
			</div>
			<?php endif; ?>
			
			<div id="footer-copyright">

				<p class="copyright"><?php echo wp_kses_post(get_theme_mod('sp_footer_copyright', '&copy; 2017 - Solo Pine. All Rights Reserved. Designed & Developed by <a href="http://solopine.com">SoloPine.com</a>')); ?></p>
				
			</div>
			
		</div>
		
	</footer>
	
	<?php wp_footer(); ?>
	
</body>

</html>