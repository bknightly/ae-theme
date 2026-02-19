<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package AE_Theme
 */

?>

<div id="footer" class="text-center pt-9 lg:pt-6 px-12 pb-24 text-white bg-gradient-to-br from-color-primary to-color-secondary/80 print:hidden">
	<h1 class="hidden">Footer</h1>
	<button data-micromodal-trigger="modal-request-support" class="inline-block mx-auto font-lato font-bold text-color-primary bg-white leading-none rounded-full px-10 py-5 mb-6 lg:mt-6 lg:mb-10 transition-opacity hover:opacity-60">Customer Service Form »</button>
	<nav id="site-navigation" class="container mx-auto footer-navigation">
		<h2 class="hidden">Navigation</h2>
		<?php
		wp_nav_menu(
			array(
				'theme_location' => 'menu-2',
				'menu_id'        => 'footer-menu',
				'menu_class'     => 'block mx-auto inline-block list-none mb-8',
				'add_li_class'   => 'mx-5 my-2 inline-block font-lato font-bold text-white transition-colors hover:text-white/60'
			)
		);
		?>
	</nav><!-- #site-navigation -->
	<ul class="flex-grow list-inside text-base mx-auto mb-8">
		<li class="inline-block mx-3">
			<a href="https://us.nextdoor.com/" title="Nextdoor Reviews" rel="noopener" target="_blank">
				<svg class="fill-white/80 hover:fill-white transition-colors w-8 h-8 lg:w-7 lg:h-7" enable-background="new 0 0 128 127" version="1.1" viewBox="0 0 128 127" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
					<path d="m63.5 2c-34 0-61.5 27.5-61.5 61.5s27.5 61.5 61.5 61.5 61.5-27.5 61.5-61.5-27.5-61.5-61.5-61.5zm24.1 83.1h-12.3v-24.4c0-2.5-0.8-5.2-2.6-7-3.1-3.3-8.9-3.1-11.9 0.2-1.7 1.7-2.4 4.2-2.3 6.6 0 8.1-0.1 16.2 0.1 24.4-4.1 0.2-8.2 0.1-12.3 0.1-0.5-7.2-0.3-14.5-0.3-21.7-9.3-2.9-16.6-12-16.1-21.9 4 0.1 8.1 0 12.1 0.1 0.2 4 1.9 8 5.4 10.1 2.4-6 8.4-9.9 14.7-10.8 6.9-1 14.8 0 20 5.1 3.8 3.5 5.4 8.8 5.4 13.8 0.1 8.5 0.1 16.9 0.1 25.4z"/>
				</svg>
			</a>
		</li>
		<li class="inline-block mx-3">
			<button data-micromodal-trigger="modal-call-us" title="Call Us">
				<svg class="fill-white/80 hover:fill-white transition-colors w-8 h-8 lg:w-7 lg:h-7" enable-background="new 0 0 32 32" version="1.1" viewBox="0 0 32 32" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
					<path d="m16 0c-8.8 0-16 7.2-16 16s7.2 16 16 16 16-7.2 16-16-7.2-16-16-16zm4.7 22.3h-9.5c-1 0-1.7-0.9-1.6-1.9l0.4-2.8c0.1-0.5 0.5-1 1-1.1 2.1-0.5 2.6-1.7 2.7-3 0.4-0.1 1-0.1 2.2-0.1s1.8 0.1 2.2 0.1c0.1 1.3 0.6 2.6 2.7 3 0.5 0.1 1 0.6 1 1.1l0.4 2.8c0.3 1-0.5 1.9-1.5 1.9zm1.3-8.2c-2.4-0.3-2.2-1.1-2.2-2.3 0-0.8-1.9-1-3.8-1s-3.8 0.2-3.8 1c0 1.2 0.1 2-2.2 2.3-2 0.3-2.1-0.3-2.1-1.5s3.1-4.3 8.1-4.3 8.1 2 8.1 3.3c0 1.1 0 2.7-2.1 2.5zm-3.9 4.1c0 1.1-0.9 2-2.1 2-1.1 0-2.1-0.9-2.1-2s0.9-2 2.1-2 2.1 0.9 2.1 2z"/>
				</svg>
			</button>
		</li>
	</ul>
	<div class="w-full md:w-4/5 mx-auto text-sm flex flex-col sm:flex-row flew-wrap justify-center opacity-80">
		<div class="w-full sm:w-48 text-center mb-4 sm:mb-0"><?php the_field('store_address', 'option'); ?></div>
		<div class="w-full font-lato sm:w-72 text-center mb-4 sm:mb-0">&copy; Copyright <?php echo date("Y"); ?> &bull; Alterations Express<br>All Rights Reserved.</div>
		<div class="w-full sm:w-48 text-center"><?php the_field('business_hours', 'option'); ?></div>
	</div>
	<?php if ( get_edit_post_link() ) : ?>
		<?php edit_post_link( 'Edit »', '', '', '', 'text-sm border border-white font-nunito_sans text-center text-white px-4 rounded-full py-3 mt-8 inline-block hover:bg-white hover:text-color-primary transition' ); ?>
	<?php endif; ?>
</div><!-- #footer -->

<?php include('template-parts/modal-request-support.php'); ?>
<?php include('template-parts/modal-call-us.php'); ?>
<?php include('template-parts/modal-yelp-reviews.php'); ?>
<?php include('template-parts/modal-google-reviews.php'); ?>
<?php wp_footer(); ?>

</body>
</html>
