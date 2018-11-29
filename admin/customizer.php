<?php

# All function regarding the wp_customizer api
# Code sample from twenty Seventeen theme customizer

function liteblog_customizer_register( $wp_customize ) {
  $wp_customize->get_setting( 'blogname' )->transport = 'postMessage';

  $wp_customize->selective_refresh->add_partial( 'blogname', array (
    'selector' => '.mg-btm-o a',
    'render_callback' => 'liteblog_customize_partial_blogname',
  ) );
}

add_action ( 'customize_register', 'liteblog_customizer_register' );

# Render site title for selective refresh partial
# @return void
function liteblog_customize_partial_blogname () {
  bloginfo( 'name' );
}