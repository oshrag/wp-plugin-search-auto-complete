<?php
/**
 * Main plugin file.
 *
 * @package    greencode\sac
 * @subpackage Plugin
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
 * Class Plugin
 *
 * @package greencode\sac
 */
class Plugin {

	/**
	 * Plugin's instance.
	 *
	 * @var null|Plugin
	 */
	private static $instance = null;

	/**
	 * Portfolio post type slug.
	 *
	 * @var string
	 */
	// const CPT_SLUG = 'apartments';


	/**
	 * Portfolio category taxonomy slug.
	 */
	// const TAX_SLUG = 'lottery';
  // const TAX_SLUG_PRICE = 'price_range';
	// const TAX_SLUG_N_ROOMS = 'num_rooms';
	// const TAX_SLUG_BUILDING = 'building_num';

	/* ------------------------------------------ */


	/**
	 * Plugin constructor.
	 */
	public function __construct() {

		add_action( 'plugins_loaded', [ $this, 'register_i18n' ] );

		add_action( 'wp_enqueue_scripts', [ $this, 'register_plugin_assets' ] );



	}


	/* ------------------------------------------ */


	/**
	 * Allow support for i18n and l10n.
	 */
	public function register_i18n() {

		load_plugin_textdomain( 'search-auto-complete', false, GREENCODE_SAC_PATH . '/languages/' );

	}




	/**
	 * Register plugin CSS & JavaScript files.
	 */
	public function register_plugin_assets() {

		// # CSS
		wp_enqueue_style( 'search-auto-complete-css', GREENCODE_SAC_URL . 'assets/css/search-auto-complete.css', false, false );


		# JavaScript
		wp_enqueue_script( 'autocomplete-js', GREENCODE_SAC_URL . 'assets/js/jquery.autocomplete.js', [ 'jquery' ], false, true );

		wp_enqueue_script( 'search-auto-complete-js', GREENCODE_SAC_URL . 'assets/js/search-auto-complete.js', [ 'jquery' ], false, true );

		wp_enqueue_script( 'search-now-js', GREENCODE_SAC_URL . 'assets/js/search-now.js', [ 'jquery' ], false, true );


		# Localization
		wp_localize_script( 'search-auto-complete-js', 'graf_obj', [
		 	'ajax_url' => admin_url( 'admin-ajax.php' ),
		] );

	}


	/* ------------------------------------------ */


	/**
	 * Retrieves plugin instance in order to implement
	 * Singleton approach.
	 *
	 * @return Plugin|null
	 */
	public static function get_instance() {

		if ( is_null( self::$instance ) ) {

			self::$instance = new self();

		}

		return self::$instance;

	}

}

// Init plugin.
Plugin::get_instance();
