<?php get_header(); ?>

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

    <h1 class="H1"><a class="H1__a">series.tech</a></h1>

    <?php wp_nav_menu(array('theme_location' => 'primary-menu', 'container_class' => 'Nav')); ?>
  </div>
</div>

<div class="Hero">
  <div class="container">
    <div class="Post">
      <img class="Post__img" src="https://placeimg.com/270/200/tech" />

      <div class="Post__right">
        <ul class="Post__tags">
          <li>
            <a class="Post__tags__a">Feature</a>
          </li>
        </ul>
        <h3 class="Post__h3">Apple Watch + AI = เครื่องตรวจจับสัญญาณโรคเบาหวานบนข้อมือ</h3>
        <ul class="Post__details">
          <li class="Post__details__li">By <span><strong>Cole Coleman</strong></span></li>
          <li class="Post__details__li"><time>Dec 30, 2017</time></li>
          <li class="Post__details__li"><span>120 <strong>Comments</strong></span></li>
        </ul>
        <p class="Post__p">ในช่วงปีที่ผ่านมา หนึ่งในการเปลี่ยนแปลงของสมาร์ทโฟนกลุ่มเรือธงที่ชัดที่สุดคือเรื่องราคา ที่กระโดดจากช่วง 2-3 หมื่นขึ้นไปเป็นช่วง 3-4 หมื่น ท่ามกลางการเปลี่ยนแปลงของสเปคและดีไซน์ที่ไม่ได้สร้างความแตกต่างมากนัก...</p>
        <a class="Post__read-more">Continue reading</a>
      </div>
    </div>
  </div>
</div>

<div class="Main">
  <div class="container">
    <div class="Content">
      <?php for ($i = 0; $i < 5; $i++) { ?>
        <div class="Post">
          <img class="Post__img" src="https://placeimg.com/270/200/tech" />

          <div class="Post__right">
            <ul class="Post__tags">
              <li>
                <a class="Post__tags__a">Feature</a>
              </li>
            </ul>
            <h3 class="Post__h3">Apple Watch + AI = เครื่องตรวจจับสัญญาณโรคเบาหวานบนข้อมือ</h3>
            <ul class="Post__details">
              <li class="Post__details__li">By <span><strong>Cole Coleman</strong></span></li>
              <li class="Post__details__li"><time>Dec 30, 2017</time></li>
              <li class="Post__details__li"><span>120 <strong>Comments</strong></span></li>
            </ul>
            <p class="Post__p">ในช่วงปีที่ผ่านมา หนึ่งในการเปลี่ยนแปลงของสมาร์ทโฟนกลุ่มเรือธงที่ชัดที่สุดคือเรื่องราคา ที่กระโดดจากช่วง 2-3 หมื่นขึ้นไปเป็นช่วง 3-4 หมื่น ท่ามกลางการเปลี่ยนแปลงของสเปคและดีไซน์ที่ไม่ได้สร้างความแตกต่างมากนัก...</p>
          </div>
        </div>
      <?php } ?>
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
    </div>
  </div>
</div>

<?php get_footer(); ?>
