<?php 
function add_specific_menu_atts( $atts, $item, $args ) {
  $atts['data-micromodal-trigger'] = $item->attr_title;
return $atts;
}
add_filter( 'nav_menu_link_attributes', 'add_specific_menu_atts', 10, 3 );