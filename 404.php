<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package AE_Theme
 */

get_header(); ?>
<main id="body">
	<?php get_template_part( 'template-parts/title', '404' ); ?>
	<div class="container mx-auto -translate-y-8 lg:-translate-y-12">
		<div id="content-page" class="text-center bg-white p-7 sm:p-8 lg:p-16 rounded-xl shadow">
			<h2 class="page-title text-2xl mb-8"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'ae-theme' ); ?></h2>
			<p class="mb-8"><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try a search?', 'ae-theme' ); ?></p>
			<div class="w-full md:w-1/2 xl:w-1/3 mx-auto">
				<?php get_search_form(); ?>
			</div>
		</div>
	</div>
</main><!-- #main -->

<?php
get_sidebar();
get_footer();