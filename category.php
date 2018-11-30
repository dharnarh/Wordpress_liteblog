<?php 

  get_header();
  get_template_part( 'inc/category-content', get_post_format() );

?>

  <!-- Main blog post and sidebar section -->
  <div class="container bg-white blog-container shadow-sm">
    <!-- Row starts here -->
    <div class="row">
      <!-- Post Content section -->
      <div class="col-12 col-xs-12 col-sm-12 col-md-7 col-lg-8 col-xl-8 ajaxPost">
        
        <?php

        if ( have_posts() ) :
          while ( have_posts() ) :
            the_post();

            get_template_part( 'content', get_post_format() );

          endwhile;
        endif;

        # Wordpress function to reset post data
        wp_reset_postdata();
        
        ?>

        <br>

      </div>
      <!-- Post Content section ends -->

      <!-- Popular post section -->
      <div class="col-12 col-xs-12 col-sm-12 col-md-5 col-lg-4 col-xl-4">
        <?php if ( category_description() ) : ?>

          <!-- Card view of about author section -->
          <div class="card text-center">
            <div class="card-body">
              <h5 class="card-title black-hans text-uppercase"><?php single_cat_title( '', true ) ?></h5>
              <p class="card-text text-center"><?php echo category_description(); ?></p>
            </div>
          </div>
          <br>
          <!-- Card view of about author section end -->

        <?php endif; ?>
        <!-- Card view popular post section -->
        <div class="card">
          <div class="card-body">
            <h5 class="card-title text-uppercase black-hans"><?php _e( 'Random Posts' ) ?></h5>
            <h6 class="card-subtitle mb-2 text-muted"><?php _e( 'Just random posts' ) ?></h6>
            <?php gen_rand_posts(); ?>
          </div>
        </div>
        <br>
        <!-- Card view popular post section end -->
        <?php get_sidebar(); ?>
        <!-- Card of newsletter section -->
        <div class="card text-center">
          <div class="card-body">
            <h3 class="card-title black-hans"><?php _e( 'Subscribe to our Newsletter') ?></h3>
            <p class="card-secondary"><?php _e( 'Recieve daily quality articles directly to your mail.' ) ?></p>
            <form action="">
              <div class="form-group c-f-padd col">
                <input type="email" class="form-control" placeholder="Email Address">
              </div>
              <div class="form-group c-f-padd col">
                <input type="text" class="form-control" placeholder="Full Name">
              </div>
              <button class="btn btn-block btn-outline-success text-uppercase black-hans" style="margin-bottom: 1rem;"><?php _e( 'Subscribe' ) ?></button>
            </form>
          </div>
        </div>
        <!-- Card of newsletter section end -->
      </div>
      <!-- Popular post section here -->
    </div>
    <!-- Row ends here -->
  </div>
  <!-- Main blog post and sidebar section end -->

<?php get_footer(); ?>