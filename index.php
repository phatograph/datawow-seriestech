<?php get_header(); ?>

<div class="Layout">
  <div class="MobileMenu">
    <a class="MobileMenu__handle"></a>

    <div class="MobileMenu__panel">
      <h1 class="H1"><a class="H1__a" href="<?php echo site_url(); ?>">Series.tech</a></h1>

      <div class="MobileMenu__panel__menu">
        <?php wp_nav_menu(array('theme_location' => 'mobile-menu')); ?>
      </div>
    </div>
  </div>

  <div class="Header">
    <div class="container">
      <div class="Header__top">
        <ul class="Header__top__ul">
          <li>Follow us at</li>
          <li><a class="Header__top__ul__a" href="https://www.facebook.com/series.tech" target="_blank" rel="nofollow"></a></li>
          <li><a class="Header__top__ul__a Header__top__ul__a--twitter" href="https://twitter.com/seriesdottech" target="_blank" rel="nofollow"></a></li>
        </ul>

        <form class="Header__top__search" action="<?php echo site_url(); ?>">
          <input
            type="text"
            placeholder="Search and enter"
            name="s"
            value="<?php the_search_query() ?>"
            class="Header__top__search__input"
          />
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

          <div class="Footer__footer__nav__right">
            <a class="Footer__footer__nav__a" href="https://www.facebook.com/series.tech" target="_blank" rel="nofollow"></a>
            <a class="Footer__footer__nav__a Footer__footer__nav__a--twitter" href="https://twitter.com/seriesdottech" target="_blank" rel="nofollow"></a>
          </div>
        </div>

        <div class="Footer__footer__right">
          <?php wp_nav_menu(array('theme_location' => 'footer-menu-right')); ?>
        </div>

        <p class="Footer__footer__p">Copyright &copy; <?php echo date("Y"); ?> series.tech All rights reserved.</p>
      </div>
    </div>
  </footer>
</div>

<?php get_footer(); ?>
