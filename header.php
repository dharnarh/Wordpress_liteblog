<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ) ?>">
  <meta name="description" content="<?php echo get_bloginfo( 'description' ); ?>">
  <?php wp_head(); ?>
</head>

<body>

  <!-- Header and Navbar section -->
  <div class="container-fluid border-bottom c-f-padd">
    <div class="headerbar text-center">
      <h1 class="mg-btm-o">
        <a href="<?php echo get_bloginfo( 'wpurl' ) ?>" class="navbar-brand align-middle oleo-script black big">
        <?php if ( has_custom_logo() ) :
            the_custom_logo();
          else :
            bloginfo('name');
        endif; ?>
      </a>
      </h1>
    </div>
  </div>

  <nav class="navbar navbar-expand-lg navbar-light bg-white shadow">
    <div class="container">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <span class="navbar-brand sm-search cursor searchIcon"><span class="fa fa-search"></span></span>

      <div class="collapse navbar-collapse justify-content-center" id="navbarToggler">
        <ul class="navbar-nav fjalla-One">
          <?php
            wp_nav_menu (
              array (
                'theme_location' => 'header-menu',
                'container' => false,
                'items_wrap' => '%3$s',
                'fallback_cb' => false,
              )
            )
          ?>
          <li id="searchIcon" class="nav-item cursor searchIcon">
            <span class="nav-link"><span class="fa fa-search"></span></span>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Header and Navbar section end -->

  <!-- Search Modal section -->
  <div class="search" id="searchModal">
     <div class="searchClose cursor text-center">
      <span class="text-danger black-hans"><span class="fa fa-times-circle"></span> Close</span>
    </div>
    <div class="searchForm">
      <form>
        <input type="text" autofocus name="keyword" placeholder="Search Article .." class="form-control searchInput">
      </form>
    </div>
    <div class="searchResult"></div>
  </div>
  <!-- Search Modal section end -->