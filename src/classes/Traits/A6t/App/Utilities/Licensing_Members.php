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
	 * Gets WordPress installation data.
	 *
	 * @since 2022-03-12
	 *
	 * @return array WordPress installation data.
	 */
	final public function installation_data() : array {
		$is_multisite      = is_multisite();
		$is_network_active = $is_multisite && $this->is_network_active();

		return [
			'php_version'    => PHP_VERSION,
			'php_extensions' => implode( ',', U\Env::loaded_extensions() ),

			'wp_version'      => U\Env::wp_version(),
			'wp_is_multisite' => $is_multisite,

			'wp_network_home_url' => $is_multisite ? rtrim( network_home_url(), '/' ) : '',
			'wp_home_url'         => rtrim( home_url(), '/' ),

			'wp_active_plugins'         => implode( ',', U\Env::wp_active_plugins() ),
			'wp_network_active_plugins' => $is_multisite ? implode( ',', U\Env::wp_network_active_plugins() ) : '',

			'wp_active_themes'         => implode( ',', U\Env::wp_active_themes() ),
			'wp_network_active_themes' => $is_multisite ? implode( ',', U\Env::wp_network_active_themes() ) : '',

			'wp_app_type'              => $this->type,
			'wp_app_slug'              => $this->slug,
			'wp_app_version'           => $this->version,
			'wp_app_is_network_active' => $is_network_active,
			'wp_app_license_key'       => $is_network_active
				? $this->get_site_option( 'license_key' )
				: $this->get_option( 'license_key' ),
		];
	}
}
