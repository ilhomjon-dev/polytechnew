<?php
defined( 'ABSPATH' ) || exit;

/**
 * Plugin installation and activation for WordPress themes
 */
if ( ! class_exists( 'Unicamp_Register_Plugins' ) ) {
	class Unicamp_Register_Plugins {

		protected static $instance = null;

		const GOOGLE_DRIVER_API = 'AIzaSyBQsxIg32Eg17Ic0tmRvv1tBZYrT9exCwk';

		public static function instance() {
			if ( null === self::$instance ) {
				self::$instance = new self();
			}

			return self::$instance;
		}

		function initialize() {
			add_filter( 'insight_core_tgm_plugins', array( $this, 'register_required_plugins' ) );
		}

		public function register_required_plugins( $plugins ) {
			/*
			 * Array of plugin arrays. Required keys are name and slug.
			 * If the source is NOT from the .org repo, then source is also required.
			 */
			$new_plugins = array(
				array(
					'name'     => esc_html__( 'Insight Core', 'unicamp' ),
					'slug'     => 'insight-core',
					'source'   => 'https://www.dropbox.com/scl/fi/u6dujwpy2eudi38tbircs/insight-core-2.6.6.zip?rlkey=h79eo9bjn27tfj0c18wvhr6ky&dl=1',
					'version'  => '2.6.6',
					'required' => true,
				),
				array(
					'name'     => esc_html__( 'Unicamp Addons', 'unicamp' ),
					'slug'     => 'unicamp-addons',
					'source'   => 'https://www.dropbox.com/scl/fi/1vv7e7u5tk1u6x8yfcwxx/unicamp-addons-1.1.0.zip?rlkey=7z1sxbiza9sv53zixiqrr4u10&dl=1',
					'version'  => '1.1.0',
					'required' => true,
				),
				array(
					'name'     => esc_html__( 'Elementor', 'unicamp' ),
					'slug'     => 'elementor',
					'required' => true,
				),
				array(
					'name'        => esc_html__( 'ThemeMove Addons For Elementor', 'unicamp' ),
					'description' => 'Additional functions for Elementor',
					'slug'        => 'tm-addons-for-elementor',
					'logo'        => 'insight',
					'source'      => 'https://www.dropbox.com/scl/fi/giyeenvi0z8rafck3pc8q/tm-addons-for-elementor-1.3.1.zip?rlkey=vpzbqvgvzr6sm2gspxpqbg6jf&dl=1',
					'version'     => '1.3.1',
				),
				array(
					'name'    => esc_html__( 'Revolution Slider', 'unicamp' ),
					'slug'    => 'revslider',
					'source'  => 'https://www.dropbox.com/scl/fi/uyekrlrwwvydbmtqybbav/revslider-6.6.19.zip?rlkey=12bxsmmso64lorf0dua9eimwx&dl=1',
					'version' => '6.6.19',
				),
				array(
					'name' => esc_html__( 'WP Events Manager', 'unicamp' ),
					'slug' => 'wp-events-manager',
				),
				array(
					'name' => esc_html__( 'WordPress Social Login', 'unicamp' ),
					'slug' => 'miniorange-login-openid',
				),
				array(
					'name' => esc_html__( 'Contact Form 7', 'unicamp' ),
					'slug' => 'contact-form-7',
				),
				array(
					'name' => esc_html__( 'MailChimp for WordPress', 'unicamp' ),
					'slug' => 'mailchimp-for-wp',
				),
				array(
					'name' => esc_html__( 'WooCommerce', 'unicamp' ),
					'slug' => 'woocommerce',
				),
				array(
					'name' => esc_html__( 'WPC Smart Compare for WooCommerce', 'unicamp' ),
					'slug' => 'woo-smart-compare',
				),
				array(
					'name' => esc_html__( 'WPC Smart Wishlist for WooCommerce', 'unicamp' ),
					'slug' => 'woo-smart-wishlist',
				),
				array(
					'name'    => esc_html__( 'Insight Swatches', 'unicamp' ),
					'slug'    => 'insight-swatches',
					'source'  => 'https://www.dropbox.com/scl/fi/j2po0jzzlb8zs4b5t7zu4/insight-swatches-1.7.0.zip?rlkey=1st3r1s1w3w43fbyrek90df75&dl=1',
					'version' => '1.7.0',
				),
				array(
					'name' => esc_html__( 'WP-PostViews', 'unicamp' ),
					'slug' => 'wp-postviews',
				),
				array(
					'name' => esc_html__( 'Widget CSS Classes', 'unicamp' ),
					'slug' => 'widget-css-classes',
				),
				array(
					'name' => esc_html__( 'Radio Buttons for Taxonomies', 'unicamp' ),
					'slug' => 'radio-buttons-for-taxonomies',
				),
				array(
					'name' => esc_html__( 'Image Hotspot by DevVN', 'unicamp' ),
					'slug' => 'devvn-image-hotspot',
				),
				array(
					'name'    => esc_html__( 'Instagram Feed', 'unicamp' ),
					'slug'    => 'elfsight-instagram-feed-cc',
					'source'  => 'https://www.dropbox.com/s/o55sjvh8fs2nmoq/elfsight-instagram-feed-cc-4.0.3.zip?dl=1',
					'version' => '4.0.3',
				),
				array(
					'name'    => esc_html__( 'Tutor LMS Pro', 'unicamp' ),
					'slug'    => 'tutor-pro',
					'source'  => 'https://www.dropbox.com/scl/fi/w77wt829kcg10lhex5mwd/tutor-pro-2.5.0.zip?rlkey=o5lsy1952mo0eqr35nvuz9gln&dl=1',
					'version' => '2.5.0',
				),
				array(
					'name' => esc_html__( 'Tutor LMS', 'unicamp' ),
					'slug' => 'tutor',
				),
			);

			return array_merge( $plugins, $new_plugins );
		}

		public function get_plugin_google_driver_url( $file_id ) {
			return "https://www.googleapis.com/drive/v3/files/{$file_id}?alt=media&key=" . self::GOOGLE_DRIVER_API;
		}
	}

	Unicamp_Register_Plugins::instance()->initialize();
}
