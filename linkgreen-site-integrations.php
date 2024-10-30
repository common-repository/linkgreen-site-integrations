<?php
/*
Plugin Name: LinkGreen Site Integrations
Plugin URI: https://linkgreen.ca
Description: Display current product lists and more from LinkGreen.
Author: LinkGreen
Version: 1.4.4
*/

if( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

$plugin_url = WP_PLUGIN_URL . '/linkgreen-site-integrations';
$options = array();
$display_json = true;

$version_num = '1.4.4';

// add and display page on admin menu
function linkgreen_site_integrations_menu() {
  add_menu_page(
    'LinkGreen Site Integration',
    'LinkGreen',
    'manage_options',
    'linkgreen-site',
    'linkgreen_site_integrations_options_page'
  );
}
add_action('admin_menu', 'linkgreen_site_integrations_menu');

require_once( __DIR__ . '/inc/options-page.php');
require_once( __DIR__ . '/inc/register-id.php');
require_once( __DIR__ . '/inc/refresh-api.php');
require_once( __DIR__ . '/inc/enable-front-end-ajax.php');
require_once( __DIR__ . '/inc/shortcode/index.php');

function linkgreen_site_integrations_enqueue_script() {
  wp_enqueue_script( 'linkgreen-site-int-script', plugins_url( 'public/js/app.js', __FILE__ ), array('jquery'), '', true );
  wp_enqueue_style( 'linkgreen-site-int-style', plugins_url( 'public/css/admin.css', __FILE__ ) );
}
add_action('admin_enqueue_scripts', 'linkgreen_site_integrations_enqueue_script');

function linkgreen_site_integrations_enqueue_style() {
  wp_enqueue_style('linkgreen-site-int-style', plugins_url('public/css/app.css', __FILE__ ));
  wp_enqueue_style('linkgreen-site-int-fa', plugins_url('public/css/font-awesome.min.css', __FILE__ ));
  wp_enqueue_style('linkgreen-site-int-gallery', plugins_url('public/js/gallery.js', __FILE__ ));
  wp_enqueue_script('linkgreen-site-int-carousel', plugins_url('public/js/owl.carousel.min.js', __FILE__ ), array('jquery'), '', true );
  wp_enqueue_script('linkgreen-site-int-jq-ui', 'https://code.jquery.com/ui/1.12.1/jquery-ui.js', array('jquery'), '', true );
  wp_enqueue_script('linkgreen-site-int-jq-11', 'https://code.jquery.com/1.11.0.min.js', array('jquery'), '', true );
}
add_action('wp_enqueue_scripts', 'linkgreen_site_integrations_enqueue_style');

?>
