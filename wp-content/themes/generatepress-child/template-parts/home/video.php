<?php
/**
 * Template part: Home page — ভিডিও (Video) section
 *
 * Shows only when bmf_video_url is set. Renders a click-to-play YouTube embed.
 *
 * @package generatepress-child
 */

$video_url = rwmb_meta( 'bmf_video_url' );

if ( empty( $video_url ) ) {
	return;
}

preg_match( '/(?:v=|youtu\.be\/)([a-zA-Z0-9_-]{11})/', $video_url, $matches );
$video_id = $matches[1] ?? '';

if ( empty( $video_id ) ) {
	return;
}

$custom_thumb = rwmb_meta( 'bmf_video_thumbnail', [ 'size' => 'large' ] );
$thumb_url    = ! empty( $custom_thumb )
	? $custom_thumb
	: 'https://i.ytimg.com/vi/' . $video_id . '/maxresdefault.jpg';
?>

<section class="py-20 bg-slate-900 text-white">
	<div class="container mx-auto px-4">

		<div class="text-center mb-12">
			<span class="bg-primary px-4 py-1 rounded text-xs font-bold mb-4 inline-block">
				<?php esc_html_e( 'ভিডিও', 'generatepress-child' ); ?>
			</span>
			<h2 class="text-3xl font-bold">
				<?php esc_html_e( 'আমাদের কার্যক্রম সম্পর্কে ভিডিও', 'generatepress-child' ); ?>
			</h2>
		</div>

		<div
			class="max-w-4xl mx-auto aspect-video bg-black rounded-3xl overflow-hidden relative group shadow-2xl cursor-pointer"
			data-video-id="<?php echo esc_attr( $video_id ); ?>"
		>
			<img
				src="<?php echo esc_url( $thumb_url ); ?>"
				alt="<?php esc_attr_e( 'ভিডিও থাম্বনেইল', 'generatepress-child' ); ?>"
				class="w-full h-full object-cover opacity-60"
			/>
			<div class="absolute inset-0 flex items-center justify-center">
				<button
					type="button"
					aria-label="<?php esc_attr_e( 'ভিডিও চালান', 'generatepress-child' ); ?>"
					class="w-20 h-20 bg-primary rounded-full flex items-center justify-center hover:scale-110 transition group-hover:bg-red-600"
				>
					<svg class="w-10 h-10 text-white fill-current" viewBox="0 0 24 24" aria-hidden="true">
						<path d="M8 5v14l11-7z"/>
					</svg>
				</button>
			</div>
		</div>

	</div>
</section>

<script>
(function() {
	var container = document.querySelector('[data-video-id]');
	if ( ! container ) return;
	container.addEventListener('click', function() {
		var id = this.dataset.videoId;
		this.innerHTML = '<iframe src="https://www.youtube.com/embed/' + encodeURIComponent( id ) +
			'?autoplay=1&rel=0" class="w-full h-full" allowfullscreen allow="autoplay; encrypted-media"></iframe>';
	});
})();
</script>
