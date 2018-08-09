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

        <form class="Header__top__search">
          <input type="text" placeholder="Search and enter" />
          <button type="submit"></button>
        </form>
      </div>

      <h1 class="H1"><a class="H1__a" href="<?php echo site_url(); ?>">Series.tech</a></h1>

      <?php wp_nav_menu(array('theme_location' => 'primary-menu', 'container_class' => 'Nav')); ?>
    </div>
  </div>

  <?php
    $args = array(
      'posts_per_page' => 1,
      'category_name' => 'featured',
    );

    $posts_array = get_posts($args);
  ?>

  <?php if (count($posts_array) > 0) { ?>
    <div class="Hero">
      <div class="container">

        <?php foreach ($posts_array as $post) : setup_postdata($post); ?>
          <div class="Post">
            <a class="Post__img" href="<?php the_permalink() ?>">
              <img src="<?php the_post_thumbnail_url(); ?>" />
            </a>

            <div class="Post__right">
              <?php
                $post_categories = get_the_category()
              ?>

              <ul class="Post__tags">
                <?php foreach($post_categories as $category) { ?>
                  <li>
                    <a class="Post__tags__a Post__tags__a--<?php echo $category->slug ?>"><span><?php echo $category->name ?></span></a>
                  </li>
                <?php } ?>
              </ul>
              <h3 class="Post__h3"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h3>
              <ul class="Post__details">
                <li class="Post__details__li">By <span><strong><?php the_author() ?></strong></span></li>
                <li class="Post__details__li"><time><?php echo get_the_date('F j, Y'); ?></time></li>
              </ul>
              <div class="Post__p"><?php the_excerpt(); ?></div>
              <a class="Post__read-more" href="<?php the_permalink() ?>">Continue reading</a>
            </div>
          </div>
        <?php endforeach; wp_reset_postdata(); ?>
      </div>
    </div>
  <?php } ?>

  <div class="Main">
    <div class="container">
      <div class="Content">
        <?php if (have_posts()) : ?>
          <div class="Posts">
            <?php while (have_posts()) : the_post(); ?>
              <div class="Post">
                <a class="Post__img" href="<?php the_permalink() ?>">
                  <img src="<?php the_post_thumbnail_url(); ?>" />
                </a>

                <div class="Post__right">
                  <?php
                    $post_categories = get_the_category()
                  ?>

                  <ul class="Post__tags">
                    <?php foreach($post_categories as $category) { ?>
                      <li>
                        <a class="Post__tags__a Post__tags__a--<?php echo $category->slug ?>"><span><?php echo $category->name ?></span></a>
                      </li>
                    <?php } ?>
                  </ul>
                  <h3 class="Post__h3"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h3>
                  <ul class="Post__details">
                    <li class="Post__details__li">By <span><strong><?php the_author() ?></strong></span></li>
                    <li class="Post__details__li"><time><?php echo get_the_date('F j, Y'); ?></time></li>
                  </ul>
                  <div class="Post__p"><?php the_excerpt(); ?></div>
                </div>
              </div>
            <?php endwhile; ?>
          </div>
        <?php endif; ?>

        <div class="Pagination">
          <?php the_posts_pagination(array('mid_size' => 2, 'screen_reader_text' => '', 'prev_text' => 'Prev')); ?>
        </div>
      </div>

      <div class="Sidebar">
        <h2 class="Sidebar__h2">Series top 5</h2>

        <ul class="Sidebar__ul">
          <?php for ($i = 0; $i < 5; $i++) { ?>
            <li class="Sidebar__ul__li">
              <div class="Sidebar__ul__li__wrapper">
                <h4 class="Sidebar__ul__li__h4">Apple Watch + AI = เครื่องตรวจจับสัญญาณโรคเบาหวานบนข้อมือ</h4>
                <ul class="Sidebar__ul__li__ul">
                  <li class="Sidebar__ul__li__ul__li">By <strong>Allen Thomas</strong></li>
                </ul>
              </div>
            </li>
          <?php } ?>
        </ul>

        <div class="Sidebar__ads">
          <img src="<?php bloginfo('stylesheet_directory'); ?>/images/sidebar-ads.png" />
        </div>
      </div>
    </div>
  </div>

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
