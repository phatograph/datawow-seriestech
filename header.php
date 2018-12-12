<!DOCTYPE html>
<html>
  <head>
    <title>Series <?php wp_title('|'); ?></title>

    <meta name="version" content="1.6" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, viewport-fit=cover" />
    <meta property="og:image" content="<?php the_post_thumbnail_url(); ?>" />

    <link rel="icon" type="image/png" href="<?php bloginfo('stylesheet_directory'); ?>/favicon.png" />
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/style.css" />
    <script src="<?php bloginfo('stylesheet_directory'); ?>/js/dist/script.js"></script>

    <!-- <link rel="stylesheet" href="http://192.168.1.59:8888/series/wp&#45;content/themes/series/style.css" /> -->
    <!-- <script src="http://192.168.1.59:8888/series/wp&#45;content/themes/series/js/dist/script.js"></script> -->

    <!-- START wp_head -->
    <?php #wp_head(); ?>
    <!-- END wp_head -->

    <!-- START Google Tag Manager -->
    <!-- END Google Tag Manager -->
  </head>

  <body>
    <!-- START Load Facebook SDK for JavaScript -->
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.2&appId=436760339745315&autoLogAppEvents=1';
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
    <!-- END Load Facebook SDK for JavaScript -->
