<?php
/**
 * Donate page — Bento grid section
 * Cards: image | bank details | mobile banking | CF7 form | trust indicators
 *
 * @package generatepress-child
 */

$bento_image_raw   = rwmb_meta( 'bmf_donate_bento_image' );
$bento_image     = is_array( $bento_image_raw ) ? ( $bento_image_raw['full_url'] ?? $bento_image_raw['sizes']['large']['url'] ?? '' ) : (string) $bento_image_raw;
$bank_name     = rwmb_meta( 'bmf_donate_bank_name' );
$bank_number   = rwmb_meta( 'bmf_donate_bank_number' );
$bank_branch   = rwmb_meta( 'bmf_donate_bank_branch' );
$mobile_number = rwmb_meta( 'bmf_donate_mobile_number' );
$bkash_logo_raw    = rwmb_meta( 'bmf_donate_bkash_logo' );
$bkash_logo    = is_array( $bkash_logo_raw ) ? ( $bkash_logo_raw['full_url'] ?? $bkash_logo_raw['sizes']['large']['url'] ?? '' ) : (string) $bkash_logo_raw;
$cf7_id        = rwmb_meta( 'bmf_donate_cf7_id' );

// When no image is set the bank + mobile cards each widen to 6-col.
$side_cols = $bento_image ? 'md:col-span-4' : 'md:col-span-6';
?>
<section class="bg-slate-50 pb-16">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-12 gap-6">

            <?php if ( $bento_image ) : ?>
            <!-- Image Card -->
            <div class="md:col-span-4 rounded-xl overflow-hidden shadow-sm h-full hidden md:block">
                <img
                    src="<?php echo esc_url( $bento_image ); ?>"
                    alt="<?php esc_attr_e( 'কমিউনিটি সহায়তা', 'generatepress-child' ); ?>"
                    class="w-full h-full object-cover"
                />
            </div>
            <?php endif; ?>

            <!-- Bank Details Card -->
            <div class="<?php echo esc_attr( $side_cols ); ?> bento-card p-6 flex flex-col justify-between border-t-4 border-primary">
                <div>
                    <div class="flex items-center gap-2 mb-4 text-primary">
                        <span class="material-symbols-outlined">account_balance</span>
                        <h3 class="text-lg font-bold"><?php esc_html_e( 'ব্যাংক অ্যাকাউন্ট', 'generatepress-child' ); ?></h3>
                    </div>
                    <div class="space-y-4">
                        <?php if ( $bank_name ) : ?>
                        <div>
                            <p class="text-sm text-slate-500"><?php esc_html_e( 'অ্যাকাউন্ট নাম', 'generatepress-child' ); ?></p>
                            <p class="font-bold text-slate-900"><?php echo esc_html( $bank_name ); ?></p>
                        </div>
                        <?php endif; ?>
                        <?php if ( $bank_number ) : ?>
                        <div>
                            <p class="text-sm text-slate-500"><?php esc_html_e( 'অ্যাকাউন্ট নম্বর', 'generatepress-child' ); ?></p>
                            <p class="text-xl font-bold text-primary tracking-wider"><?php echo esc_html( $bank_number ); ?></p>
                        </div>
                        <?php endif; ?>
                        <?php if ( $bank_branch ) : ?>
                        <div>
                            <p class="text-sm text-slate-500"><?php esc_html_e( 'ব্যাংক ও শাখা', 'generatepress-child' ); ?></p>
                            <p class="text-sm font-bold text-slate-900"><?php echo esc_html( $bank_branch ); ?></p>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="mt-12 pt-4 border-t border-slate-200 flex items-center gap-1 text-secondary font-bold">
                    <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1">verified</span>
                    <span class="text-sm"><?php esc_html_e( 'নিরাপদ ও নির্ভরযোগ্য', 'generatepress-child' ); ?></span>
                </div>
            </div>

            <!-- Mobile Banking Card -->
            <div class="<?php echo esc_attr( $side_cols ); ?> bento-card p-6 border-t-4 border-secondary flex flex-col justify-between">
                <div>
                    <div class="flex items-center gap-2 mb-4 text-secondary">
                        <span class="material-symbols-outlined">smartphone</span>
                        <h3 class="text-lg font-bold"><?php esc_html_e( 'মোবাইল ব্যাংকিং', 'generatepress-child' ); ?></h3>
                    </div>
                    <?php if ( $mobile_number ) : ?>
                    <div class="bg-secondary/10 p-4 rounded-lg mb-6 flex items-center justify-between">
                        <div>
                            <p class="text-sm text-amber-800"><?php esc_html_e( 'বিকাশ (পার্সোনাল)', 'generatepress-child' ); ?></p>
                            <p class="text-xl font-bold text-secondary"><?php echo esc_html( $mobile_number ); ?></p>
                        </div>
                        <div class="bg-white p-2 rounded-lg shadow-sm">
                            <span class="material-symbols-outlined text-secondary opacity-20" style="font-size: 48px">qr_code_2</span>
                        </div>
                    </div>
                    <?php endif; ?>
                    <p class="text-sm text-slate-500">
                        <?php esc_html_e( 'দ্রুত অনুদান পাঠাতে আপনার বিকাশ অ্যাপ থেকে উপরের নম্বরে সেন্ড মানি করুন।', 'generatepress-child' ); ?>
                    </p>
                </div>
                <?php if ( $bkash_logo ) : ?>
                <div class="mt-6">
                    <img
                        src="<?php echo esc_url( $bkash_logo ); ?>"
                        alt="<?php esc_attr_e( 'বিকাশ লোগো', 'generatepress-child' ); ?>"
                        class="rounded-lg h-32 w-full object-cover"
                    />
                </div>
                <?php endif; ?>
            </div>

            <!-- Donation Form Card -->
            <div class="md:col-span-8 bento-card p-6 md:p-12">
                <div class="mb-6">
                    <h3 class="text-xl font-bold text-primary mb-1">
                        <?php esc_html_e( 'অনুদান পরবর্তী তথ্য প্রদান', 'generatepress-child' ); ?>
                    </h3>
                    <p class="text-sm text-slate-500">
                        <?php esc_html_e( 'অনুগ্রহ করে নিচের ফর্মটি পূরণ করুন যাতে আমরা আপনার অনুদান নিশ্চিত করতে পারি।', 'generatepress-child' ); ?>
                    </p>
                </div>
                <?php if ( $cf7_id && shortcode_exists( 'contact-form-7' ) ) : ?>
                    <?php echo do_shortcode( '[contact-form-7 id="' . absint( $cf7_id ) . '"]' ); ?>
                <?php else : ?>
                    <p class="text-slate-500 text-sm italic">
                        <?php esc_html_e( 'ফর্মটি এখনো সেটআপ করা হয়নি।', 'generatepress-child' ); ?>
                    </p>
                <?php endif; ?>
            </div>

            <!-- Trust Indicators -->
            <div class="md:col-span-4 space-y-6">
                <div class="bento-card p-6 bg-primary text-white">
                    <span class="material-symbols-outlined text-5xl mb-2 block">shield_lock</span>
                    <h4 class="text-xl font-bold mb-1"><?php esc_html_e( 'নিরাপদ লেনদেন', 'generatepress-child' ); ?></h4>
                    <p class="text-sm opacity-90">
                        <?php esc_html_e( 'আপনার প্রতিটি কড়ি সরাসরি ফাউন্ডেশনের ব্যাংক অ্যাকাউন্টে জমা হয়।', 'generatepress-child' ); ?>
                    </p>
                </div>
                <div class="bento-card p-6 bg-slate-100 border border-slate-200">
                    <h4 class="text-sm font-bold mb-4 uppercase tracking-wider text-slate-500">
                        <?php esc_html_e( 'কেন আমাদের বেছে নেবেন?', 'generatepress-child' ); ?>
                    </h4>
                    <ul class="space-y-4">
                        <li class="flex gap-2 items-start">
                            <span class="material-symbols-outlined text-primary shrink-0" style="font-variation-settings: 'FILL' 1">check_circle</span>
                            <p class="text-sm font-bold"><?php esc_html_e( 'শতভাগ স্বচ্ছতা', 'generatepress-child' ); ?></p>
                        </li>
                        <li class="flex gap-2 items-start">
                            <span class="material-symbols-outlined text-primary shrink-0" style="font-variation-settings: 'FILL' 1">check_circle</span>
                            <p class="text-sm font-bold"><?php esc_html_e( 'সরাসরি উপকারভোগীর কাছে পৌঁছানো', 'generatepress-child' ); ?></p>
                        </li>
                        <li class="flex gap-2 items-start">
                            <span class="material-symbols-outlined text-primary shrink-0" style="font-variation-settings: 'FILL' 1">check_circle</span>
                            <p class="text-sm font-bold"><?php esc_html_e( 'মাসিক অডিট রিপোর্ট', 'generatepress-child' ); ?></p>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</section>
