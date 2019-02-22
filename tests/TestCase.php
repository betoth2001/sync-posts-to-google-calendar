<?php
/**
 * Base unit test case
 *
 * @package      betoth2001\sync-posts-to-google-calendar\Tests
 * @author       Gary Jones
 * @copyright    2017 Gamajo
 * @license      GPL-2.0+
 */

declare( strict_types = 1 );

namespace betoth2001\sync-posts-to-google-calendar\Tests;

use Brain\Monkey;
use Mockery\Adapter\Phpunit\MockeryPHPUnitIntegration;
use PHPUnit\Framework\TestCase as PHPUnitTestCase;

/**
 * Abstract base class for all test case implementations.
 *
 * @package betoth2001\sync-posts-to-google-calendar\Tests
 * @since   1.0.0
 */
abstract class TestCase extends PHPUnitTestCase {
	use MockeryPHPUnitIntegration;

	/**
	 * Prepares the test environment before each test.
	 *
	 * @since 1.0.0
	 *
	 * @return void
	 */
	protected function setUp(): void {
		parent::setUp();
		Monkey\setUp();
	}

	/**
	 * Cleans up the test environment after each test.
	 *
	 * @since 1.0.0
	 *
	 * @return void
	 */
	protected function tearDown(): void {
		Monkey\tearDown();
		parent::tearDown();
	}
}
