<?php
 
/*
Plugin Name: Lotos Author Fields
Plugin URI: http://excellentdynamics.biz
Description: Adds additional meta fields for User Profile and link on author page in widget "Recent Comments"
Author: ExcellentDynamics
Version: 1.9
Author URI: http://excellentdynamics.biz
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/

/**
 *  Adds Author Social Links for User Profile
 */
function lotos_author_social_links()
{
	$contactmethods              = array();
	$contactmethods['twitter']   = 'Twitter Username';
	$contactmethods['facebook']  = 'Facebook Username';
	$contactmethods['google']    = 'Google Plus Username';
	$contactmethods['tumblr']    = 'Tumblr Username';
	$contactmethods['instagram'] = 'Instagram Username';
	$contactmethods['pinterest'] = 'Pinterest Username';
	return $contactmethods;
}
add_filter( 'user_contactmethods', 'lotos_author_social_links' );