<?php

// Remove pages from search results
function exclude_pages_from_search( $query ) {
	if ( $query->is_search() && $query->is_main_query() && ! is_admin() ) {
			$query->set( 'post_type', 'post' );
	}
}
add_filter( 'pre_get_posts','exclude_pages_from_search' );