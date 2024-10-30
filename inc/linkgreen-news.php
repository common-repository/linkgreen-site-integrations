<?php

if( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

$url = "https://www.linkgreen.ca/wp-json/wp/v2/posts?per_page=2";
$json = file_get_contents($url);
$data = json_decode($json, true);

foreach( $data as $post ) {
  $titles = $post['title']['rendered'];
  $link = $post['link'];
  $date = date('F nS, Y', strtotime($post['date']));
  $excerpt = $post['excerpt']['rendered'];
?>

  <div class="post">
    <div class="date"><?php echo $date; ?> </div>
    <h4><a href="<?php echo $link; ?>"><?php echo $titles; ?></a></h4>
    <div class="excerpt"><?php echo $excerpt; ?></div>
  </div>

<?php } ?>

<div class="community-events-footer">
  <a href="https://linkgreen.ca/login" target="_blank">Login <span class="screen-reader-text">(opens in a new window)</span><span aria-hidden="true" class="dashicons dashicons-external"></span></a> |
  <a href="https://linkgreen.ca/community" target="_blank">Community <span class="screen-reader-text">(opens in a new window)</span><span aria-hidden="true" class="dashicons dashicons-external"></span></a>
</div>
