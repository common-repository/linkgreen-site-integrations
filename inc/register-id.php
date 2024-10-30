<?php

if( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

global $linkgreen_site_company;

// linkgreen company info
// using wp_remote_get function to get api
function linkgreen_site_company_api($linkgreen_site_api) {
  $company_url = 'https://app.linkgreen.ca/public/company/' . $linkgreen_site_api . '';
  $args = array('timeout' => 120);

  $company_feed = wp_remote_get($company_url, $args);

  if (!$linkgreen_site_api) {
  } else {
    $linkgreen_site_company = json_decode($company_feed['body']);
    return $linkgreen_site_company;
  }
}

?>
