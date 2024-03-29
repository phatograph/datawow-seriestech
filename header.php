<!DOCTYPE html>
<html data-version="1.6.15">
  <head>
    <title>Series <?php wp_title('|'); ?></title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, viewport-fit=cover" />
    <meta name="google-site-verification" content="_-xOvvvbQEYxsMJfnh6AdkayvOoa0gHwhwQj1rkQ_uc" />

    <meta property="og:image" content="<?php the_post_thumbnail_url(); ?>" />
    <meta name="description"
      content="<?php if (is_single()) {
          single_post_title('', true);
        } else {
          bloginfo('name'); // echo " - "; bloginfo('description');
        }
      ?>"
    />

    <link rel="icon" type="image/png" href="<?php bloginfo('stylesheet_directory'); ?>/favicon.png" />
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/style.1.6.10.css" />
    <script src="<?php bloginfo('stylesheet_directory'); ?>/js/dist/script.js"></script>

    <!-- <link rel="stylesheet" href="http://192.168.1.59:8888/series/wp&#45;content/themes/series/style.css" /> -->
    <!-- <script src="http://192.168.1.59:8888/series/wp&#45;content/themes/series/js/dist/script.js"></script> -->

    <!-- START wp_head -->
    <?php #wp_head(); ?>
    <!-- END wp_head -->

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-NCW53FB');</script>
    <!-- End Google Tag Manager -->
  </head>

  <body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NCW53FB"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
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
