<?php if( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

if ($linkgreen_site_api == '' ) {

    include ("connect.php");

 } else { ?>
<!--
<h3>Script Usage</h3>
<p>Uncheck the scripts below to avoid duplicates or conflicts: </p>

<form name="linkgreen_site_settings" method="post" action="">
  <label for="fontawesome">Icon</label>
  <input type="checkbox" value="1" name="fontawesome" <?php if(isset($_POST['fontawesome'])) echo 'checked="checked"'; ?> />
  <label for="owlcarousel">Carousel</label>
  <input type="checkbox" value="1" name="owlcarousel" <?php if(isset($_POST['owlcarousel'])) echo 'checked="checked"'; ?> />
  <input class="button-primary" type="submit" value="Submit" />
</form>
-->
<h3>Select Items</h3>
<ol>
  <li>Login and view your <a href="https://app.linkgreen.ca/SupplierProduct/Catalogue" title="LinkGreen Dashboard Catalog">LinkGreen catalog</a></li>
  <li>Beside an item select the button "View / Edit" </li>
  <li>Select a "Feature Level" and save</li>
  <li>Add the shortcode into your pages or posts: <br />
    The example will display New Products, hides the SKU and make the background color of the item descriptions gray. <br />
    <pre><code>[linkgreen_carousel feature="NewProduct" sku="off" item_color="#CCC"]</code></pre>
  </li>
</ol>

<h3>Basic Shortcode </h3>
<img src="<?php echo $plugin_url; ?>/img/default-carousel.jpg" alt="Default carousel appearance with default settings.">
<pre><code>[linkgreen_carousel]</code></pre>
<p>The basic shortcode includes these default settings: </p>
<ul>
  <li>feature = "FeaturedProduct"</li>
  <li>item_color = "#91C43F"</li>
  <li>item_text_color = "#000"</li>
  <li>title = "on"</li>
  <li>sku = "on"</li>
  <li>catalog_id = ""</li>
  <li>button = "on"</li>
  <li>button_label = "Order"</li>
  <li>button_color = "#91C43F"</li>
  <li>button_border = "#FFF"</li>
  <li>nav = "on"</li>
  <li>nav_color = "#91C43F"</li>
  <li>all = "on"</li>
</ul>

<h3>Shortcode Options </h3>
<p>The parameters below can be added to the basic shortcode displayed above. </p>
<h4>Feature Level </h4>
<p>There is a limit of 20 items pulled from LinkGreen for each Feature Level. </p>
<strong>The available feature levels on LinkGreen: </strong>
<ul>
  <li><strong>Default:</strong> FeaturedProduct </li>
  <li>NewProduct </li>
  <li>TopSellers </li>
  <li>OnSale </li>
  <li>LookingGood </li>
</ul>

<pre><code>[linkgreen_carousel feature="LookingGood"]</code></pre>

<h4>Item </h4>
<ul>
  <li>
    <h4>Image Size </h4>
    <p>Increase or decrease the size of the product images. Default is "250" (which is max-width or max-height or 250px). </p>
    <pre><code>[linkgreen_carousel image_size="200"]</code></pre>
  </li>
  <li>
    <h4>Background Color </h4>
    <p>Choose the item background color by adding HEX, RGBA or color name. Default is "#91C43F". </p>
    <pre><code>[linkgreen_carousel item_color="#CCC"]</code></pre>
  </li>
  <li>
    <h4>Text Color </h4>
    <p>Choose the item text color by adding HEX, RGBA or color name. Default is "#000". </p>
    <pre><code>[linkgreen_carousel item_text_color="#FFF"]</code></pre>
  </li>
</ul>

<h4>Title </h4>
<p>Displays the title of the item. Default is on. </p>
<pre><code>[linkgreen_carousel title="on"]</code></pre>

<h4>SKU </h4>
<p>Displays the item SKU. Default is on. </p>
<pre><code>[linkgreen_ carousel sku="off"]</code></pre>

<h4>Button </h4>
<p>Displays a button for each item and is linked to the Feature Level. Default is on. </p>
<pre><code>[linkgreen_carousel button="off"]</code></pre>
<ul>
  <li><h4>Label</h4>
  <p>Edit the button label for each item. Default is "Order". </p>
  <pre><code>[linkgreen_carousel button_label="Details"]</code></pre></li>
  <li><h4>Text Color</h4>
  <p>Choose the button text color for each item by adding HEX, RGBA or color name. Default is "#000". </p>
  <pre><code>[linkgreen_carousel button_label_color="white"]</code></pre></li>
  <li><h4>Background Color</h4>
  <p>Choose the button color for each item by adding HEX, RGBA or color name. Default is "#91C43F". </p>
  <pre><code>[linkgreen_carousel button_color="red"]</code></pre></li>
  <li><h4>Border Color</h4>
  <p>Choose the button border color for each item by adding HEX, RGBA or color name. Default is "#FFF". </p>
  <pre><code>[linkgreen_carousel button_border="rgba(0,0,0,0.5)"]</code></pre></li>
</ul>

<h4>Private Product Links </h4>
<p>Redirects product links to supplier login page. After signing in, page will redirect to catalog. Default is off. </p>
<pre><code>[linkgreen_carousel private="on"]</code></pre>

<h4>Navigation </h4>
<p>Displays the carousel navigation to scroll items. Default is on. </p>
<pre><code>[linkgreen_carousel nav="off"]</code></pre>

<p>Background color for navigation buttons:</p>
<pre><code>[linkgreen_carousel nav_color="#000"]</code></pre>


<h4>Call-To-Action </h4>
<p>Every third item will display a CTA to view all items on LinkGreen. The button is linked to the Feature Level. Default is on. </p>
<pre><code>[linkgreen_carousel all="off"]</code></pre>

<?php } ?>
