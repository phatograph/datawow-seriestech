<?php

add_theme_support('post-thumbnails');

function register_my_menu() {
  register_nav_menu('primary-menu', __('Primary menu'));
  register_nav_menu('footer-menu', __('Footer menu'));
}
add_action('init', 'register_my_menu');

function wpdocs_excerpt_more($more) {
  return ' …';
}
add_filter('excerpt_more', 'wpdocs_excerpt_more');
