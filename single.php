<?php

get_header();

  if (have_posts()) :
    while (have_posts()) :
      
    the_post();
      get_template_part('inc/content-single', get_post_format());

    endwhile;
  endif;

get_footer();

?>