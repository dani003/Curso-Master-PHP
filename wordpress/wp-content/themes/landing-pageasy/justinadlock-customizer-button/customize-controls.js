( function( api ) {

	// Extends our custom "landing-pageasy" section.
	api.sectionConstructor['landing-pageasy'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );
