<?php

add_theme_support('post-thumbnails');

function wpdocs_custom_excerpt_length($length) {
  return 30;
}
add_filter('excerpt_length', 'wpdocs_custom_excerpt_length');

function wpdocs_excerpt_more($more) {
  return ' …';
}
add_filter('excerpt_more', 'wpdocs_excerpt_more');

function register_my_menu() {
  register_nav_menu('primary-menu', __('Primary menu'));
  register_nav_menu('footer-menu', __('Footer menu'));
  register_nav_menu('mobile-menu', __('Mobile menu'));
  register_nav_menu('footer-menu-right', __('Footer menu (right)'));
}
add_action('init', 'register_my_menu');

// http://rubelmiah.com/display-wordpress-post-view-count-without-plugin/
function getPostViews($postID){
  $count_key = 'post_views_count';
  $count = get_post_meta($postID, $count_key, true);

  if ($count == '') {
    delete_post_meta($postID, $count_key);
    add_post_meta($postID, $count_key, '0');
    return 0;
  }

  return $count;
}

function setPostViews($postID) {
  $count_key = 'post_views_count';
  $count = get_post_meta($postID, $count_key, true);

  if ($count == '') {
    $count = 0;
    delete_post_meta($postID, $count_key);
    add_post_meta($postID, $count_key, '0');
  }
  else {
    $count++;
    update_post_meta($postID, $count_key, $count);
  }
}
