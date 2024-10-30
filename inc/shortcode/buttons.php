<?php

if( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

function linkgreen_button_shortcode( $atts = array(), $content = null, $tag) {

  global $post;

  extract(shortcode_atts(array(
    'type' => '',
    'label' => '',
    'color' => '#FFF',
    'bg_color' => '#91C43F',
    'size' => 'medium',
    'icon' => 'on',
    'catalog' => 'category',
    'category' => ''
  ), $atts));

  // attributes
  if($type == 'login') $type = 'login';
  if($type == 'register') $type = 'register';
  if($type == 'catalog') $type = 'catalog';
  if($type == 'category') $type = 'category';

  $display_type = esc_attr($type);
  $display_label = esc_attr($label);
  $display_color = esc_attr($color);
  $display_bg_color = esc_attr($bg_color);
  $display_size = esc_attr($size);
  $display_icon = esc_attr($icon);
  $display_catalog = esc_attr($catalog);
  $display_category = esc_attr($category);

  $options = get_option('linkgreen_site');
  $linkgreen_site_company = $options['linkgreen_site_company'];

  ob_start();
  require("template/buttons.php");
  $content = ob_get_clean();
  return $content;
}
add_shortcode('linkgreen_button', 'linkgreen_button_shortcode');

?>
