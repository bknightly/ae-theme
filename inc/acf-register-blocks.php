<?php
add_action('acf/init', 'my_acf_init_block_types');
function my_acf_init_block_types() {
	// Check function exists.
	if ( function_exists('acf_register_block_type') ) {
	// register custom blocks
    require get_template_directory() . '/blocks/container/register-block.php';
	require get_template_directory() . '/blocks/featured-content/register-block.php';
    require get_template_directory() . '/blocks/title/register-block.php';
	require get_template_directory() . '/blocks/cards/register-block.php';
	require get_template_directory() . '/blocks/supported-brands/register-block.php';
	require get_template_directory() . '/blocks/post-excerpt/register-block.php';
	require get_template_directory() . '/blocks/modal/register-block.php';
	require get_template_directory() . '/blocks/toggle-content/register-block.php';
	}
}