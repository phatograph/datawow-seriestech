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
      <dl class="Contact__left">
        <div class="Contact__left__item">
          <dt>Email:</dt>
          <dd>info@series.tech</dd>
        </div>
        <div class="Contact__left__item">
          <dt>Tel:</dt>
          <dd>02-024-9119</dd>
        </div>
        <div class="Contact__left__item Contact__left__item--full">
          <dt>Address:</dt>
          <dd>725 Metropolis Building ชั้น10 ห้อง 1001 ถนนสุขุมวิท แขวงคลองตันเหนือ เขตวัฒนา กรุงเทพฯ 10110</dd>
        </div>
      </dl>

      <div class="Contact__right">
        <?php while (have_posts()) : the_post(); ?>
          <?php the_content() ?>
        <?php endwhile; ?>
      </div>
    </div>
  </div>
</div>
