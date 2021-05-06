(function( $ ) {

	'use strict';

	$(function() {

		var data = {};
		data.bclwp_plugins_list = 'yes';
		$.ajax({
			url: document.URL,
			cache: false,
			type: "get",
			data: data,
			success: function(response) {

				if( $( response ).find('.bclwp-addons-list').length > 0 ) {

					$('.bclwp-addons-list').replaceWith( $( response ).find('.bclwp-addons-list') );
				}
			}
		});
	});

})( jQuery );
