<?php
/**
 * Plugin Name
 *
 * This file should only use syntax available in PHP 5.2.4 or later.
 *
 * @package      betoth2001\sync-posts-to-google-calendar
 * @author       Gary Jones
 * @copyright    2017 Gamajo
 * @license      GPL-2.0-or-later
 *
 * @wordpress-plugin
 * Plugin Name:       Plugin Boilerplate
 * Plugin URI:        https://github.com/garyjones/...
 * Description:       ...
 * Version:           0.1.0
 * Author:            Gary Jones
 * Author URI:        https://gamajo.com
 * Text Domain:       sync-posts-to-google-calendar
 * License:           GPL-2.0-or-later
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * GitHub Plugin URI: https://github.com/garyjones/...
 * Requires PHP:      7.1
 * Requires WP:       4.7
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

if ( version_compare( PHP_VERSION, '7.1', '<' ) ) {
	add_action( 'plugins_loaded', 'sync-posts-to-google-calendar_init_deactivation' );

	/**
	 * Initialise deactivation functions.
	 */
	function sync-posts-to-google-calendar_init_deactivation() {
		if ( current_user_can( 'activate_plugins' ) ) {
			add_action( 'admin_init', 'sync-posts-to-google-calendar_deactivate' );
			add_action( 'admin_notices', 'sync-posts-to-google-calendar_deactivation_notice' );
		}
	}

	/**
	 * Deactivate the plugin.
	 */
	function sync-posts-to-google-calendar_deactivate() {
		deactivate_plugins( plugin_basename( __FILE__ ) );
	}

	/**
	 * Show deactivation admin notice.
	 */
	function sync-posts-to-google-calendar_deactivation_notice() {
		$notice = sprintf(
			// Translators: 1: Required PHP version, 2: Current PHP version.
			'<strong>Plugin Boilerplate</strong> requires PHP %1$s to run. This site uses %2$s, so the plugin has been <strong>deactivated</strong>.',
			'7.1',
			PHP_VERSION
		);
		?>
		<div class="updated"><p><?php echo wp_kses_post( $notice ); ?></p></div>
		<?php
		// phpcs:ignore WordPress.Security.NonceVerification.Recommended
		if ( isset( $_GET['activate'] ) ) {
			unset( $_GET['activate'] );
		}
	}

	return false;
}

/**
 * Load plugin initialisation file.
 */
require plugin_dir_path( __FILE__ ) . '/init.php';
