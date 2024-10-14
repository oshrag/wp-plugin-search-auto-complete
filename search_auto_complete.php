<?php
/**
 * Plugin Name: Search Auto Complete
 * Plugin URI: http://www.greencode.co.il
 * Description: search for tzuf-books
 * Version: 1.0.0
 * Author: oshra greenblat
 * Author URI: http://www.greencode.co.il
 * License: GPL3.0+
 *
 * @package    greencode\sac
 * @subpackage Search_Auto_Complete
 * @author     Oshra Greenblat <oshra@greencode.co.il>
 * @link       https://www.greencode.co.il
 * @version    1.0.0
 */

namespace oshra\Search_Auto_Complete;

// Exit if access directly.
if ( ! defined( 'ABSPATH' ) ) {
	die( 'Cheating huh?' );
}

// Register plugin constants.
define( 'GREENCODE_SAC_PATH', plugin_dir_path( __FILE__ ) );
define( 'GREENCODE_SAC_URL', plugin_dir_url( __FILE__ ) );




// Plugin files.
 require_once GREENCODE_SAC_PATH . 'core/class-plugin.php';
 require_once GREENCODE_SAC_PATH . 'core/class-shortcodes.php';
 require_once GREENCODE_SAC_PATH . 'core/class-search-auto-complete.php';
 require_once GREENCODE_SAC_PATH . 'core/class-ajax.php';



/**
 * Plugin activation method.
 */
function search_auto_complete_activation() {


}

register_activation_hook( __FILE__, __NAMESPACE__ . '\search_auto_complete_activation' );


/**
 * Plugin deactivation method.
 */
function search_auto_complete_deactivation() {

	global $wpdb;


	//$wpdb->query( "DROP TABLE IF EXISTS {$wpdb->prefix}post_rating;" );


}

register_deactivation_hook( __FILE__, __NAMESPACE__ . '\search_auto_complete_deactivation' );
