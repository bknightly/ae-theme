<?php
/* 
 * BLOCK: Post Excerpt
 * List most recent blog posts, selected post count
 * Content: Featured Image, Post title, Post Excerpt, Permalink
*/

// Set class name from "Advanced" section in Dashboard edit page
$classes = '';
if( !empty($block['className']) ) {
    $classes .= sprintf( ' %s', $block['className'] );
}

// Set post type to display in feed
$post_type = get_field('post_type');
// Set amount of posts to display in feed
$post_count = get_field('post_count');
// Set block width (screens <xl are full width)
$block_width = get_field('block_width'); // 100%, 91%, 83%, 80%, 75%, 66%, 60%, 58%, 50%

$post_list = new WP_Query( array(
  'post_type'      => $post_type,
  'posts_per_page' => $post_count,
  'no_found_rows'  => true,
  'update_post_meta_cache' => false,
  'update_post_term_cache' => false
));
?>
<div class="block-post-excerpt mb-8 md:mb-12<?php if ( ! is_admin() ) : ?> last:mb-0<?php endif; ?><?php echo esc_attr($classes); ?>">
  <div class="grid grid-cols-1 mx-auto gap-4 md:gap-6 lg:gap-8 <?php echo $block_width; ?>">
    <?php if ( $post_list->have_posts() ) : while ( $post_list->have_posts() ) : $post_list->the_post(); ?>
    <a href="<?php the_permalink(); ?>" class="group h-full lg:h-72 xl:h-80 2xl:h-96 flex flex-wrap rounded-lg transition shadow hover:shadow-lg bg-white">
      <div class="relative w-full sm:w-1/2 h-60 sm:h-full lg:h-72 xl:h-80 2xl:h-96 rounded-tl-lg rounded-tr-lg sm:rounded-tr-none sm:rounded-bl-lg overflow-hidden">
        <?php the_post_thumbnail('large',['class' => 'w-full !h-full rounded-tl-lg rounded-tr-lg sm:rounded-tr-none sm:rounded-bl-lg object-cover object-center transition-all group-hover:grayscale']); ?>
        <div class="absolute w-full h-full top-0 left-0 rounded-tl-lg rounded-tr-lg sm:rounded-tr-none sm:rounded-bl-lg transition-all duration-300 bg-gradient-to-br from-black/80 to-color-primary opacity-0 group-hover:opacity-90"></div>
        <svg class="absolute duration-500 opacity-0 fill-white top-1/2 left-1/2 -translate-x-1/2 -translate-y-[40%] w-10 group-hover:opacity-100 group-hover:-translate-x-1/2 group-hover:-translate-y-1/2" enable-background="new 0 0 52 52" version="1.1" viewBox="0 0 52 52" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
          <path class="fill-white" d="M1,32v-12h18.9V1h12.1v18.9H51v12H32.1v19H19.9V32H1z"/>
        </svg>
      </div>
      <div class="w-full sm:w-1/2 p-8 xl:p-12 flex flex-col justify-center">
        <h3 class="text-2xl text-color-primary font-bold leading-none mt-0 mb-4 transition-opacity hover:opacity-50"><?php the_title(); ?></h3>
        <p class="text-sm 2xl:text-base"><?php echo excerpt(36); ?></p>
        <div class="w-full rounded-lg overflow-hidden relative bg-gradient-to-tl from-gray-200 to-gray-50 border border-gray-200 py-6 mt-6 mb-0 transition-all hover:border-transparent hover:shadow-lg">
          <div class="opacity-0 rounded-lg group-hover:opacity-100 transition duration-200 absolute inset-0 h-full w-full bg-gradient-to-br from-color-primary to-color-primary-dark"></div>
          <span class="w-full font-lato font-bold ml-5 text-slate-500 transition-colors duration-300 group-hover:text-white absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 leading-none">Read More »</span>
        </div>
      </div>
    </a>
    <?php endwhile; endif; wp_reset_postdata(); ?>
  </div>
</div>