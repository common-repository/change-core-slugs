<?php
/**
 * Plugin Name: Change Core Slugs
 * Plugin URI:  https://milandinic.com/wordpress/plugins/change-core-slugs/
 * Description: Set custom permalink slugs instead of default ones.
 * Author:      Milan Dinić
 * Author URI:  https://milandinic.com/
 * Version:     1.0.0
 * Text Domain: change-core-slugs
 * Domain Path: /languages/
 *
 * @package ChangeCoreSlugs
 */

// Check minimum required PHP version.
if ( version_compare( phpversion(), '5.4.0', '<' ) ) {
	return;
}

/**
 * Autoloader for Change Core Slugs classes.
 *
 * @param string $class Name of the class.
 */
function ccs_autoloader( $class ) {
	$pairs = [
		'dimadin\WP\Plugin\ChangeCoreSlugs\Admin\Page\Settings'    => '/inc/Admin/Page/Settings.php',
		'dimadin\WP\Plugin\ChangeCoreSlugs\Admin\PluginActionLink' => '/inc/Admin/PluginActionLink.php',
		'dimadin\WP\Plugin\ChangeCoreSlugs\Main'                   => '/inc/Main.php',
		'dimadin\WP\Plugin\ChangeCoreSlugs\Rewrite'                => '/inc/Rewrite.php',
		'dimadin\WP\Plugin\ChangeCoreSlugs\Settings'               => '/inc/Settings.php',
		'dimadin\WP\Plugin\ChangeCoreSlugs\SingletonTrait'         => '/inc/SingletonTrait.php',
	];

	if ( array_key_exists( $class, $pairs ) ) {
		include __DIR__ . $pairs[ $class ];
	}
}
spl_autoload_register( 'ccs_autoloader' );


/*
 * Initialize a plugin.
 *
 * Load class when all plugins are loaded
 * so that other plugins can overwrite it.
 */
add_action( 'plugins_loaded', [ 'dimadin\WP\Plugin\ChangeCoreSlugs\Main', 'get_instance' ], 15 );
