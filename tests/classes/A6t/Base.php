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
 * Lint configuration.
 *
 * @since        2021-12-15
 *
 * @noinspection PhpComposerExtensionStubsInspection
 * @noinspection PhpStaticAsDynamicMethodCallInspection
 */

/**
 * Declarations & namespace.
 *
 * @since 2021-12-25
 */
declare( strict_types = 1 );
namespace WP_Groove\Framework_Pro\Tests\A6t;

/**
 * Utilities.
 *
 * @since 2021-12-15
 */
use Clever_Canyon\{Utilities as U};
use Clever_Canyon\Utilities\{Tests as U_Tests};

/**
 * Framework.
 *
 * @since 2021-12-15
 */
use WP_Groove\{Framework as WPG};
use WP_Groove\Framework\{Tests as WPG_Tests};

use WP_Groove\{Framework_Pro as WPG_Pro};
use WP_Groove\Framework_Pro\{Tests as WPG_Pro_Tests};

/**
 * Plugin.
 *
 * @since 2021-12-15
 */
use WP_Groove\{Framework_Pro_Plugin as WP};

// </editor-fold>

/**
 * Base class for tests.
 *
 * @since 2021-12-15
 */
abstract class Base extends WPG_Tests\A6t\Base { }
