<?php
/*
Plugin Name: yf Prestashop stores
Description: WordPress Plugin show Prestashop stores
Version:     1.0
Author:      yvon wu
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: wporg
 */

function enqueus_js() {
	wp_enqueue_script('script1', plugin_dir_url(__FILE__) . 'js/stores.js');

}
function enqueus_css() {
	wp_enqueue_style('style1', plugin_dir_url(__FILE__) . 'css/stores.css');

}