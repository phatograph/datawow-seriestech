<?php if (is_home() && !is_paged()) { ?>
  <?php
    $featured_post_id = null;
    $hero_post = get_posts(array(
      'posts_per_page' => 1,
      'category_name' => 'featured',
    ));
  ?>

  <?php if (count($hero_post) > 0) { ?>
    <div class="Hero">
      <div class="container">

        <?php foreach ($hero_post as $post) : setup_postdata($post); ?>
          <?php
            $featured_post_id = get_the_ID();
          ?>

          <div class="Post Post--hero">
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

                <li class="Post__time"><time><?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' ago'; ?></time></li>
              </ul>

              <h3 class="Post__h3"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h3>

              <ul class="Post__details">
                <li class="Post__details__li">By <span><strong><?php the_author() ?></strong></span></li>
                <li class="Post__details__li Post__details__li--time"><time><?php echo get_the_date('F j, Y'); ?></time></li>
              </ul>
              <div class="Post__p"><?php the_excerpt(); ?></div>
              <a class="Post__read-more" href="<?php the_permalink() ?>">Continue reading</a>
            </div>
          </div>
        <?php endforeach; wp_reset_postdata(); ?>
      </div>
    </div>
  <?php } ?>
<?php } ?>

<?php if (is_category()) { ?>
  <?php
    $current_cat = get_category(get_query_var('cat'));
  ?>

  <div class="CategoryHeader">
    <div class="container">
      <div class="CategoryHeader__wrapper">
        <h2 class="CategoryHeader__h2"><?php echo $current_cat->name ?></h2>

        <?php if ($current_cat->slug == 'news') { ?>
          <p class="CategoryHeader__p CategoryHeader__p--news">รวบรวมข่าวสารเกี่ยวกับ Startups</p>
        <?php } ?>

        <?php if ($current_cat->slug == 'reports') { ?>
          <p class="CategoryHeader__p CategoryHeader__p--reports">บทความวิเคราะห์ทางเทคนิคที่มีเฉพาะในSeriesเท่านั้น</p>
        <?php } ?>
      </div>
    </div>
  </div>
<?php } ?>

<?php if (is_search()) { ?>
  <div class="CategoryHeader">
    <div class="container">
      <div class="CategoryHeader__wrapper">
        <h2 class="CategoryHeader__h2">Search results for: <?php the_search_query() ?></h2>
      </div>
    </div>
  </div>
<?php } ?>

<div class="Main">
  <div class="container">
    <div class="Content">
      <?php if (have_posts()) : ?>
        <div class="Posts">
          <?php while (have_posts()) : the_post(); ?>
            <div class="Post <?php if (get_the_ID() == $featured_post_id) echo('Post--hidden'); ?>">
              <a class="Post__img" href="<?php the_permalink() ?>">
                <img src="<?php the_post_thumbnail_url(); ?>" />

                <span class="Post__img__by">by <strong><?php the_author() ?></strong></span>
              </a>

              <div class="Post__right">
                <?php
                  $post_categories = get_the_category()
                ?>

                <ul class="Post__tags">
                  <?php foreach($post_categories as $category) { ?>
                    <li>
                      <a class="Post__tags__a Post__tags__a--<?php echo $category->slug ?>" href="<?php echo site_url(); ?>/category/<?php echo $category->slug ?>">
                        <span><?php echo $category->name ?></span>
                      </a>
                    </li>
                  <?php } ?>

                  <li class="Post__time"><time><?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' ago'; ?></time></li>
                </ul>
                <h3 class="Post__h3"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h3>
                <ul class="Post__details">
                  <li class="Post__details__li">By <span><strong><?php the_author() ?></strong></span></li>
                  <li class="Post__details__li Post__details__li--time"><time><?php echo get_the_date('F j, Y'); ?></time></li>
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
      <?php
        $sidebar_posts = get_posts(array(
          'posts_per_page' => 5,
          'category_name' => 'featured',
        ));
      ?>

      <?php if (count($sidebar_posts) > 0) { ?>
        <div class="Sidebar__box">
          <h2 class="Sidebar__h2">Series featured articles</h2>

          <ul class="Sidebar__ul">
            <?php foreach ($sidebar_posts as $post) : setup_postdata($post); ?>
              <li class="Sidebar__ul__li">
                <div class="Sidebar__ul__li__wrapper">
                  <h4 class="Sidebar__ul__li__h4"><?php the_title() ?></h4>
                  <ul class="Sidebar__ul__li__ul">
                    <li class="Sidebar__ul__li__ul__li">By <strong><?php the_author() ?></strong></li>
                  </ul>
                </div>
              </li>
            <?php endforeach; wp_reset_postdata(); ?>
          </ul>
        </div>
      <?php } ?>

      <div class="Sidebar__box">
        <div class="Sidebar__ads">
          <img src="<?php bloginfo('stylesheet_directory'); ?>/images/sidebar-ads.png" />
        </div>
      </div>
    </div>
  </div>
</div>
