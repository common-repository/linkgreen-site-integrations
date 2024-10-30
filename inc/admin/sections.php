<?php if( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly ?>

<h2>Download The App</h2>

<img src="<?php echo $plugin_url; ?>/img/default-app-section.jpg" alt="Default app section with default settings.">

<pre><code>[linkgreen_sections]</code></pre>
<p>The basic shortcode includes these default settings: </p>
<ul>
  <li>section = "download_app"</li>
  <li>title = "Order From Our Current Availability On Your Mobile Or Tablet"</li>
  <li>title_color = "#FFF"</li>
  <li>bg_image = "/img/linkgreen-mobile-app-bg.jpg"</li>
  <li>bg_color = "rgba(116, 170, 80, 0.40)"</li>
  <li>btn_label => "Send"</li>
  <li>btn_color = "#000"</li>
  <li>btn_bg_color = "#91C43F"</li>
  <li>btn_icon_color = "#000"</li>
  <li>btn_border_color => "#58595B"</li>
</ul>

<h3>Title </h3>
<p>Reword the title displayed in the section. Default is "Order From Our Current Availability On Your Mobile Or Tablet".
<pre><code>[linkgreen_sections title="Download The App!"]</code></pre>

<h3>Background Image </h3>
<p>Choose a background image for the section. Default is "/wp-content/plugins/linkgreen-site-integrations/img/linkgreen-mobile-app-bg.jpg". </p>
<pre><code>[linkgreen_sections bg_img="http://url.com/image.jpg"]</code></pre>

<h3>Background Color </h3>
<p>Change the transparency and color of the background using HEX, RGBA or color name. Default is "rgba(116, 170, 80, 0.40)". </p>
<pre><code>[linkgreen_sections bg_color="rgba(0, 0, 0, 0.40)"]</code></pre>

<h3>Button Text Color </h3>
<p>Choose the button text color for each item by adding HEX, RGBA or color name. Default is "#FFF". </p>
<pre><code>[linkgreen_sections btn_color="#000"]</code></pre>

<h3>Button Border Color </h3>
<p>Choose the button border color for each item by adding HEX, RGBA or color name. Default is "#FFF". </p>
<pre><code>[linkgreen_sections btn_border_color="#000"]</code></pre>

<h3>Button Background Color </h3>
<p>Choose the button color for each item by adding HEX, RGBA or color name. Default is "#91C43F". </p>
<pre><code>[linkgreen_sections btn_bg_color="red"]</code></pre>
