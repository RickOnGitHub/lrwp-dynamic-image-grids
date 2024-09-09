<?php

/**
 * Plugin Name:         Dynamic Image Grids
 * Plugin URI:          https://github.com/RickOnGitHub/lrwp-dynamic-image-grids
 * Description:         Laurens & Rick Dynamic Image Grids
 * Version:             1.0.0
 * Requires at least:   6.0.0
 * Tested up to:        6.2.2
 * Requires PHP:        8.0.0
 * Author:              Laurens & Rick
 * Author URI:          https://github.com/RickOnGitHub/lrwp-dynamic-image-grids
 * License:             GPL-2.0
 * Text Domain:         lrwp-dynamic-image-grids
 * Domain Path:         /languages
 */

/**
 * If this file is being executed directly, terminate the program.
 */
if (!defined('WPINC')) {
    die();
}

/**
 * Current plugin version
 */
define('LRWP_VERSION', '1.0.0');

/**
 * Plugin root file
 */
define('LRWP_PLUGIN_FILE', __FILE__);

/**
 * Plugin base
 */
define('LRWP_PLUGIN_BASE', plugin_basename(LRWP_PLUGIN_FILE));

/**
 * Plugin Folder Path
 */
define('LRWP_PLUGIN_DIR', plugin_dir_path(LRWP_PLUGIN_FILE));

/**
 * Plugin Folder URL
 */
define('LRWP_PLUGIN_URL', plugin_dir_url(LRWP_PLUGIN_FILE));

/**
 * Core file of the plugin
 */
require plugin_dir_path(__FILE__) . 'includes/lrwp-main.php';

/**
 * Execute plugin
 */
function lrwp_start_plugin()
{
    $plugin = new LRWP_Main();
    $plugin->start();
}
lrwp_start_plugin();
