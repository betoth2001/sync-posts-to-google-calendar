<?php
/**
 * PHPUnit bootstrap
 *
 * @package      betoth2001\sync_posts_to_google_calendar\Tests
 * @author       Bryan Toth
 * @copyright    2019
 * @license      MIT
 */

declare( strict_types = 1 );

namespace betoth2001\sync_posts_to_google_calendar\Tests;

// Check for a `--testsuite integration` arg when calling phpunit, and use it to conditionally load up WordPress.
$sync_posts_to_google_calendar_argv = $GLOBALS['argv'];
$sync_posts_to_google_calendar_key  = (int) array_search( '--testsuite', $sync_posts_to_google_calendar_argv, true );

if ( $sync_posts_to_google_calendar_key && 'integration' === $sync_posts_to_google_calendar_argv[ $sync_posts_to_google_calendar_key + 1 ] ) {
	$sync_posts_to_google_calendar_tests_dir = getenv( 'WP_TESTS_DIR' );

	if ( ! $sync_posts_to_google_calendar_tests_dir ) {
		$sync_posts_to_google_calendar_tests_dir = '/tmp/wordpress-tests-lib';
	}

	// Give access to tests_add_filter() function.
	require_once $sync_posts_to_google_calendar_tests_dir . '/includes/functions.php';

	/**
	 * Manually load the plugin being tested.
	 */
	\tests_add_filter(
		'muplugins_loaded',
		function () {
			require dirname( __DIR__ ) . '/sync-posts-to-google-calendar.php';
		}
	);

	// Start up the WP testing environment.
	require $sync_posts_to_google_calendar_tests_dir . '/includes/bootstrap.php';
}
