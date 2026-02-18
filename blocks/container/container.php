<?php

/**
 * Container Block Template.
 */

// Create class attribute allowing for custom "className" and "align" values.
$className = '';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}

// Set block width (screens >xl are full width)
$block_width = get_field('block_width'); // 100%, 91%, 83%, 80%, 75%, 66%, 60%, 58%, 50%
?>

<div class="block-container mb-8 md:mb-12<?php if ( ! is_admin() ) : ?> last:mb-0<?php endif; ?><?php echo esc_attr($className); ?>">
  <div class="bg-white <?php echo $block_width; ?> rounded-lg shadow p-6 sm:p-8 lg:p-12">
    <InnerBlocks />
  </div>
</div>