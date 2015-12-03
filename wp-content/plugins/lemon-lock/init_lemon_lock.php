<?php
/**
*
* Plugin Name: Lemon Lock Advertisement
* Plugin URI: http://themebears.com
* Description: This plugin is Lock Debug and hot key on site. Show popup Advertisement for site.
* Version: 1.0.0
* Author: BEATS Theme
* Author URI: http://themebears.com
* Copyright 2015 themebears.com. All rights reserved.
*/

define( 'TB_DIR', plugin_dir_path(__FILE__) );
define( 'TB_URL', plugin_dir_url(__FILE__) );

define( 'TB_CSS', TB_URL . "css/" );
define( 'TB_JS', TB_URL . "js/" );
define( 'TB_IMAGES', TB_URL . "images/" );

register_deactivation_hook( __FILE__, 'LemonLockAdv_deactive' );
function LemonLockAdv_deactive() {
	delete_option('lemon_lock_copy');
	delete_option('lemon_lock_rightmouse');
	delete_option('lemon_lock_debug');
	delete_option('lemon_lock_controladv');
	delete_option('lemon_lock_popupadv');
}

function add_backend_script_LemonLockAdv() {
   
	wp_enqueue_style('lemonlock_css', TB_CSS . 'lemonlock_admin.css');
    
}

add_action('admin_enqueue_scripts', 'add_backend_script_LemonLockAdv');

add_action('wp_enqueue_scripts', 'add_frontend_script_LemonLockAdv');
function add_frontend_script_LemonLockAdv() {
	if ( ! is_admin() ) {
		wp_enqueue_script( 'jquery' );
		wp_enqueue_script('dynamics-lemon-lock-js',TB_JS.'dynamics.js', array( 'jquery' ) );
		wp_enqueue_script('lemon-lock-js',TB_JS.'ll.jquery.js', array( 'jquery' ) );
		wp_enqueue_style('lemonlock_css', TB_CSS . 'lemonlock.css');
		wp_enqueue_script('lemon-lock-js-run',TB_JS.'lemonlock.js', array( 'jquery' ) );
		wp_localize_script( 'lemon-lock-js-run', 'lockAdminObj', 
				array( 
					'lemonlockCopy' 		=> (get_option('lemon_lock_copy') == "yes") ? true : false,
					'lemonlockRightmouse' 	=> (get_option('lemon_lock_rightmouse') == "yes") ? true : false,
					'lemonlockDebug' 		=> (get_option('lemon_lock_debug') == "yes") ? true : false,
					'lemonlockControladv' 	=> (get_option('lemon_lock_controladv') == "1") ? true : false,
					'lemonlockPopupadv' 	=> get_option('lemon_lock_popupadv')
					) 
				);
    }
   
}

add_action( 'admin_menu', 'registerLemonLockAdv_MenuPage' );
function registerLemonLockAdv_MenuPage() {
	add_submenu_page( 'options-general.php', 'Lemon Lock Advertisement', 'Lemon Lock Advertisement', 'manage_options', 'setting-lemon-lock-adv', 'lemon_lock_adv_callback' );
}

function lemon_lock_adv_callback(){
	require_once plugin_dir_path( __FILE__ ) . 'templates/setting.php';
}

add_action('admin_init', 'lemon_lock_adv_Settings');

function lemon_lock_adv_Settings() {
  
	add_option("lemon_lock_copy", "", "", "yes");
	register_setting('lemon_lock_adv_option', 'lemon_lock_copy');
	
	add_option("lemon_lock_rightmouse", "", "", "yes");
	register_setting('lemon_lock_adv_option', 'lemon_lock_rightmouse');
	
	add_option("lemon_lock_debug", "", "", "yes");
	register_setting('lemon_lock_adv_option', 'lemon_lock_debug');
	
	add_option("lemon_lock_controladv", "", "", "yes");
	register_setting('lemon_lock_adv_option', 'lemon_lock_controladv');
	
	add_option("lemon_lock_popupadv", "", "", "yes");
	register_setting('lemon_lock_adv_option', 'lemon_lock_popupadv');

}


