<?php

if( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

function linkgreen_site_refresh_api() {
  $options = get_option('linkgreen_site');
  $last_updated = $options['last_updated'];

  $current_time = time();

  $update_difference = $current_time - $last_updated;

  if($update_difference > 86400) {
    $linkgreen_site_id = $options['linkgreen_site_id'];
    $options['linkgreen_site_company'] = linkgreen_site_company_api($linkgreen_site_company);
    $options['last_updated'] = time();

    update_option('linkgreen_site', $options);
  }
  die();
}
add_action('wp_ajax_linkgreen_site_refresh_api', 'linkgreen_site_refresh_api');

?>
