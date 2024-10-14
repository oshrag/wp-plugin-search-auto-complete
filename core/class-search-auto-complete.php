<?php
/**
 * Likes plugin file.
 *
 * @package    greencode\sac
 * @subpackage Filter
 * @author     Oshra Greenblat <oshra@greencode.co.il>
 * @link        https://www.greencode.co.il
 * @version    1.0.0
 */



namespace oshra\Search_Auto_Complete;


use WP_Query;



// Exit if access directly.
if ( ! defined( 'ABSPATH' ) ) {
	die( 'Cheating huh?' );
}


/**
 * Class Likes
 *
 * @package dorzki\Prog\Post_Likes
 */
class SearchAutoComplete {





	/**
	 * prepare book list
	 *
	 * @param
	 *
	 * @return array
	 */
	public function get_books( ) {


	$books = [];
	$args = array(
	'post_type' => 'post',
	'posts_per_page' => -1 
	 );

	// The Query
	$the_query = new WP_Query( $args );

	// The Loop
	if ( $the_query->have_posts() ) {

			while ( $the_query->have_posts() ) {
					$the_query->the_post();

          $book['value'] = get_the_title(). ' | ' .get_the_excerpt();
					$book['data'] = get_the_ID();

					$books[] =  $book;
			}

	} else {
			// no posts found
	}
	/* Restore original Post Data */
	wp_reset_postdata();


	return $books;

}



/**
 * prepare book list
 *
 * @param
 *
 * @return array
 */
public function get_book_details( $post_id ) {


$deatils = [];
$args = array(
'p' => $post_id
 );


// The Query
$the_query = new WP_Query( $args );

// The Loop
if ( $the_query->have_posts() ) {

		while ( $the_query->have_posts() ) {
				$the_query->the_post();

				$details['id'] =  $post_id;
				$details['name'] =  get_the_title();
				$details['excerpt'] = get_the_excerpt();
				$details['img_url'] = get_the_post_thumbnail_url();
				$categories = get_the_category($post_id);
				// $details['cat'] = esc_html( $categories[0]->name );
        $cat_list ='';
				foreach( $categories as $category ) {
				    $cat_list.= $category->name . ', ';
				}

        $details['cat'] =  substr($cat_list, 0, -2);

		}

} else {
		// no posts found
}
/* Restore original Post Data */
wp_reset_postdata();


return $details;

}




}
