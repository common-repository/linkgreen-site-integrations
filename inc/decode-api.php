<?php

$url = esc_url("https://app.linkgreen.ca/public/company/$linkgreen_site_api");
$file_headers = @get_headers($url);

  if($file_headers[0] == 'HTTP/1.1 404 Not Found' || $file_headers[0] == 'HTTP request failed!' || $file_headers[0] == 'HTTP/1.1 500 Internal Server Error') {
    die();
  } else {
    $json = file_get_contents($url);
    $companyData = json_decode($json, true);
    $index = 0;
  }

?>
