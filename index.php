<?php get_header(); ?>

<?php get_template_part('inc/featuredCarousel'); ?>

  <!-- Main blog post and sidebar section -->
  <div class="container bg-white blog-container shadow-sm">

    <!-- Row start -->
    <div class="row">
      <!-- Main blog content -->
      <div class="col-12 col-xs-12 col-sm-12 col-md-7 col-lg-8 col-xl-8 ajaxPost">
        
        <?php
        # Argumment that defines how many posts is looped
        $args = array (
                  'posts_per_page' => 10,
                  'paged' => 1
                );

        # Variable assigned to WP_Query class
        $query = new WP_Query ( $args );

        if ( $query->have_posts() ) :
          while ( $query->have_posts() ) :
            $query->the_post();

            get_template_part ( 'content', get_post_format() );

          endwhile;
        endif;

        # Wordpress function to reset post data
        wp_reset_postdata();
        
        ?>

        <br class="br">

        <!-- Load More Articles -->
        <div class="loadp text-center">
          <button type="button" class="btn btn-outline-secondary">MORE POST <span class="fa fa-long-arrow-down"></span></button>
        </div>

        <br>

      </div>
      <!-- Main blog content end -->

      <!-- Sidebar content -->
      <div class="col-12 col-xs-12 col-sm-12 col-md-5 col-lg-4 col-xl-4">
        <!-- Card of newsletter section -->
        <div class="card text-center">
          <div class="card-body">
            <h3 class="card-title black-hans">Subscribe to our Newsletter</h3>
            <p class="card-secondary">Recieve daily quality articles directly to your mail.</p>
            <form action="">
              <div class="form-group c-f-padd col">
                <input type="email" class="form-control" placeholder="Email Address">
              </div>
              <div class="form-group c-f-padd col">
                <input type="text" class="form-control" placeholder="Full Name">
              </div>
              <button class="btn btn-block btn-outline-success text-uppercase black-hans" style="margin-bottom: 1rem;">Subscribe</button>
            </form>
          </div>
        </div>
        <!-- Card of newsletter section end -->
      </div>
      <!-- Sidebar content end -->
    </div>
    <!-- Row end -->
  </div>
  <!-- Main blog post and sidebar section end -->

<?php get_footer(); ?>