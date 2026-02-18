<?php
/* 
 * BLOCK: Cards
 * Choose Card type - 3 col (vertical), 2 col (vertical), 2 col (horizontal)
 * Content: Image, Title, Description, Link
*/

// Set class name from "Advanced" section in Dashboard edit page
$className = '';
if( !empty($block['className']) ) {
    $className .= $block['className'];
}

// Sets layout of block with custom field
$selected_block_layout = get_field('block_layout'); // three-col-vertical, two-col-vertical, two-col-horizontal

// Set block width (screens <xl are full width)
$block_width = get_field('block_width'); // 100%, 91%, 83%, 80%, 75%, 66%, 60%, 58%, 50% asdfasdfasdf

// Assign classes for container grid
if ( 'three-col-vertical' === $selected_block_layout ) {
  $grid_classes = 'grid grid-cols-1 lg:grid-cols-3 gap-4 md:gap-6 lg:gap-8';
}
elseif ( 'two-col-vertical' === $selected_block_layout ) {
  $grid_classes = 'grid grid-cols-1 lg:grid-cols-2 gap-4 md:gap-6 lg:gap-8';
}
elseif ( 'two-col-horizontal' === $selected_block_layout ) {
  $grid_classes = 'grid grid-cols-1 lg:grid-cols-2 gap-4 md:gap-6 lg:gap-8';
}
elseif ( 'one-col-horizontal' === $selected_block_layout ) {
  $grid_classes = 'grid grid-cols-1 gap-4 md:gap-6 lg:gap-8';
}

if ( have_rows('cards_list') ) : ?>

  <div class="block-cards <?php echo $selected_block_layout.' '.$className; ?> mb-8 md:mb-12<?php if ( ! is_admin() ) : ?> last:mb-0<?php endif; ?>">
    <div class="block-cards-width <?php echo $block_width.' '.$grid_classes;?>">
      <?php while( have_rows('cards_list') ): the_row(); 
        // Block Custom Field Values
        $image = get_sub_field('image');
        $title = get_sub_field('title');
        $description = get_sub_field('description');
        $link = get_sub_field('link');
        if ($link) {
          $link_url = $link['url'];
          $link_title = $link['title'];
          $link_target = $link['target'] ? $link['target'] : '_self';
        }

        // Sets layout of block row
        $row_layout = get_sub_field('row_layout'); // image-content, content-image
        if ( 'image-content' === $row_layout ) {
          $row_layout_class = 'sm:flex-row';
          $row_image_rounding = 'sm:rounded-tr-none sm:rounded-bl-lg';
        }
        elseif ( 'content-image' === $row_layout) {
          $row_layout_class = 'sm:flex-row-reverse';
          $row_image_rounding = 'sm:rounded-tl-none sm:rounded-br-lg';
        }
        
        // Block Templates
        if ( 'three-col-vertical' === $selected_block_layout ) : ?>

          <?php if ($link) : ?>
            <a href="<?php echo esc_url( $link_url ); ?>" class="group flex flex-col bg-white sm:text-center rounded-xl shadow transition-shadow hover:shadow-lg" target="<?php echo esc_attr( $link_target ); ?>">
          <?php else : ?>
            <div class="group flex flex-col bg-white sm:text-center rounded-xl shadow">
          <?php endif; ?>
            <?php if ($image) : ?>
              <div class="relative h-48 sm:h-56 md:h-80 lg:h-40 xl:h-52 rounded-tl-lg rounded-tr-lg overflow-hidden">
                <?php
                  if ($link) {
                    $image_class = array('class' => "w-full !h-full rounded-tl-lg rounded-tr-lg object-cover object-center transition-all group-hover:grayscale");
                  } else {
                    $image_class = array('class' => "w-full !h-full rounded-tl-lg rounded-tr-lg object-cover object-center");
                  }
                  echo wp_get_attachment_image( $image, 'large', '', $image_class );
                ?>
                <?php if ($link) : ?>
                <div class="absolute w-full h-full top-0 left-0 rounded-tl-lg rounded-tr-lg transition-all duration-300 bg-gradient-to-br from-color-primary to-color-secondary/60 opacity-0 group-hover:opacity-90"></div>
                <svg class="absolute duration-500 opacity-0 fill-white top-1/2 left-1/2 -translate-x-1/2 -translate-y-[40%] w-10 group-hover:opacity-100 group-hover:-translate-x-1/2 group-hover:-translate-y-1/2" enable-background="new 0 0 52 52" version="1.1" viewBox="0 0 52 52" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                  <path class="fill-white" d="M1,32v-12h18.9V1h12.1v18.9H51v12H32.1v19H19.9V32H1z"></path>
                </svg>
                <?php endif; ?>
              </div>
            <?php endif; ?>
              <div class="w-full px-8 pb-8 text-center">
                <?php if ($title) : ?>
                <h3 class="text-2xl text-color-primary font-bold leading-none mt-8 mb-0<?php if($link) : ?> transition-opacity hover:opacity-50<?php endif;?>">
                  <?php echo $title; ?>
                </h3>
                <?php endif; ?>
                <?php if ($description) : ?>
                <p class="text-sm mt-4 mb-0 first:mt-8 !leading-6 2xl:text-base"><?php echo $description; ?></p>
                <?php endif; ?>
                <?php if ($link) : ?>
                  <div class="block w-full rounded-lg overflow-hidden relative bg-gradient-to-tl from-gray-200 to-gray-50 border border-gray-200 py-6 mt-6 mb-0 transition-all hover:border-transparent hover:shadow-lg">
                    <div class="opacity-0 rounded-lg group-hover:opacity-100 transition duration-200 absolute inset-0 h-full w-full bg-gradient-to-br from-color-primary to-color-primary-dark"></div>
                    <span class="w-full font-lato font-bold text-slate-500 text-center transition-colors duration-300 group-hover:text-white absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 leading-none"><?php echo $link_title; ?> »</span>
                  </div>
                <?php endif; ?>
              </div>
          <?php if ($link) : ?>
            </a>  
          <?php else : ?>
            </div>
          <?php endif; ?>
          
        <?php elseif ( 'two-col-vertical' === $selected_block_layout ) : ?>

          <?php if ($link) : ?>
            <a href="<?php echo esc_url( $link_url ); ?>" class="group flex flex-col bg-white sm:text-center rounded-xl shadow transition-shadow hover:shadow-lg" target="<?php echo esc_attr( $link_target ); ?>">
          <?php else : ?>
            <div class="group flex flex-col bg-white sm:text-center rounded-xl shadow">
          <?php endif; ?>      
            <?php if ($image) : ?>      
              <div class="relative h-48 sm:h-56 md:h-80 lg:h-52 xl:h-60 rounded-tl-lg rounded-tr-lg overflow-hidden">
                <?php
                  if ($link) {
                    $image_class = array('class' => "w-full !h-full rounded-tl-lg rounded-tr-lg object-cover object-center transition-all group-hover:grayscale");
                  } else {
                    $image_class = array('class' => "w-full !h-full rounded-tl-lg rounded-tr-lg object-cover object-center");
                  }
                  echo wp_get_attachment_image( $image, 'large', '', $image_class );
                ?>
                <?php if ($link) : ?>
                <div class="absolute w-full h-full top-0 left-0 rounded-tl-lg rounded-tr-lg transition-all duration-300 bg-gradient-to-br from-color-primary to-color-secondary/60 opacity-0 group-hover:opacity-90"></div>
                <svg class="absolute duration-500 opacity-0 fill-white top-1/2 left-1/2 -translate-x-1/2 -translate-y-[40%] w-10 group-hover:opacity-100 group-hover:-translate-x-1/2 group-hover:-translate-y-1/2" enable-background="new 0 0 52 52" version="1.1" viewBox="0 0 52 52" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                  <path class="fill-white" d="M1,32v-12h18.9V1h12.1v18.9H51v12H32.1v19H19.9V32H1z"></path>
                </svg>
                <?php endif; ?>
              </div>
            <?php endif; ?>
              <div class="w-full px-8 pb-8 text-center">
                <?php if ($title) : ?>
                <h3 class="text-2xl text-color-primary font-bold leading-none mt-4 mb-0 first:mt-8<?php if ($link) : ?> transition-opacity hover:opacity-50<?php endif; ?>">
                  <?php echo $title; ?>
                </h3>
                <?php endif; ?>
                <?php if ($description) : ?>
                <p class="text-sm mt-4 mb-0 first:mt-8 !leading-6 2xl:text-base"><?php echo $description; ?></p>
                <?php endif; ?>
                <?php if ($link) : ?>
                  <div class="block w-full rounded-lg overflow-hidden relative bg-gradient-to-tl from-gray-200 to-gray-50 border border-gray-200 py-6 mt-6 mb-0 transition-all hover:border-transparent hover:shadow-lg">
                    <div class="opacity-0 rounded-lg group-hover:opacity-100 transition duration-200 absolute inset-0 h-full w-full bg-gradient-to-br from-color-primary to-color-primary-dark"></div>
                    <span class="w-full font-lato font-bold text-slate-500 text-center transition-colors duration-300 group-hover:text-white absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 leading-none"><?php echo $link_title; ?> »</span>
                  </div>
                <?php endif; ?>
              </div>
          <?php if ($link) : ?>
            </a>  
          <?php else : ?>
            </div>
          <?php endif; ?>

        <?php elseif ( 'two-col-horizontal' === $selected_block_layout ) : ?>
        
          <?php if ($link) : ?>
            <a href="<?php echo esc_url( $link_url ); ?>" class="group h-full flex rounded-lg transition shadow hover:shadow-lg bg-white" target="<?php echo esc_attr( $link_target ); ?>">
          <?php else : ?>
            <div class="group h-full flex rounded-lg shadow bg-white">
          <?php endif; ?>
              <div class="relative w-2/5 h-full rounded-tl-lg rounded-bl-lg overflow-hidden">
                <?php
                  if ($link) {
                    $image_class = array('class' => "w-full !h-full rounded-tl-lg rounded-bl-lg object-cover object-center transition-all group-hover:grayscale");
                  } else {
                    $image_class = array('class' => "w-full !h-full rounded-tl-lg rounded-bl-lg object-cover object-center");
                  }
                  echo wp_get_attachment_image( $image, 'large', '', $image_class );
                ?>
                <?php if ($link) : ?>
                <div class="absolute w-full h-full top-0 left-0 rounded-tl-lg rounded-bl-lg transition-all duration-300 bg-gradient-to-br from-color-primary to-color-secondary/60 opacity-0 group-hover:opacity-90"></div>
                <svg class="absolute duration-500 opacity-0 fill-white top-1/2 left-1/2 -translate-x-1/2 -translate-y-[40%] w-10 group-hover:opacity-100 group-hover:-translate-x-1/2 group-hover:-translate-y-1/2" enable-background="new 0 0 52 52" version="1.1" viewBox="0 0 52 52" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                  <path class="fill-white" d="M1,32v-12h18.9V1h12.1v18.9H51v12H32.1v19H19.9V32H1z"></path>
                </svg>
                <?php endif; ?>
              </div>
              <div class="w-3/5 p-8 flex flex-col justify-center">
                <?php if ($title) : ?>
                <h3 class="text-2xl text-color-primary font-bold leading-none mt-4 mb-0 first:mt-0<?php if ($link) : ?> transition-opacity hover:opacity-50<?php endif; ?>">
                  <?php echo $title; ?>
                </h3>
                <?php endif; ?>
                <?php if ($description) : ?>
                <p class="text-sm mt-4 mb-0 first:mt-0 !leading-6 2xl:text-base"><?php echo $description; ?></p>
                <?php endif; ?>
                <?php if ($link) : ?>
                  <div class="w-full rounded-lg overflow-hidden relative bg-gradient-to-tl from-gray-200 to-gray-50 border border-gray-200 py-5 mt-5 mb-0 transition-all hover:border-transparent hover:shadow-lg">
                    <div class="opacity-0 rounded-lg group-hover:opacity-100 transition duration-200 absolute inset-0 h-full w-full bg-gradient-to-br from-color-primary to-color-primary-dark"></div>
                    <span class="w-full font-lato text-sm font-bold text-slate-500 pl-4 transition-colors duration-300 group-hover:text-white absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 leading-none"><?php echo $link_title; ?> »</span>
                  </div>
                <?php endif; ?>
              </div>
          <?php if ($link) : ?>
            </a>
          <?php else : ?>
            </div>
          <?php endif; ?>

        <?php elseif ( 'one-col-horizontal' === $selected_block_layout ) : ?>

          <?php if ($link) : ?>
            <a href="<?php echo esc_url( $link_url ); ?>" class="group h-full flex flex-col <?php echo $row_layout_class; ?> rounded-lg transition shadow hover:shadow-lg bg-white" target="<?php echo esc_attr( $link_target ); ?>">
          <?php else : ?>
            <div class="group h-full flex flex-col <?php echo $row_layout_class; ?> rounded-lg shadow bg-white">
          <?php endif; ?>
              <div class="relative w-full sm:w-1/2 h-60 sm:h-full overflow-hidden">
                <?php
                  if ($link) {
                    $image_class = array('class' => "w-full !h-full rounded-tl-lg rounded-tr-lg " . $row_image_rounding . " object-cover object-center transition-all group-hover:grayscale");
                  } else {
                    $image_class = array('class' => "w-full !h-full rounded-tl-lg rounded-tr-lg " . $row_image_rounding . " object-cover object-center");
                  }
                  echo wp_get_attachment_image( $image, 'large', '', $image_class );
                ?>
                <?php if ($link) : ?>
                <div class="absolute w-full h-full top-0 left-0 rounded-tl-lg rounded-tr-lg <?php echo $row_image_rounding; ?> transition-all duration-300 bg-gradient-to-br from-color-primary to-color-secondary/60 opacity-0 group-hover:opacity-90"></div>
                <svg class="absolute duration-500 opacity-0 fill-white top-1/2 left-1/2 -translate-x-1/2 -translate-y-[40%] w-10 group-hover:opacity-100 group-hover:-translate-x-1/2 group-hover:-translate-y-1/2" enable-background="new 0 0 52 52" version="1.1" viewBox="0 0 52 52" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                  <path class="fill-white" d="M1,32v-12h18.9V1h12.1v18.9H51v12H32.1v19H19.9V32H1z"/>
                </svg>
                <?php endif; ?>
              </div>
              <div class="w-full sm:w-1/2 px-8 pb-8 sm:p-10 lg:p-16 2xl:p-20 flex flex-col justify-center">
                <?php if ($title) : ?>
                <h3 class="text-2xl xl:text-3xl text-color-primary font-bold leading-none mt-4 mb-0 first:mt-8 sm:mt-4 sm:first:mt-0 xl:mt-8 xl:first:mt-0<?php if ($link) : ?> transition-opacity hover:opacity-50<?php endif; ?>"><?php echo $title; ?></h3>
                <?php endif; ?>
                <?php if ($description) : ?>
                <p class="text-sm mt-4 mb-0 first:mt-8 sm:mt-4 sm:first:mt-0 sm:!leading-6 xl:mt-8 xl:first:mt-0 2xl:text-base"><?php echo $description; ?></p>
                <?php endif; ?>
                <?php if ($link) : ?>
                  <div class="block w-full xl:w-1/2 rounded-lg overflow-hidden relative bg-gradient-to-tl from-gray-200 to-gray-50 border border-gray-200 py-6 mt-6 xl:mt-8 mb-0 transition-all hover:border-transparent hover:shadow-lg">
                    <div class="opacity-0 rounded-lg group-hover:opacity-100 transition duration-200 absolute inset-0 h-full w-full bg-gradient-to-br from-color-primary to-color-primary-dark"></div>
                    <span class="w-full font-lato font-bold text-slate-500 text-sm ml-4 md:ml-5 xl:text-base transition-colors duration-300 group-hover:text-white absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 leading-none"><?php echo $link_title; ?> »</span>
                  </div>
                <?php endif; ?>
              </div>
          <?php if ($link) : ?>
            </a>
          <?php else : ?>
            </div>
          <?php endif; ?>

        <?php endif; ?>
      <?php endwhile; ?>
    </div> <!-- .block-cards-width -->
  </div> <!-- .block-cards -->

<?php endif; ?>