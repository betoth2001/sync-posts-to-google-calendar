<?php
/**
 * Admin page view
 *
 * @package      betoth2001\sync-posts-to-google-calendar
 * @author       Gary Jones
 * @copyright    2017 Gamajo
 * @license      GPL-2.0+
 */

declare( strict_types = 1 );
?>
<div class="wrap">
	<form method="post" action="options.php">

		<?php settings_fields( 'sync-posts-to-google-calendar' ); /* Name of settings field in table. */ ?>

		<h1><?php echo esc_html( get_admin_page_title() ); ?></h1>

		<?php
		do_settings_sections( 'sync-posts-to-google-calendar' );
		?>

		<div class="bottom-buttons">
			<?php
			submit_button( __( 'Save Changes', 'sync-posts-to-google-calendar' ), 'primary', 'submit', false );
			?>
		</div>
	</form>
</div>
