
          <div class="container-fluid">
            <div class="row text-white pt-3 ac">
              <div class="col-sm-4">
                <img src="<?= get_option( 'my_options' )['Footer_image'] ?? ''; ?>" alt="" width="140" height="35">
                <br><br>               
                  <?= get_option( 'my_options' )['Footer_Language1'] ?? ''; ?>
                  <br>
                  <?= get_option( 'my_options' )['Footer_Language2'] ?? ''; ?>                         
              </div>

          <div class="col-sm-3">        
            <?php wp_nav_menu(array('theme_location'=>'footer_menu1','Footer Section 1'=>"",'menu_class'=>"nav navbar-nav my-list-inline text-dark soci p-1 float-start")) ?>
          </div>

            <div class="col-sm-5">
            <address>
            <?php if ( is_active_sidebar( 'address-widget-area' ) ) : ?>
              <?php dynamic_sidebar( 'address-widget-area' ); ?>
            <?php endif; ?>

            </address>
          </div>     
        </div>
        </div>


          <div class="container-fluid">
              <div class="row py-2 ac">
                <div class="col-sm-6 text-white">
                  <?= get_option( 'my_options' )['Footer_Copyright'] ?? ''; ?>
                </div>
                  <div class="col-sm-6  text-white text-end ac">
                    <?= get_option( 'my_options' )['Footer_Design'] ?? ''; ?>
                  </div>
              </div>
          </div>
          
</body>
<script src="<?= get_template_directory_uri(); ?>/assets/bootstrap-5.0.2/js/bootstrap.bundle.min.js"></script>

<?php 
wp_footer(); 
?>

</html>