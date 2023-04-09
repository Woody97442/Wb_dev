<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://wordpress.com
 * @since             1.0.0
 * @package           Disclaimer_Eu
 *
 * @wordpress-plugin
 * Plugin Name:       eu-disclaimer
 * Plugin URI:        https://wordpress.com
 * Description:       Affiche un disclaimer plus de 18 ans sur le site
 * Version:           1.0.0
 * Author:            Wood Brian
 * Author URI:        https://wordpress.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       disclaimer-eu
 * Domain Path:       /languages
*/

use Woody\DisclaimerEu\DisclaimerEuPlugin;

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

define('WOODY_PLUGIN_DIR', plugin_dir_path(__FILE__));

require WOODY_PLUGIN_DIR . "vendor/autoload.php";

$plugin = new DisclaimerEuPlugin(__FILE__);