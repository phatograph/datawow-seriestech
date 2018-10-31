<div class="CategoryHeader">
  <div class="container">
    <div class="CategoryHeader__wrapper">
      <h2 class="CategoryHeader__h2">Contact info</h2>
      <p class="CategoryHeader__p">ช่องทางติดต่อและแสดงความคิดเห็น</p>
    </div>
  </div>
</div>

<div class="Main">
  <div class="container">
    <div class="Contact">
      <div class="Contact__right">
        <?php while (have_posts()) : the_post(); ?>
          <?php the_content() ?>
        <?php endwhile; ?>
      </div>
    </div>
  </div>
</div>
