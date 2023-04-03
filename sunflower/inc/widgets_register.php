<?php
// Sidebar Register Function

function sunflower_widgets_register(){
  register_sidebar(array(
    'name' => __('Main Widget Area', 'jalal'),
    'id'   => 'sideber-1',
    'description' => __('Apperas in the sidebar in blog page and also other page', 'jalal'),
    'before_widget' => '<div class="child_sidebar">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="title">',
    'after_title' => '</h2>',
    ));
  register_sidebar(array(
    'name' => __('Footer 1', 'jalal'),
    'id'   => 'footer-1',
    'description' => __('Apperas in the sidebar in blog page and also other page', 'jalal'),
    'before_widget' => '<div class="child_sidebar">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="title">',
    'after_title' => '</h2>',
    ));
  register_sidebar(array(
    'name' => __('Footer 2', 'jalal'),
    'id'   => 'footer-2',
    'description' => __('Apperas in the sidebar in blog page and also other page', 'jalal'),
    'before_widget' => '<div class="child_sidebar">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="title">',
    'after_title' => '</h2>',
    ));
  register_sidebar(array(
    'name' => __('Footer 3', 'jalal'),
    'id'   => 'footer-3',
    'description' => __('Apperas in the sidebar in blog page and also other page', 'jalal'),
    'before_widget' => '<div class="child_sidebar">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="title">',
    'after_title' => '</h2>',
    ));
    register_sidebar(array(
      'name' => __('Homepage Widget', 'jalal'),
      'id'   => 'home-1',
      'description' => __('Apperas in the sidebar in blog page and also other page', 'jalal'),
      'before_widget' => '<div class="child_home">',
      'after_widget' => '</div>',
      'before_title' => '<h2 class="title">',
      'after_title' => '</h2>',
      ));
}

add_action('widgets_init', 'sunflower_widgets_register');