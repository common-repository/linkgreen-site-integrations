<?php if( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
 ?>

<div id="lgs-settings" class="row">

  <div class="col section">

    <h2>Getting Started</h2>

    <?php
      $url = esc_url("https://app.linkgreen.ca/public/company/$linkgreen_site_api");
      $file_headers = @get_headers($url);
      if ($file_headers[0] == 'HTTP/1.1 404 Not Found' || $file_headers[0] == 'HTTP request failed!' || $file_headers[0] == 'HTTP/1.1 500 Internal Server Error') {
    ?>
      <div class="notice notice-error">
        <h4>Not connected to LinkGreen. <br />
        Please visit your <a href="https://app.linkgreen.ca/Login/Manage#tabsApiKey" title="API Key and Company ID">LinkGreen settings</a> to find the information below. </h4>
      </div>
    <?php } else {
        $json = file_get_contents($url);
        $companyData = json_decode($json, true);
        $index = 0;
      ?>
      <div class="notice notice-success">
        <p>Connected as <strong><?php echo $companyData['name']; ?></strong></p>
      </div>
    <?php } ?>
    <form name="linkgreen_site_settings" method="post" action="">
      <input type="hidden" name="linkgreen_site_settings_saved" value="Y">
      <label for="linkgreen_site_api">
        <h3>API Key:</h3>
      </label>
      <input name="linkgreen_site_api" type="text" value="<?php echo sanitize_text_field($linkgreen_site_api); ?>" />
      <input class="button-primary" type="submit" name="Save Settings" value="Save Settings" />
    </form>
  </div>

</div><!-- #lgs-settings -->
