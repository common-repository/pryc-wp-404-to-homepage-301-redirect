<?php
/*
 * Plugin Name: PRyC WP: 404 to Homepage 301 redirect
 * Plugin URI: http://PRyC.pl
 * Description: Redirect any "not found" (404) page to homepage with 301 (SEO) redirect code + Google Analytics (utm_source=404&utm_medium=Redirect&utm_campaign=404)
 * Author: PRyC
 * Author URI: http://PRyC.pl
 * Version: 1.0.4
 * License: GPLv2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/


 
/* CODE: */

if ( ! defined( 'ABSPATH' ) ) exit;

function pryc_wp_404_to_homepage_301_redirect() {

	if(is_404()) {
		wp_redirect( home_url() . '/?utm_source=404&utm_medium=Redirect&utm_campaign=404', 301 );
	}

}
add_filter('template_redirect', 'pryc_wp_404_to_homepage_301_redirect');

/* END */

