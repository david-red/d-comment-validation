jQuery( function( $ )
{
	$( '#commentform' ).validate(
	{
		rules: {
			author: 'required',
			email: {
				required: true,
				email: true
			},
			comment: 'required'
		}
	} );
} );