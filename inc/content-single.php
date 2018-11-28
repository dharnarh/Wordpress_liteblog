  <!-- Single Carousel feature post section -->
  <div class="container-fluid c-f-padd">
    <div class="top-banner" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/blog.jpg); background-position: center; background-size: cover; background-repeat: no-repeat; background-attachment: fixed; background-origin: initial">
      <div class="banner container flexbox text-center">
        <div class="mx-auto align-self-center">
          <h3 class="white text-uppercase feat-wid black-hans"><?php the_title(); ?></h3>
          <p class="date white"><span class="fa fa-calendar-o"></span> <?php echo get_the_date(); ?> in <a href="#" class="bold white">CATEGORY</a></p>
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
        <!-- WYSIWYG here in one css line -->
        <div class="content">

            <?php the_content(); ?>

        </div>
        <!-- WYSIWYG here in one css line -->
      </div>
      <!-- Post Content section ends -->
      <!-- Popular post section -->
      <div class="col-12 col-xs-12 col-sm-12 col-md-5 col-lg-4 col-xl-4">
        <!-- Card view of about author section -->
        <div class="card text-center">
          <div class="card-body">
            <img class="rounded-circle author-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/profilepic.png" alt="author's profile picture">
            <h5 class="card-title bold">Author Name</h5>
            <h6 class="card-subtitle mb-2 text-muted">Author's title, e.g blogger</h6>
            <p class="card-text text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur, esse accusamus, corporis enim aspernatur doloremque commodi voluptates placeat voluptas laudantium rem. Repudiandae cumque soluta veritatis illum ipsa eius consequatur temporibus.</p>
            <a href="#" class="card-link"><span class="fa fa-facebook"></span></a>
            <a href="#" class="card-link"><span class="fa fa-instagram"></span></a>
            <a href="#" class="card-link"><span class="fa fa-twitter"></span></a>
          </div>
        </div>
        <br>
        <!-- Card view of about author section end -->
        <!-- Card view popular post section -->
        <div class="card">
          <div class="card-body">
            <h5 class="card-title text-uppercase black-hans">Most Popular</h5>
            <h6 class="card-subtitle mb-2 text-muted">Top 5 popular of all time</h6>
            <h5 class="md-line"><a href="post.html" class="text-body fjalla-One">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</a></h5>
            <h5 class="md-line"><a href="post.html" class="text-body fjalla-One">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</a></h5>
            <h5 class="md-line"><a href="post.html" class="text-body fjalla-One">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</a></h5>
            <h5 class="md-line"><a href="post.html" class="text-body fjalla-One">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</a></h5>
            <h5 class="md-line"><a href="post.html" class="text-body fjalla-One">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</a></h5>
          </div>
        </div>
        <br>
        <!-- Card view popular post section end -->
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
      <!-- Popular post section here -->
    </div>
    <!-- Row ends here -->
  </div>
  <!-- Main blog post and sidebar section end -->