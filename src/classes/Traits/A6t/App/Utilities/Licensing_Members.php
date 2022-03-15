<?php
/**
 * WP Groove™ {@see https://wpgroove.com}
 *  _       _  ___       ___
 * ( )  _  ( )(  _`\    (  _`\
 * | | ( ) | || |_) )   | ( (_) _ __   _      _    _   _    __  ™
 * | | | | | || ,__/'   | |___ ( '__)/'_`\  /'_`\ ( ) ( ) /'__`\
 * | (_/ \_) || |       | (_, )| |  ( (_) )( (_) )| \_/ |(  ___/
 * `\___x___/'(_)       (____/'(_)  `\___/'`\___/'`\___/'`\____)
 */
// <editor-fold desc="Strict types, namespace, use statements, and other headers.">

/**
 * Declarations & namespace.
 *
 * @since 2021-12-25
 */
declare( strict_types = 1 );
namespace WP_Groove\Framework_Pro\Traits\A6t\App\Utilities;

/**
 * Utilities.
 *
 * @since 2021-12-15
 */
use Clever_Canyon\{Utilities as U};

/**
 * Framework.
 *
 * @since 2021-12-15
 */
use WP_Groove\{Framework as WPG};
use WP_Groove\{Framework_Pro as WPG_Pro};

// </editor-fold>

/**
 * Class members.
 *
 * @since 2021-12-15
 *
 * @see   WPG_Pro\A6t\Plugin
 * @see   WPG_Pro\A6t\Theme
 */
trait Licensing_Members {
	/**
	 * Gets WordPress installation data for licensing.
	 *
	 * @since 2022-03-12
	 *
	 * @return array WordPress installation data for licensing.
	 */
	final public function installation_data_for_licensing() : array {
		return [
			'wp_is_multisite'     => is_multisite(),
			'wp_network_home_url' => rtrim( network_home_url(), '/' ),
			'wp_home_url'         => rtrim( get_home_url(), '/' ),

			'product_type'              => $this->type,
			'product_slug'              => $this->slug,
			'product_version'           => $this->version,
			'product_is_network_active' => $this->is_network_active(),
			'product_license_key'       => $this->get_option( 'license_key' ),
		];
	}
}
