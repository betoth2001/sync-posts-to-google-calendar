<?php
/**
 * Unit tests for Foo
 *
 * @package      betoth2001\sync-posts-to-google-calendar\Tests\Unit
 * @author       Gary Jones
 * @copyright    2017 Gamajo
 * @license      GPL-2.0+
 */

declare( strict_types = 1 );

namespace betoth2001\sync-posts-to-google-calendar\Tests\Unit;

use betoth2001\sync-posts-to-google-calendar\Foo as Testee;
use betoth2001\sync-posts-to-google-calendar\Tests\TestCase;

/**
 * Foo test case.
 */
class FooTest extends TestCase {

	/**
	 * A single example test.
	 */
	public function test_sample() {
		// Replace this with some actual testing code.
		static::assertTrue( ( new Testee() )->is_true() );
	}

	/**
	 * A single example test.
	 */
	public function test_foo() {
		// Replace this with some actual testing code.
		static::assertFalse( false );
	}

	/**
	 * A single example test.
	 */
	public function test_bar() {
		// Replace this with some actual testing code.
		static::assertEquals( 'Foo::bar()', ( new Testee() )->bar() );
	}
}
