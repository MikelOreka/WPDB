<?php
/*
  Plugin Name: WPDB
  Plugin URI: https://github.com/MikelOreka
  Description:
  Author: Mikel Alonso
  Version: 1.0.0
  Author URI: https://github.com/MikelOreka
 */
include "functions.php";
global $wpdb;

function modificar_menu() {
//	global $menu;
    //this is the main item for the menu
    add_menu_page('WPDB', //page title
            'WPDB', //menu title
            'manage_options', //capabilities
            'Database_Manager', //menu slug
            'modificar_menu' //function
    );
    add_submenu_page("Database_Manager", "options", "options", "manage_options", "options", "pintar");
    indexForm();
}

add_action('admin_menu', 'modificar_menu');

add_action('WPDB', 'pintar');

add_action('Database_Manager', 'pintar');
