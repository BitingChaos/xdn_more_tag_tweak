<?php
/*
Plugin Name: XdN More Tag Tweak
Plugin URI: http://xenomorph.net/
Description: This changes the more tag.
Author URI: http://xenomorph.net/
Version: 0.5.0
*/

// ----------

/*

Example usage:

<!--more-->

*/

// ----------

function remove_more_link_scroll( $link ) {
	$link = preg_replace( '|#more-[0-9]+|', '', $link );
	return $link;
}
add_filter( 'the_content_more_link', 'remove_more_link_scroll' );

