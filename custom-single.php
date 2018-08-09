<?php while (have_posts()) : the_post(); ?>

<div class="HeroPost">
  <div class="container">
    <div class="HeroPost__left">
      <?php
        $post_categories = get_the_category()
      ?>

      <ul class="HeroPost__ul">
        <?php foreach($post_categories as $category) { ?>
          <li>
            <a class="HeroPost__ul__a" href><?php echo $category->name ?></a>
          </li>
        <?php } ?>
      </ul>

      <h2 class="HeroPost__h2">Google ปรับนโยบายใหม่ ไม่รับแอพขุดสกุลเงินคริปโตเข้า Play Store แล้ว</h2>

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
    </div>
  </div>
</div>

<?php endwhile; ?>
