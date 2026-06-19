<?php
/**
 * Template part: Home page — গ্যালারি (Gallery) section
 *
 * Displays up to 6 images from bmf_gallery_images with a vanilla JS lightbox.
 *
 * @package generatepress-child
 */

$raw_images = rwmb_meta( 'bmf_gallery_images', [ 'size' => 'large' ] );

if ( empty( $raw_images ) ) {
	return;
}

// Cap at 6, re-index, and enrich with full-size URL for lightbox.
$images = [];
foreach ( array_slice( $raw_images, 0, 6, true ) as $id => $img ) {
	$images[] = [
		'thumb' => $img['url'],
		'full'  => wp_get_attachment_image_url( $id, 'full' ) ?: $img['url'],
		'alt'   => ! empty( $img['alt'] ) ? $img['alt'] : $img['title'],
	];
}

$gallery_link = rwmb_meta( 'bmf_gallery_link' );
?>

<section class="py-20 bg-slate-50">
	<div class="container mx-auto px-4">

		<div class="text-center mb-16">
			<h2 class="text-3xl font-bold text-primary-dark mb-4">
				<?php esc_html_e( 'গ্যালারি', 'generatepress-child' ); ?>
			</h2>
			<div class="w-16 h-1 bg-primary mx-auto"></div>
		</div>

		<div class="grid grid-cols-2 md:grid-cols-3 gap-4">
			<?php foreach ( $images as $index => $image ) : ?>
			<button
				type="button"
				class="bmf-gallery-item group relative block w-full overflow-hidden rounded-xl shadow-md focus:outline-none focus-visible:ring-2 focus-visible:ring-primary"
				data-index="<?php echo esc_attr( $index ); ?>"
				data-full="<?php echo esc_url( $image['full'] ); ?>"
				data-alt="<?php echo esc_attr( $image['alt'] ); ?>"
				aria-label="<?php echo esc_attr( $image['alt'] ) ?: esc_attr__( 'ছবি দেখুন', 'generatepress-child' ); ?>"
			>
				<img
					src="<?php echo esc_url( $image['thumb'] ); ?>"
					alt="<?php echo esc_attr( $image['alt'] ); ?>"
					class="w-full h-64 object-contain transition duration-300 bg-slate-100"
				/>
				<div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center rounded-xl">
					<svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8V4m0 0h4M4 4l5 5m11-1V4m0 0h-4m4 0l-5 5M4 16v4m0 0h4m-4 0l5-5m11 5l-5-5m5 5v-4m0 4h-4"/>
					</svg>
				</div>
			</button>
			<?php endforeach; ?>
		</div>

		<?php if ( $gallery_link ) : ?>
		<div class="mt-12 text-center">
			<a
				href="<?php echo esc_url( $gallery_link ); ?>"
				class="bg-primary text-white px-6 py-3 rounded-lg font-semibold text-base hover:bg-green-800 transition"
			>
				<?php esc_html_e( 'আরও ছবি দেখুন', 'generatepress-child' ); ?>
			</a>
		</div>
		<?php endif; ?>

	</div>
</section>

<div class="bmf-lightbox" id="bmf-lightbox" role="dialog" aria-modal="true" aria-label="<?php esc_attr_e( 'ছবি প্রিভিউ', 'generatepress-child' ); ?>">
	<button type="button" class="bmf-lightbox__prev" id="bmf-lb-prev" aria-label="<?php esc_attr_e( 'আগের ছবি', 'generatepress-child' ); ?>">&#8592;</button>
	<img src="" alt="" class="bmf-lightbox__img" id="bmf-lb-img" />
	<button type="button" class="bmf-lightbox__next" id="bmf-lb-next" aria-label="<?php esc_attr_e( 'পরের ছবি', 'generatepress-child' ); ?>">&#8594;</button>
	<button type="button" class="bmf-lightbox__close" id="bmf-lb-close" aria-label="<?php esc_attr_e( 'বন্ধ করুন', 'generatepress-child' ); ?>">&times;</button>
</div>

<script>
(function () {
	var items   = Array.from( document.querySelectorAll( '.bmf-gallery-item' ) );
	var lb      = document.getElementById( 'bmf-lightbox' );
	var lbImg   = document.getElementById( 'bmf-lb-img' );
	var btnPrev = document.getElementById( 'bmf-lb-prev' );
	var btnNext = document.getElementById( 'bmf-lb-next' );
	var btnClose = document.getElementById( 'bmf-lb-close' );
	var current = 0;

	if ( ! items.length || ! lb ) return;

	function open( index ) {
		current = ( index + items.length ) % items.length;
		var btn = items[ current ];
		lbImg.src = btn.dataset.full;
		lbImg.alt = btn.dataset.alt || '';
		lb.classList.add( 'is-open' );
		btnClose.focus();
	}

	function close() {
		lb.classList.remove( 'is-open' );
		lbImg.src = '';
	}

	items.forEach( function ( btn ) {
		btn.addEventListener( 'click', function () {
			open( parseInt( this.dataset.index, 10 ) );
		} );
	} );

	btnPrev.addEventListener(  'click', function () { open( current - 1 ); } );
	btnNext.addEventListener(  'click', function () { open( current + 1 ); } );
	btnClose.addEventListener( 'click', close );

	lb.addEventListener( 'click', function ( e ) {
		if ( e.target === lb ) close();
	} );

	document.addEventListener( 'keydown', function ( e ) {
		if ( ! lb.classList.contains( 'is-open' ) ) return;
		if ( e.key === 'Escape' )    close();
		if ( e.key === 'ArrowLeft' ) open( current - 1 );
		if ( e.key === 'ArrowRight' ) open( current + 1 );
	} );
})();
</script>
