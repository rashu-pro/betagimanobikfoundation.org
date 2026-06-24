<?php
/**
 * Template part: Contact page — Bento grid section
 * Left col: contact info cards + map image
 * Right col: Contact Form 7
 *
 * @package generatepress-child
 */

$map_image_raw = rwmb_meta( 'bmf_contact_map_image' );
$map_image     = is_array( $map_image_raw ) ? ( $map_image_raw['full_url'] ?? $map_image_raw['sizes']['large']['url'] ?? '' ) : (string) $map_image_raw;
$cf7_id        = rwmb_meta( 'bmf_contact_cf7_id' );

$address  = get_theme_mod( 'bmf_footer_address' );
$phone    = get_theme_mod( 'bmf_footer_phone' );
$email    = get_theme_mod( 'bmf_footer_email' );
$facebook = get_theme_mod( 'bmf_footer_facebook' );
?>

<section class="bg-slate-50 pb-4">
	<div class="container mx-auto px-4">
		<div class="grid grid-cols-1 lg:grid-cols-12 gap-6 items-start mb-12">

			<!-- Left Column: Contact Details -->
			<div class="lg:col-span-5 flex flex-col gap-6">

				<div class="grid grid-cols-1 gap-4">

					<!-- Address -->
					<?php if ( $address ) : ?>
					<div class="glass-card p-6 rounded-xl shadow-sm flex items-start gap-4 hover:shadow-md transition-shadow">
						<div class="bg-green-100 p-4 rounded-lg text-primary shrink-0">
							<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1">location_on</span>
						</div>
						<div>
							<h3 class="text-sm font-semibold text-primary mb-1">
								<?php esc_html_e( 'ঠিকানা', 'generatepress-child' ); ?>
							</h3>
							<p class="text-base text-primary-dark">
								<?php echo esc_html( $address ); ?>
							</p>
						</div>
					</div>
					<?php endif; ?>

					<!-- Phone -->
					<?php if ( $phone ) : ?>
					<div class="glass-card p-6 rounded-xl shadow-sm flex items-start gap-4 hover:shadow-md transition-shadow">
						<div class="bg-amber-100 p-4 rounded-lg text-accent shrink-0">
							<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1">call</span>
						</div>
						<div>
							<h3 class="text-sm font-semibold text-accent mb-1">
								<?php esc_html_e( 'ফোন নম্বর', 'generatepress-child' ); ?>
							</h3>
							<a
								href="tel:<?php echo esc_attr( preg_replace( '/[^+\d]/', '', $phone ) ); ?>"
								class="text-base text-primary-dark hover:text-primary transition-colors"
							>
								<?php echo esc_html( $phone ); ?>
							</a>
						</div>
					</div>
					<?php endif; ?>

					<!-- Email -->
					<?php if ( $email ) : ?>
					<div class="glass-card p-6 rounded-xl shadow-sm flex items-start gap-4 hover:shadow-md transition-shadow">
						<div class="bg-green-100 p-4 rounded-lg text-primary shrink-0">
							<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1">mail</span>
						</div>
						<div>
							<h3 class="text-sm font-semibold text-primary mb-1">
								<?php esc_html_e( 'ইমেইল', 'generatepress-child' ); ?>
							</h3>
							<a
								href="mailto:<?php echo esc_attr( antispambot( $email ) ); ?>"
								class="text-base text-primary-dark hover:text-primary transition-colors"
							>
								<?php echo esc_html( antispambot( $email ) ); ?>
							</a>
						</div>
					</div>
					<?php endif; ?>

					<!-- Social Media -->
					<?php if ( $facebook ) : ?>
					<div class="glass-card p-6 rounded-xl shadow-sm flex items-start gap-4 hover:shadow-md transition-shadow">
						<div class="bg-blue-100 p-4 rounded-lg text-blue-500 shrink-0">
							<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1">share</span>
						</div>
						<div>
							<h3 class="text-sm font-semibold text-blue-500 mb-1">
								<?php esc_html_e( 'সোশ্যাল মিডিয়া', 'generatepress-child' ); ?>
							</h3>
							<div class="flex gap-4 mt-1">
								<a
									href="<?php echo esc_url( $facebook ); ?>"
									target="_blank"
									rel="noopener noreferrer"
									class="flex items-center gap-1 text-base text-primary-dark hover:text-blue-500 transition-colors"
								>
									<svg class="w-5 h-5 fill-current" viewBox="0 0 24 24" aria-hidden="true">
										<path d="M22.675 0h-21.35C.593 0 0 .593 0 1.325v21.351C0 23.407.593 24 1.325 24H12.82v-9.294H9.692v-3.622h3.128V8.413c0-3.1 1.893-4.788 4.659-4.788 1.325 0 2.463.099 2.795.143v3.24l-1.918.001c-1.504 0-1.795.715-1.795 1.763v2.313h3.587l-.467 3.622h-3.12V24h6.116c.73 0 1.323-.593 1.323-1.325V1.325C24 .593 23.407 0 22.675 0z"/>
									</svg>
									<?php esc_html_e( 'ফেসবুক পেজ', 'generatepress-child' ); ?>
								</a>
							</div>
						</div>
					</div>
					<?php endif; ?>

				</div>

				<!-- Map Image -->
				<?php if ( $map_image ) : ?>
				<div class="relative overflow-hidden rounded-xl h-64 shadow-sm border border-slate-200">
					<img
						src="<?php echo esc_url( $map_image ); ?>"
						alt="<?php esc_attr_e( 'বেতাগী ম্যাপ', 'generatepress-child' ); ?>"
						class="w-full h-full object-cover"
					/>
					<div class="absolute inset-0 bg-primary/10 pointer-events-none"></div>
					<div class="absolute bottom-4 left-4 bg-white px-4 py-2 rounded-lg shadow-md flex items-center gap-1">
						<span class="material-symbols-outlined text-primary text-sm">explore</span>
						<span class="text-xs"><?php esc_html_e( 'বেতাগী, বরগুনা ম্যাপ', 'generatepress-child' ); ?></span>
					</div>
				</div>
				<?php endif; ?>

			</div>

			<!-- Right Column: Contact Form -->
			<div class="lg:col-span-7 bg-white p-6 md:p-12 rounded-2xl shadow-sm border border-slate-200">
				<h2 class="text-2xl text-primary-dark font-bold mb-2">
					<?php esc_html_e( 'আমাদের বার্তা পাঠান', 'generatepress-child' ); ?>
				</h2>
				<p class="text-base text-slate-600 mb-6">
					<?php esc_html_e( 'নিচের ফর্মটি পূরণ করে আপনার মতামত বা জিজ্ঞাস্য আমাদের কাছে পাঠান। আমরা দ্রুত আপনার সাথে যোগাযোগ করব।', 'generatepress-child' ); ?>
				</p>
				<?php if ( $cf7_id && shortcode_exists( 'contact-form-7' ) ) : ?>
					<?php echo do_shortcode( '[contact-form-7 id="' . absint( $cf7_id ) . '"]' ); ?>
				<?php else : ?>
					<p class="text-slate-500 text-sm italic">
						<?php esc_html_e( 'ফর্মটি এখনো সেটআপ করা হয়নি।', 'generatepress-child' ); ?>
					</p>
				<?php endif; ?>
			</div>

		</div>
	</div>
</section>
