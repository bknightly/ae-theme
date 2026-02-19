<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package AE_Theme
 */

get_header(); ?>
<main id="body">
	<?php get_template_part( 'template-parts/title', 'single' ); ?>
	<div class="container mx-auto">
		<?php
		while ( have_posts() ) :
			the_post();
			get_template_part( 'template-parts/content', 'single' );
		endwhile; // End of the loop.
		?>
	</div>
</main><!-- #main -->

<?php
get_sidebar();
get_footer();