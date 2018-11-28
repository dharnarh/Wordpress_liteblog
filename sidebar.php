<?php

  # Sidebar containing the main widget area
  # Code sample from @wordpress twenty_Seventeen theme
  # with custom css and styling

  if (!is_active_sidebar('sidebar-1')) {
    return;
  }

 ?>

  <!-- Card view sidebar widget section -->
  <div class="card">
    <div id="widget" class="card-body">
      <?php dynamic_sidebar( 'sidebar-1' ); ?>
    </div>
  </div>
  <br>
  <!-- Card view sidebar widget section end -->
