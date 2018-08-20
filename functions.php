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
}
add_action('init', 'register_my_menu');
