<?php

if( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

// admin options page
function linkgreen_site_integrations_options_page(){

  if( !current_user_can('manage_options')) {
    wp_die('You do not have sufficient permissions to access this page.');
  }

  global $plugin_url;
  global $options;
  global $display_json;
  global $carousel_url;
  global $version_num;

  if(isset($_POST['linkgreen_site_settings_saved'])) {
    $hidden_field = sanitize_text_field($_POST['linkgreen_site_settings_saved']);

    if($hidden_field == 'Y') {
      $linkgreen_site_api = sanitize_key($_POST['linkgreen_site_api']);

      $linkgreen_site_company = linkgreen_site_company_api($linkgreen_site_api);

      $options['linkgreen_site_api'] = $linkgreen_site_api;
      $options['linkgreen_site_company'] = $linkgreen_site_company;
      $options['last_updated'] = time();
      update_option('linkgreen_site', $options);
    }
  }
  $options = get_option('linkgreen_site');

  if ($options != '') {
    $linkgreen_site_api = $options['linkgreen_site_api'];
    $linkgreen_site_id = $options['linkgreen_site_api'];
    $linkgreen_site_company = $options['linkgreen_site_company'];
  }
  require('admin/index.php');
}

?>
