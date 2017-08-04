<?php
/**
 * Plugin Name:      WP Rocket Disable Cache for Members
 * Plugin URI:       https://github.com/pcfreak30/rocket-disable-cache-members
 * Description:       Unofficial WP-Rocket addon to disable cache from being saved for members, but still be enabled
 * Version:           0.1.0
 * Author:            Derrick Hammer
 * Author URI:        https://www.derrickhammer.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       rocket-disable-cache-members
 */

function disable_wp_rocket_cache_members_init() {
	if ( ! is_admin() && is_user_logged_in() ) {
		add_filter( 'do_rocket_generate_caching_files', '__return_false' );
	}
}


add_action( 'init', 'disable_wp_rocket_cache_members_init' );