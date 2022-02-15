<?php get_header(); ?>
<!--MAIN BANNER AREA START -->
<div class="page-banner-area page-contact" id="page-banner">
  <div class="overlay dark-overlay"></div>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8 m-auto text-center col-sm-12 col-md-12">
        <div class="banner-content content-padding">
          <h1 class="text-white">Журнал</h1>
          <p>Полезные статьи про маркетинг и диджитал</p>
        </div>
      </div>
    </div>
  </div>
</div>
<!--MAIN HEADER AREA END -->

<section class="section blog-wrap ">
  <div class="container">
    <div class="row">
      <div class="col-lg-8">
        <div class="row">
          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
              <div class="col-lg-6">
                <div class="blog-post">
                  <?php
                  //должно находится внутри цикла
                  if (has_post_thumbnail()) {
                    the_post_thumbnail(
                      'large',
                      array(
                        'class' => "img-fluid",
                        'alt'   => "post-img",
                      )
                    );
                  } else {
                    echo '<img class="img-fluid" src="' . get_bloginfo("template_url") . '/images/default.jpg" alt="img-error" />';
                  }
                  ?>
                  <img src="images/blog/blog-1.jpg" alt="" class="img-fluid">
                  <div class="mt-4 mb-3 d-flex">
                    <div class="post-author mr-3">
                      <i class="fa fa-user"></i>
                      <span class="h6 text-uppercase"><?php the_author(); ?></span>
                    </div>
                    <div class="post-info">
                      <i class="fa fa-calendar-check"></i>
                      <span><?php the_time('j F Y'); ?></span>
                    </div>
                  </div>
                  <a href="<? echo get_the_permalink() ?>" class="h4 "><?php the_title(); ?></a>
                  <p class="mt-3"><?php the_excerpt(); ?></p>
                  <a href="<? echo get_the_permalink() ?>" class="read-more">Читать статью <i class="fa fa-angle-right"></i></a>
                </div>
              </div>
            <?php endwhile;
          else : ?>
            Записей нет.
          <?php endif; ?>
        </div>

        <div class="row">
          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
              <div class="col-lg-12">
                <div class="blog-post">
                  <img src="images/blog/blog-lg.jpg" alt="" class="img-fluid">
                  <div class="mt-4 mb-3 d-flex">
                    <div class="post-author mr-3">
                      <i class="fa fa-user"></i>
                      <span class="h6 text-uppercase">Марина Цветкова</span>
                    </div>

                    <div class="post-info">
                      <i class="fa fa-calendar-check"></i>
                      <span>30 марта 2020</span>
                    </div>
                  </div>
                  <a href="blog-single.html" class="h4 "><?php the_title(); ?>
                    <p class="mt-3">Что делать, если вы наняли некомпетентного специалиста для продвижения? Можно ли спасти проект, который попал в теневой бан или нет.</p>
                    <a href="blog-single.html" class="read-more">Читать статью <i class="fa fa-angle-right"></i></a>
                </div>
              </div>
            <?php endwhile;
          else : ?>
            Записей нет.
          <?php endif; ?>
        </div>

        <div class="row">
          <div class="col-lg-6">
            <div class="blog-post">
              <img src="images/blog/blog-3.jpg" alt="" class="img-fluid">
              <div class="mt-4 mb-3 d-flex">
                <div class="post-author mr-3">
                  <i class="fa fa-user"></i>
                  <span class="h6 text-uppercase">Оксана Вальнова</span>
                </div>

                <div class="post-info">
                  <i class="fa fa-calendar-check"></i>
                  <span>1 декабря 2019</span>
                </div>
              </div>
              <a href="blog-single.html" class="h4 ">Пять способов обойти конкурентов</a>
              <p class="mt-3">Поисковая выдача — это всегда конкуренция. Но что делать, чтобы конкуренты остались позади вас? Отвечаю в статье</p>
              <a href="blog-single.html" class="read-more">Читать статью <i class="fa fa-angle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="blog-post">
              <img src="images/blog/blog-4.jpg" alt="" class="img-fluid">
              <div class="mt-4 mb-3 d-flex">
                <div class="post-author mr-3">
                  <i class="fa fa-user"></i>
                  <span class="h6 text-uppercase">Мишель Ким</span>
                </div>

                <div class="post-info">
                  <i class="fa fa-calendar-check"></i>
                  <span>10 ноября 2019</span>
                </div>
              </div>
              <a href="blog-single.html" class="h4 ">Лучшие сервисы для продвижения вашего сайта</a>
              <p class="mt-3">Существуют сервисы, котоорые могут помочь продвинуть сайт по СЕО, но есть и мошенники, которые могут оставить вас без денег.</p>
              <a href="blog-single.html" class="read-more">Читать статью <i class="fa fa-angle-right"></i></a>
            </div>
          </div>
        </div>

      </div>
      <div class="col-lg-4">
        <div class="row">
          <div class="col-lg-12">
            <div class="sidebar-widget search">
              <div class="form-group">
                <input type="text" placeholder="поиск" class="form-control">
                <i class="fa fa-search"></i>
              </div>
            </div>
          </div>

          <div class="col-lg-12">
            <div class="sidebar-widget about-bar">
              <h5 class="mb-3">О нас</h5>
              <p>Мы — маркетинговое агентство полного цикла, которое оказывает диджитал услуги стартапам и крупным компаниям</p>
            </div>
          </div>

          <div class="col-lg-12">
            <div class="sidebar-widget category">
              <h5 class="mb-3">Рубрики</h5>
              <ul class="list-styled">
                <li>Маркетинг</li>
                <li>Диджитал</li>
                <li>SEO</li>
                <li>Веб-дизайн</li>
                <li>Разработка</li>
                <li>Видео</li>
                <li>Подкаст</li>
              </ul>
            </div>
          </div>

          <div class="col-lg-12">
            <div class="sidebar-widget tag">
              <a href="#">web</a>
              <a href="#">development</a>
              <a href="#">seo</a>
              <a href="#">marketing</a>
              <a href="#">branding</a>
              <a href="#">web deisgn</a>
              <a href="#">Tutorial</a>
              <a href="#">Tips</a>
              <a href="#">Design trend</a>
            </div>
          </div>
          <div class="col-lg-12">
            <div class="sidebar-widget download">
              <h5 class="mb-4">Полезные файлы</h5>
              <a href="#"> <i class="fa fa-file-pdf"></i>Презентация Promodise</a>
              <a href="#"> <i class="fa fa-file-pdf"></i>10 источников бесплатного SEO</a>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
  </div>
</section>

<!--  FOOTER AREA START  -->
<section id="footer" class="section-padding">
  <div class="container">
    <div class="row">
      <div class="col-lg-5 col-sm-8 col-md-8">
        <div class="footer-widget footer-link">
          <h4>Мы заботимся о том, чтобы вы <br />быстро развивали свой бизнес</h4>
          <p>
            Маркетинговое и диджитал агентство полного цикла: мы решаем задачи по продвижению и рекламе, делаем
            сайты и презентации, чтобы это не пришлось делать вам.
          </p>
        </div>
      </div>
      <div class="col-lg-2 col-sm-4 col-md-4">
        <div class="footer-widget footer-link">
          <h4>Информация</h4>
          <ul>
            <li><a href="#">о нас</a></li>
            <li><a href="#">услуги</a></li>
            <li><a href="#">цены</a></li>
            <li><a href="#">команда</a></li>
            <li><a href="#">отзывы</a></li>
            <li><a href="#">журнал</a></li>
          </ul>
        </div>
      </div>

      <div class="col-lg-2 col-sm-6 col-md-6">
        <div class="footer-widget footer-link">
          <h4>Сылки</h4>
          <ul>
            <li><a href="#">Как это работает</a></li>
            <li><a href="#">Поддержка</a></li>
            <li><a href="#">Политика данных</a></li>
            <li><a href="#">Сообщить об ошибке</a></li>
            <li><a href="#">Лицензия</a></li>
            <li><a href="#">Оферта</a></li>
          </ul>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6 col-md-6">
        <div class="footer-widget footer-text">
          <h4>Наши контакты</h4>
          <p class="mail"><span>Email:</span> promdise@gmail.com</p>
          <p><span>Телефон :</span>+7 495 27-73-894</p>
          <p><span>Адрес:</span> г. Москва, ул. 40 лет СССР, строение 3, офис 37</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12 text-center">
        <div class="footer-copy">© 2018 Promodise inc. Все права защищены.</div>
      </div>
    </div>
  </div>
</section>
<!--  FOOTER AREA END  -->
<?php get_footer(); ?>