<?php
// Globally set acf/blocks/default_block_version to default API version (version 3) in ACF
function acf_blocks_api_version_number( $version, $block ) {
     return 3;
}
add_filter( 'acf/blocks/default_block_version', 'acf_blocks_api_version_number', 10, 2 );