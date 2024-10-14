
( function ( $ ) {

  jQuery('#search_now').on("click", function() {


	$.ajax( {
		url : graf_obj.ajax_url,
		method : 'post',
		dataType : 'json',
		data : {
			action : 'greencode_getbook',
      post_id : jQuery('#id').val(),
		},
		success : function ( data ) {

			if ( data.success ) {

				//_table.html( data.text );


        jQuery('#modal-content-name').html(data.name);
        jQuery('#modal-content-excerpt').html(data.excerpt);
        // jQuery('#modal-content-id').html(data.id);
        jQuery('#modal-content-cat').html(data.cat);
        jQuery('#modal-content-img').attr("src", data.img_url);

			}

		}

	} );
} );

} )( jQuery );

//
// jQuery('#search_now').on("click", function() {
//
//   console.log( jQuery('#autocomplete').val() );
//
//   $.ajax( {
//     url : graf_obj.ajax_url,
//     method : 'post',
//     dataType : 'json',
//     data : {
//       action : 'greencode_search_autocomplete',
//     },
//     success : function ( data ) {
//
//       if ( data.success ) {
//
//         //_table.html( data.text );
//
//
//         //var countries = data.text;
//         // jQuery('#modal-content-p').html(data.text)
//         jQuery('#modal-content-p').html("דגכדג");
//
//
//       }
//
//     }
//
//   } );
//
//
//
// });
