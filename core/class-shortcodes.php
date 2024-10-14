<?php
/**
 * Plugin shortcodes.
 *
 * @package    greencode\sac
 * @subpackage Shortcodes
 * @author     Oshra Greenblat <oshra@greencode.co.il>
 * @link       https://www.greencode.co.il
 * @version    1.0.0

 */

namespace oshra\Search_Auto_Complete;

// Exit if access directly.
if ( ! defined( 'ABSPATH' ) ) {
	die( 'Cheating huh?' );
}


/**
 * Class Shortcodes
 *
 * @package greencode\sac
 */
class Shortcodes {

	/**
	 * Shortcodes constructor.
	 */
	public function __construct() {

		add_shortcode( 'search_auto_complete', [ $this, 'search_auto_complete' ] );

	}


	/* ------------------------------------------ */


	/**
	 * Print post likes shortcode button.
	 *
	 * @param array $atts shortcode attributes.
	 *
	 * @return string
	 */
	public function search_auto_complete( $atts ) {

		// Defaults fallback.
		$atts = shortcode_atts( [
			'show_count' => true,
		], $atts );



		// Include template.
		ob_start();


		include GREENCODE_SAC_PATH . 'views/form.php';
		

		return ob_get_clean();

	}

}

// Init class.
new Shortcodes();
