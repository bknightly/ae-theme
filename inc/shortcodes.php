<?php

// Three sub sections on home page (after hero section)
// [home-page-sections]
function leh_shortcode_home_page_sections($atts) {  

    $section1_image = get_field('section_1_image');
    $section1_title = get_field('section_1_title');
    $section1_description = get_field('section_1_description');
    $section1_link = get_field('section_1_link');
    if( $section1_link ) : 
        $link1_url = $section1_link['url'];
        $link1_title = $section1_link['title'];
        $link1_target = $section1_link['target'] ? $section1_link['target'] : '_self';
    endif;

    $section2_image = get_field('section_2_image');
    $section2_title = get_field('section_2_title');
    $section2_description = get_field('section_2_description');
    $section2_link = get_field('section_2_link');
    if( $section2_link ) : 
        $link2_url = $section2_link['url'];
        $link2_title = $section2_link['title'];
        $link2_target = $section2_link['target'] ? $section2_link['target'] : '_self';
    endif;

    $section3_image = get_field('section_3_image');
    $section3_title = get_field('section_3_title');
    $section3_description = get_field('section_3_description');
    $section3_link = get_field('section_3_link');
    if( $section1_link ) : 
        $link3_url = $section3_link['url'];
        $link3_title = $section3_link['title'];
        $link3_target = $section3_link['target'] ? $section3_link['target'] : '_self';
    endif;

    $output = '
    <div class="grid grid-cols-1 mb-6 md:mb-10 lg:grid-cols-3 gap-4 md:gap-6 lg:gap-8">
        <div class="bg-white p-7 sm:p-8 md:p-10 lg:p-6 xl:p-8 2xl:p-10 text-center rounded-xl shadow">
            <div class="h-48 sm:h-56 md:h-80 lg:h-40 xl:h-52 rounded-lg overflow-hidden mb-8">
            '.wp_get_attachment_image( $section1_image, 'large', false, ['class' => 'w-full object-cover object-center'] ).'
            </div>
            <h2 class="text-2xl font-bold mb-4 transition-colors hover:text-color-primary">
                <a href="'.esc_url( $link1_url ).'">'.$section1_title.'</a>
            </h2>
            <p>'.$section1_description.'</p>
            <a class="text-lg font-bold py-4 px-5 block rounded-lg mt-6 md:mb-0 text-white transition-all bg-gradient-to-r from-color-primary to-color-primary-dark bg-size-200 bg-pos-0 hover:bg-pos-100" href="'.esc_url( $link1_url ).'" target="'. esc_attr( $link1_target ).'">'.esc_html( $link1_title ).' »</a>
        </div>
        <div class="bg-white p-7 sm:p-8 md:p-10 lg:p-6 xl:p-8 2xl:p-10 text-center rounded-xl shadow">
            <div class="h-48 sm:h-56 md:h-80 lg:h-40 xl:h-52 rounded-lg overflow-hidden mb-8">
            '.wp_get_attachment_image( $section2_image, 'large', false, ['class' => 'w-full object-cover object-center'] ).'
            </div>
            <h2 class="text-2xl font-bold mb-4 transition-colors hover:text-color-primary">
                <a href="'.esc_url( $link2_url ).'">'.$section2_title.'</a>
            </h2>
            <p>'.$section2_description.'</p>
            <a class="text-lg font-bold py-4 px-5 block rounded-lg mt-6 md:mb-0 text-white transition-all bg-gradient-to-r from-color-primary to-color-primary-dark bg-size-200 bg-pos-0 hover:bg-pos-100" href="'.esc_url( $link2_url ).'" target="'. esc_attr( $link2_target ).'">'.esc_html( $link2_title ).' »</a>
        </div>
        <div class="bg-white p-7 sm:p-8 md:p-10 lg:p-6 xl:p-8 2xl:p-10 text-center rounded-xl shadow">
            <div class="h-48 sm:h-56 md:h-80 lg:h-40 xl:h-52 rounded-lg overflow-hidden mb-8">
            '.wp_get_attachment_image( $section3_image, 'large', false, ['class' => 'w-full object-cover object-center'] ).'
            </div>
            <h2 class="text-2xl font-bold mb-4 transition-colors hover:text-color-primary">
                <a href="'.esc_url( $link3_url ).'">'.$section3_title.'</a>
            </h2>
            <p>'.$section3_description.'</p>
            <a class="text-lg font-bold py-4 px-5 block rounded-lg mt-6 md:mb-0 text-white transition-all bg-gradient-to-r from-color-primary to-color-primary-dark bg-size-200 bg-pos-0 hover:bg-pos-100" href="'.esc_url( $link3_url ).'" target="'. esc_attr( $link3_target ).'">'.esc_html( $link3_title ).' »</a>
        </div>
    </div>
    ';
    return $output;
 }
add_shortcode("home-page-sections", "leh_shortcode_home_page_sections");


// Displays most recent blog post on Home page
// [home-page-blog-excerpt]
function leh_shortcode_home_page_blog_excerpt($atts) {
  $featured_post = new WP_Query( array(
    'post_type'      => 'post',
    'posts_per_page' => 1,
    'no_found_rows'  => true,
    'update_post_meta_cache' => false,
    'update_post_term_cache' => false
  ) );

  $output = '';

  if ( $featured_post->have_posts() ) : while ( $featured_post->have_posts() ) : $featured_post->the_post();
    
  $post_image = get_the_post_thumbnail('', '', ['class' => 'w-full h-full object-cover object-center transition-all hover:opacity-70']);
  $post_title = get_the_title();
  $post_link = get_the_permalink();
  $output .= '
    <div class="flex flex-col lg:flex-row lg:flex-wrap bg-white p-7 sm:p-8 md:p-10 lg:p-6 xl:p-8 2xl:p-10 rounded-xl shadow mb-4 md:mb-6 lg:mb-8 last:mb-0">
      <div class="post-image lg:pr-3 xl:pr-5 w-full lg:w-1/2">
        <div class="h-48 sm:h-56 md:h-80 bg-gray-200 block rounded-lg overflow-hidden">
          <a href="'. $post_link .'">
            '. $post_image .'
          </a>
        </div>
      </div>
      <div class="post-copy lg:pl-3 xl:pl-5 w-full lg:w-1/2 flex flex-col justify-center">
        <h3 class="text-2xl font-bold leading-none mt-8 lg:mt-0 transition-colors hover:text-color-primary">
          <a href="'. $post_link .'">
            '. $post_title .'
          </a>
        </h3>
        <p class="mt-6">
          '. excerpt(33) .'
        </p>
        <a class="font-bold py-4 px-5 rounded-lg mt-7 md:mb-0 text-white transition-all bg-gradient-to-r from-color-primary to-color-secondary-dark bg-size-200 bg-pos-0 hover:bg-pos-100" href="'. $post_link .'">Read More »</a>
      </div>
    </div>
  ';
  endwhile; else:  
  endif;
  wp_reset_query();
  if ( $output ) {
    $output_final = '<h2 class="text-2xl text-white text-center mb-6 md:mb-10">From The Blog</h2>' . $output;    
  }
  return $output_final;
}
add_shortcode("home-page-blog-excerpt", "leh_shortcode_home_page_blog_excerpt");


// Grid that lists child service pages
// [service-page-grid]
function leh_shortcode_service_page_grid($atts) {
    $child_pages = new WP_Query( array(
        'post_type'      => 'page',
        'post_parent'    => 14, // 14 = About page
        'posts_per_page' => 99,
        'no_found_rows'  => true,
        'update_post_meta_cache' => false,
        'update_post_term_cache' => false
    ) );

    $output = '';
    
    if ( $child_pages->have_posts() ) : while ( $child_pages->have_posts() ) : $child_pages->the_post();
    
        $temp_thumbnail = get_the_post_thumbnail('', 'large', ['class' => 'grayscale group-hover:grayscale-0']);
        $output .= '
            <li>
              <a class="group w-full h-28 md:h-36 lg:h-full block text-center relative rounded-lg overflow-hidden shadow transition-all duration-300 ease-in-out hover:shadow-lg " href="'. get_the_permalink() .'">
                '.$temp_thumbnail.'
                <div class="transition-all w-full h-full bg-gradient-to-tl from-color-secondary-dark to-color-primary opacity-25 group-hover:opacity-0 absolute top-0 left-0"></div>
                <h3 class="w-3/4 lg:w-3/5 absolute leading-none bg-white/90 text-xl xl:text-2xl pt-6 pb-5 lg:px-2 text-center top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 rounded-lg shadow group-hover:text-color-primary group-hover:shadow-lg">'. get_the_title() .'</h3>
              </a>
            </li>
        ';
           
    endwhile; else:
          
    endif;
    wp_reset_query();

    if ( $output ) {
        $output_final = '<ul class="list-none grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 xl:gap-8 2xl:gap-10 mt-8 mb-10 sm:mt-10 sm:mb-12 lg:mt-12 lg:mb-16">' . $output . '</ul>';    
    }
    return $output_final;
 }
add_shortcode("service-page-grid", "leh_shortcode_service_page_grid");

// Grid that displays contact info on Contact page
// [contact-page-grid]
function leh_shortcode_contact_page_grid($atts) {  
    $phone_number = get_field( "phone_number" );
    $email_address = get_field( "email_address" );
    $address = get_field( "address" );      
    $address_link = get_field("address_link");
    $output = '
        <div class="list-none grid grid-cols-1 md:grid-cols-3 gap-6 xl:gap-8 2xl:gap-10">
            <h2 class="hidden">Phone</h2>
            <a class="font-bold text-lg md:text-base lg:text-xl text-center bg-gradient-to-b from-white to-color-primary/10 border border-slate-300 bg-no-repeat text-color-secondary-dark rounded-lg w-full h-20 lg:h-auto lg:py-10 flex flex-col justify-center transition-colors hover:bg-color-secondary-dark/10 hover:border-slate-300" href="tel:'.$phone_number.'">'. $phone_number .'</a>
            <h2 class="hidden">Email</h2>
            <a class="font-bold text-lg md:text-base lg:text-xl text-center bg-gradient-to-b from-white to-color-primary/10 border border-slate-300 bg-no-repeat text-color-secondary-dark rounded-lg w-full h-20 lg:h-auto lg:py-10 flex flex-col justify-center transition-colors hover:bg-color-secondary-dark/10 hover:border-slate-300" href="mailto:'.$email_address.'">'. $email_address .'</a>
            <h2 class="hidden">Address</h2>
            <a class="font-bold text-lg md:text-base lg:text-xl text-center bg-gradient-to-b from-white to-color-primary/10 border border-slate-300 bg-no-repeat text-color-secondary-dark rounded-lg w-full h-20 lg:h-auto lg:py-10 flex flex-col justify-center transition-colors hover:bg-color-secondary-dark/10 hover:border-slate-300 leading-none" href="'.$address_link.'" target="_blank" rel="noreferrer noopener">'. $address .'</a>
        </div>
    ';
    return $output;
 }
add_shortcode("contact-page-grid", "leh_shortcode_contact_page_grid");