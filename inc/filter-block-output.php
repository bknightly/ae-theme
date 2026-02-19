<?php
function ae_block_wrapper( $block_content, $block ) {

if ( $block['blockName'] === 'core/heading' ) {
    $content = '<div class="block-heading">';
    $content .= $block_content;
    $content .= '</div>';
    return $content;
}
if ( $block['blockName'] === 'core/list' ) {
    $content = '<div class="block-list">';
    $content .= $block_content;
    $content .= '</div>';
    return $content;
}
if ( $block['blockName'] === 'core/embed' ) {
    $content = '<div class="block-embed mb-5 sm:mb-6 lg:mb-7">';
    $content .= $block_content;
    $content .= '</div>';
    return $content;
}
return $block_content;
}

add_filter( 'render_block', 'ae_block_wrapper', 10, 2 );