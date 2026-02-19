<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package AE_Theme
 */

?>
<div id="content-page" class="block-container w-full mx-auto p-6 xl:w-4/5 bg-white sm:p-8 md:p-12 lg:p-16 rounded-xl shadow -translate-y-8 lg:-translate-y-12">
	<?php
	the_content(
		sprintf(
			wp_kses(
				/* translators: %s: Name of current post. Only visible to screen readers */
				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'ae-theme' ),
				array(
					'span' => array(
						'class' => array(),
					),
				)
			),
			wp_kses_post( get_the_title() )
		)
	);

	wp_link_pages(
		array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'ae-theme' ),
			'after'  => '</div>',
		)
	);
	?>
</div>