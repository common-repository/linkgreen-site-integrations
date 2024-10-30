<?php

if( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

  if ($display_type == '') {
    $buttonLink = esc_attr('https://app.linkgreen.ca/login/login?db=' .$linkgreen_site_company->{"id"}. '');
    $buttonLabel = esc_attr("Login");
  } else {
    switch ($display_type) {
      case 'DownloadApp':
        $buttonLink = esc_attr('https://app.linkgreen.ca/login/login?db=' .$linkgreen_site_company->{"id"}. '');
        $buttonLabel = esc_attr("Login");
        break;
      case 'MobileApp':
        $buttonLink = esc_attr('https://app.linkgreen.ca/login/login?db=' .$linkgreen_site_company->{"id"}. '');
        $buttonLabel = esc_attr("Login");
        break;
    }
  }

?>

<?php

  if ($display_type = "MobileApp") {
    echo '<div id="mobile-app" style="background-image:url('.$display_bg_image.')">';
    echo '<div class="tint" style="background-color:'.$display_bg_color.'">';
    echo '<div class="section group">';
    echo '<div class="app-btns">';
    echo '<h2 style="color:' . $display_title_color . ';">';
    if ($display_title) {
      echo $display_title;
    } elseif ($display_title == "") {
      echo 'Order From '.$linkgreen_site_company->{'name'}.' <br /><span>Using LinkGreen Mobile&trade; Online Ordering Service.</span>';
    } else {
      echo $display_title;
    }
    echo '</h2>';
    echo '<a class="lg-app-button" href="https://play.google.com/store/apps/details?id=ca.linkgreen&hl=en&pcampaignid=MKT-Other-global-all-co-prtnr-py-PartBadge-Mar2515-1"><br>';
    echo '<img class="google-play" alt="Get it on Google Play" src="https://play.google.com/intl/en_us/badges/images/generic/en_badge_web_generic.png"/>';
    echo '</a>';
    echo '<a class="lg-app-button" href="https://itunes.apple.com/ca/app/linkgreen-buyer/id1158471802?mt=8" title="Download LinkGreen for iPhone">';
    echo '<svg class="apple-store" aria-hidden="true"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="'.$plugin_url.'/src/sprites/assets.svg#app-store"></use></svg>';  echo '</a>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
  }

  elseif ($display_type = "DownloadApp") {
    echo '<div id="lg-app" style="background-image:url('.$display_bg_image.')">';
    echo '<div class="tint" style="background-color:'.$display_bg_color.'">';
    echo '<div class="container">';
    echo '<div class="section group">';
    echo '<div class="col the-app">';
    echo '<div class="contain">';
    echo '<figure style="background-image:url('.$linkgreen_site_company->{"logo"}.');" class="lg-logo"></figure>';
    echo '<ul><li>Place Orders</li><li>Powerful Search</li><li>Access Current Inventory</li><li>Secure, Reliable &amp; Convinent... <a href="http://linkgreen.ca" title="LinkGreen Wholesale Platform">Learn More</a></li></ul>';
    echo do_shortcode('[linkgreen_button type="login"]');
    echo do_shortcode('[linkgreen_button type="register"]');
    echo '</div>';
    echo '</div>';
    echo '<div class="col app-btns">';
    echo '<h2 style="color:' . $display_title_color . ';">';
    if ($display_title) {
      echo $display_title;
    } elseif ($display_title == "") {
      echo 'Order From '.$linkgreen_site_company->{'name'}.' <br /><span>Using LinkGreen Mobile&trade; Online Ordering Service.</span>';
    } else {
      echo $display_title;
    }
    echo '</h2>';
    echo '<a class="button" href="https://play.google.com/store/apps/details?id=ca.linkgreen&hl=en&pcampaignid=MKT-Other-global-all-co-prtnr-py-PartBadge-Mar2515-1"><br>';
    echo '<img class="google-play" alt="Get it on Google Play" src="https://play.google.com/intl/en_us/badges/images/generic/en_badge_web_generic.png"/>';
    echo '</a>';
    echo '<a class="button" href="https://itunes.apple.com/ca/app/linkgreen-buyer/id1158471802?mt=8" title="Download LinkGreen for iPhone">';

    echo '<svg class="apple-store" aria-hidden="true"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="'.$plugin_url.'/src/sprites/assets.svg#app-store"></use></svg>';  echo '</a>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
  }

  else {
    echo '<div class="lg-error">The <strong>"section"</strong> does not exisit. Please view plugin documentation.</div>';
  }

?>
