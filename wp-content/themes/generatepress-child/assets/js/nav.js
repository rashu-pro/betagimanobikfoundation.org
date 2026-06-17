( function () {
	var hamburger  = document.getElementById( 'bmf-hamburger' );
	var mobileMenu = document.getElementById( 'bmf-mobile-menu' );
	var header     = document.getElementById( 'bmf-header' );

	// Hamburger toggle
	if ( hamburger && mobileMenu ) {
		hamburger.addEventListener( 'click', function () {
			var isOpen = this.getAttribute( 'aria-expanded' ) === 'true';
			this.setAttribute( 'aria-expanded', isOpen ? 'false' : 'true' );
			mobileMenu.hidden = isOpen;
			this.classList.toggle( 'is-open', ! isOpen );
		} );
	}

	// Close mobile menu on outside click
	document.addEventListener( 'click', function ( e ) {
		if ( ! header || ! mobileMenu || mobileMenu.hidden ) return;
		if ( ! header.contains( e.target ) ) {
			mobileMenu.hidden = true;
			if ( hamburger ) {
				hamburger.setAttribute( 'aria-expanded', 'false' );
				hamburger.classList.remove( 'is-open' );
			}
		}
	} );

	// Deepen shadow on scroll
	if ( header ) {
		window.addEventListener( 'scroll', function () {
			header.classList.toggle( 'is-scrolled', window.scrollY > 10 );
		}, { passive: true } );
	}
} )();
