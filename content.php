<div class="media md-line">
  <div class="media-body">
    <?php if ( has_post_thumbnail() ) : ?>
    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
      <div class="post-image" style="background-image: url(<?php the_post_thumbnail_url(); ?>); background-position: center; background-size: cover; background-repeat: no-repeat; background-origin: initial"></div>
    <?php endif ?>
    <h5 class="mt-0"><a href="<?php the_permalink(); ?>" class="text-body black-hans"><?php the_title(); ?></a></h5>
    <p><span class="fa fa-calendar-o"></span> \<?php echo get_the_date(); ?></p>
    <p class="text-secondary"><?php the_excerpt(); ?></p>
    <a href="post.html"><button class="btn btn-outline-secondary">Read post</button></a>
  </div>
</div>