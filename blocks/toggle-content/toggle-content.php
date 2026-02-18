<?php
/* 
 * BLOCK: Toggle Content
 * Set block styles, layout, and add custom content w/ ACF Pro
 * Block editor JS is loaded via theme enqueue.php
 */

// Set class name from "Advanced" section in Dashboard edit page
// $className = '';
// if( !empty($block['className']) ) {
//     $className .= $block['className'];
// }
?>
<div class="block-toggle-content mb-10 lg:mb-12">
  <ul class="list-none grid grid-cols-1 gap-4 md:gap-6 m-0 p-0">
  <?php
    // Check rows exists.
    if( have_rows('toggle_container') ):

      // Loop through rows.
      while( have_rows('toggle_container') ) : the_row();     

        // Load sub field value.
        // Select which category to use first, then add the category content
        $toggle_title = get_sub_field('title');
        $toggle_content = get_sub_field('content');
        ?>
        <li class="block-toggle-content_list-item bg-white rounded-lg shadow border-[#ebebeb]">
          <div class="title-container relative">
            <h3 class="block-toggle-content_list-item_title text-lg rounded-lg transition text-color-primary-dark m-0 hover:cursor-pointer p-6 pr-14 sm:p-8 sm:pr-16 sm:text-lg lg:p-10 lg:pr-20 lg:text-lg 2xl:p-12 2xl:pr-32 2xl:text-xl"><?php echo $toggle_title; ?></h3>
            <span class="block-toggle-content_list-item_button font-lato duration-300 text-3xl font-normal text-color-primary absolute top-1/2 -translate-y-1/2 right-[20px] sm:right-[30px] lg:right-[40px] 2xl:right-[55px]"></span>
          </div>
          <div class="block-toggle-content_list-item_content bg-white rounded-br-lg rounded-bl-lg font-lato overflow-hidden duration-300 max-h-0">
            <?php echo $toggle_content; ?>
          </div>
          
        </li>
          
      <?php
      // End loop.
      endwhile;
    // No value.
    else :
      // Do something...
      echo "Switch to Edit view to add blocks";
    endif;
  ?>
  </ul>
</div>