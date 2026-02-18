<?php
/* 
 * BLOCK: Supported Brands
 * Supported Brands block, listing company logos
 * Content: Image, logo height
*/

// Set class name from "Advanced" section in Dashboard edit page
$className = '';
if( !empty($block['className']) ) {
    $className .= $block['className'];
}
// Set block width (screens >xl are full width)
$block_width = get_field('block_width'); // 100%, 91%, 83%, 80%, 75%, 66%, 60%, 58%, 50%
?>

<div class="block-supported-brands mb-8 md:mb-12<?php if ( ! is_admin() ) : ?> last:mb-0<?php endif; ?> <?php echo esc_attr($className); ?>">
  <div class="bg-white <?php echo $block_width; ?> rounded-lg shadow p-6 lg:p-8">
    <ul class="list-none flex flex-row flex-wrap justify-center">
    <?php if( have_rows('brands_list') ): ?>
      <?php while( have_rows('brands_list') ): the_row(); 
        $logo = get_sub_field('logo');
        $logo_height = get_sub_field('logo_height');
        ?>
        <li class="mx-4 my-3 lg:my-4 flex flex-col justify-center">
          <?php 
            $logo_class = 'grayscale opacity-60 w-auto ' . $logo_height;
            $logo_class_combined = array('class' => $logo_class);
            echo wp_get_attachment_image( $logo, 'large', '', $logo_class_combined );
          ?>
        </li>
      <?php endwhile; ?>
    <?php endif; ?>
    </ul>
  </div>
</div>