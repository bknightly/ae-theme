<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package AE_Theme
 */

?>
<div class="post-excerpt flex flex-col md:flex-row border-b border-gray-200 mb-8 pb-8 md:mb-12 md:pb-12">
	<div class="post-featured-image h-64 md:h-96 md:w-1/2 mb-8 md:mb-0 md:mr-8 lg:mr-12">
		<a href="<?php the_permalink(); ?>">
			<?php the_post_thumbnail('large',['class' => 'w-full !h-full object-cover object-center rounded-lg transition-opacity hover:opacity-70']); ?>
		</a>
	</div>
	<div class="post-content-excerpt md:w-1/2 flex flex-col justify-center">
		<?php the_title( '<h2 class="text-2xl sm:text-3xl xl:text-4xl mb-3 transition-opacity hover:opacity-50"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); ?>
		<?php
			echo '<p class="text-sm sm:text-base md:text-sm lg:text-base leading-5 sm:leading-6 md:leading-5 lg:leading-6 xl:leading-7">'.excerpt(36).'</p>';
		?>
		<a href="<?php the_permalink(); ?>" class="group inline-block mt-6 mb-0 w-full md:w-3/5">
			<div class="w-full inline-block rounded-lg overflow-hidden relative bg-gradient-to-tl from-gray-200 to-gray-50 border border-gray-200 py-6 transition-all hover:border-transparent hover:shadow-lg">
				<div class="opacity-0 rounded-lg group-hover:opacity-100 transition duration-200 absolute inset-0 h-full w-full bg-gradient-to-br from-color-primary to-color-primary-dark"></div>
				<span class="w-full font-lato font-bold ml-5 md:text-left md:ml-5 text-slate-500 transition-colors duration-300 group-hover:text-white absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 leading-none">Read More »</span>
			</div>
		</a>
	</div>
</div>