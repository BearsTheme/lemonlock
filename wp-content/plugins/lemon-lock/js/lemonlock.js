! ( function( $ ) {

	/* DOM ready */
	$( function() {

		/* Options */
		var opts = {
			target 	: 'html',
			popup 	: {
				openWhenLock: lockAdminObj.lemonlockControladv,
				content 	: lockAdminObj.lemonlockPopupadv,
			},
			lock 	: {
				copy 		: lockAdminObj.lemonlockCopy,
				rightMouse	: lockAdminObj.lemonlockRightmouse,
				debug		: lockAdminObj.lemonlockDebug,
			}
		};

		/* Use lemonLock */
		new $.lemonLock( opts )
	} )
} )( jQuery )