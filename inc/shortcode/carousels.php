<?php

if( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

function linkgreen_carousel_shortcode( $atts = array(), $content = null, $tag) {

  global $post;

  extract(shortcode_atts(array(
    'feature' => 'FeaturedProduct',
    'title' => 'on',
    'sku' => 'on',
    'catalog_id' => '',
    'button' => 'on',
    'button_label' => 'Order',
    'button_label_color' => '#FFF',
    'button_color' => '#91C43F',
    'button_border' => '#FFF',
    'item_color' => '',
    'item_text_color' => '#000',
    'image_size' => '175',
    'nav' => 'on',
    'nav_color' => '#91C43F',
    'all' => 'on',
    'private' => 'off'
  ), $atts));

  // attributes
  if($title == 'on') $title = 1;
  if($title == 'off') $title = 0;
  if($sku == 'on') $sku = 1;
  if($sku == 'off') $sku = 0;
  if($button == 'on') $button = 1;
  if($button == 'off') $button = 0;
  if($button_label == '') $button_label = '';
  if($button_label_color == '') $button_label_color = '';
  if($button_color == '') $button_color = '';
  if($button_border == '') $button_border = '';
  if($item_color == '') $item_color = '';
  if($item_text_color == '') $item_text_color = '';
  if($image_size == '') $image_size = '';
  if($all == 'on') $all = 1;
  if($all == 'off') $all = 0;
  if($private == 'on') $private = 1;
  if($private == 'off') $private = 0;
  if($nav == 'on') $nav = 1;
  if($nav == 'off') $nav = 0;
  if($nav_color == '') $nav_color = '';
  if($feature == 'FeaturedProduct') $feature = 'FeaturedProduct';
  if($feature == 'NewProduct') $feature = 'NewProduct';
  if($feature == 'TopSellers') $feature = 'TopSellers';
  if($feature == 'OnSale') $feature = 'OnSale';
  if($feature == 'LookingGood') $feature = 'LookingGood';

  $display_title = esc_attr($title);
  $display_all = esc_attr($all);
  $display_sku = esc_attr($sku);
  $display_nav = esc_attr($nav);
  $display_button = esc_attr($button);
  $display_button_label = esc_attr($button_label);
  $display_button_label_color = esc_attr($button_label_color);
  $display_button_color = esc_attr($button_color);
  $display_button_border = esc_attr($button_border);
  $display_nav_color = esc_attr($nav_color);
  $display_item_color = esc_attr($item_color);
  $display_item_text_color = esc_attr($item_text_color);
  $display_feature = esc_attr($feature);
  $display_image_size = absint($image_size);
  $display_private = absint($private);
  $display_catalog_id = absint($catalog_id);

  $options = get_option('linkgreen_site');
  $linkgreen_site_company = $options['linkgreen_site_company'];

  ob_start();
  require('template/carousels.php');
  $content = ob_get_clean();
  return $content;
}
add_shortcode('linkgreen_carousel', 'linkgreen_carousel_shortcode');

?>
