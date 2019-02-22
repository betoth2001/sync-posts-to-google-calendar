<?php
/**
 * Integration tests for Foo
 *
 * @package      betoth2001\sync-posts-to-google-calendar\Tests\Integration
 * @author       Gary Jones
 * @copyright    2017 Gamajo
 * @license      GPL-2.0+
 */

declare( strict_types = 1 );

namespace betoth2001\sync-posts-to-google-calendar\Tests\Integration;

use betoth2001\sync-posts-to-google-calendar\Foo as Testee;
use WP_UnitTestCase;

/**
 * Foo test case.
 */
class FooTest extends WP_UnitTestCase {
	/**
	 * A single example test.
	 */
	public function test_foo() {
		// Replace this with some actual integration testing code.
		static::assertTrue( ( new Testee() )->is_true() );
	}
}
