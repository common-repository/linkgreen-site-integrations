<?php if( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly  ?>

<?php if ($linkgreen_site_api == '' ) {

  include ("connect.php");

 } else { ?>

<h2>Buttons </h2>
<div class="notice notice-info">
  <p>The "<strong>type</strong>" parameter is required to display a button.</p>
</div>

<h3>Shortcode Options</h3>
<h4>Login </h4>
<?php echo do_shortcode('[linkgreen_button type="login"]'); ?>
<pre><code>[linkgreen_button type="login"]</code></pre>

<h4>Register </h4>
<?php echo do_shortcode('[linkgreen_button type="register"]'); ?>
<pre><code>[linkgreen_button type="register"]</code></pre>

<h4>Catalog </h4>
<p>The default catalog view is "category":</p>
<?php echo do_shortcode('[linkgreen_button type="catalog"]'); ?>
<pre><code>[linkgreen_button type="catalog"]</code></pre>

<p>These are the available catalog views: </p>
<ul>
  <li><pre><code>[linkgreen_button type="catalog" catalog="category"]</code></pre></li>
  <li><pre><code>[linkgreen_button type="catalog" catalog="detail"]</code></pre></li>
  <li><pre><code>[linkgreen_button type="catalog" catalog="list"]</code></pre></li>
  <li><pre><code>[linkgreen_button type="catalog" catalog="summary"]</code></pre></li>
</ul>

<h3>Customizations </h3>
<p>Default button settings:</p>
<ul>
  <li>color = "#FFF"</li>
  <li>bg_color = "#91C43F"</li>
  <li>size = "medium"</li>
  <li>icon = "on"</li>
  <li>catalog = "category"</li>
</ul>
<ul>
  <li><h4>Text Color</h4>
  <p>Choose the button text color for each item by adding HEX, RGBA or color name. Default is "#FFF". </p>
  <p>Example:</p>
  <pre><code>[linkgreen_button type="login" <strong>color="red"</strong>]</code></pre></li>
  <?php echo do_shortcode('[linkgreen_button type="login" color="red"]'); ?>
  <li><h4>Background Color</h4>
  <p>Choose the button color for each item by adding HEX, RGBA or color name. Default is "#91C43F". </p>
  <p>Example:</p>
  <pre><code>[linkgreen_button type="login" color="red" <strong>bg_color="yellow"</strong>]</code></pre></li>
  <?php echo do_shortcode('[linkgreen_button type="login" color="red" bg_color="yellow"]'); ?>
  <li><h4>Size</h4>
  <p>Choose a class from "small", "medium", and "large". Default is "medium"</p>
  <p>Example:</p>
  <pre><code>[linkgreen_button type="login" color="red" bg_color="yellow" <strong>size="large"</strong>]</code></pre></li>
  <?php echo do_shortcode('[linkgreen_button type="login" color="red" bg_color="yellow" size="large"]'); ?>
  <li><h4>Label</h4>
  <p>Rename the button label. Default label depends on button type. </p>
  <p>Example:</p>
  <pre><code>[linkgreen_button type="login" color="red" bg_color="yellow" size="large" <strong>label="Login To LinkGreen"</strong>]</code></pre></li>
  <?php echo do_shortcode('[linkgreen_button type="login" color="red" bg_color="yellow" size="large" label="Login To LinkGreen"]'); ?>
</ul>
<!--
<h3>Category </h3>
<p>Available categories from <strong><?php echo sanitize_text_field($linkgreen_site_company->{'name'}); ?></strong></p>
<div style="padding: 20px; max-height: 100px; overflow:auto; -webkit-columns: 150px 3; -moz-columns: 150px 3; columns: 150px 3;">
  <?php foreach($apiData['Result'] as $category) {
    echo $category['Name'] ."<br />";
  } ?>
</div>
<pre><code>[linkgreen_button type="category" category="<strong>The Category Name"]</code></pre>

<h2>Customizations For All Button Types </h2>

<ul>
 <li>Color <br />
 <pre><code>[linkgreen_button color="#000"]</code></pre></li>
 <li>Background <br />
 <pre><code>[linkgreen_button bg_color="#000"]</code></pre></li>
 <li>Size <br />
   <ul>
     <li>small</li>
     <li>medium</li>
     <li>large</li>
   </ul>
   <pre><code>[linkgreen_button size="small"]</code></pre>
 </li>
</ul>

-->

<?php } ?>
