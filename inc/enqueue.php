<?php
/**
 * Enqueue scripts and styles.
 */
function leh_theme_enqueue() {

  // Header Assets
	// $filename = '/assets/dist/css/style.min.css';
	// if ( file_exists(get_template_directory() . $filename) !== false ) {
	// 	$version = date ("YmdHis", filemtime(get_template_directory() . $filename));
	// 	wp_enqueue_style( 'app', get_template_directory_uri() . $filename, false, $version, 'all' );
  // }

  // Footer Assets

  if ( has_block( 'acf/featured-content' ) ) {
    $filename = '/blocks/featured-content/glide/glide.min.js';
    if ( file_exists(get_template_directory() . $filename) !== false ) {
      $version = date ("YmdHis", filemtime(get_template_directory() . $filename));
      wp_register_script( 'glide-min', get_template_directory_uri() . $filename, array(), $version, true );
      wp_enqueue_script( 'glide-min' );
    }
  }

  $filename = '/assets/dist/js/app.min.js';
  if ( file_exists(get_template_directory() . $filename) !== false ) {
    $version = date ("YmdHis", filemtime(get_template_directory() . $filename));
    wp_register_script( 'app', get_template_directory_uri() . $filename, array(), $version, true );
    wp_enqueue_script( 'app' );
  }

  if ( ! is_single() ) {
    wp_deregister_script( 'wp-embed' );
  }

  if ( ! ( has_block('core/gallery') ) ) {
    wp_dequeue_style('wp-block-library');
  }
  
  wp_dequeue_style('contact-form-7');

}
add_action( 'wp_enqueue_scripts', 'leh_theme_enqueue' );

// Load assets in Dashboard page/post editor
function leh_enqueue_custom_blocks_in_admin() {
	$filename = '/blocks/assets/css/leh-blocks.min.css';
	if ( file_exists(get_template_directory() . $filename) !== false ) {
		$version = date ("YmdHis", filemtime(get_template_directory() . $filename));
		wp_enqueue_style( 'leh-blocks', get_template_directory_uri() . $filename, false, $version, 'all' );
  }
  $filename = '/js/embed-youtube-vimeo-only.js';
  if ( file_exists(get_template_directory() . $filename) !== false ) {
    $version = date ("YmdHis", filemtime(get_template_directory() . $filename));
    wp_register_script( 'embed-youtube-vimeo-only', get_template_directory_uri() . $filename, array(), $version, true );
    wp_enqueue_script( 'embed-youtube-vimeo-only' );
  }
  // Add blocks JS in editor pages
  $filename = '/blocks/toggle-content/toggle-content-editor.js';
  if ( file_exists(get_template_directory() . $filename) !== false ) {
    $version = date ("YmdHis", filemtime(get_template_directory() . $filename));
    wp_register_script( 'toggle-content-editor', get_template_directory_uri() . $filename, array(), $version, true );
    wp_enqueue_script( 'toggle-content-editor' );
  }
  if ( has_block( 'acf/featured-content' ) ) {
    $filename = '/blocks/featured-content/glide/glide.min.js';
    if ( file_exists(get_template_directory() . $filename) !== false ) {
      $version = date ("YmdHis", filemtime(get_template_directory() . $filename));
      wp_register_script( 'glide-min', get_template_directory_uri() . $filename, array(), $version, true );
      wp_enqueue_script( 'glide-min' );
    }
  }
}
add_action( 'enqueue_block_editor_assets', 'leh_enqueue_custom_blocks_in_admin' );