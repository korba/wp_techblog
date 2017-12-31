<?php

//////////////////////////////////////////////////////////////////
// Customizer - Add Custom Styling
//////////////////////////////////////////////////////////////////
function solopine_customizer_style()
{
	wp_enqueue_style('customizer-css', get_stylesheet_directory_uri() . '/functions/customizer/css/customizer.css');
}
add_action('customize_controls_print_styles', 'solopine_customizer_style');

//////////////////////////////////////////////////////////////////
// Customizer - Add Settings
//////////////////////////////////////////////////////////////////
function solopine_register_theme_customizer( $wp_customize ) {
 	
	// Add Sections
	
	$wp_customize->add_section( 'solopine_new_section_custom_css' , array(
   		'title'      => 'Custom CSS',
   		'description'=> 'Add your custom CSS which will overwrite the theme CSS',
   		'priority'   => 106,
	) );
	
	$wp_customize->add_section( 'solopine_new_section_color_accent' , array(
   		'title'      => 'Colors: Accent',
   		'description'=> '',
   		'priority'   => 105,
	) );
	
	$wp_customize->add_section( 'solopine_new_section_color_post_color' , array(
   		'title'      => 'Colors: Posts',
   		'description'=> '',
   		'priority'   => 104,
	) );
	
	$wp_customize->add_section( 'solopine_new_section_color_footer' , array(
   		'title'      => 'Colors: Footer',
   		'description'=> '',
   		'priority'   => 103,
	) );
	
	$wp_customize->add_section( 'solopine_new_section_color_sidebar' , array(
   		'title'      => 'Colors: Sidebar',
   		'description'=> '',
   		'priority'   => 102,
	) );
	
	$wp_customize->add_section( 'solopine_new_section_mobile' , array(
		'title'      => 'Colors: Mobile Menu',
		'description'=> '',
		'priority'   => 101,
	) );
	
	$wp_customize->add_section( 'solopine_new_section_color_topbar' , array(
   		'title'      => 'Colors: Top Bar',
   		'description'=> '',
   		'priority'   => 100,
	) );
	
	$wp_customize->add_section( 'solopine_new_section_footer' , array(
   		'title'      => 'Footer Settings',
   		'description'=> '',
   		'priority'   => 99,
	) );
	
	$wp_customize->add_section( 'solopine_new_section_social' , array(
   		'title'      => 'Social Media Settings',
   		'description'=> 'Enter your social media usernames. Icons will not show if left blank.',
   		'priority'   => 98,
	) );
	
	$wp_customize->add_section( 'solopine_new_section_page' , array(
   		'title'      => 'Page Settings',
   		'description'=> '',
   		'priority'   => 97,
	) );
	
	$wp_customize->add_section( 'solopine_new_section_post' , array(
   		'title'      => 'Post Settings',
   		'description'=> '',
   		'priority'   => 96,
	) );
	
	$wp_customize->add_section( 'solopine_new_section_promo' , array(
		'title'      => 'Promo Box Settings',
		'description'=> '',
		'priority'   => 95,
	) );
	
	$wp_customize->add_section( 'solopine_new_section_featured' , array(
		'title'      => 'Featured Area Settings',
		'description'=> '',
		'priority'   => 94,
	) );
	
	$wp_customize->add_section( 'solopine_new_section_topbar' , array(
		'title'      => 'Top Bar Settings',
		'description'=> '',
		'priority'   => 92,
	) );
	
	$wp_customize->add_section( 'solopine_new_section_logo_header' , array(
   		'title'      => 'Logo and Header Settings',
   		'description'=> '',
   		'priority'   => 91,
	) );
	
	$wp_customize->add_section( 'solopine_new_section_general' , array(
   		'title'      => 'General Settings',
   		'description'=> '',
   		'priority'   => 90,
	) );
	
	// Add Setting

		// General
		$wp_customize->add_setting(
			'sp_favicon',
			array(
	            'sanitize_callback'     => 'esc_url_raw'
	        )
		);
		
		$wp_customize->add_setting(
			'sp_responsive',
			array(
	            'sanitize_callback'     => 'solopine_sanitize_checkbox'
	        )
		);
		
		$wp_customize->add_setting(
	        'sp_home_layout',
	        array(
	            'default'     => 'full',
				'sanitize_callback'     => 'wp_kses_post'
	        )
	    );
		
		$wp_customize->add_setting(
	        'sp_archive_layout',
	        array(
	            'default'     => 'full',
				'sanitize_callback'     => 'wp_kses_post'
	        )
	    );
		
		$wp_customize->add_setting(
	        'sp_sidebar_homepage',
	        array(
	            'default'     => false,
				'sanitize_callback'     => 'solopine_sanitize_checkbox'
	        )
	    );
		
		$wp_customize->add_setting(
	        'sp_sidebar_post',
	        array(
	            'default'     => false,
				'sanitize_callback'     => 'solopine_sanitize_checkbox'
	        )
	    );
		$wp_customize->add_setting(
	        'sp_sidebar_archive',
	        array(
	            'default'     => false,
				'sanitize_callback'     => 'solopine_sanitize_checkbox'
	        )
	    );
		$wp_customize->add_setting(
	        'sp_post_summary',
	        array(
	            'default'     => 'full',
				'sanitize_callback'     => 'wp_kses_post'
	        )
	    );
		
		// Header & Logo
		$wp_customize->add_setting(
	        'sp_logo',
			array(
	            'sanitize_callback'     => 'esc_url_raw'
	        )
	    );
		$wp_customize->add_setting(
	        'sp_header_padding_top',
	        array(
	            'default'     => '56',
				'sanitize_callback'     => 'solopine_sanitize_number'
	        )
	    );
		$wp_customize->add_setting(
	        'sp_header_padding_bottom',
	        array(
	            'default'     => '56',
				'sanitize_callback'     => 'solopine_sanitize_number'
	        )
	    );
		
		// Top Bar
		$wp_customize->add_setting(
	        'sp_topbar_social_check',
	        array(
	            'default'     => false,
				'sanitize_callback'     => 'solopine_sanitize_checkbox'
	        )
	    );
		$wp_customize->add_setting(
	        'sp_topbar_search_check',
	        array(
	            'default'     => false,
				'sanitize_callback'     => 'solopine_sanitize_checkbox'
	        )
	    );
		
		// Featured area
		$wp_customize->add_setting(
	        'sp_featured_slider',
	        array(
	            'default'     => false,
				'sanitize_callback'     => 'solopine_sanitize_checkbox'
	        )
	    );
		$wp_customize->add_setting(
	        'sp_featured_cat',
			array(
				'sanitize_callback'     => 'wp_kses_post'
	        )
	    );
		$wp_customize->add_setting(
	        'sp_featured_id',
	        array(
	            'default'     => '',
				'sanitize_callback'     => 'wp_kses_post'
	        )
	    );
		$wp_customize->add_setting(
	        'sp_featured_slider_slides',
	        array(
	            'default'     => '5',
				'sanitize_callback'     => 'wp_kses_post'
	        )
	    );
		$wp_customize->add_setting(
	        'sp_featured_hide_cat',
	        array(
	            'default'     => false,
				'sanitize_callback'     => 'solopine_sanitize_checkbox'
	        )
	    );
		
		// Promo Boxes
		$wp_customize->add_setting(
	        'sp_promo',
	        array(
	            'default'     => false,
				'sanitize_callback'     => 'solopine_sanitize_checkbox'
	        )
	    );
		$wp_customize->add_setting(
	        'sp_promo1_title',
	        array(
	            'default'     => '',
				'sanitize_callback'     => 'wp_kses_post'
	        )
	    );
		$wp_customize->add_setting(
	        'sp_promo1_image',
			array(
				'sanitize_callback'     => 'esc_url_raw'
			)
	    );
		$wp_customize->add_setting(
	        'sp_promo1_url',
	        array(
	            'default'     => '',
				'sanitize_callback'     => 'esc_url_raw'
	        )
	    );
		$wp_customize->add_setting(
	        'sp_promo2_title',
	        array(
	            'default'     => '',
				'sanitize_callback'     => 'wp_kses_post'
	        )
	    );
		$wp_customize->add_setting(
	        'sp_promo2_image',
			array(
	            'default'     => '',
				'sanitize_callback'     => 'esc_url_raw'
	        )
	    );
		$wp_customize->add_setting(
	        'sp_promo2_url',
	        array(
	            'default'     => '',
				'sanitize_callback'     => 'esc_url_raw'
	        )
	    );
		$wp_customize->add_setting(
	        'sp_promo3_title',
	        array(
	            'default'     => '',
				'sanitize_callback'     => 'wp_kses_post'
	        )
	    );
		$wp_customize->add_setting(
	        'sp_promo3_image',
			array(
	            'default'     => '',
				'sanitize_callback'     => 'esc_url_raw'
	        )
	    );
		$wp_customize->add_setting(
	        'sp_promo3_url',
	        array(
	            'default'     => '',
				'sanitize_callback'     => 'esc_url_raw'
	        )
	    );
		$wp_customize->add_setting(
	        'sp_promo_border',
	        array(
	            'default'     => false,
				'sanitize_callback'     => 'solopine_sanitize_checkbox'
	        )
	    );
		
		// Post Settings
		$wp_customize->add_setting(
	        'sp_post_tags',
	        array(
	            'default'     => false,
				'sanitize_callback'     => 'solopine_sanitize_checkbox'
	        )
	    );
		$wp_customize->add_setting(
	        'sp_post_author',
	        array(
	            'default'     => false,
				'sanitize_callback'     => 'solopine_sanitize_checkbox'
	        )
	    );
		$wp_customize->add_setting(
	        'sp_post_related',
	        array(
	            'default'     => false,
				'sanitize_callback'     => 'solopine_sanitize_checkbox'
	        )
	    );
		$wp_customize->add_setting(
	        'sp_post_share',
	        array(
	            'default'     => false,
				'sanitize_callback'     => 'solopine_sanitize_checkbox'
	        )
	    );
		$wp_customize->add_setting(
	        'sp_post_share_author',
	        array(
	            'default'     => false,
				'sanitize_callback'     => 'solopine_sanitize_checkbox'
	        )
	    );
		$wp_customize->add_setting(
	        'sp_post_comment_link',
	        array(
	            'default'     => false,
				'sanitize_callback'     => 'solopine_sanitize_checkbox'
	        )
	    );
		$wp_customize->add_setting(
	        'sp_post_thumb',
	        array(
	            'default'     => false,
				'sanitize_callback'     => 'solopine_sanitize_checkbox'
	        )
	    );
		$wp_customize->add_setting(
	        'sp_post_date',
	        array(
	            'default'     => false,
				'sanitize_callback'     => 'solopine_sanitize_checkbox'
	        )
	    );
		$wp_customize->add_setting(
	        'sp_post_cat',
	        array(
	            'default'     => false,
				'sanitize_callback'     => 'solopine_sanitize_checkbox'
	        )
	    );
		$wp_customize->add_setting(
	        'sp_post_pagination',
	        array(
	            'default'     => false,
				'sanitize_callback'     => 'solopine_sanitize_checkbox'
	        )
	    );
		
		// Page
		$wp_customize->add_setting(
	        'sp_page_share',
	        array(
	            'default'     => false,
				'sanitize_callback'     => 'solopine_sanitize_checkbox'
	        )
	    );
		
		// Social Media
		
		$wp_customize->add_setting(
	        'sp_facebook',
	        array(
	            'default'     => '',
				'sanitize_callback'     => 'wp_kses_post'
	        )
	    );
		$wp_customize->add_setting(
	        'sp_twitter',
	        array(
	            'default'     => '',
				'sanitize_callback'     => 'wp_kses_post'
	        )
	    );
		$wp_customize->add_setting(
	        'sp_instagram',
	        array(
	            'default'     => '',
				'sanitize_callback'     => 'wp_kses_post'
	        )
	    );
		$wp_customize->add_setting(
	        'sp_pinterest',
	        array(
	            'default'     => '',
				'sanitize_callback'     => 'wp_kses_post'
	        )
	    );
		$wp_customize->add_setting(
	        'sp_tumblr',
	        array(
	            'default'     => '',
				'sanitize_callback'     => 'wp_kses_post'
	        )
	    );
		$wp_customize->add_setting(
	        'sp_bloglovin',
	        array(
	            'default'     => '',
				'sanitize_callback'     => 'wp_kses_post'
	        )
	    );
		$wp_customize->add_setting(
	        'sp_tumblr',
	        array(
	            'default'     => '',
				'sanitize_callback'     => 'wp_kses_post'
	        )
	    );
		$wp_customize->add_setting(
	        'sp_google',
	        array(
	            'default'     => '',
				'sanitize_callback'     => 'wp_kses_post'
	        )
	    );
		$wp_customize->add_setting(
	        'sp_youtube',
	        array(
	            'default'     => '',
				'sanitize_callback'     => 'wp_kses_post'
	        )
	    );
	    $wp_customize->add_setting(
	        'sp_dribbble',
	        array(
	            'default'     => '',
				'sanitize_callback'     => 'wp_kses_post'
	        )
	    );
	    $wp_customize->add_setting(
	        'sp_soundcloud',
	        array(
	            'default'     => '',
				'sanitize_callback'     => 'wp_kses_post'
	        )
	    );
	    $wp_customize->add_setting(
	        'sp_vimeo',
	        array(
	            'default'     => '',
				'sanitize_callback'     => 'wp_kses_post'
	        )
	    );
		$wp_customize->add_setting(
	        'sp_linkedin',
	        array(
	            'default'     => '',
				'sanitize_callback'     => 'wp_kses_post'
	        )
	    );
		$wp_customize->add_setting(
	        'sp_snapchat',
	        array(
	            'default'     => '',
				'sanitize_callback'     => 'wp_kses_post'
	        )
	    );	    
		$wp_customize->add_setting(
	        'sp_rss',
	        array(
	            'default'     => '',
				'sanitize_callback'     => 'wp_kses_post'
	        )
	    );
		
		// Footer
		$wp_customize->add_setting(
	        'sp_footer_copyright',
	        array(
	            'default'     => 'Copyright 2017 - Solo Pine. All Rights Reserved. Designed & Developed by <a href="http://solopine.com">SoloPine.com</a>',
				'sanitize_callback'     => 'wp_kses_post'
	        )
	    );
		$wp_customize->add_setting(
	        'sp_footer_share',
	        array(
	            'default'     => false,
				'sanitize_callback'     => 'solopine_sanitize_checkbox'
	        )
	    );
		
		// Colors
		
			// Top bar
			$wp_customize->add_setting(
				'sp_topbar_bg',
				array(
					'default'     => '#161616',
					'sanitize_callback' => 'sanitize_hex_color',
				)
			);

			$wp_customize->add_setting(
				'sp_topbar_nav_color',
				array(
					'default'     => '#ffffff',
					'sanitize_callback' => 'sanitize_hex_color',
				)
			);
			$wp_customize->add_setting(
				'sp_topbar_nav_color_hover',
				array(
					'default'     => '#999999',
					'sanitize_callback' => 'sanitize_hex_color',
				)
			);
			
			$wp_customize->add_setting(
				'sp_drop_bg',
				array(
					'default'     => '#161616',
					'sanitize_callback' => 'sanitize_hex_color',
				)
			);
			$wp_customize->add_setting(
				'sp_drop_border',
				array(
					'default'     => '#333333',
					'sanitize_callback' => 'sanitize_hex_color',
				)
			);
			$wp_customize->add_setting(
				'sp_drop_text_color',
				array(
					'default'     => '#999999',
					'sanitize_callback' => 'sanitize_hex_color',
				)
			);
			$wp_customize->add_setting(
				'sp_drop_text_hover_bg',
				array(
					'default'     => '#333333',
					'sanitize_callback' => 'sanitize_hex_color',
				)
			);
			$wp_customize->add_setting(
				'sp_drop_text_hover_color',
				array(
					'default'     => '#ffffff',
					'sanitize_callback' => 'sanitize_hex_color',
				)
			);
			
			$wp_customize->add_setting(
				'sp_topbar_social_color',
				array(
					'default'     => '#ffffff',
					'sanitize_callback' => 'sanitize_hex_color',
				)
			);
			$wp_customize->add_setting(
				'sp_topbar_social_color_hover',
				array(
					'default'     => '#C39F76',
					'sanitize_callback' => 'sanitize_hex_color',
				)
			);
			
			$wp_customize->add_setting(
				'sp_topbar_search_magnify',
				array(
					'default'     => '#888888',
					'sanitize_callback' => 'sanitize_hex_color',
				)
			);
			
			// Mobile Menu colors
			$wp_customize->add_setting(
				'sp_mobile_bg',
				array(
					'default'     => '#161616',
					'sanitize_callback' => 'sanitize_hex_color',
				)
			);
			$wp_customize->add_setting(
				'sp_mobile_text',
				array(
					'default'     => '#ffffff',
					'sanitize_callback' => 'sanitize_hex_color',
				)
			);
			$wp_customize->add_setting(
				'sp_mobile_icon',
				array(
					'default'     => '#ffffff',
					'sanitize_callback' => 'sanitize_hex_color',
				)
			);
			
			// Sidebar
			$wp_customize->add_setting(
				'sp_sidebar_title_bg',
				array(
					'default'     => '#161616',
					'sanitize_callback' => 'sanitize_hex_color',
				)
			);
			$wp_customize->add_setting(
				'sp_sidebar_title_arrow',
				array(
					'default'     => false,
					'sanitize_callback'     => 'laurel_sanitize_checkbox'
				)
			);
			$wp_customize->add_setting(
				'sp_sidebar_title_text',
				array(
					'default'     => '#ffffff',
					'sanitize_callback' => 'sanitize_hex_color',
				)
			);
			$wp_customize->add_setting(
				'sp_sidebar_social_icon',
				array(
					'default'     => '#000000',
					'sanitize_callback' => 'sanitize_hex_color',
				)
			);
			$wp_customize->add_setting(
				'sp_sidebar_social_icon_hover',
				array(
					'default'     => '#C39F76',
					'sanitize_callback' => 'sanitize_hex_color',
				)
			);
			$wp_customize->add_setting(
				'sp_sidebar_newsletter_bg',
				array(
					'default'     => '#f1f1f1',
					'sanitize_callback' => 'sanitize_hex_color',
				)
			);
			$wp_customize->add_setting(
				'sp_sidebar_newsletter_text',
				array(
					'default'     => '#444444',
					'sanitize_callback' => 'sanitize_hex_color',
				)
			);
			$wp_customize->add_setting(
				'sp_sidebar_newsletter_button_bg',
				array(
					'default'     => '#161616',
					'sanitize_callback' => 'sanitize_hex_color',
				)
			);
			$wp_customize->add_setting(
				'sp_sidebar_newsletter_button_text',
				array(
					'default'     => '#ffffff',
					'sanitize_callback' => 'sanitize_hex_color',
				)
			);
			$wp_customize->add_setting(
				'sp_sidebar_newsletter_button_bg_hover',
				array(
					'default'     => '#C39F76',
					'sanitize_callback' => 'sanitize_hex_color',
				)
			);
			$wp_customize->add_setting(
				'sp_sidebar_newsletter_button_text_hover',
				array(
					'default'     => '#ffffff',
					'sanitize_callback' => 'sanitize_hex_color',
				)
			);
			
			// Footer
			$wp_customize->add_setting(
				'sp_footer_bg',
				array(
					'default'     => '#161616',
					'sanitize_callback' => 'sanitize_hex_color',
				)
			);
			$wp_customize->add_setting(
				'sp_footer_social',
				array(
					'default'     => '#ffffff',
					'sanitize_callback' => 'sanitize_hex_color',
				)
			);
			$wp_customize->add_setting(
				'sp_footer_social_hover',
				array(
					'default'     => '#C39F76',
					'sanitize_callback' => 'sanitize_hex_color',
				)
			);
			$wp_customize->add_setting(
				'sp_footer_social_line',
				array(
					'default'     => '#313131',
					'sanitize_callback' => 'sanitize_hex_color',
				)
			);
			$wp_customize->add_setting(
				'sp_footer_copyright_color',
				array(
					'default'     => '#888888',
					'sanitize_callback' => 'sanitize_hex_color',
				)
			);
			$wp_customize->add_setting(
				'sp_footer_copyright_link',
				array(
					'default'     => '#ffffff',
					'sanitize_callback' => 'sanitize_hex_color',
				)
			);
			
			// Posts
			$wp_customize->add_setting(
				'sp_post_title',
				array(
					'default'     => '#000000',
					'sanitize_callback' => 'sanitize_hex_color',
				)
			);
			$wp_customize->add_setting(
				'sp_post_title_divider',
				array(
					'default'     => '#000000',
					'sanitize_callback' => 'sanitize_hex_color',
				)
			);
			$wp_customize->add_setting(
				'sp_post_text',
				array(
					'default'     => '#242424',
					'sanitize_callback' => 'sanitize_hex_color',
				)
			);
			$wp_customize->add_setting(
				'sp_post_h',
				array(
					'default'     => '#242424',
					'sanitize_callback' => 'sanitize_hex_color',
				)
			);
			$wp_customize->add_setting(
				'sp_post_readmore_text',
				array(
					'default'     => '#000000',
					'sanitize_callback' => 'sanitize_hex_color',
				)
			);
			$wp_customize->add_setting(
				'sp_post_readmore_text_hover',
				array(
					'default'     => '#C39F76',
					'sanitize_callback' => 'sanitize_hex_color',
				)
			);
			$wp_customize->add_setting(
				'sp_post_readmore_line',
				array(
					'default'     => '#C39F76',
					'sanitize_callback' => 'sanitize_hex_color',
				)
			);
			$wp_customize->add_setting(
				'sp_post_readmore_line_hover',
				array(
					'default'     => '#C39F76',
					'sanitize_callback' => 'sanitize_hex_color',
				)
			);
			$wp_customize->add_setting(
				'sp_post_share_color',
				array(
					'default'     => '#000000',
					'sanitize_callback' => 'sanitize_hex_color',
				)
			);
			$wp_customize->add_setting(
				'sp_post_share_color_hover',
				array(
					'default'     => '#C39F76',
					'sanitize_callback' => 'sanitize_hex_color',
				)
			);
			
			// accent
			$wp_customize->add_setting(
				'sp_accent_color',
				array(
					'default'     => '#C39F76',
					'sanitize_callback' => 'sanitize_hex_color',
				)
			);
			
			// Custom CSS
			$wp_customize->add_setting(
				'sp_custom_css',
				array(
					'sanitize_callback'     => 'wp_kses_post'
				)
			);
		
		
	// Add Control
	
		// General
		$wp_customize->add_control(
			new WP_Customize_Image_Control(
				$wp_customize,
				'upload_favicon',
				array(
					'label'      => 'Upload Favicon',
					'section'    => 'solopine_new_section_general',
					'settings'   => 'sp_favicon',
					'priority'	 => 1
				)
			)
		);
		
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'responsive',
				array(
					'label'      => 'Disable Responsive',
					'section'    => 'solopine_new_section_general',
					'settings'   => 'sp_responsive',
					'type'		 => 'checkbox',
					'priority'	 => 2
				)
			)
		);
		
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'home_layout',
				array(
					'label'          => 'Homepage Layout',
					'section'        => 'solopine_new_section_general',
					'settings'       => 'sp_home_layout',
					'type'           => 'radio',
					'priority'	 => 3,
					'choices'        => array(
						'full'   => 'Full Post Layout',
						'grid'  => 'Grid Post Layout',
						'full_grid'  => '1 Full Post then Grid Layout',
						'list'  => 'List Post Layout',
						'full_list'  => '1 Full Post then List Layout',
					)
				)
			)
		);
		
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'archive_layout',
				array(
					'label'          => 'Archive Layout',
					'section'        => 'solopine_new_section_general',
					'settings'       => 'sp_archive_layout',
					'type'           => 'radio',
					'priority'	 => 3,
					'choices'        => array(
						'full'   => 'Full Post Layout',
						'grid'  => 'Grid Post Layout',
						'full_grid'  => '1 Full Post then Grid Layout',
						'list'  => 'List Post Layout',
						'full_list'  => '1 Full Post then List Layout',
					)
				)
			)
		);
		
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'sidebar_homepage',
				array(
					'label'      => 'Disable Sidebar on Homepage',
					'section'    => 'solopine_new_section_general',
					'settings'   => 'sp_sidebar_homepage',
					'type'		 => 'checkbox',
					'priority'	 => 4
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'sidebar_post',
				array(
					'label'      => 'Disable Sidebar on Posts',
					'section'    => 'solopine_new_section_general',
					'settings'   => 'sp_sidebar_post',
					'type'		 => 'checkbox',
					'priority'	 => 5
				)
			)
		);
		
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'sidebar_archive',
				array(
					'label'      => 'Disable Sidebar on Archives',
					'section'    => 'solopine_new_section_general',
					'settings'   => 'sp_sidebar_archive',
					'type'		 => 'checkbox',
					'priority'	 => 6
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'post_summary',
				array(
					'label'          => 'Homepage/Archive Post Summary Type',
					'section'        => 'solopine_new_section_general',
					'settings'       => 'sp_post_summary',
					'type'           => 'radio',
					'priority'	 => 8,
					'choices'        => array(
						'full'   => 'Use Read More Tag',
						'excerpt'  => 'Use Excerpt',
					)
				)
			)
		);
		
		// Header and Logo
		$wp_customize->add_control(
			new WP_Customize_Image_Control(
				$wp_customize,
				'upload_logo',
				array(
					'label'      => 'Upload Logo',
					'section'    => 'solopine_new_section_logo_header',
					'settings'   => 'sp_logo',
					'priority'	 => 20
				)
			)
		);
		
		$wp_customize->add_control(
			new Customize_Number_Control(
				$wp_customize,
				'header_padding_top',
				array(
					'label'      => 'Top Header Padding',
					'section'    => 'solopine_new_section_logo_header',
					'settings'   => 'sp_header_padding_top',
					'type'		 => 'number',
					'priority'	 => 22
				)
			)
		);
		$wp_customize->add_control(
			new Customize_Number_Control(
				$wp_customize,
				'header_padding_bottom',
				array(
					'label'      => 'Bottom Header Padding',
					'section'    => 'solopine_new_section_logo_header',
					'settings'   => 'sp_header_padding_bottom',
					'type'		 => 'number',
					'priority'	 => 23
				)
			)
		);
		
		// Top Bar
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'topbar_social_check',
				array(
					'label'      => 'Disable Top Bar Social Icons',
					'section'    => 'solopine_new_section_topbar',
					'settings'   => 'sp_topbar_social_check',
					'type'		 => 'checkbox',
					'priority'	 => 3
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'topbar_search_check',
				array(
					'label'      => 'Disable Top Bar Search',
					'section'    => 'solopine_new_section_topbar',
					'settings'   => 'sp_topbar_search_check',
					'type'		 => 'checkbox',
					'priority'	 => 4
				)
			)
		);
		
		// Featured area
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'featured_slider',
				array(
					'label'      => 'Enable Featured Slider',
					'section'    => 'solopine_new_section_featured',
					'settings'   => 'sp_featured_slider',
					'type'		 => 'checkbox',
					'priority'	 => 2
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Category_Control(
				$wp_customize,
				'featured_cat',
				array(
					'label'    => 'Select Featured Category',
					'settings' => 'sp_featured_cat',
					'section'  => 'solopine_new_section_featured',
					'priority'	 => 3
				)
			)
		);
		
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'featured_id',
				array(
					'label'      => 'Select featured post/page IDs',
					'section'    => 'solopine_new_section_featured',
					'settings'   => 'sp_featured_id',
					'type'		 => 'text',
					'priority'	 => 4
				)
			)
		);
		
		$wp_customize->add_control(
			new Customize_Number_Control(
				$wp_customize,
				'featured_slider_slides',
				array(
					'label'      => 'Amount of Slides',
					'section'    => 'solopine_new_section_featured',
					'settings'   => 'sp_featured_slider_slides',
					'type'		 => 'number',
					'priority'	 => 5
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'featured_hide_cat',
				array(
					'label'      => 'Hide Category from Displaying',
					'section'    => 'solopine_new_section_featured',
					'settings'   => 'sp_featured_hide_cat',
					'type'		 => 'checkbox',
					'priority'	 => 6
				)
			)
		);
		
		// Promo Boxes
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'promo',
				array(
					'label'      => 'Enable Promo Boxes',
					'section'    => 'solopine_new_section_promo',
					'settings'   => 'sp_promo',
					'type'		 => 'checkbox',
					'priority'	 => 1
				)
			)
		);
		
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'promo_border',
				array(
					'label'      => 'Hide White Border',
					'section'    => 'solopine_new_section_promo',
					'settings'   => 'sp_promo_border',
					'type'		 => 'checkbox',
					'priority'	 => 2
				)
			)
		);
		
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'promo1_title',
				array(
					'label'      => 'Promo Box #1 Title',
					'section'    => 'solopine_new_section_promo',
					'settings'   => 'sp_promo1_title',
					'type'		 => 'text',
					'priority'	 => 3
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Image_Control(
				$wp_customize,
				'promo1_image',
				array(
					'label'      => 'Promo Box #1 Image',
					'section'    => 'solopine_new_section_promo',
					'settings'   => 'sp_promo1_image',
					'priority'	 => 4
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'promo1_url',
				array(
					'label'      => 'Promo Box #1 URL',
					'section'    => 'solopine_new_section_promo',
					'settings'   => 'sp_promo1_url',
					'type'		 => 'text',
					'priority'	 => 5
				)
			)
		);
		
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'promo2_title',
				array(
					'label'      => 'Promo Box #2 Title',
					'section'    => 'solopine_new_section_promo',
					'settings'   => 'sp_promo2_title',
					'type'		 => 'text',
					'priority'	 => 6
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Image_Control(
				$wp_customize,
				'promo2_image',
				array(
					'label'      => 'Promo Box #2 Image',
					'section'    => 'solopine_new_section_promo',
					'settings'   => 'sp_promo2_image',
					'priority'	 => 7
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'promo2_url',
				array(
					'label'      => 'Promo Box #2 URL',
					'section'    => 'solopine_new_section_promo',
					'settings'   => 'sp_promo2_url',
					'type'		 => 'text',
					'priority'	 => 8
				)
			)
		);
		
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'promo3_title',
				array(
					'label'      => 'Promo Box #3 Title',
					'section'    => 'solopine_new_section_promo',
					'settings'   => 'sp_promo3_title',
					'type'		 => 'text',
					'priority'	 => 9
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Image_Control(
				$wp_customize,
				'promo3_image',
				array(
					'label'      => 'Promo Box #3 Image',
					'section'    => 'solopine_new_section_promo',
					'settings'   => 'sp_promo3_image',
					'priority'	 => 10
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'promo3_url',
				array(
					'label'      => 'Promo Box #3 URL',
					'section'    => 'solopine_new_section_promo',
					'settings'   => 'sp_promo3_url',
					'type'		 => 'text',
					'priority'	 => 11
				)
			)
		);
		
		// Post Settings
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'post_thumb',
				array(
					'label'      => 'Hide Featured Image from top of Post',
					'section'    => 'solopine_new_section_post',
					'settings'   => 'sp_post_thumb',
					'type'		 => 'checkbox',
					'priority'	 => 1
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'post_cat',
				array(
					'label'      => 'Hide Category',
					'section'    => 'solopine_new_section_post',
					'settings'   => 'sp_post_cat',
					'type'		 => 'checkbox',
					'priority'	 => 2
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'post_date',
				array(
					'label'      => 'Hide Date',
					'section'    => 'solopine_new_section_post',
					'settings'   => 'sp_post_date',
					'type'		 => 'checkbox',
					'priority'	 => 3
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'post_tags',
				array(
					'label'      => 'Hide Tags',
					'section'    => 'solopine_new_section_post',
					'settings'   => 'sp_post_tags',
					'type'		 => 'checkbox',
					'priority'	 => 4
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'post_share',
				array(
					'label'      => 'Hide Share Buttons',
					'section'    => 'solopine_new_section_post',
					'settings'   => 'sp_post_share',
					'type'		 => 'checkbox',
					'priority'	 => 5
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'post_share_author',
				array(
					'label'      => 'Hide Author Name',
					'section'    => 'solopine_new_section_post',
					'settings'   => 'sp_post_share_author',
					'type'		 => 'checkbox',
					'priority'	 => 6
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'post_comment_link',
				array(
					'label'      => 'Hide Comment Link',
					'section'    => 'solopine_new_section_post',
					'settings'   => 'sp_post_comment_link',
					'type'		 => 'checkbox',
					'priority'	 => 7
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'post_author',
				array(
					'label'      => 'Hide Author Box',
					'section'    => 'solopine_new_section_post',
					'settings'   => 'sp_post_author',
					'type'		 => 'checkbox',
					'priority'	 => 8
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'post_related',
				array(
					'label'      => 'Hide Related Posts Box',
					'section'    => 'solopine_new_section_post',
					'settings'   => 'sp_post_related',
					'type'		 => 'checkbox',
					'priority'	 => 9
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'post_pagination',
				array(
					'label'      => 'Display Post Pagination',
					'section'    => 'solopine_new_section_post',
					'settings'   => 'sp_post_pagination',
					'type'		 => 'checkbox',
					'priority'	 => 10
				)
			)
		);
		
		// Page
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'page_share',
				array(
					'label'      => 'Hide Share Buttons',
					'section'    => 'solopine_new_section_page',
					'settings'   => 'sp_page_share',
					'type'		 => 'checkbox',
					'priority'	 => 1
				)
			)
		);
		
		// Social Media
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'facebook',
				array(
					'label'      => 'Facebook',
					'section'    => 'solopine_new_section_social',
					'settings'   => 'sp_facebook',
					'type'		 => 'text',
					'priority'	 => 1
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'twitter',
				array(
					'label'      => 'Twitter',
					'section'    => 'solopine_new_section_social',
					'settings'   => 'sp_twitter',
					'type'		 => 'text',
					'priority'	 => 2
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'instagram',
				array(
					'label'      => 'Instagram',
					'section'    => 'solopine_new_section_social',
					'settings'   => 'sp_instagram',
					'type'		 => 'text',
					'priority'	 => 3
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'pinterest',
				array(
					'label'      => 'Pinterest',
					'section'    => 'solopine_new_section_social',
					'settings'   => 'sp_pinterest',
					'type'		 => 'text',
					'priority'	 => 4
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'bloglovin',
				array(
					'label'      => 'Bloglovin',
					'section'    => 'solopine_new_section_social',
					'settings'   => 'sp_bloglovin',
					'type'		 => 'text',
					'priority'	 => 5
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'google',
				array(
					'label'      => 'Google Plus',
					'section'    => 'solopine_new_section_social',
					'settings'   => 'sp_google',
					'type'		 => 'text',
					'priority'	 => 6
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'tumblr',
				array(
					'label'      => 'Tumblr',
					'section'    => 'solopine_new_section_social',
					'settings'   => 'sp_tumblr',
					'type'		 => 'text',
					'priority'	 => 7
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'youtube',
				array(
					'label'      => 'Youtube',
					'section'    => 'solopine_new_section_social',
					'settings'   => 'sp_youtube',
					'type'		 => 'text',
					'priority'	 => 8
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'dribbble',
				array(
					'label'      => 'Dribbble',
					'section'    => 'solopine_new_section_social',
					'settings'   => 'sp_dribbble',
					'type'		 => 'text',
					'priority'	 => 9
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'soundcloud',
				array(
					'label'      => 'Soundcloud',
					'section'    => 'solopine_new_section_social',
					'settings'   => 'sp_soundcloud',
					'type'		 => 'text',
					'priority'	 => 10
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'vimeo',
				array(
					'label'      => 'Vimeo',
					'section'    => 'solopine_new_section_social',
					'settings'   => 'sp_vimeo',
					'type'		 => 'text',
					'priority'	 => 11
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'linkedin',
				array(
					'label'      => 'Linkedin (Use full URL to your Linkedin profile)',
					'section'    => 'solopine_new_section_social',
					'settings'   => 'sp_linkedin',
					'type'		 => 'text',
					'priority'	 => 12
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'snapchat',
				array(
					'label'      => 'Snapchat',
					'section'    => 'solopine_new_section_social',
					'settings'   => 'sp_snapchat',
					'type'		 => 'text',
					'priority'	 => 13
				)
			)
		);		
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'rss',
				array(
					'label'      => 'RSS Link',
					'section'    => 'solopine_new_section_social',
					'settings'   => 'sp_rss',
					'type'		 => 'text',
					'priority'	 => 14
				)
			)
		);
		
		// Footer
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'footer_copyright',
				array(
					'label'      => 'Footer Copyright Text',
					'section'    => 'solopine_new_section_footer',
					'settings'   => 'sp_footer_copyright',
					'type'		 => 'text',
					'priority'	 => 1
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'footer_share',
				array(
					'label'      => 'Hide Footer Social Icons',
					'section'    => 'solopine_new_section_footer',
					'settings'   => 'sp_footer_share',
					'type'		 => 'checkbox',
					'priority'	 => 2
				)
			)
		);
		
		// Colors
			
			// Top bar Colors
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'topbar_bg',
					array(
						'label'      => 'Top Bar BG',
						'section'    => 'solopine_new_section_color_topbar',
						'settings'   => 'sp_topbar_bg',
						'priority'	 => 1
					)
				)
			);
			
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'topbar_nav_color',
					array(
						'label'      => 'Top Bar Menu Text Color',
						'section'    => 'solopine_new_section_color_topbar',
						'settings'   => 'sp_topbar_nav_color',
						'priority'	 => 2
					)
				)
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'topbar_nav_color_hover',
					array(
						'label'      => 'Top Bar Menu Text Hover Color',
						'section'    => 'solopine_new_section_color_topbar',
						'settings'   => 'sp_topbar_nav_color_hover',
						'priority'	 => 3
					)
				)
			);
			
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'drop_bg',
					array(
						'label'      => 'Dropdown BG',
						'section'    => 'solopine_new_section_color_topbar',
						'settings'   => 'sp_drop_bg',
						'priority'	 => 4
					)
				)
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'drop_border',
					array(
						'label'      => 'Dropdown Border Color',
						'section'    => 'solopine_new_section_color_topbar',
						'settings'   => 'sp_drop_border',
						'priority'	 => 5
					)
				)
			);
			
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'drop_text_color',
					array(
						'label'      => 'Dropdown Text Color',
						'section'    => 'solopine_new_section_color_topbar',
						'settings'   => 'sp_drop_text_color',
						'priority'	 => 6
					)
				)
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'drop_text_hover_bg',
					array(
						'label'      => 'Dropdown Text Hover BG',
						'section'    => 'solopine_new_section_color_topbar',
						'settings'   => 'sp_drop_text_hover_bg',
						'priority'	 => 7
					)
				)
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'drop_text_hover_color',
					array(
						'label'      => 'Dropdown Text Hover Color',
						'section'    => 'solopine_new_section_color_topbar',
						'settings'   => 'sp_drop_text_hover_color',
						'priority'	 => 8
					)
				)
			);
			
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'topbar_social_color',
					array(
						'label'      => 'Top Bar Social Icons',
						'section'    => 'solopine_new_section_color_topbar',
						'settings'   => 'sp_topbar_social_color',
						'priority'	 => 9
					)
				)
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'topbar_social_color_hover',
					array(
						'label'      => 'Top Bar Social Icons Hover',
						'section'    => 'solopine_new_section_color_topbar',
						'settings'   => 'sp_topbar_social_color_hover',
						'priority'	 => 11
					)
				)
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'topbar_search_magnify',
					array(
						'label'      => 'Top Bar Search Magnify Color',
						'section'    => 'solopine_new_section_color_topbar',
						'settings'   => 'sp_topbar_search_magnify',
						'priority'	 => 13
					)
				)
			);
			
			// Mobile menu
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'mobile_bg',
					array(
						'label'      => 'Mobile Menu BG Color',
						'section'    => 'solopine_new_section_mobile',
						'settings'   => 'sp_mobile_bg',
						'priority'	 => 1
					)
				)
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'mobile_text',
					array(
						'label'      => 'Mobile Menu Link Color',
						'section'    => 'solopine_new_section_mobile',
						'settings'   => 'sp_mobile_text',
						'priority'	 => 2
					)
				)
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'mobile_icon',
					array(
						'label'      => 'Mobile Menu Toggle Icon Color',
						'section'    => 'solopine_new_section_mobile',
						'settings'   => 'sp_mobile_icon',
						'priority'	 => 3
					)
				)
			);
			
			// Sidebar
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'sidebar_title_bg',
					array(
						'label'      => 'Sidebar Widget Title BG',
						'section'    => 'solopine_new_section_color_sidebar',
						'settings'   => 'sp_sidebar_title_bg',
						'priority'	 => 1
					)
				)
			);
			$wp_customize->add_control(
				new WP_Customize_Control(
					$wp_customize,
					'sidebar_title_arrow',
					array(
						'label'      => 'Hide Sidebar Title Arrow',
						'section'    => 'solopine_new_section_color_sidebar',
						'settings'   => 'sp_sidebar_title_arrow',
						'type'		 => 'checkbox',
						'priority'	 => 2
					)
				)
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'sidebar_title_text',
					array(
						'label'      => 'Sidebar Widget Title Text Color',
						'section'    => 'solopine_new_section_color_sidebar',
						'settings'   => 'sp_sidebar_title_text',
						'priority'	 => 3
					)
				)
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'sidebar_social_icon',
					array(
						'label'      => 'Sidebar Social Icon Color',
						'section'    => 'solopine_new_section_color_sidebar',
						'settings'   => 'sp_sidebar_social_icon',
						'priority'	 => 4
					)
				)
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'sidebar_social_icon_hover',
					array(
						'label'      => 'Sidebar Social Icon Hover Color',
						'section'    => 'solopine_new_section_color_sidebar',
						'settings'   => 'sp_sidebar_social_icon_hover',
						'priority'	 => 5
					)
				)
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'sidebar_newsletter_bg',
					array(
						'label'      => 'Mailchimp Widget BG Color',
						'section'    => 'solopine_new_section_color_sidebar',
						'settings'   => 'sp_sidebar_newsletter_bg',
						'priority'	 => 6
					)
				)
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'sidebar_newsletter_text',
					array(
						'label'      => 'Mailchimp Widget Text Color',
						'section'    => 'solopine_new_section_color_sidebar',
						'settings'   => 'sp_sidebar_newsletter_text',
						'priority'	 => 7
					)
				)
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'sidebar_newsletter_button_bg',
					array(
						'label'      => 'Mailchimp Widget Button BG Color',
						'section'    => 'solopine_new_section_color_sidebar',
						'settings'   => 'sp_sidebar_newsletter_button_bg',
						'priority'	 => 8
					)
				)
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'sidebar_newsletter_button_text',
					array(
						'label'      => 'Mailchimp Widget Button Text Color',
						'section'    => 'solopine_new_section_color_sidebar',
						'settings'   => 'sp_sidebar_newsletter_button_text',
						'priority'	 => 9
					)
				)
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'sidebar_newsletter_button_bg_hover',
					array(
						'label'      => 'Mailchimp Widget Button BG Hover Color',
						'section'    => 'solopine_new_section_color_sidebar',
						'settings'   => 'sp_sidebar_newsletter_button_bg_hover',
						'priority'	 => 10
					)
				)
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'sidebar_newsletter_button_text_hover',
					array(
						'label'      => 'Mailchimp Widget Button Text Hover Color',
						'section'    => 'solopine_new_section_color_sidebar',
						'settings'   => 'sp_sidebar_newsletter_button_text_hover',
						'priority'	 => 11
					)
				)
			);
			
			// Footer
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'footer_bg',
					array(
						'label'      => 'Footer BG Color',
						'section'    => 'solopine_new_section_color_footer',
						'settings'   => 'sp_footer_bg',
						'priority'	 => 1
					)
				)
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'footer_social',
					array(
						'label'      => 'Footer Social Icon Color',
						'section'    => 'solopine_new_section_color_footer',
						'settings'   => 'sp_footer_social',
						'priority'	 => 2
					)
				)
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'footer_social_hover',
					array(
						'label'      => 'Footer Social Icon Hover Color',
						'section'    => 'solopine_new_section_color_footer',
						'settings'   => 'sp_footer_social_hover',
						'priority'	 => 3
					)
				)
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'footer_social_line',
					array(
						'label'      => 'Footer Social Separator Line',
						'section'    => 'solopine_new_section_color_footer',
						'settings'   => 'sp_footer_social_line',
						'priority'	 => 4
					)
				)
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'footer_copyright_color',
					array(
						'label'      => 'Footer Copyright Text Color',
						'section'    => 'solopine_new_section_color_footer',
						'settings'   => 'sp_footer_copyright_color',
						'priority'	 => 5
					)
				)
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'footer_copyright_link',
					array(
						'label'      => 'Footer Copyright Link Color',
						'section'    => 'solopine_new_section_color_footer',
						'settings'   => 'sp_footer_copyright_link',
						'priority'	 => 6
					)
				)
			);
			
			// Posts
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'post_title',
					array(
						'label'      => 'Post Title Color',
						'section'    => 'solopine_new_section_color_post_color',
						'settings'   => 'sp_post_title',
						'priority'	 => 1
					)
				)
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'post_title_divider',
					array(
						'label'      => 'Post Title Divider Color',
						'section'    => 'solopine_new_section_color_post_color',
						'settings'   => 'sp_post_title_divider',
						'priority'	 => 2
					)
				)
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'post_text',
					array(
						'label'      => 'Post Text Color',
						'section'    => 'solopine_new_section_color_post_color',
						'settings'   => 'sp_post_text',
						'priority'	 => 2
					)
				)
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'post_h',
					array(
						'label'      => 'Post H1-H6 Color',
						'section'    => 'solopine_new_section_color_post_color',
						'settings'   => 'sp_post_h',
						'priority'	 => 3
					)
				)
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'post_readmore_text',
					array(
						'label'      => 'Read More Text Color',
						'section'    => 'solopine_new_section_color_post_color',
						'settings'   => 'sp_post_readmore_text',
						'priority'	 => 4
					)
				)
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'post_readmore_text_hover',
					array(
						'label'      => 'Read More Text Hover Color',
						'section'    => 'solopine_new_section_color_post_color',
						'settings'   => 'sp_post_readmore_text_hover',
						'priority'	 => 6
					)
				)
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'post_readmore_line',
					array(
						'label'      => 'Read More Underline Color',
						'section'    => 'solopine_new_section_color_post_color',
						'settings'   => 'sp_post_readmore_line',
						'priority'	 => 6
					)
				)
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'post_readmore_line_hover',
					array(
						'label'      => 'Read More Underline Hover Color',
						'section'    => 'solopine_new_section_color_post_color',
						'settings'   => 'sp_post_readmore_line_hover',
						'priority'	 => 6
					)
				)
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'post_share_color',
					array(
						'label'      => 'Post Share Link Color',
						'section'    => 'solopine_new_section_color_post_color',
						'settings'   => 'sp_post_share_color',
						'priority'	 => 8
					)
				)
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'post_share_color_hover',
					array(
						'label'      => 'Post Share Link Hover Color',
						'section'    => 'solopine_new_section_color_post_color',
						'settings'   => 'sp_post_share_color_hover',
						'priority'	 => 9
					)
				)
			);
			
			// Accent
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'accent_color',
					array(
						'label'      => 'Accent Color',
						'section'    => 'solopine_new_section_color_accent',
						'settings'   => 'sp_accent_color',
						'priority'	 => 1
					)
				)
			);
			
			// Custom CSS
			$wp_customize->add_control(
				new Customize_CustomCss_Control(
					$wp_customize,
					'custom_css',
					array(
						'label'      => 'Custom CSS',
						'section'    => 'solopine_new_section_custom_css',
						'settings'   => 'sp_custom_css',
						'type'		 => 'custom_css',
						'priority'	 => 1
					)
				)
			);
	

	// Remove Sections
	$wp_customize->remove_section( 'title_tagline');
	$wp_customize->remove_section( 'nav');
	$wp_customize->remove_section( 'static_front_page');
	$wp_customize->remove_section( 'colors');
	$wp_customize->remove_section( 'background_image');
	
 
}
add_action( 'customize_register', 'solopine_register_theme_customizer' );

/**
 * Sanitize
 */
function solopine_sanitize_checkbox( $input ) {
    if ( $input == 1 ) {
        return 1;
    } else {
        return '';
    }
}
function solopine_sanitize_number($input) {
    if ( isset( $input ) && is_numeric( $input ) ) {
        return $input;
    }
}
?>