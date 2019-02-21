<?php
/*
Plugin Name: Google Tag Manager Snippets
Plugin URI: https://github.com/MWDelaney/google-tag-manager-insert
Description: Options pages and Advanced Custom Fields to insert Google Tag Manager snippets into your WordPress site
Version: 1.0
Author: Michael W. Delaney
Author URI: https://github.com/MWDelaney/
*/
namespace MWD\GTMSnippets;

/**
 * Set up autoloader
 */
require __DIR__ . '/vendor/autoload.php';

/**
* Define Constants
*/
define('GTMSNIPPETS_PLUGIN_DIR', plugin_dir_path(__FILE__));
define('GTMSNIPPETS_PLUGIN_URL', plugin_dir_url(__FILE__));

// Initialize plugin classes
$gtmsnippets_init = new Init();
$gtmsnippets_hfs_fields = new Fields();
