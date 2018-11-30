  <!-- Footer container section -->
  <div class="container-fluid flexbox footer bg-footer">
    <div class="mx-auto align-self-center">

      <?php custom_theme_icon(); ?>

      <div class="footer-nav">
        <ul class="nav justify-content-center fjalla-One">
          <?php
            wp_nav_menu (
              array (
                'theme_location' => 'footer-menu',
                'container' => false,
                'items_wrap' => '%3$s',
                'fallback_cb' => false,
              )
            )
          ?>
        </ul>
      </div>
    </div>
  </div>
  <!-- Footer container section ends -->

  <!-- Developer details and site attribute -->
  <div class="container-fluid flexbox footer-d bg-black">
    <div class="mx-auto align-self-center">
      <p class="gray text-center">
        <?php
          _e( sprintf( 'Copyright © %u %s - Site Designed by ', date('Y'), get_bloginfo( 'name' ) ) );
          _e( sprintf( '%2s', custom_meta_attr() ) );
        ?>
      </p>
    </div>
  </div>
  <?php wp_footer(); ?>
</body>

</html>