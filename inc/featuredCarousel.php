  <!-- Single Carousel feature post section -->

  <?php

    # Argument for featured post
    $args = array (
              'posts_per_page' => 1,
              'meta_key' => 'meta-checkbox',
              'meta_value' => 'yes'
            );

    $feature = new WP_Query ( $args );

    if ( $feature->have_posts() ) :
      while ( $feature->have_posts() ) :
        $feature->the_post(); ?>

          <div class="container-fluid c-f-padd">
          <?php
            # If post have post thumbnail
            if (has_post_thumbnail()) : ?>
              <div class="top-banner" style="background-image: url(<?php the_post_thumbnail_url(); ?>); background-position: center; background-size: cover; background-repeat: no-repeat; background-attachment: fixed; background-origin: initial">
          <?php endif ?>

          <?php 
            # If post doesn't have post_thumbnail
            if (!has_post_thumbnail()) : ?>
              <div class="top-banner" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/blog.jpg); background-position: center; background-size: cover; background-repeat: no-repeat; background-attachment: fixed; background-origin: initial">
          <?php endif ?>

              <div class="banner container flexbox text-center">
                <div class="mx-auto align-self-center">
                  <h3 class="white text-uppercase feat-wid black-hans"><?php the_title(); ?></h3>
                  <p class="date white"><span class="fa fa-calendar-o"></span> <?php echo get_the_date(); ?></p>
                </div>
              </div>
            </div>
          </div>

      <?php endwhile;
      else: ?>

      <div class="container-fluid c-f-padd">
        <div class="top-banner" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/blog.jpg); background-position: center; background-size: cover; background-repeat: no-repeat; background-attachment: fixed; background-origin: initial">
          <div class="banner container flexbox text-center">
            <div class="mx-auto align-self-center">
              <h3 class="white text-uppercase feat-wid black-hans"><?php _e( 'Welcome' ) ?></h3>
            </div>
          </div>
        </div>
      </div>

    <?php endif;

    # Function to reset wp post data
    wp_reset_postdata();

  ?>

  <!-- Single Carousel feature post section end -->