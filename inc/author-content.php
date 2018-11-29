  <!-- Single Carousel feature post section -->
  <div class="container-fluid c-f-padd">
    <div class="top-banner" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/category.jpg); background-position: center; background-size: cover; background-repeat: no-repeat; background-attachment: fixed; background-origin: initial">
    <div style="height: 100%; background-color: rgba(0,0,0,0.5); background-position: center; background-size: cover; background-repeat: no-repeat; background-attachment: fixed; background-origin: initial">
      <div class="banner container flexbox text-center">
        <div class="mx-auto align-self-center">
          <h3 class="white text-uppercase feat-wid bigger black-hans"><?php the_author(); ?></h3>
        </div>
      </div>
    </div>
    </div>
  </div>
  <!-- Single Carousel feature post section end -->

  <!-- Main blog post and sidebar section -->
  <div class="container bg-white blog-container shadow-sm">
    <!-- Row starts here -->
    <div class="row">
      <!-- Post Content section -->
      <div class="col-12 col-xs-12 col-sm-12 col-md-7 col-lg-8 col-xl-8">
        <div class="media md-line">
          <div class="media-body">
          <?php if ( has_post_thumbnail() ) : ?>
            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
            <div class="post-image" style="background-image: url(<?php the_post_thumbnail_url(); ?>); background-position: center; background-size: cover; background-repeat: no-repeat; background-origin: initial"></div>
          <?php endif ?>
            <h5 class="mt-0"><a href="<?php the_permalink(); ?>" class="text-body black-hans"><?php the_title(); ?></a></h5>
            <p><span class="fa fa-calendar-o"></span> <?php echo get_the_date(); ?></p>
            <p class="text-secondary"><?php the_excerpt(); ?></p>
            <a href="<?php the_permalink(); ?>"><button class="btn btn-outline-secondary"><?php _e( 'Read More' ) ?></button></a>
          </div>
        </div>
      </div>
      <!-- Post Content section ends -->

      <!-- Popular post section -->
      <div class="col-12 col-xs-12 col-sm-12 col-md-5 col-lg-4 col-xl-4">
        <!-- Card view of about author section -->
        <div class="card text-center">
          <div class="card-body">
            <img class="rounded-circle author-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/profilepic.png" alt="author's profile picture">
            <h5 class="card-title bold black"><?php the_author_posts_link(); ?></h5>
            <h6 class="card-subtitle mb-2 text-muted"><a class="gray" href="mailto:<?php the_author_meta('email'); ?>"><?php _e('Send Mail') ?></a></h6>
            <p class="card-text text-center"><?php the_author_meta('description') ?></p>
            
            
            <?php if (get_the_author_meta('facebook') !== "") : ?>
              <a href="<?php the_author_meta('facebook') ?>" class="card-link"><span class="fa fa-facebook"></span></a>
            <?php endif; ?>

            <?php if (get_the_author_meta('instagram') !== "") : ?>
              <a href="<?php the_author_meta('instagram') ?>" class="card-link"><span class="fa fa-instagram"></span></a>
            <?php endif; ?>

            <?php if (get_the_author_meta('twitter') !== "") : ?>
              <a href="<?php the_author_meta('twitter') ?>" class="card-link"><span class="fa fa-twitter"></span></a>
            <?php endif; ?>
          </div>
        </div>
        <br>
        <!-- Card view of about author section end -->
        
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

        <!-- Card of newsletter section -->
        <div class="card text-center">
          <div class="card-body">
            <h3 class="card-title black-hans"><?php _e( 'Subscribe to our Newsletter' ) ?></h3>
            <p class="card-secondary"><?php _e( 'Recieve daily quality articles directly to your mail.' ) ?></p>
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
      <!-- Popular post section here -->
    </div>
    <!-- Row ends here -->
  </div>
  <!-- Main blog post and sidebar section end -->