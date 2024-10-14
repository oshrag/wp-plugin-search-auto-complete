<?php
/**
 * Likes plugin file.
 *
 * @package    greencode\sac
 * @subpackage AJAX
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
 * Class AJAX
 *
 * @package greencode\sac
 */
class AJAX {

	/**
	 * AJAX constructor.
	 */
	public function __construct() {



		add_action( 'wp_ajax_greencode_search_autocomplete', [ $this, 'search_autocomplete' ] );
		add_action( 'wp_ajax_nopriv_greencode_search_autocomplete', [ $this, 'search_autocomplete' ] );

		add_action( 'wp_ajax_greencode_getbook', [ $this, 'getbook' ] );
		add_action( 'wp_ajax_nopriv_greencode_getbook', [ $this, 'getbook' ] );

	}



/**
 * filter.
 */

public function search_autocomplete() {



	$apa = SearchAutoComplete::get_books( $settings );



		$response = [
			'success' => true,
			'text'    => $apa ,
		];



	echo json_encode( $response );

	exit;

	}




	public function getbook(  ) {


		$post_id = (int) sanitize_text_field( $_REQUEST['post_id'] );

		$details = SearchAutoComplete::get_book_details( $post_id );;



			$response = [
				'success' => true,
				'name'    => $details['name'] ,
				'id'    => $details['id'] ,
				'excerpt'    => $details['excerpt'] ,
				'img_url'    => $details['img_url'] ,
				'cat'    => $details['cat'] ,
			];



		echo json_encode( $response );

		exit;

		}


}









// Init class.
new AJAX();
