<?php

  $secret = $linkgreen_site_api;
  $host = 'https://api.linkgreen.ca';

  // build path
  $opName ='categoryservice';
  $method = 'getall';
  $path = "$host/$opName/rest/$method/$secret";

  // initiate curl
  $ch = curl_init();

  curl_setopt($ch, CURLOPT_URL, $path);
  curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
  curl_setopt($ch, CURLOPT_HTTPHEADER, array('Accept:application/json'));
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  $data = curl_exec($ch);
  $headers = curl_getinfo($ch);

  // close curl
  curl_close($ch);

  $apiData = json_decode($data, true);

  // return XML data
  if ($headers['http_code'] != '200') {
  return false;
  } else {
   return($apiData);
   echo $apiData;
  }

?>
