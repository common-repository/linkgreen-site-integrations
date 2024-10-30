  <!-- main content -->
  <div id="post-body-content">
    <div class="meta-box-sortables ui-sortable">
      <div class="postbox">
        <div class="inside">

          <?php

            function page_tabs( $current = 'settings' ) {
              $tabs = array(
                'settings'   => __( 'Settings', 'plugin-textdomain' ),
                'carousel'  => __( 'Carousel', 'plugin-textdomain' ),
                'buttons'  => __( 'Buttons / Links', 'plugin-textdomain' ),
                'sections'  => __( 'Sections', 'plugin-textdomain' )
              );
              $html = '<div class="nav-tab-wrapper">';
              foreach( $tabs as $tab => $name ){
                $class = ( $tab == $current ) ? 'nav-tab-active' : '';
                $html .= '<a class="nav-tab ' . esc_attr(sanitize_html_class($class)) . '" href="?page=linkgreen-site&tab=' . $tab . '">' . $name . '</a>';
              }
              $html .= '</div>';
              echo $html;
            } ?>

            <?php
              $tab = (!empty( $_GET['tab'])) ? esc_attr($_GET['tab']) : 'settings';
              page_tabs( $tab );

              if ( $tab == 'settings' ) {

                $pageTitle = "Settings";

                include ("connect.php");

             } elseif ( $tab == 'carousel' ) {

              $pageTitle = "Carousel";

            ?>

              <div id="lgs-carousel" class="row">
                <div class="col section">
                  <?php require_once("carousels.php"); ?>
                </div>
              </div><!-- #lgs-carousel -->

            <?php } elseif ( $tab == 'buttons' ) {

              $pageTitle = "Buttons";

            ?>

              <div id="lgs-buttons" class="row">
                <div class="col section">
                  <?php require_once("buttons.php"); ?>
                </div>
              </div><!-- #lgs-carousel -->

            <?php } elseif ( $tab == 'sections' ) {

              $pageTitle = "Sections";

            ?>

              <div id="lgs-sections" class="row">
                <div class="col section">
                  <?php require_once("sections.php"); ?>
                </div>
              </div><!-- #lgs-sections -->

            <?php } ?>

        </div>
        <!-- .inside -->
      </div>
      <!-- .postbox -->
    </div>
    <!-- .meta-box-sortables .ui-sortable -->
  </div>
  <!-- post-body-content -->
