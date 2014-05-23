<?php

/*
	Plugin Name: medfunctions
	Plugin URI: http://www.medialis.net/
	Description: medfunctions - Essential medialis.net Wordpress functions
	Version: 1.0
	Author: Raphael Zschorsch
	Author URI: http://www.medialis.net/
	Update Server: http://www.medialis.net/
	Min WP Version: 3.9.0
	Max WP Version: 4.0.0
*/

function medfunctions_register_settings() {
	register_setting( 'default', 'medfunctions_staging' );
	register_setting( 'default', 'medfunctions_live' ); 
} 
add_action( 'admin_init', 'medfunctions_register_settings' );

function medfunctions_register_options_page() {
	add_options_page('medialis.net Functions', 'medialis.net Functions', 'manage_options', 'medfunctions-options', 'medfunctions_options_page');
}
add_action('admin_menu', 'medfunctions_register_options_page');
 
function medfunctions_options_page() {
	include('admin/options.php');
}

/* Remove Admin Menus */
function remove_menus() {
    remove_menu_page('plugins.php');
    remove_menu_page('tools.php');
    
    remove_submenu_page('wpseo_dashboard', 'wpseo_files');
    remove_submenu_page('index.php', 'update-core.php');
}

function remove_menus2() {
  remove_submenu_page('themes.php', 'theme-editor.php');
}

if($_SERVER['SERVER_NAME'] == get_option('medfunctions_staging') || $_SERVER['SERVER_NAME'] == get_option('medfunctions_live')) {
    add_action('admin_menu', 'remove_menus');
    add_action('admin_init', 'remove_menus2');
}

?>