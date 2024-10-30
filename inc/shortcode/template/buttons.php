<?php

if( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

  if ($display_type == null) {
    echo '<div class="lg-error">The <strong>"button type"</strong> does not exisit. Please view plugin documentation.</div>';
  } else {
    switch ($display_type) {
      case 'login':
        $buttonLink = esc_attr('https://app.linkgreen.ca/login/login?db=' . $linkgreen_site_company->{"id"} . '');
        $buttonLabel = esc_attr("Login");
        break;
      case 'register':
        $buttonLink = esc_attr('https://app.linkgreen.ca/try?db=' . $linkgreen_site_company->{"id"} . '');
        $buttonLabel = esc_attr("Register");
        break;
      case 'catalog':
        if ($display_catalog == null) {
          die ('<div class="lg-error">The <strong>"catalog type"</strong> does not exisit. Please view plugin documentation.</div>');
        } else {
          switch ($display_catalog) {
            case 'category':
              $buttonLabel = esc_attr("View Catalog In Category View");
              $buttonLink = esc_attr('https://app.linkgreen.ca/VisualCatalog?id=0&buyerId=0&supplierId=' . $linkgreen_site_company->{"id"} . '&orderId=&catalogId=');
              break;
            case 'detail':
              $buttonLabel = esc_attr("View Catalog In Detail View");
              $buttonLink = esc_attr('https://app.linkgreen.ca/createOrder?supplierId=' . $linkgreen_site_company->{"id"} . '&view=detailed');
              break;
            case 'list':
              $buttonLabel = esc_attr("View Catalog In List View");
              $buttonLink = esc_attr('https://app.linkgreen.ca/createOrder?supplierId=' . $linkgreen_site_company->{"id"} . '&view=list');
              break;
            case 'summary':
              $buttonLabel = esc_attr("View Catalog In Summary View");
              $buttonLink = esc_attr('https://app.linkgreen.ca/createOrder?supplierId=' . $linkgreen_site_company->{"id"} . '&view=summary');
              break;
            default:
              echo '<div class="lg-error">The <strong>"catalog type"</strong> does not exisit. Please view plugin documentation.</div>';
              break;
          }
        }
        break;
      case 'category':
        if ($display_category !== "") {
          die ('<div class="lg-error">The <strong>"category"</strong> does not exisit. Please view plugin documentation.</div>');
        } else {
          switch ($display_category) {
            case 'asdf':
              $buttonLabel = esc_attr("View Catalog In Category View");
              $buttonLink = esc_attr('https://app.linkgreen.ca/VisualCatalog?id=0&buyerId=0&supplierId=' . $linkgreen_site_company->{"id"} . '&orderId=&catalogId=');
              break;
            case 'detail':
              $buttonLabel = esc_attr("View Catalog In Detail View");
              $buttonLink = esc_attr('https://app.linkgreen.ca/createOrder?supplierId=' . $linkgreen_site_company->{"id"} . '&view=detailed');
              break;
            case 'list':
              $buttonLabel = esc_attr("View Catalog In List View");
              $buttonLink = esc_attr('https://app.linkgreen.ca/createOrder?supplierId=' . $linkgreen_site_company->{"id"} . '&view=list');
              break;
            case 'summary':
              $buttonLabel = esc_attr("View Catalog In Summary View");
              $buttonLink = esc_attr('https://app.linkgreen.ca/createOrder?supplierId=' . $linkgreen_site_company->{"id"} . '&view=summary');
              break;
            default:
              echo '<div class="lg-error">The <strong>"category"</strong> does not exisit. Please view plugin documentation.</div>';
              break;
          }
        }
        break;
      default:
        die ('<div class="lg-error">The <strong>"button type"</strong> does not exisit. Please view plugin documentation.</div>');
        break;
    }
  }

?>

<?php

  if (!isset($buttonLink) || !isset($buttonLabel)) {
  } elseif ($display_type = "login" || $display_type = "register" || $display_type = "catalog" || $display_type = "category") {
    echo "<a href='$buttonLink'>";
    echo '<button class="linkgreen-btn '. $display_size . '" style="color: ' . $display_color . '; background-color: ' . $display_bg_color . ';">';
    if ($display_label != null) {
      echo $display_label;
    } else {
      echo isset($buttonLabel) ? $buttonLabel : '';
    }
    echo '</button></a>';
  } else {
    die ('<div class="lg-error">The button type does not exisit. Please view plugin documentation.</div>');
  }

?>
