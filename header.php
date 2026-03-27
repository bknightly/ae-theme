<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package AE_Theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<?php // require('inc/google-analytics.php'); ?>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri();?>/images/alterations-express-favicon.ico">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
	<style>
		<?php require( get_template_directory() . '/assets/dist/css/style.min.php'); ?>
		<?php 
			if ( has_block( 'acf/featured-content' ) ) { require( get_template_directory() . '/blocks/featured-content/glide/glide-fade.min.php'); } 
			if ( has_block( 'acf/toggle-content' ) ) { include( get_template_directory() . '/blocks/toggle-content/assets/toggle-content.min.php'); }
		?>
	</style>
	<?php wp_head(); ?>
</head>

<body <?php body_class( $class = 'bg-gradient-to-b from-gray-50 to-gray-200 bg-no-repeat min-h-screen print:bg-none'); ?>>

<div id="header" class="w-full top-0 left-0 bg-white lg:bg-white/95 z-[9999]">
	<div class="container mx-auto flex flex-row items-center justify-between px-6 pl-4 lg:pl-6">
		<?php
		the_custom_logo();
		if ( is_front_page() ) :
			?>
			<h1 class="site-title hidden text-color-secondary-dark text-lg my-4"><a class="text-color-secondary-dark" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">Header</a></h1>
			<?php
		else :
			?>
			<h1 class="site-title hidden text-color-secondary-dark text-lg my-4"><a class="text-color-secondary-dark" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php
		endif; ?>
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
			<?php include('inc/ae-logo.php'); ?>
		</a>
		<nav id="header-nav" class="header-nav">
			<h1 class="hidden">Navigation</h1>
			<a data-micromodal-trigger="modal-call-us" class="absolute top-[28px] right-[60px] sm:right-[60px] xl:hidden">
				<svg class="w-6 h-6 fill-slate-400" enable-background="new 0 0 20 32" version="1.1" viewBox="0 0 20 32" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
					<path d="m17 0h-14c-1.7 0-3 1.4-3 3v26c0 1.6 1.3 3 3 3h14c1.6 0 3-1.4 3-3v-26c0-1.6-1.4-3-3-3zm-11 1.5h8v1h-8v-1zm4 28.5c-1.1 0-2-0.9-2-2s0.9-2 2-2 2 0.9 2 2-0.9 2-2 2zm8-6h-16v-20h16v20z"/>
				</svg>
			</a>
			<button id="menu-toggle" class="menu-toggle transition-opacity duration-300 hover:opacity-50">
				<span></span>
				<span></span>
			</button>
			<div class="header-nav-overlay">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="mx-auto block mt-2 mb-6 xl:hidden">
					<?php include('inc/ae-logo-mobile.php'); ?>
				</a>
				<?php
				wp_nav_menu(
					array(
						'container'       => 'div',
						'container_id'    => 'header-nav-container-mobile',
						'container_class' => 'block xl:hidden',
						'theme_location'  => 'menu-1-mobile',
						'menu_id'         => 'header-nav-list-mobile',
						'menu_class'      => 'header-nav-list',
						'add_li_class'    => 'header-nav-list-item'
					)
				);
				?>
				<?php
				wp_nav_menu(
					array(
						'container'       => 'div',
						'container_id'    => 'header-nav-container-desktop',
						'container_class' => 'hidden xl:block',
						'theme_location'  => 'menu-1',
						'menu_id'         => 'header-nav-list-desktop',
						'menu_class'      => 'header-nav-list',
						'add_li_class'    => 'header-nav-list-item'
					)
				);
				?>
				<ul class="hidden xl:block text-center mb-4 xl:mb-0 xl:ml-3">
					<li class="header-social-links_list-item inline-block ml-4 h-full">
						<button data-micromodal-trigger="modal-call-us" class="h-full flex items-center" title="Call Us">
							<svg class="w-8 h-8 xl:w-6 xl:h-6 fill-white xl:fill-color-primary transition-opacity xl:hover:opacity-70" enable-background="new 0 0 32 32" version="1.1" viewBox="0 0 32 32" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
								<path d="m16 0c-8.8 0-16 7.2-16 16s7.2 16 16 16 16-7.2 16-16-7.2-16-16-16zm4.7 22.3h-9.5c-1 0-1.7-0.9-1.6-1.9l0.4-2.8c0.1-0.5 0.5-1 1-1.1 2.1-0.5 2.6-1.7 2.7-3 0.4-0.1 1-0.1 2.2-0.1s1.8 0.1 2.2 0.1c0.1 1.3 0.6 2.6 2.7 3 0.5 0.1 1 0.6 1 1.1l0.4 2.8c0.3 1-0.5 1.9-1.5 1.9zm1.3-8.2c-2.4-0.3-2.2-1.1-2.2-2.3 0-0.8-1.9-1-3.8-1s-3.8 0.2-3.8 1c0 1.2 0.1 2-2.2 2.3-2 0.3-2.1-0.3-2.1-1.5s3.1-4.3 8.1-4.3 8.1 2 8.1 3.3c0 1.1 0 2.7-2.1 2.5zm-3.9 4.1c0 1.1-0.9 2-2.1 2-1.1 0-2.1-0.9-2.1-2s0.9-2 2.1-2 2.1 0.9 2.1 2z"/>
							</svg>
						</button>
					</li>
				</ul>
				<button id="menu-toggle-close" class="mt-2" aria-controls="primary-menu-close" aria-expanded="false">Close Menu</button>
			</div>
		</nav><!-- #site-navigation -->
	</div>
</div><!-- #header -->
