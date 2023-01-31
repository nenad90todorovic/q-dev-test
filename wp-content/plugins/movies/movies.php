<?php

	/**
	 * Plugin Name:       Movies
	 * Description:       Movies plugin - a plugin created for purposes of Q testing.
	 * Requires at least: 6.1
	 * Requires PHP:      7.0
	 * Version:           0.1.0
	 * Author:            Nenad Todorovic
	 * License:           GPL-2.0-or-later
	 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
	 * Text Domain:       movies
	 */

	// exit if file is called directly
	if ( ! defined( 'ABSPATH' ) ) { exit; }

	// plugin assets
	require_once plugin_dir_path( __FILE__ ) . 'features/custom-post-types.php';
	require_once plugin_dir_path( __FILE__ ) . 'features/meta-boxes.php';
	require_once plugin_dir_path( __FILE__ ) . 'features/custom-blocks.php';

?>