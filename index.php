<?php get_header(); ?>

<div class="Layout">
  <div class="Header">
    <div class="container">
      <div class="Header__top">
        <ul class="Header__top__ul">
          <li>Follow us at</li>
          <li><a class="Header__top__ul__a"></a></li>
          <li><a class="Header__top__ul__a Header__top__ul__a--twitter"></a></li>
        </ul>

        <form class="Header__top__search" action="<?php echo site_url(); ?>">
          <input type="text" placeholder="Search and enter" name="s" />
          <button type="submit"></button>
        </form>
      </div>

      <h1 class="H1"><a class="H1__a" href="<?php echo site_url(); ?>">Series.tech</a></h1>

      <?php wp_nav_menu(array('theme_location' => 'primary-menu', 'container_class' => 'Nav')); ?>
    </div>
  </div>

  <?php if (is_single()) { ?>
    <?php include(get_query_template('custom-single')) ?>
  <?php } else if (is_page()) { ?>
    <?php include(get_query_template('custom-page')) ?>
  <?php } else { ?>
    <?php include(get_query_template('custom-content')) ?>
  <?php } ?>

  <footer class="Footer">
    <div class="container">
      <div class="Footer__header">
        <h1 class="Footer__header__h1"><a class="Footer__header__h1__a" href="<?php echo site_url(); ?>">Series.tech</a></h1>
        <p class="Footer__header__p">:start up news and trends</p>
      </div>
      <div class='Footer__footer'>
        <div class="Footer__footer__nav">
          <?php wp_nav_menu(array('theme_location' => 'footer-menu')); ?>
          <a class="Footer__footer__nav__a"></a>
          <a class="Footer__footer__nav__a Footer__footer__nav__a--twitter"></a>
        </div>
        <ul class="Footer__footer__ul">
          <li><a>Terms</a></li>
          <li><a>Privacy policy</a></li>
        </ul>
        <p class="Footer__footer__p">Copyright &copy; 2018 series.tech All rights reserved.</p>
      </div>
    </div>
  </footer>
</div>

<?php get_footer(); ?>
