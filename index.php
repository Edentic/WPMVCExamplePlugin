<?php
/*
Plugin Name: WPMVC Example Plugin
Plugin URI: http://edentic.dk/
Description: Example Plugin for WPMVC
Version: 1.0
Author: Edentic I/S
Author URI: http://edentic.dk
*/

/**
 * ================
 * File description
 * ================
 * This is the main file of the plugin, and the first file that gets loaded when plugin is activated.
 * The file loads in the main plugin file and WPMVC for checking it exists and is active.
 * If both are true we load the WPMVC framework if not already included, and loads in the router file.
 *
 * This file can be used as template for all plugins using WPMVC framework.
 */

/** WPMVC Integration Check **/
include_once( ABSPATH . 'wp-admin/includes/plugin.php' ); //Loading in WP plugin file for using is_plugin_inactive() function
$wpmvcFile = WP_PLUGIN_DIR. '/WPMVC/index.php'; //Setting path to WPMVC index file
if(\is_plugin_inactive('WPMVC/index.php') || file_exists($wpmvcFile) == false) { //Checking if WPMVC is inactive or not exists
    if(!function_exists('WPMVC_NOT_Loaded')) {
        function WPMVC_NOT_Loaded() {
            echo "<div class='error'>WPMVC has not been installed or active</div>";
        }

        add_action('admin_notices', 'WPMVC_NOT_Loaded'); //Show an error message to user if WPMVC not has been loaded.
    }
} else {
    include_once $wpmvcFile;
    include_once "router.php";
}


