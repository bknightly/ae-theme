<?php // Title

// Create class attribute allowing for custom "className" and "align" values.
$classes = '';
if( !empty($block['className']) ) {
    $classes .= sprintf( ' %s', $block['className'] );
}
if( !empty($block['align']) ) {
    $classes .= sprintf( ' text-%s', $block['align'] );
}

?>
<h2 class="block-title text-gray-700 text-xl mt-0 mb-8 md:mb-12<?php if ( ! is_admin() ) : ?> last:mb-0<?php endif; ?><?php echo esc_attr($classes); ?>"><?php the_field( 'title' ); ?></h2>