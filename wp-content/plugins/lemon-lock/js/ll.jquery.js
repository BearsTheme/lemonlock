/**
 * Lemon Lock
 * Author: BEARS Themes
 * Author URI: http://themebears.com
 * Version: 1.0.0
 */

! ( function( $ ) {
	"use strict";

	$.lemonLock = function( options ) {
		this.options = this.opts( options );
		this.isCommand = false;
		var self = this;

		/* Check keydown */
		$( this.options.target ).on( 'keydown', function( e ) {
			var key = e.charCode || e.keyCode;
			console.log( key );
			if( self.options.lock.debug && key == 123  ) {
				e.preventDefault();

				/* call popup */
        		self.popupHandle();
			}

			/* Lock Ctrl */
			self.disableCtrlKeyCombination( e );
		} )

		/* Check keyup */
		$( this.options.target ).on( 'keyup', function( e ) {
			var key = e.charCode || e.keyCode;

			if( self.isCommand == true && key == 224 )
				self.isCommand = false;
		} )

		/* copy */
		if( self.options.lock.copy == true )
			self.lockCopy();

		/* right mouse */
		if( self.options.lock.rightMouse == true )
			self.rightMouse();
	};

	/* F12 - Debug */
	$.lemonLock.prototype.lockDebug = function( ev ) {
		ev.preventDefault();
		
		/* call popup */
        this.popupHandle();
	}

	$.lemonLock.prototype.disableCtrlKeyCombination = function( e ) {
		var	key = '', 
			isCtrl = '',
			key = e.charCode || e.keyCode;

		/* Command + U */
		if( this.isCommand == true && key == 85 ) {
			e.preventDefault();
			this.popupHandle();
		}

		/* Command + J */
		if( this.isCommand == true && key == 74 ) {
			e.preventDefault();
			this.popupHandle();
		}

		if( window.event ) {
		   	if( window.event.ctrlKey ) isCtrl = true;
	     	else isCtrl = false;
	  	} else {
	   		if( e.ctrlKey ) isCtrl = true;
	   		else isCtrl = false;
  		}

  		if( key == 224 )
  			this.isCommand = true;

	  	if( isCtrl ) {
	  		e.preventDefault();

	  		/* call popup */
    		this.popupHandle();
  		}
		
		return true;
	}

	/* Cut - Copy */
	$.lemonLock.prototype.lockCopy = function() {
		var self = this;
		$( this.options.target ).on( 'cut copy', function( e ){
	        e.preventDefault();

	        /* call popup */
	        self.popupHandle();
	    } );
	}

	/* rightMouse */
	$.lemonLock.prototype.rightMouse = function() {
		var self = this;
		$( this.options.target ).on( 'contextmenu', function( e ){
	        e.preventDefault();

	        /* call popup */
	        self.popupHandle();
	    } );
	}

	$.lemonLock.prototype.popupHandle = function() {
		if( this.options.popup.openWhenLock != true ) return;
		/* Clear */
		$( '.ll-popup-wrap' ).remove();

		this.popup = $( '<div>', {
			class 	: 'll-popup-wrap',
			html 	: '<div class="ll-popup-inner"><div class="ll-popup-body">'+ this.options.popup.content +'</div></div>'
		} )

		var self = this;
		/* Close popup */
		$( 'html' ).on( 'click', function( e ) {
			if( $( e.target ).hasClass( 'll-popup-wrap' ) ) 
				self.popup.remove();
		} )

		$( 'html' ).append( this.popup );

		this.popupBody = this.popup.find( '.ll-popup-body' );

		/* START Animation */
		dynamics.css( this.popupBody[0], { 
			translateY: 200
		} )

		dynamics.animate( this.popupBody[0], { 
			translateY: 0 
		}, { 
			type: dynamics.spring, 
			duration: 908, frequency: 516, friction: 341, anticipationStrength: 129
		} )
		/* END Animation */
	}

	$.lemonLock.prototype.opts = function( options ) {
		return $.extend( {
			target 	: 'html',
			popup 	: {
				openWhenLock: false,
				content 	: '',
			},
			lock 	: {
				copy 		: true,
				rightMouse	: true,
				debug		: true,
			}
		}, options );
	}
} )( jQuery )