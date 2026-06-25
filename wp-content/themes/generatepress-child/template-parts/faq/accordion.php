<?php
/**
 * Template part: FAQ page — accordion list with category filter and sidebar
 *
 * @package generatepress-child
 */

$category_labels = [
	'donation'   => __( 'দান ও অনুদান', 'generatepress-child' ),
	'activities' => __( 'কার্যক্রম', 'generatepress-child' ),
	'volunteer'  => __( 'স্বেচ্ছাসেবী', 'generatepress-child' ),
	'contact'    => __( 'যোগাযোগ', 'generatepress-child' ),
];

$faq_items = [
	'donation' => [
		[
			'question' => __( 'আমি কীভাবে দান করতে পারি?', 'generatepress-child' ),
			'answer'   => __( 'আপনি তিনটি উপায়ে দান করতে পারেন — সোনালী ব্যাংক অ্যাকাউন্টে সরাসরি জমা দিয়ে, বিকাশের মাধ্যমে সেন্ড মানি করে, অথবা আমাদের অফিসে সরাসরি এসে। ব্যাংক অ্যাকাউন্ট নম্বর ও বিকাশ নম্বর আমাদের দান পেজে পাওয়া যাবে।', 'generatepress-child' ),
		],
		[
			'question' => __( 'সর্বনিম্ন কত টাকা দান করা যায়?', 'generatepress-child' ),
			'answer'   => __( 'দানের কোনো নির্দিষ্ট সর্বনিম্ন সীমা নেই। আপনি যেকোনো পরিমাণ দান করতে পারেন। ছোট বা বড় — প্রতিটি অনুদানই আমাদের কাছে সমান মূল্যবান এবং সুবিধাভোগীদের জীবনে প্রভাব ফেলে।', 'generatepress-child' ),
		],
		[
			'question' => __( 'দানের অর্থ কীভাবে ব্যবহার করা হয়?', 'generatepress-child' ),
			'answer'   => __( 'সংগৃহীত অর্থ সরাসরি আমাদের চলমান প্রকল্পগুলোতে ব্যয় হয় — শিক্ষা সহায়তা, স্বাস্থ্যসেবা, দুর্যোগ ত্রাণ ও দরিদ্র পরিবারের পুনর্বাসনে। প্রশাসনিক খরচ সর্বোচ্চ ১০% এর মধ্যে সীমাবদ্ধ রাখা হয়। প্রতি মাসে আমরা আর্থিক বিবরণী প্রকাশ করি।', 'generatepress-child' ),
		],
		[
			'question' => __( 'আমি কি নির্দিষ্ট কোনো প্রকল্পের জন্য দান করতে পারি?', 'generatepress-child' ),
			'answer'   => __( 'হ্যাঁ, অবশ্যই। ব্যাংক বা বিকাশে পাঠানোর পর আমাদের দান ফর্মে প্রকল্পের নাম উল্লেখ করুন। আমরা নিশ্চিত করব যে আপনার অর্থ সেই নির্দিষ্ট প্রকল্পেই ব্যবহৃত হয়েছে। নির্দিষ্ট প্রকল্পের তালিকা আমাদের কার্যক্রম পেজে পাওয়া যাবে।', 'generatepress-child' ),
		],
		[
			'question' => __( 'দান করলে কি রসিদ পাব?', 'generatepress-child' ),
			'answer'   => __( 'হ্যাঁ। দান ফর্মে আপনার ই-মেইল বা ফোন নম্বর দিলে আমরা ৪৮ ঘণ্টার মধ্যে আপনাকে একটি নিশ্চিতকরণ রসিদ পাঠাব। প্রয়োজনে অফিসেও রসিদ সংগ্রহ করা যাবে।', 'generatepress-child' ),
		],
	],
	'activities' => [
		[
			'question' => __( 'বেতাগী মানবিক ফাউন্ডেশন কী কী কাজ করে?', 'generatepress-child' ),
			'answer'   => __( 'আমরা মূলত শিক্ষা বৃত্তি প্রদান, দরিদ্র রোগীদের চিকিৎসা সহায়তা, প্রাকৃতিক দুর্যোগে ক্ষতিগ্রস্তদের ত্রাণ বিতরণ, এতিম শিশুদের সহায়তা এবং কর্মসংস্থান তৈরিতে কাজ করি। আমাদের চলমান ও সম্পন্ন প্রকল্পগুলো দেখতে কার্যক্রম পেজ পরিদর্শন করুন।', 'generatepress-child' ),
		],
		[
			'question' => __( 'ফাউন্ডেশন কোন এলাকায় কাজ করে?', 'generatepress-child' ),
			'answer'   => __( 'আমরা মূলত বেতাগী উপজেলা ও বরগুনা জেলায় কাজ করি। তবে বড় দুর্যোগ বা বিশেষ পরিস্থিতিতে সারা দেশে সহায়তা প্রদান করা হয়। ভবিষ্যতে আমাদের কার্যপরিধি সারাদেশে বিস্তৃত করার পরিকল্পনা রয়েছে।', 'generatepress-child' ),
		],
		[
			'question' => __( 'আমি কি সহায়তার জন্য আবেদন করতে পারি?', 'generatepress-child' ),
			'answer'   => __( 'হ্যাঁ। যোগ্য ব্যক্তি বা পরিবার আমাদের অফিসে সরাসরি যোগাযোগ করে বা যোগাযোগ ফর্মে আবেদন করতে পারেন। আবেদনের পর আমাদের টিম পরিস্থিতি যাচাই করে সহায়তার বিষয়ে সিদ্ধান্ত নেবে।', 'generatepress-child' ),
		],
	],
	'volunteer' => [
		[
			'question' => __( 'আমি কি স্বেচ্ছাসেবক হিসেবে যোগ দিতে পারি?', 'generatepress-child' ),
			'answer'   => __( 'অবশ্যই। যেকোনো বয়সের ও পেশার মানুষ আমাদের স্বেচ্ছাসেবী দলে যোগ দিতে পারেন। ফিল্ড ওয়ার্ক, ডিজিটাল মার্কেটিং, ফান্ডরেইজিং বা শিক্ষাদান — যে ক্ষেত্রে আপনার দক্ষতা আছে সেখানেই আমরা আপনাকে কাজে লাগাতে পারব। যোগাযোগ পেজে ফর্ম পূরণ করে আবেদন করুন।', 'generatepress-child' ),
		],
		[
			'question' => __( 'স্বেচ্ছাসেবকদের কি কোনো পারিশ্রমিক দেওয়া হয়?', 'generatepress-child' ),
			'answer'   => __( 'স্বেচ্ছাসেবকরা বিনামূল্যে কাজ করেন বলেই এটি স্বেচ্ছাসেবিতা। তবে দীর্ঘমেয়াদী ও নিবেদিতপ্রাণ স্বেচ্ছাসেবকদের জন্য ভ্রমণ ভাতা ও প্রশিক্ষণের ব্যবস্থা আছে। পাশাপাশি অভিজ্ঞতা সনদ ও সুপারিশপত্র প্রদান করা হয়।', 'generatepress-child' ),
		],
	],
	'contact' => [
		[
			'question' => __( 'অফিসের সময়সূচি কী?', 'generatepress-child' ),
			'answer'   => __( 'আমাদের অফিস শনিবার থেকে বৃহস্পতিবার সকাল ৯টা থেকে বিকেল ৫টা পর্যন্ত খোলা থাকে। শুক্রবার ও সরকারি ছুটির দিনে অফিস বন্ধ থাকে। জরুরি প্রয়োজনে ফোন বা ই-মেইলে যোগাযোগ করুন।', 'generatepress-child' ),
		],
		[
			'question' => __( 'আমার অভিযোগ বা পরামর্শ কোথায় জানাব?', 'generatepress-child' ),
			'answer'   => __( 'আপনার যেকোনো অভিযোগ বা পরামর্শ আমাদের যোগাযোগ পেজের ফর্মের মাধ্যমে পাঠাতে পারেন। আমরা সাধারণত ৭২ ঘণ্টার মধ্যে প্রতিক্রিয়া জানাই। আপনার মতামত আমাদের কার্যক্রম উন্নত করতে সাহায্য করে।', 'generatepress-child' ),
		],
	],
];

$phone = get_theme_mod( 'bmf_footer_phone' );
$email = get_theme_mod( 'bmf_footer_email' );
?>

<main class="container mx-auto px-4 py-16">

	<!-- Category Filter Pills -->
	<div class="flex flex-wrap justify-center gap-3 mb-12" id="faq-category-filters">
		<button class="faq-pill active border border-primary text-primary font-semibold px-5 py-2 rounded-full text-sm transition" data-category="all">
			<?php esc_html_e( 'সবগুলো', 'generatepress-child' ); ?>
		</button>
		<?php foreach ( $category_labels as $key => $label ) : ?>
			<button class="faq-pill border border-slate-300 text-slate-600 font-semibold px-5 py-2 rounded-full text-sm hover:border-primary hover:text-primary transition" data-category="<?php echo esc_attr( $key ); ?>">
				<?php echo esc_html( $label ); ?>
			</button>
		<?php endforeach; ?>
	</div>

	<!-- Two-column: accordion list + sidebar -->
	<div class="grid grid-cols-1 lg:grid-cols-3 gap-12 max-w-6xl mx-auto">

		<!-- ── FAQ Accordion List ─────────────────────────────── -->
		<div class="lg:col-span-2 space-y-4" id="faq-list">

			<?php foreach ( $faq_items as $cat => $items ) : ?>

				<p class="text-xs font-bold uppercase tracking-widest text-slate-400 pt-2 faq-section-label" data-category="<?php echo esc_attr( $cat ); ?>">
					<?php echo esc_html( $category_labels[ $cat ] ); ?>
				</p>

				<?php foreach ( $items as $item ) : ?>
					<div class="faq-item bg-white rounded-xl shadow-sm border border-slate-100 overflow-hidden" data-category="<?php echo esc_attr( $cat ); ?>">
						<button class="w-full flex items-center justify-between p-6 text-left gap-4 hover:bg-white focus:outline-none focus:bg-white cursor-pointer" onclick="toggleFaq(this)">
							<span class="font-semibold text-slate-800 text-base">
								<?php echo esc_html( $item['question'] ); ?>
							</span>
							<span class="material-symbols-outlined faq-icon text-primary shrink-0">add</span>
						</button>
						<div class="faq-answer px-6">
							<p class="text-slate-600 text-sm leading-relaxed pb-6">
								<?php echo esc_html( $item['answer'] ); ?>
							</p>
						</div>
					</div>
				<?php endforeach; ?>

			<?php endforeach; ?>

		</div>

		<!-- ── Sidebar ────────────────────────────────────────── -->
		<div class="lg:col-span-1 space-y-6">

			<!-- Contact card -->
			<div class="bg-primary rounded-2xl p-8 text-white sticky top-24">
				<span class="material-symbols-outlined text-4xl mb-3 block">support_agent</span>
				<h3 class="text-xl font-bold mb-2">
					<?php esc_html_e( 'উত্তর খুঁজে পাননি?', 'generatepress-child' ); ?>
				</h3>
				<p class="text-sm opacity-90 mb-6 leading-relaxed">
					<?php esc_html_e( 'আমাদের টিম আপনাকে সাহায্য করতে সদা প্রস্তুত। সরাসরি যোগাযোগ করুন।', 'generatepress-child' ); ?>
				</p>
				<a
					href="<?php echo esc_url( home_url( '/contact' ) ); ?>"
					class="block text-center bg-white text-primary font-bold py-3 rounded-xl hover:bg-slate-100 transition text-sm"
				>
					<?php esc_html_e( 'যোগাযোগ করুন', 'generatepress-child' ); ?>
				</a>

				<?php if ( $phone || $email ) : ?>
					<div class="mt-6 pt-6 border-t border-green-700 space-y-3 text-sm">
						<?php if ( $phone ) : ?>
							<div class="flex items-center gap-3">
								<span class="material-symbols-outlined text-green-300 shrink-0">call</span>
								<span><?php echo esc_html( $phone ); ?></span>
							</div>
						<?php endif; ?>
						<?php if ( $email ) : ?>
							<div class="flex items-center gap-3">
								<span class="material-symbols-outlined text-green-300 shrink-0">mail</span>
								<span><?php echo esc_html( $email ); ?></span>
							</div>
						<?php endif; ?>
					</div>
				<?php endif; ?>
			</div>

			<!-- Popular questions -->
			<div class="bg-white rounded-2xl p-6 border border-slate-100 shadow-sm">
				<h4 class="text-sm font-bold uppercase tracking-wider text-slate-500 mb-4">
					<?php esc_html_e( 'জনপ্রিয় প্রশ্ন', 'generatepress-child' ); ?>
				</h4>
				<ul class="space-y-3">
					<?php
					$popular = [
						__( 'কীভাবে দান করব?', 'generatepress-child' ),
						__( 'স্বেচ্ছাসেবক হওয়ার উপায়', 'generatepress-child' ),
						__( 'সহায়তার জন্য আবেদন', 'generatepress-child' ),
						__( 'দানের রসিদ সংগ্রহ', 'generatepress-child' ),
					];
					foreach ( $popular as $q ) :
					?>
					<li>
						<a href="#faq-list" class="text-sm text-slate-700 hover:text-primary transition flex items-center gap-2">
							<span class="material-symbols-outlined text-primary" style="font-size:16px">chevron_right</span>
							<?php echo esc_html( $q ); ?>
						</a>
					</li>
					<?php endforeach; ?>
				</ul>
			</div>

		</div>

	</div>

</main>

<script>
function toggleFaq( btn ) {
	var item   = btn.closest( '.faq-item' );
	var isOpen = item.classList.contains( 'open' );
	document.querySelectorAll( '.faq-item.open' ).forEach( function( el ) {
		el.classList.remove( 'open' );
	} );
	if ( ! isOpen ) {
		item.classList.add( 'open' );
	}
}

( function() {
	var pills = document.querySelectorAll( '.faq-pill' );
	pills.forEach( function( pill ) {
		pill.addEventListener( 'click', function() {
			pills.forEach( function( p ) { p.classList.remove( 'active' ); } );
			pill.classList.add( 'active' );

			var cat = pill.dataset.category;

			document.querySelectorAll( '.faq-item' ).forEach( function( item ) {
				item.style.display = ( cat === 'all' || item.dataset.category === cat ) ? '' : 'none';
			} );
			document.querySelectorAll( '.faq-section-label' ).forEach( function( label ) {
				label.style.display = ( cat === 'all' || label.dataset.category === cat ) ? '' : 'none';
			} );

			document.querySelectorAll( '.faq-item.open' ).forEach( function( el ) {
				el.classList.remove( 'open' );
			} );
		} );
	} );
} )();
</script>
