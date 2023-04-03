<?php

function custom_service(){
  register_post_type ('service',
    array(
      'labels' => array(
        'name' => ('Services'),
        'singular_name' => ('Service'),
        'add_new' => ('Add New Service'),
        'add_new_item' => ('Add New Service'),
        'edit_item' => ('Edit Service'),
        'new_item' => ('New Service'),
        'view_item' => ('View Service'),
        'not_found' => ('Sorry, we cound\'n find the service you are looking for.'),
      ),
      'menu_icon' => 'dashicons-networking',
      'public' => true,
      'publicly_queryable' => true,
      'exclude_from_search' => true,
      'menu_position' => 5, 
      'has_archive' => true,
      'hierarchial' => true,
      'show_ui' => true,
      'capability_type' => 'post',
      'taxonomies' => array ('category'),
      'rewrite' => array('slag' => 'service'),
      'supports' => array('title', 'thumbnail', 'editor', 'excerpt'),
      )
    );
    add_theme_support('post-thumbnails');
}

add_action('init', 'custom_service');
function query_post_type($query){
  if(is_category() ){
    $post_type = get_query_var('post_type');
    if($post_type){
      $post_type = $post_type;
    } else {
      $post_type = array ('post', 'service');
      $query -> set('post_type', $post_type);
      return $query;
    }
  }
}
add_filter('pre_get_posts', 'query_post_type');