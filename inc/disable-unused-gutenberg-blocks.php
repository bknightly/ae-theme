<?php

function leh_allowed_block_types( $allowed_blocks ) {
	return array(
    'core/image',
    'core/video',
    'core/gallery',
    'core/freeform', // classic editor
		'core/paragraph',
		'core/heading',
    'core/list',
    'core/list-item',
    'core/separator',
    'core/spacer',
    'core/shortcode',
    'core/embed',
    'acf/container',
    'acf/featured-content',
    'acf/title',
    'acf/cards',
    'acf/supported-brands',
    'acf/post-excerpt',
    'acf/modal',
    'acf/toggle-content'
	);
}
add_filter( 'allowed_block_types_all', 'leh_allowed_block_types' );

?>