<?php
/**
 * Digital Traction starter-theme
 * https://github.com/timber/starter-theme
 */

$includes = array(
	'customizer',
	'enqueue',
	'TractionSite',
	'navigation',
);

// Include files.
foreach ( $includes as $file ) {
	require_once get_theme_file_path( 'inc/' . $file . '.php' );
}

Timber\Timber::init();

// Sets the directories (inside your theme) to find .twig files.
Timber\Timber::$dirname = array( 'templates', 'views' );

new TractionSite();
