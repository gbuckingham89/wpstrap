<?php
/**
 * Replace options in MCE editor formats drop down menu
 */
function wpstrap_mce_formats($init) {
	$init['theme_advanced_blockformats'] = 'p,h1,h2,h3,h4,h5,h6,div';
	return $init;
}
add_filter( 'tiny_mce_before_init', 'wpstrap_mce_formats' );

?>