<?php
/*
Plugin Name: WPMVC Example Plugin
Plugin URI: http://edentic.dk/
Description: Example Plugin for WPMVC
Version: 1.0
Author: Edentic I/S
Author URI: http://edentic.dk
*/

/*
The MIT License (MIT)

Copyright (c) 2013 Edentic I/S

Permission is hereby granted, free of charge, to any person obtaining a copy of
this software and associated documentation files (the "Software"), to deal in
the Software without restriction, including without limitation the rights to
use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of
the Software, and to permit persons to whom the Software is furnished to do so,
subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS
FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR
COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER
IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN
CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
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


