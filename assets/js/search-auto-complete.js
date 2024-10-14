( function ( $ ) {


	$.ajax( {
		url : graf_obj.ajax_url,
		method : 'post',
		dataType : 'json',
		data : {
			action : 'greencode_search_autocomplete',
		},
		success : function ( data ) {

			if ( data.success ) {

				//_table.html( data.text );

				var countries = data.text;
				jQuery('#autocomplete').autocomplete({
				    lookup: countries,
				    onSelect: function (suggestion) {
				        //alert('You selected: ' + suggestion.value + ', ' + suggestion.data);
								jQuery('#id').val(suggestion.data);

				    }
				});
			}

		}

	} );

} )( jQuery );
