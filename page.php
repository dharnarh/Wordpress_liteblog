<?php

get_header();

  if (have_posts()) :
    while (have_posts()) :
      
    the_post();
      get_template_part('inc/page-single', get_post_format());

    endwhile;
    else :
      _e( "<h3 class='text-center black-hans'>Content not available at this moment.</h3>" );
  endif;

get_footer();

?>