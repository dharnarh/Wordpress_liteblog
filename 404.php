<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?php wp_head(); ?>
  </head>
  <body>

    <!-- 404 Carousel section -->
    <div class="container-fluid c-f-padd">
        <div class="c404 flexbox">
            <div class="white mx-auto align-self-center">
                <h1 class="bold text-center black-hans"><?php _e('404' ) ?></h1>
                <p class="text-center"><?php _e('Finally, someone gets to see this page. Thumbs up' ); ?></p>
                <p class="text-center"><?php _e('Now head back to ' ) ?> <a href="<?php echo get_bloginfo('wpurl') ?>"><?php _e('HOME' ) ?></a></p>
            </div>
        </div>
    </div>

    <?php wp_footer(); ?>
  </body>
</html>