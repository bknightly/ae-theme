<?php
function the_title_trim($content) {
	return '%s';
}
add_filter('private_title_format', 'the_title_trim');
add_filter('protected_title_format', 'the_title_trim');