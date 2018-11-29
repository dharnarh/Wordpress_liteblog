  <!-- Footer container section -->
  <div class="container-fluid flexbox footer bg-footer">
    <div class="mx-auto align-self-center">

      <div class="footer-social">
        <a href="#"><span class="gh fa fa-github"></span></a>
        <a href="#"><span class="gh fa fa-instagram"></span></a>
        <a href="#"><span class="gh fa fa-behance"></span></a>
        <a href="#"><span class="gh fa fa-twitter"></span></a>
        <a href="#"><span class="gh fa fa-linkedin"></span></a>
        <a href="#"><span class="gh fa fa-envelope"></span></a>
      </div>


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
      <p class="gray text-center">Copyright © 2018 TrendingReportGh.</p>
      <p class="gray text-center tp-line border-top">Site Designed by <a href="#" class="white bold">UMAR FAROUQ</a></p>
    </div>
  </div>
  <?php wp_footer(); ?>
</body>

</html>