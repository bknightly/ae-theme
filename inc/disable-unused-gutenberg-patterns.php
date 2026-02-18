<?php

// function disable_block_patterns() {
// 	if ( class_exists( 'WP_Block_Patterns_Registry' ) ) {
// 		unregister_block_pattern('core/text-two-columns');
// 		unregister_block_pattern('core/two-buttons');
// 		unregister_block_pattern('core/two-images');
// 		unregister_block_pattern('core/text-two-columns-with-images');
// 		unregister_block_pattern('core/text-three-columns-buttons');
// 		unregister_block_pattern('core/large-header');
// 		unregister_block_pattern('core/large-header-button');
// 		unregister_block_pattern('core/three-buttons');
// 		unregister_block_pattern('core/heading-paragraph');
// 		unregister_block_pattern('core/quote');
// 	}

// }
// add_action( 'init', 'disable_block_patterns' );

// From: https://developer.wordpress.org/block-editor/developers/themes/theme-support/#disabling-the-default-block-patterns
remove_theme_support( 'core-block-patterns' );

?>