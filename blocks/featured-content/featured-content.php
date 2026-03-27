<?php
/**
 * Featured Content block
 */

// Create class attribute allowing for custom "className" and "align" values.
$className = '';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
?>

<div class="block-featured-content glide-fade mb-8 relative<?php echo esc_attr($className); ?>">
  <div class="glide__track" data-glide-el="track">
    <ul class="glide__slides !w-full h-auto overflow-hidden p-0 m-0 list-none">
      <?php $slide_count = 0; ?>
      <?php
      // Check rows exists.
      if( have_rows('slides') ) :
          // Loop through rows.
          while( have_rows('slides') ) : the_row();
              // Load sub field value.
              $slide_image = get_sub_field('image');
              $slide_title = get_sub_field('title');
              $slide_description = get_sub_field('description');
              $slide_link = get_sub_field('link');
              if ($slide_link) :
                $slide_link_url = $slide_link['url'];
                $slide_link_title = $slide_link['title'];
                $slide_link_target = $slide_link['target'] ? $slide_link['target'] : '_self';
              endif;
              // Do something...
              // Checks if "Welcome Slide?" is checked "Yes" in repeater row
              $welcome_slide = get_sub_field('welcome_slide');
              ?>
              <?php if ( $welcome_slide ) : ?>
              <li class="glide__slide overflow-hidden relative h-[calc(90vh-80px)] sm:h-[80vh] lg:h-[calc(100vh-60px)] xl:h-screen">
                <?php 
                  $slide_image_class = array('class' => "!w-full !h-full grayscale object-cover");
                  echo wp_get_attachment_image( $slide_image, 'full', '', $slide_image_class );
                ?>
                <div class="absolute w-full h-full bg-gradient-to-br from-color-primary to-color-secondary/60 opacity-[.85] top-0 left-0"></div>
                <div class="absolute text-center top-1/2 left-1/2 -translate-x-1/2 translate-y-[-55%] sm:translate-y-[-58%] md:translate-y-[-65%] lg:translate-y-[-40%] w-full">
                  <div class="container mx-auto">
                    <p id="element1" class="home-page-title-welcome text-white font-lato font-bold !leading-[.9] text-[2.1rem] md:text-6xl lg:text-[5rem] xl:text-[7.5rem] 3xl:text-[9rem] text-9 mx-auto !my-0"><?php echo $slide_title; ?></p>
                    <p id="element2" class="home-page-subtitle text-white font-lato font-bold mt-6 xl:mt-10 text-[1.1rem] xl:text-xl 2xl:text-2xl leading-none"><?php echo $slide_description; ?></p>
                    <hr id="element3" class="my-8 xl:mt-12 xl:mb-10 w-1/3 mx-auto">
                    <?php if ($slide_link) : ?>
                      <span id="element4" class="block">
                        <a class="inline-block bg-white/90 text-color-primary font-lato font-bold px-12 py-3 xl:py-4 text-sm 2xl:text-lg leading-none rounded-lg shadow transition hover:shadow-lg hover:opacity-70" href="<?php echo $slide_link_url; ?>" target="<?php echo $slide_link_target; ?>"><?php echo $slide_link_title; ?> &raquo;</a>
                      </span>
                    <?php endif; ?>
                  </div>
                </div>
              </li>
              <?php else : ?>
              <li class="glide__slide overflow-hidden relative h-[calc(90vh-80px)] sm:h-[80vh] lg:h-[calc(100vh-60px)] xl:h-screen">
                <?php 
                  $slide_image_class = array('class' => "!w-full !h-full grayscale object-cover");
                  echo wp_get_attachment_image( $slide_image, 'full', '', $slide_image_class );
                ?>
                <div class="absolute w-full h-full bg-gradient-to-br from-color-primary to-color-secondary/60 opacity-[.85] top-0 left-0"></div>
                <div class="absolute text-center top-1/2 left-1/2 -translate-x-1/2 translate-y-[-55%] md:translate-y-[-65%] lg:translate-y-[-40%] px-6 md:px-0 w-full">
                  <p class="home-page-title text-white font-lato font-bold leading-[.9] text-4xl md:text-[5rem] xl:text-8xl 2xl:text-[7rem] 3xl:text-[9rem] !my-0"><?php echo $slide_title; ?></p>
                  <p class="home-page-subtitle text-white font-lato font-bold mt-5 !mb-0 xl:mt-10 text-base xl:text-xl 2xl:text-2xl 3xl:text-3xl md:w-3/4 lg:w-3/5 xl:w-2/5 md:mx-auto leading-none"><?php echo $slide_description; ?></p>
                  <?php if ($slide_link) : ?>
                    <a class="inline-block bg-white/90 text-color-primary font-lato font-bold px-12 py-3 xl:py-4 mt-6 xl:mt-10 2xl:mt-12 text-sm 2xl:text-lg leading-none rounded-lg shadow transition hover:shadow-lg hover:opacity-70" href="<?php echo $slide_link_url; ?>" target="<?php echo $slide_link_target; ?>"><?php echo $slide_link_title; ?> &raquo;</a>
                  <?php endif; ?>
                </div>
              </li>
              <?php endif; ?>
              <?php $slide_count++; // echo $slide_count ?>
          <?php
          // End loop.
          endwhile;
      // No value.
      else :
          // Do something...
      endif;
      ?>
    </ul>
  </div>
  <?php
    if ( $slide_count >= 2 ) :
    // Prev / Next Navigation
  ?>
  <div class="hidden absolute top-1/2 w-full lg:flex lg:flex-row lg:justify-between" data-glide-el="controls">
    <button data-glide-dir="<" class="inline-block font-opensans ml-4 z-[2] text-color-heading-gray uppercase pt-[.3rem] px-[.6rem] pb-[.4rem] rounded-full bg-white opacity-30 hover:opacity-100 cursor-pointer shadow hover:shadow-lg transition duration-200 duration ease-in-out leading-none glide__arrow--left">&laquo;</button>
    <?php
      // '>' was breaking HTML structure because it wasnt being passed as a string
      // Use htmlspecialchars function to escape html character and its recogonized as a string
      $glide_right_arrow = htmlspecialchars('>'); 
    ?>
    <button data-glide-dir="<?php echo $glide_right_arrow; ?>" class="inline-block font-opensans mr-4 z-[2] text-color-heading-gray uppercase pt-[.3rem] px-[.6rem] pb-[.4rem] rounded-full bg-white opacity-30 hover:opacity-100 cursor-pointer shadow hover:shadow-lg transition duration-200 duration ease-in-out leading-none glide__arrow--right">&raquo;</button>
  </div>
  <?php
    // Bullets Navigation
    // From https://github.com/glidejs/glide/issues/241#issuecomment-845352380
  ?>
  <div class="absolute z-[1] bottom-8 sm:bottom-5 md:bottom-8 left-1/2 inline-flex list-none -translate-x-1/2 lg:hidden" data-glide-el="controls[nav]">
    <?php while( have_rows( 'slides' ) ) : the_row(); ?>
      <?php if ( empty( $button_nav_count ) ) { $button_nav_count = 0; } ?>
      <button class="bg-color-primary w-8 h-2 p-0 transition ease-in-out cursor-pointer leading-none shadow mb-1 mx-1 focus:outline-none" data-glide-dir="=<?php echo $button_nav_count ?>"></button>
      <?php $button_nav_count++ ?>
    <?php endwhile; ?>
  </div>
  <?php endif; ?>
</div><!-- .glide-fade -->
<?php 
  if ( is_admin() && has_block('acf/featured-content') ) {
    include( get_template_directory() . '/blocks/featured-content/featured-content-editor.php');
  }
?>