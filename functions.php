<?php

# Wordpress HTML5 support
add_theme_support( 'html5' );

# Wordpress title tag support
add_theme_support( 'title-tag' );

# Wordpress post image thumbnail support
add_theme_support( 'post-thumbnails' );

add_image_size( 'liteblog-featured-image', 2000, 1200, true );

# Wordpress theme support for selective refresh for widgets
add_theme_support( 'customize-selective-refresh-widgets' );

# Wordpress support for custom logo
add_theme_support( 'custom-logo', array(
  'width' => 250,
  'height' => 100,
  'flex-width' => true,
) );
# Wordpress sidebar support
if ( function_exists( 'register_sidebar' ) ) {
  register_sidebar();
}

# Add css styles and JS scripts
function reg_style_n_script () {

  wp_enqueue_style( 'bootstrapCSS', get_template_directory_uri() . '/assets/css/bootstrap.css' );
  wp_enqueue_style( 'fontAwesomeCSS', 'https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );
  wp_enqueue_style( 'mainCSS', get_template_directory_uri() . '/assets/css/main.css' );
  wp_enqueue_style( 'styleCSS', get_template_directory_uri() . '/style.css' );
  wp_enqueue_script( 'JqueryJS', get_template_directory_uri() . '/assets/js/jquery-3.3.1.js' );
	wp_enqueue_script( 'bootstrapJS', get_template_directory_uri() . '/assets/js/bootstrap.js' );
	wp_enqueue_script( 'mainJS', get_template_directory_uri() . '/assets/js/main.js' );

}

add_action ( 'wp_enqueue_scripts', 'reg_style_n_script' );

# Function to register menu to theme
function reg_my_menu () {
  register_nav_menus (
    array ( 'header-menu' => __( 'Header Menu' ),
            'footer-menu' => __( 'Footer Menu' ) )
  );
}

add_action ( 'init', 'reg_my_menu' );

# Add bootstrap class to wp_menu ul li
function li_class ( $class, $items, $args ) {
  $classes = 'nav-item';
  return $classes;
}

add_filter ( 'nav_menu_css_class', 'li_class', 1,3 );

# Add classes to wp_menu li a
function li_a_class ( $class ) {
	$class['class'] = 'nav-link text-uppercase';
	return $class;
}
add_filter ( 'nav_menu_link_attributes', 'li_a_class' );

# Function to select a featured post
function sm_featured_box () {
  add_meta_box (
    'sm_meta', __( 'Feature Post', 'sm-textdomain' ), 'sm_featured_callback', 'post'
  );
}

# Function to show feature checkbox
function sm_featured_callback ( $post ) {
  $featured = get_post_meta ( $post->ID ); ?>

  <p>
    <div class="sm-row-content">
      <label for="meta-checkbox">
        <input type="checkbox" name="meta-checkbox" value="yes" id="meta-checkbox"
        <?php if ( isset( $featured['meta-checkbox'] ) ) checked ( $featured['meta-checkbox'][0], 'yes' ); ?>>
        <?php _e( 'Feature this post' ); ?>
      </label>
    </div>
  </p>

  <?php
}

add_action ( 'add_meta_boxes', 'sm_featured_box' );

# Function to save meta checkbox
function sm_meta_save ( $post_id ) {
  # Check save status
  $is_autosave = wp_is_post_autosave ( $post_id );
  $is_revision = wp_is_post_revision ( $post_id );
  $is_valid_nonce = ( isset( $_POST['sm_nonce'] )
    && wp_verify_nonce ( $_POST['sm_nonce'], basename( __FILE__ ) ) ) ? 'true' : 'false';

  # Exit script on post type status
  if ( $is_autosave || $is_revision || !$is_valid_nonce ) {
    return;
  }

  # Check for input and saves
  if ( isset( $_POST['meta-checkbox'] ) ) {
    update_post_meta ( $post_id, 'meta-checkbox', 'yes' );
  } else {
    update_post_meta ( $post_id, 'meta-checkbox', '' );
  }
}

add_action ( 'save_post', 'sm_meta_save' );

# Function to add social contact to user profile
function social_contacts ( $social ) {
  $social['facebook'] = 'Facebook';
  $social['instagram'] = 'Instagram';
  $social['twitter'] = 'Twitter';

  return $social;
}

add_filter ( 'user_contactmethods', 'social_contacts', 10,1 );


# Function to generate random post
function gen_rand_posts () {
  $args = array (
            'orderby' => 'rand',
            'posts_per_page' => 5,
          );
  $query = new WP_Query ( $args );

  while ( $query->have_posts() ) :
    $query->the_post(); ?>

    <h5 class="md-line"><a href="<?php the_permalink(); ?>" class="text-body fjalla-One"><?php the_title(); ?></a></h5>

  <?php endwhile;
  wp_reset_postdata();
}

# Function to get live search via Ajax call
function ajax_fetch () {
  $args = array (
            'posts_per_page' => -1,
            's' => esc_attr( $_POST['keywod'] ),
            'post_type' => 'post', 'data'
          );
  $query = new WP_Query ( $args );

  if ( $query->have_posts() ) :
    while ( $query->have_posts() ) :
      $query->the_post(); ?>

      <h5 class="md-line">
        <a href="<?php echo esc_url( the_permalink() ); ?>" class="text-body bold"><?php the_title(); ?></a>
        <br><small><span class="fa fa-calendar-o"></span> <?php echo get_the_date(); ?></small>
      </h5>

    <?php endwhile;
  endif;

  wp_reset_postdata();
  die();
}

add_action ( 'wp_ajax_ajax_fetch', 'ajax_fetch' );
add_action ( 'wp_ajax_nopriv_ajax_fetch', 'ajax_fetch' );

# Function to add custom default gravatar profile picture
function default_gravatar ( $avatar ) {
  $pic_location = get_parent_theme_file_path('/assets/img/profilepic.png' );
  $avatar[$pic_location] = "Default Gravatar";
  return $avatar;
}

add_filter ( 'avatar_defaults', 'default_gravatar' );

# Require customizer.php
require get_parent_theme_file_path( '/admin/customizer.php' );