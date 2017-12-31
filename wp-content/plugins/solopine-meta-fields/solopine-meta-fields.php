<?php
 
/*
Plugin Name: Solo Pine Meta Fields
Plugin URI: http://solopine.com
Description: Adds additional meta fields for your posts
Author: Solo Pine
Version: 1.0
Author URI: http://solopine.com
*/

/**
 * Adds a meta box to the post editing screen
 */
function solopine_custom_meta() {
    add_meta_box( 'solopine_meta', __( 'Post Options', 'solopine' ), 'solopine_meta_callback', 'post' );
	add_meta_box( 'solopine_meta', __( 'Page Options', 'solopine' ), 'solopine_meta_callback', 'page' );
}
add_action( 'add_meta_boxes', 'solopine_custom_meta' );

/**
 * Outputs the content of the meta box
 */
function solopine_meta_callback( $post ) {
    wp_nonce_field( basename( __FILE__ ), 'solopine_nonce' );
    $solopine_stored_meta = get_post_meta( $post->ID );
	global $typenow;
    ?>
	
	<?php if($typenow == 'post') : ?>
	<p>
		<label for="meta-select" class="prfx-row-title"><?php _e( 'Post Layout:', 'solopine' )?></label>
		<select name="meta-select" id="meta-select">
			<option value="default-post" <?php if ( isset ( $solopine_stored_meta['meta-select'] ) ) selected( $solopine_stored_meta['meta-select'][0], 'default-post' ); ?>>Use Customizer Setting</option>';
			<option value="sidebar-post" <?php if ( isset ( $solopine_stored_meta['meta-select'] ) ) selected( $solopine_stored_meta['meta-select'][0], 'sidebar-post' ); ?>>Post With Sidebar</option>';
			<option value="full-post" <?php if ( isset ( $solopine_stored_meta['meta-select'] ) ) selected( $solopine_stored_meta['meta-select'][0], 'full-post' ); ?>>Post Full Width</option>';
		</select>
		<span class="solopine-description">Choose whether you want to display your post in a full width layout or with a sidebar.</span>
	</p>
	<?php endif; ?>
	
	<p>
		<label for="meta-image" class="prfx-row-title"><?php _e( 'Custom Slider Image:', 'solopine' )?></label>
		<input type="text" name="meta-image" id="meta-image" value="<?php if ( isset ( $solopine_stored_meta['meta-image'] ) ) echo $solopine_stored_meta['meta-image'][0]; ?>" />
		<input type="button" id="meta-image-button" class="button" value="<?php _e( 'Choose or Upload an Image', 'solopine' )?>" />
		<span class="solopine-description">If you're planning to display this post/page in the featured slider, you can set a custom slider image here.<br> If you leave this field blank, the slider will pick the featured image assigned to the post/page.</span>
	</p>
 
    <?php
}

/**
 * Saves the custom meta input
 */
function solopine_meta_save( $post_id ) {
 
    // Checks save status
    $is_autosave = wp_is_post_autosave( $post_id );
    $is_revision = wp_is_post_revision( $post_id );
    $is_valid_nonce = ( isset( $_POST[ 'solopine_nonce' ] ) && wp_verify_nonce( $_POST[ 'solopine_nonce' ], basename( __FILE__ ) ) ) ? 'true' : 'false';
 
    // Exits script depending on save status
    if ( $is_autosave || $is_revision || !$is_valid_nonce ) {
        return;
    }
	
	// Checks for input and saves if needed
	if( isset( $_POST[ 'meta-select' ] ) ) {
		update_post_meta( $post_id, 'meta-select', $_POST[ 'meta-select' ] );
	}
	
	// Checks for input and saves if needed
	if( isset( $_POST[ 'meta-image' ] ) ) {
		update_post_meta( $post_id, 'meta-image', $_POST[ 'meta-image' ] );
	}
 
}
add_action( 'save_post', 'solopine_meta_save' );

/**
 * Adds the meta box stylesheet when appropriate
 */
function solopine_admin_styles(){
    global $typenow;
    if( $typenow == 'post' || $typenow == 'page' ) {
        wp_enqueue_style( 'solopine_meta_box_styles', plugin_dir_url( __FILE__ ) . 'solopine-meta-field-styles.css' );
    }
}
add_action( 'admin_print_styles', 'solopine_admin_styles' );

/**
 * Loads the image management Javascript
 */
function solopine_image_enqueue() {
    global $typenow;
    if( $typenow == 'post' || $typenow == 'page' ) {
        wp_enqueue_media();
 
        // Registers and enqueues the required Javascript.
        wp_register_script( 'meta-box-image', plugin_dir_url( __FILE__ ) . 'meta-box-image.js', array( 'jquery' ) );
        wp_localize_script( 'meta-box-image', 'meta_image',
            array(
                'title' => __( 'Choose or Upload an Image', 'solopine' ),
                'button' => __( 'Use this image', 'solopine' ),
            )
        );
        wp_enqueue_script( 'meta-box-image' );
    }
}
add_action( 'admin_enqueue_scripts', 'solopine_image_enqueue' );