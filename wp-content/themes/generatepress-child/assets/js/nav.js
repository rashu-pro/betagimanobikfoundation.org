( function () {
	var hamburger  = document.getElementById( 'bmf-hamburger' );
	var mobileMenu = document.getElementById( 'bmf-mobile-menu' );
	var iconOpen   = document.getElementById( 'bmf-icon-open' );
	var iconClose  = document.getElementById( 'bmf-icon-close' );
	var header     = document.getElementById( 'bmf-header' );

	function setMenuOpen( open ) {
		mobileMenu.hidden = ! open;
		hamburger.setAttribute( 'aria-expanded', open ? 'true' : 'false' );
		if ( iconOpen )  iconOpen.classList.toggle( 'hidden', open );
		if ( iconClose ) iconClose.classList.toggle( 'hidden', ! open );
	}

	// Hamburger toggle
	if ( hamburger && mobileMenu ) {
		hamburger.addEventListener( 'click', function () {
			var isOpen = this.getAttribute( 'aria-expanded' ) === 'true';
			setMenuOpen( ! isOpen );
		} );
	}

	// Close on outside click
	document.addEventListener( 'click', function ( e ) {
		if ( ! header || ! mobileMenu || mobileMenu.hidden ) return;
		if ( ! header.contains( e.target ) ) {
			setMenuOpen( false );
		}
	} );

	// Deepen shadow on scroll
	if ( header ) {
		window.addEventListener( 'scroll', function () {
			header.classList.toggle( 'is-scrolled', window.scrollY > 10 );
		}, { passive: true } );
	}
} )();
