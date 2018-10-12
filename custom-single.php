<?php while (have_posts()) : the_post(); ?>

<?php setPostViews(get_the_ID()); ?>

<div class="HeroPost">
  <div class="container">
    <div class="HeroPost__left">
      <?php
        $post_categories = get_the_category()
      ?>

      <div class="Post__right__info">
        <ul class="Post__tags">
          <?php foreach($post_categories as $category) { ?>
            <li>
              <a class="Post__tags__a Post__tags__a--<?php echo $category->slug ?>" href><span><?php echo $category->name ?></span></a>
            </li>
          <?php } ?>
        </ul>

        <p class="Post__right__info__views"><?php echo getPostViews(get_the_ID()); ?> views</p>
      </div>

      <h2 class="HeroPost__h2"><?php the_title() ?></h2>

      <div class="HeroPost__left__footer">
        <ul class="Post__details">
          <li class="Post__details__li">By <span><strong><?php the_author() ?></strong></span></li>
          <li class="Post__details__li"><time><?php echo get_the_date('F j, Y'); ?></time></li>
        </ul>

        <a class="HeroPost__share">Share</a>
      </div>
    </div>

    <div class="HeroPost__right">
      <img src="<?php the_post_thumbnail_url(); ?>" />
    </div>
  </div>
</div>

<div class="Main">
  <div class="container">
    <div class="Content">
      <div class="Single">
        <div class="Single__ps">
          <?php the_content() ?>
        </div>
      </div>
    </div>

    <div class="Sidebar">
      <div class="Sidebar__box">
        <div class="Sidebar__ads">
          <img src="<?php bloginfo('stylesheet_directory'); ?>/images/sidebar-ads.png" />
        </div>
      </div>

      <?php
        function map_cat($c) {
          return $c->cat_ID;
        }

        $sidebar_posts = get_posts(array(
          'posts_per_page' => 5,
          'category' => array_map("map_cat", $post_categories),
        ));
      ?>

      <?php if (count($sidebar_posts) > 0) { ?>
        <div class="Sidebar__box">
          <h2 class="Sidebar__h2">Related articles</h2>

          <ul class="Sidebar__ul">
            <?php foreach ($sidebar_posts as $post) : setup_postdata($post); ?>
              <li class="Sidebar__ul__li">
                <div class="Sidebar__ul__li__wrapper">
                  <h4 class="Sidebar__ul__li__h4">
                    <a  href="<?php the_permalink() ?>">
                      <?php the_title() ?>
                    </a>
                  </h4>
                  <ul class="Sidebar__ul__li__ul">
                    <li class="Sidebar__ul__li__ul__li">By <strong><?php the_author() ?></strong></li>
                  </ul>
                </div>
              </li>
            <?php endforeach; wp_reset_postdata(); ?>
          </ul>
        </div>
      <?php } ?>
    </div>
  </div>
</div>

<?php endwhile; ?>
