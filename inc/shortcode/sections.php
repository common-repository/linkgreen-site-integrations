<?php

if( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

function linkgreen_section_shortcode( $atts = array(), $content = null, $tag) {

  global $post;
  global $plugin_url;
  global $linkgreen_site_company;

  extract(shortcode_atts(array(
    'type' => 'MobileApp',
    'title' => '',
    'title_color' => '#FFF',
    'bg_image' => "$plugin_url/img/linkgreen-wholesale-platform.jpg",
    'bg_color' => 'rgba(116, 170, 80, 0.40)',
    'btn_label' => 'Send',
    'btn_color' => '#FFF',
    'btn_bg_color' => '#000',
    'btn_border_color' => '#58595B',
  ), $atts));

  // attributes
  if($type == 'DownloadApp') $type = 'DownloadApp';
  if($type == 'MobileApp') $type = 'MobileApp';

  $display_type = esc_attr($type);
  $display_title = esc_attr($title);
  $display_title_color = esc_attr($title_color);
  $display_bg_image = esc_attr($bg_image);
  $display_bg_color = esc_attr($bg_color);
  $display_btn_label = esc_attr($btn_label);
  $display_btn_color = esc_attr($btn_color);
  $display_btn_bg_color = esc_attr($btn_bg_color);
  $display_btn_border_color = esc_attr($btn_border_color);

  $options = get_option('linkgreen_site');
  $linkgreen_site_company = $options['linkgreen_site_company'];

  ob_start();
  require("template/sections.php");
  $content = ob_get_clean();
  return $content;
}
add_shortcode('linkgreen_section', 'linkgreen_section_shortcode');

?>
