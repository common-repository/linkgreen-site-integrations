<?php

if( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

  if ($display_feature == '') {

    $featuredLevel = esc_attr("Featured Products");
    $featuredLevel_link = esc_attr("Featured+Products");
    $featuredLevel_dir = esc_attr("featured");

  } else {

    switch ($display_feature) {

      case 'FeaturedProduct';
        $featuredLevel = esc_attr("Featured Products");
        $featuredLevel_link = esc_attr("Featured+Products");
        $featuredLevel_dir = esc_attr("featured");
        break;

      case 'NewProduct':
        $featuredLevel = esc_attr("New Products");
        $featuredLevel_link = esc_attr("New+Products");
        $featuredLevel_dir = esc_attr("new");
        break;

      case 'TopSellers':
        $featuredLevel = esc_attr("Top Sellers");
        $featuredLevel_link = esc_attr("Top+Sellers");
        $featuredLevel_dir = esc_attr("top");
        break;

      case 'OnSale':
        $featuredLevel = esc_attr("On Sale");
        $featuredLevel_link = esc_attr("On+Sale");
        $featuredLevel_dir = esc_attr("sale");
        break;

      case 'LookingGood':
        $featuredLevel = esc_attr("Looking Good");
        $featuredLevel_link = esc_attr("Looking+Good");
        $featuredLevel_dir = esc_attr("lookinggood");
        break;
    }
  }
?>

<?php if (isset($featuredLevel_dir)) { ?>

<script>
jQuery(document).ready(function() {
  var <?=$featuredLevel_dir?>LG = jQuery(".linkgreen-carousel-<?=$featuredLevel_dir?>");

  <?=$featuredLevel_dir?>LG.owlCarousel({
    loop: true,
    items: 4,
    itemsDesktop: [1100, 3],
    itemsDesktopSmall: [900, 3],
    itemsTablet: [750, 2],
    itemsMobile: [550, 1],
    pagination: false,
     autoPlay: 2500,

    autoHeight : true,
   autoplayHoverPause:true
  });
  jQuery(".<?=$featuredLevel_dir?>-right-arrow").click(function() {
    <?=$featuredLevel_dir?>LG.trigger('owl.next');
  })
  jQuery(".<?=$featuredLevel_dir?>-left-arrow").click(function() {
    <?=$featuredLevel_dir?>LG.trigger('owl.prev');
  });
});
</script>

<?php

  $url = esc_url('https://app.linkgreen.ca/public/' .$featuredLevel_dir. '/' .$linkgreen_site_company->{"id"}. '');
  $file_headers = @get_headers($url);
  error_log( print_r( $file_headers, true ) );
  if ($display_catalog_id > 0)
    $catalog_url_part = '&catalogid=' . $display_catalog_id;
  else
    $catalog_url_part = '';

  $url_pvt = esc_url('https://app.linkgreen.ca/login/login?db=' .$linkgreen_site_company->{"id"}. '&ReturnUrl=%2fVisualCatalog?id=0&supplierId=' .$linkgreen_site_company->{"id"}. '');
  $url_pub = esc_url('https://app.linkgreen.ca/VisualCatalog?id=0' .$catalog_url_part. '&supplierId=' . $linkgreen_site_company->{"id"} . '&filter=' . $featuredLevel_link . '');

    //if($file_headers[0] == 'HTTP/1.1 404 Not Found' || $file_headers[0] == 'HTTP request failed!' || $file_headers[0] == 'HTTP/1.1 500 Internal Server Error') {
    if ( strpos($file_headers[0], '200 OK') === false) {
      die();
    } else {

      $json = file_get_contents($url);
      $data = json_decode($json, true);
      $index = 0;

      echo '<div id="linkgreen-carousel-'. esc_attr(sanitize_html_class($featuredLevel_dir)) .'" class="linkgreen-carousel">';

      echo '<h2>'.$featuredLevel.'</h2>';
      if ($display_private == '0') {
        echo '<h4><a href="'.$url_pub.'">View all our '.$featuredLevel.' on LinkGreen Connect™</a></h4>';
      }
      if ($display_private == '1') {
        echo '<h4><a href="'.$url_pvt.'" title="View All '.$featuredLevel.'">View all our '.$featuredLevel.' on LinkGreen Connect™</a></h4>';
      }

      if ($display_nav == '1') {
        $item_height = ($display_image_size + 150) . "px";
        echo '<div class="customNavigation">';
        echo '<a class="' . $featuredLevel_dir . '-left-arrow"><i class="fa fa-angle-left" aria-hidden="true" style="background-color:' . $display_nav_color . '; border:2px solid ' . $display_button_border . '; color:' . $display_button_label_color .  '; height: '.$item_height.'"></i></a>';
        echo '<a class="' . $featuredLevel_dir . '-right-arrow"><i class="fa fa-angle-right" aria-hidden="true" style="background-color:' . $display_nav_color . '; border:2px solid ' . $display_button_border . '; color:' . $display_button_label_color .  '; height: '.$item_height.'"></i></a>';
        echo '</div>';
      }

      echo '<div class="linkgreen-carousel-' . $featuredLevel_dir . '">';

      foreach($data as $item => $product) {
        $string = esc_url($product['ImageUrl']);
        $patterns = array();
        $patterns[0] = '/GetImage/';
        $replacements = array();
        $replacements[0] = 'GetImageAtSize';
        $display_image_url = preg_replace($patterns, $replacements, $string);
        $display_image_url .= '?size=';
        $image_pad = ($display_image_size/2.3) . "px";
        $item_height = ($display_image_size + 150) . "px";

        echo '<div class="item" style="background-color:' . $display_item_color . '; height: '.$item_height.'">';
        echo '<img src="'. $display_image_url . $display_image_size . '" style="min-height:' . $display_image_size . 'px;">';
        if ($display_title == '1') {
          echo '<h3 style="color:' . $item_text_color . '; color:' . $display_item_text_color . ';">'. $product['Desc'] .'</h3>';
        }
        if ($display_button == '1') {
          if ($display_private == '0') {
            $the_button = '<a style="background-color:' . $display_button_color . '; border:2px solid ' . $display_button_border . '; color:' . $display_button_label_color .  '" class="btn" title="' . $display_button_label . '" href="'.$url_pub.'">';
          }
          if ($display_private == '1') {
            $the_button = '<a style="background-color:'.$display_button_color.'; border:2px solid ' . $display_button_border . '; color:' . $display_button_label_color .  '" class="btn" title="' . $display_button_label . '" href="'.$url_pvt.'">';
          }
          echo $the_button;
          echo $display_button_label . '</a>';
        }
        if ($display_sku == '1') {
          echo '<br /><span style="color:' . $display_item_text_color . ';">SKU: '. $product['Sku'] .'</span>';
        }
        echo '</div>';

        if ($display_all == '1') {
          if ($index % 3 == 0) {
            echo '<div class="item see-all" style="background-color:'.$display_item_color.'; height: '.$item_height.'">';
              echo '<h3 style="color:' . $item_text_color . ';">See Our Entire List of ' . $featuredLevel . '</h3>';
              if ($display_private == '0') {
                $the_button = '<a style="background-color:' . $display_button_color . '; border:2px solid ' . $display_button_border . '; color:' . $display_button_label_color .  '" class="btn" title="View All" href="'.$url_pub.'">';
              }
              if ($display_private == '1') {
                $the_button = '<a style="background-color:' . $display_button_color . '; border:2px solid ' . $display_button_border . '; color:' . $display_button_label_color .  '" class="btn" title="View All" href="'.$url_pvt.'">';
              }
              echo $the_button;
              echo 'View All</a>';
            echo '</div>';
          }
          $index++;
        }
      }
      echo '</div></div>';
    }
  ?>

<script>
jQuery(document).ready(function(){
  var size = jQuery("#linkgreen-carousel-<?=$featuredLevel_dir?> .item").length;
  if (size === 0)
  jQuery("#linkgreen-carousel-<?=$featuredLevel_dir?>").hide();
});
</script>

<?php } else {
  echo '<div class="lg-error">The "Feature Level" does not exisit. Please view plugin documentation.</div>'; } ?>
