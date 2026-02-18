<?php
// Remove Global Styles and SVG Filters from WP 5.9.1 - 2022-02-27
function remove_global_styles_and_svg_filters() {
	remove_action( 'wp_enqueue_scripts', 'wp_enqueue_global_styles' );
	remove_action( 'wp_body_open', 'wp_global_styles_render_svg_filters' );

	// Remove "global-styles-inline-css" introduced in WP v6.9 - 2025-12-03
    remove_action( 'wp_footer', 'wp_enqueue_global_styles', 1 );
}
add_action('init', 'remove_global_styles_and_svg_filters');

// This snippet removes the Global Styles and SVG Filters that are mostly if not only used in Full Site Editing in WordPress 5.9.1+
// Detailed discussion at: https://github.com/WordPress/gutenberg/issues/36834
// WP default filters: https://github.com/WordPress/WordPress/blob/7d139785ea0cc4b1e9aef21a5632351d0d2ae053/wp-includes/default-filters.php
?>