<?php
/**
 * Initialise the plugin
 *
 * This file can use syntax from the required level of PHP or later.
 *
 * @package      betoth2001\sync-posts-to-google-calendar
 * @author       Gary Jones
 * @copyright    2017 Gamajo
 * @license      GPL-2.0+
 */

declare( strict_types = 1 );

namespace betoth2001\sync-posts-to-google-calendar;

use BrightNucleus\Config\ConfigFactory;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

if ( ! defined( 'sync-posts-to-google-calendar_DIR' ) ) {
	// phpcs:ignore NeutronStandard.Constants.DisallowDefine.Define
	define( 'sync-posts-to-google-calendar_DIR', plugin_dir_path( __FILE__ ) );
}
if ( ! defined( 'sync-posts-to-google-calendar_URL' ) ) {
	// phpcs:ignore NeutronStandard.Constants.DisallowDefine.Define
	define( 'sync-posts-to-google-calendar_URL', plugin_dir_url( __FILE__ ) );
}

// Load Composer autoloader.
if ( file_exists( __DIR__ . '/vendor/autoload.php' ) ) {
	require_once __DIR__ . '/vendor/autoload.php';
}

// Initialize the plugin.
$GLOBALS['sync-posts-to-google-calendar'] = new Plugin( ConfigFactory::create( __DIR__ . '/config/defaults.php' )->getSubConfig( 'betoth2001\sync-posts-to-google-calendar' ) );
$GLOBALS['sync-posts-to-google-calendar']->run();
