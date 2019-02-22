<?php
/**
 * Plugin configuration file
 *
 * @package      betoth2001\sync-posts-to-google-calendar
 * @author       Bryan Toth
 * @copyright    2019
 * @license      MIT
 */

declare( strict_types = 1 );

namespace betoth2001\sync_posts_to_google_calendar;

$sync_posts_to_google_calendar_plugin = [
	'textdomain'    => 'sync-posts-to-google-calendar',
	'languages_dir' => 'languages',
];

$sync_posts_to_google_calendar_settings = [
	'submenu_pages' => [
		[
			'parent_slug'  => 'options-general.php',
			'page_title'   => __( 'Plugin Slug Settings', 'sync-posts-to-google-calendar' ),
			'menu_title'   => __( 'Plugin Slug', 'sync-posts-to-google-calendar' ),
			'capability'   => 'manage_options',
			'menu_slug'    => 'sync-posts-to-google-calendar',
			'view'         => sync_posts_to_google_calendar_DIR . 'views/admin-page.php',
			'dependencies' => [
				'styles'   => [],
				'scripts'  => [
					[
						'handle'    => 'sync-posts-to-google-calendar-js',
						'src'       => sync_posts_to_google_calendar_URL . 'js/admin-page.js',
						'deps'      => [ 'jquery' ],
						'ver'       => '1.2.3',
						'in_footer' => true,
						// phpcs:ignore NeutronStandard.Functions.TypeHint.NoArgumentType -- Mixed type
						'is_needed' => function ( $context ): bool {
							if ( $context ) {
								return false;
							}

							return true;
						},
						'localize'  => [
							'name' => 'sync-posts-to-google-calendarI18n',
							// phpcs:ignore NeutronStandard.Functions.TypeHint.NoArgumentType -- Mixed type
							'data' => function ( $context ): array {
								return [
									'test_localize_data' => 'test_localize_value',
									'context'            => $context,
								];
							},
						],
					],
				],
				'handlers' => [
					'scripts' => 'BrightNucleus\Dependency\ScriptHandler',
					'styles'  => 'BrightNucleus\Dependency\StyleHandler',
				],
			],
		],
	],
	'settings'      => [
		'setting1' => [
			'option_group'      => 'sync-posts-to-google-calendar',
			'sanitize_callback' => null,
			'sections'          => [
				'section1' => [
					'title'  => __( 'My Section Title', 'sync-posts-to-google-calendar' ),
					'view'   => sync_posts_to_google_calendar_DIR . 'views/section1.php',
					'fields' => [
						'field1' => [
							'title' => __( 'My Field Title', 'sync-posts-to-google-calendar' ),
							'view'  => sync_posts_to_google_calendar_DIR . 'views/field1.php',
						],
					],
				],
			],
		],
	],
];

return [
	'betoth2001' => [
		'sync-posts-to-google-calendar' => [
			'Plugin'   => $sync_posts_to_google_calendar_plugin,
			'Settings' => $sync_posts_to_google_calendar_settings,
		],
	],
];
