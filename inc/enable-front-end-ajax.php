<?php

  if( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

    function linkgreen_site_enable_frontend_ajax() {

  ?>

  <script>
    var ajaxurl = '<?php echo admin_url('admin-ajax.php'); ?>';
  </script>

<?php } add_action('wp_head', 'linkgreen_site_enable_frontend_ajax'); ?>
