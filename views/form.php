<?php
namespace oshra\Search_Auto_Complete;

//
// $lotteries = get_terms( array(
//     'taxonomy' => Plugin::TAX_SLUG,
//     'hide_empty' => false,
// ) );
//
// $prices = get_terms( array(
//     'taxonomy' => Plugin::TAX_SLUG_PRICE,
//     'hide_empty' => false,
// ) );
//
// $numRooms = get_terms( array(
//     'taxonomy' => Plugin::TAX_SLUG_N_ROOMS,
//     'hide_empty' => false,
// ) );


?>

<div class="apartments_filter_form_wrapper">
	<form action="" method="post" id="sac">

		<input type="hidden" name="id" id="id">

		<!-- <label for="book">הקלד שם ספר</label> -->

    <input type="text" name="book" id="autocomplete" placeholder="הקלד שם הספר / שם המחבר"/>

		<button type="submit" name="search_now" id="search_now" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">	</button>


	</form>
</div>


<!-- Trigger the modal with a button -->
  <!-- <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button> -->
<!-- Modal -->
 <div class="modal fade" id="myModal" role="dialog">
	 <div class="modal-dialog">

		 <!-- Modal content-->
		 <div class="modal-content">
			 <div class="modal-header">
				 <button type="button" class="close" data-dismiss="modal">&times;</button>
				 <p id="modal-content-cat">category.</p>
				 <!-- <h4 class="modal-title">Modal Header</h4> -->
			 </div>
			 <div class="modal-body">

				 <img id="modal-content-img" src="">
				 <div class="delimeter"></div>
				 <p id="modal-content-name">Some text in the modal.</p>
				 <p id="modal-content-excerpt">Some text in the modal.</p>
				 <!-- <p id="modal-content-id">Some text in the modal.</p> -->


			 </div>
			 <!-- <div class="modal-footer"> -->
				 <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
			 <!-- </div> -->
		 </div>

	 </div>
 </div>
