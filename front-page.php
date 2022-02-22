  <?php get_header(); ?>
  <!--MAIN BANNER AREA START -->
  <div class="banner-area banner-3">
    <div class="overlay dark-overlay"></div>
    <div class="d-table">
      <div class="d-table-cell">
        <div class="container">
          <div class="row">
            <div class="col-lg-8 m-auto text-center col-sm-12 col-md-12">
              <div class="banner-content content-padding">
                <h5 class="subtitle"><?php echo get_post_meta($post->ID, 'banner-subtitle', true); ?></h5>
                <h1 class="banner-title"><?php echo get_post_meta($post->ID, 'banner-title', true); ?></h1>
                <p>
                  <?php echo get_post_meta($post->ID, 'banner-text', true); ?>
                </p>
                <a href="#" class="btn btn-white btn-circled">Начать сотрудничество</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--MAIN HEADER AREA END -->
  <!--  ABOUT AREA START  -->
  <section id="intro" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-sm-12 col-md-12">
          <div class="section-heading">
            <p class="lead">
              Мы оказываем маркетинговые услуги с 2016 года за это время мы выполнили больше сотни проеков,
              подключайтесь к совместной работе с нами
            </p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-5 d-none d-lg-block col-sm-12">
          <div class="intro-img">
            <img src="images/banner/why-choose.png" alt="intro-img" class="img-fluid" />
          </div>
        </div>
        <div class="col-lg-7 col-md-12 col-sm-12">
          <div class="row">
            <div class="col-lg-6 col-sm-6 col-md-6">
              <div class="intro-box">
                <span>01.</span>
                <h4>Проекты</h4>
                <p>
                  мы ведем каждый проект индивидуально, за вами закрепляется менеджер, который работает только с вами.
                </p>
              </div>
            </div>
            <div class="col-lg-6 col-sm-6 col-md-6">
              <div class="intro-box">
                <span>02.</span>
                <h4>Стратегия</h4>
                <p>
                  не беремся за проект, если он одноразовый, запускаем такие проекты, с которыми будем работать
                  несоклько лет.
                </p>
              </div>
            </div>
            <div class="col-lg-6 col-sm-6 col-md-6">
              <div class="intro-box">
                <span>03.</span>
                <h4>Опыт</h4>
                <p>
                  мы успели поработать в разных нишах: строительство, инвестиции, онлайн-образование, бьюти-сфера и
                  другие.
                </p>
              </div>
            </div>
            <div class="col-lg-6 col-sm-6 col-md-6">
              <div class="intro-box">
                <span>04.</span>
                <h4>Технологии</h4>
                <p>
                  Все проекты делает команда разработчиков, которая постоянно учится новому, мы используем современные
                  инструменты для решения ваших задач.
                </p>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12">
              <div class="intro-cta">
                <p class="lead">Остались вопросы? <a href="#contact" class="smoth-scroll">Напишите нам</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--  ABOUT AREA END  -->

  <!--  SERVICE AREA START  -->
  <section id="about" class="bg-light">
    <div class="about-bg-img d-none d-lg-block d-md-block"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-7 col-sm-12 col-md-8">
          <div class="about-content">
            <h5 class="subtitle">О нас</h5>
            <h3>Мы делаем рабочий инструмент <br />для вашего бизнеса</h3>
            <p>
              Мы создадим сайт про вашу компанию и вам не придется заказывать услуги у фрилансеров, переживая за сроки
              проекта и его качество. В нашей команде есть все нужные специалисты, которые сделаю отличный сайт
            </p>

            <ul class="about-list">
              <li><i class="icofont icofont-check-circled"></i> Адаптивный</li>
              <li><i class="icofont icofont-check-circled"> </i> С анимацией</li>
              <li><i class="icofont icofont-check-circled"> </i> С чистым кодом</li>
              <li><i class="icofont icofont-check-circled"> </i> Готовый к использованию</li>
              <li><i class="icofont icofont-check-circled"> </i> Настроенный под SEO</li>
              <li><i class="icofont icofont-check-circled"></i> Кроссбраузерный</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--  SERVICE AREA END  -->

  <!--  SERVICE PARTNER START  -->
  <section id="service-head" class="bg-feature">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-sm-12 m-auto">
          <div class="section-heading text-white">
            <h4 class="section-title">Диджитал полного цикла</h4>
            <p>
              Это означает, что мы сможем выполнить любую цифровую задачу: <br />
              видео, маркетинг, реклама, разработка или дизайн.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--  SERVICE PARTNER END  -->

  <!--  SERVICE AREA START  -->
  <section id="service">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-sm-6 col-md-6">
          <div class="service-box">
            <div class="service-img-icon">
              <img src="images/icon/007-digital-marketing-3.png" alt="service-icon" class="img-fluid" />
            </div>
            <div class="service-inner">
              <h4>Видео маркетинг</h4>
              <p>
                Охватите огромное количество пользователей и получите рекламу вашего продукта и услуги с помощью
                <span>видео маркетинга</span>.
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 col-md-6">
          <div class="service-box">
            <div class="service-img-icon">
              <img src="images/icon/008-digital-marketing-2.png" alt="service-icon" class="img-fluid" />
            </div>
            <div class="service-inner">
              <h4>Email маркетинг</h4>
              <p>
                Маркетинг по электронной почте-это отличное решение для охвата широкого круга клиентов, с нетерпением
                ожидающих получения услуги.
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 col-md-6">
          <div class="service-box">
            <div class="service-img-icon">
              <img src="images/icon/003-task.png" alt="service-icon" class="img-fluid" />
            </div>
            <div class="service-inner">
              <h4>SEO оптимизация</h4>
              <p>
                мы предоставляем широкий спектр услуг seo, чтобы выдвинуть ваш сайт в топ по запросам, чтобы охватить
                ваших целевых клиентов.
              </p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-sm-6 col-md-6">
          <div class="service-box">
            <div class="service-img-icon">
              <img src="images/icon/010-digital-marketing.png" alt="service-icon" class="img-fluid" />
            </div>
            <div class="service-inner">
              <h4>Собственный сайт</h4>
              <p>
                Мы предоставляем индивидуальный веб-сайт для любого веб-сервиса небольшой и крупной компании в большом
                компактном пакете.
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 col-md-6">
          <div class="service-box">
            <div class="service-img-icon">
              <img src="images/icon/006-analytics.png" alt="service-icon" class="img-fluid" />
            </div>
            <div class="service-inner">
              <h4>Контент маркетинг</h4>
              <p>
                Создайте информационный сайт, чтобы заработать на нем, а мы вам в этом поможем: с помощью дизайна,
                разработки или SEO.
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 col-md-6">
          <div class="service-box">
            <div class="service-img-icon">
              <img src="images/icon/004-hiring.png" alt="service-icon" class="img-fluid" />
            </div>
            <div class="service-inner">
              <h4>Ссылочная масса</h4>
              <p>
                Чтобы ваш сайт вызывал больше доверия, мы обеспечим высокую цитируемость. На ваш сайт будут ссылаться
                авторитетные сайты.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--  SERVICE AREA END  -->
  <!-- PRICE AREA START  -->
  <section id="pricing" class="section-padding bg-main">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-sm-12 m-auto">
          <div class="section-heading">
            <h4 class="section-title">Доступные тарифы для вас</h4>
            <p>Подберите тот, который подходит вам больше всего</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 col-sm-6">
          <div class="pricing-block">
            <div class="price-header">
              <i class="icofont-diamond"></i>

              <h4 class="price">15 000<small>₽</small></h4>
              <h5>ежемесячно</h5>
            </div>
            <div class="line"></div>
            <ul>
              <li>5 веб-сайтов</li>
              <li>Дизайн презентаций</li>
              <li>Видео-визитка</li>
              <li>Общий менеджер</li>
              <li>Упаковка маркетинг-кит</li>
              <li>Домен для сайта на год</li>
              <li>Поддержка в расширенное время</li>
              <li>Ежемесячный отчет</li>
            </ul>

            <a href="#" class="btn btn-hero btn-circled">выбрать тариф</a>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6">
          <div class="pricing-block">
            <div class="price-header">
              <i class="icofont-rocket-alt-1"></i>

              <h4 class="price">25 000<small>₽</small></h4>
              <h5>ежемесячно</h5>
            </div>
            <div class="line"></div>
            <ul>
              <li>10 веб-сайтов</li>
              <li>Дизайн презентаций</li>
              <li>Видео-визитка</li>
              <li>Отдельный менеджер</li>
              <li>Упаковка маркетинг-кит</li>
              <li>Домен для сайта на год</li>
              <li>Поддержка в любое время</li>
              <li>Ежемесячный отчет</li>
            </ul>

            <a href="#" class="btn btn-hero btn-circled">выбрать тариф</a>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6">
          <div class="pricing-block">
            <div class="price-header">
              <i class="icofont-light-bulb"></i>

              <h4 class="price">55 000<small>₽</small></h4>
              <h5>ежемесячно</h5>
            </div>
            <div class="line"></div>
            <ul>
              <li>1 веб-сайт</li>
              <li>Дизайн презентаций</li>
              <li>Видео-визитка</li>
              <li>Общий менеджер</li>
              <li>Упаковка маркетинг-кит</li>
              <li>Домен для сайта на год</li>
              <li>Поддержка в рабочее время</li>
              <li>Ежемесячный отчет</li>
            </ul>

            <a href="#" class="btn btn-hero btn-circled">выбрать тариф</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- PRICE AREA END  -->
  <!--  TESTIMONIAL AREA START  -->
  <section id="testimonial" class="section-padding">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
          <div class="mb-5">
            <h3 class="mb-2">Клиенты, которые доверяют нам</h3>
            <p>
              Ниже представлены отзывы от клиентов, с которыми<br />
              мы работаем уже несколько лет подряд
            </p>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-8 m-auto col-sm-12 col-md-12">
          <div class="carousel slide" id="test-carousel2">
            <div class="carousel-inner">
              <ol class="carousel-indicators">
                <li data-target="#test-carousel2" data-slide-to="0" class="active"></li>
                <li data-target="#test-carousel2" data-slide-to="1"></li>
                <li data-target="#test-carousel2" data-slide-to="2"></li>
              </ol>

              <div class="carousel-item active">
                <div class="row">
                  <div class="col-lg-12 col-sm-12">
                    <div class="testimonial-content style-2">
                      <div class="author-info">
                        <div class="author-img">
                          <img src="images/author/3b.jpg" alt="" class="img-fluid" />
                        </div>
                      </div>

                      <p>
                        <i class="icofont icofont-quote-left"></i>Это отличная платформа для тех, кто хочет начать
                        бизнес, но не может принять правильное решение. Это действительно отличное место для того,
                        чтобы начать свой бизнес правильно! <i class="icofont icofont-quote-right"></i>
                      </p>
                      <div class="author-text">
                        <h5>Рыбаков Виталий</h5>
                        <p>Старший инженер</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="row">
                  <div class="col-lg-12 col-sm-12">
                    <div class="testimonial-content style-2">
                      <div class="author-info">
                        <div class="author-img">
                          <img src="images/author/5b.jpg" alt="" class="img-fluid" />
                        </div>
                      </div>

                      <p>
                        <i class="icofont icofont-quote-left"></i>Это отличная платформа для тех, кто хочет начать
                        бизнес, но не может принять правильное решение. Это действительно отличное место для того,
                        чтобы начать свой бизнес правильно! <i class="icofont icofont-quote-right"></i>
                      </p>
                      <div class="author-text">
                        <h5>Вострецов Денис</h5>
                        <p>Маркетолог</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!--  ITEM END  -->

              <div class="carousel-item">
                <div class="row">
                  <div class="col-lg-12 col-sm-12">
                    <div class="testimonial-content style-2">
                      <div class="author-info">
                        <div class="author-img">
                          <img src="images/author/3b.jpg" alt="" class="img-fluid" />
                        </div>
                      </div>

                      <p>
                        <i class="icofont icofont-quote-left"></i>Это отличная платформа для тех, кто хочет начать
                        бизнес, но не может принять правильное решение. Это действительно отличное место для того,
                        чтобы начать свой бизнес правильно! <i class="icofont icofont-quote-right"></i>
                      </p>
                      <div class="author-text">
                        <h5>Киренков Алексей</h5>
                        <p>Младший менеджер</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!--  ITEM END  -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--  TESTIMONIAL AREA END  -->
  <!--  PARTNER START  -->
  <section class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-sm-6 col-md-3 text-center">
          <img src="images/clients/client01.png" alt="partner" class="img-fluid" />
        </div>
        <div class="col-lg-3 col-sm-6 col-md-3 text-center">
          <img src="images/clients/client06.png" alt="partner" class="img-fluid" />
        </div>
        <div class="col-lg-3 col-sm-6 col-md-3 text-center">
          <img src="images/clients/client04.png" alt="partner" class="img-fluid" />
        </div>
        <div class="col-lg-3 col-sm-6 col-md-3 text-center">
          <img src="images/clients/client05.png" alt="partner" class="img-fluid" />
        </div>
      </div>
    </div>
  </section>
  <!--  PARTNER END  -->
  <!--  BLOG AREA START  -->
  <section id="blog" class="section-padding bg-main">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-sm-12 m-auto">
          <div class="section-heading">
            <h4 class="section-title">Журнал</h4>
            <div class="line"></div>
            <p>
              Мы публикуем в блоге интересные кейсы наших клиентов, возможно, <br />
              вы найдете много полезного для себя и своего бизнеса
            </p>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-4 col-sm-6 col-md-4">
          <div class="blog-block">
            <img src="images/blog/blog-1.jpg" alt="" class="img-fluid" />
            <div class="blog-text">
              <h6 class="author-name"><span>Лайфхаки</span>Иван Лазарев</h6>
              <a href="blog-single.html" class="h5 my-2 d-inline-block"> Лучшие способы вовлечь людей в статью </a>
              <p>Вы заметили, что статьи на вашем сайте даже не читают? Это можно легко исправить, вам поможет...</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 col-md-4">
          <div class="blog-block">
            <img src="images/blog/blog-2.jpg" alt="" class="img-fluid" />
            <div class="blog-text">
              <h6 class="author-name"><span>Брендинг</span>Света Ключева</h6>
              <a href="blog-single.html" class="h5 my-2 d-inline-block">
                Как подняться в топ, даже если вы стартовали недавно</a>
              <p>
                Позиционирование. Вот, что нужно для быстрого поднятия сайта в топ, ну и поведенческие факторы,
                конечно, куда без них...
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 col-md-4">
          <div class="blog-block">
            <img src="images/blog/blog-3.jpg" alt="" class="img-fluid" />
            <div class="blog-text">
              <h6 class="author-name"><span>Маркетинг</span>Люда Милова</h6>
              <a href="blog-single.html" class="h5 my-2 d-inline-block"> Как запустить сайт уже завтра? </a>
              <p>
                Даже если ваш сайт еще только в вашей голове или на бумаге, его можно запустить всего за сутки.
                Покажу, как это можно сделать.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--  BLOG AREA END  -->
  <!--  COUNTER AREA START  -->
  <section id="counter" class="section-padding">
    <div class="overlay dark-overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-sm-6 col-md-6">
          <div class="counter-stat">
            <i class="icofont icofont-heart"></i>
            <span class="counter">460</span>
            <h5>счастливых клиентов</h5>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6 col-md-6">
          <div class="counter-stat">
            <i class="icofont icofont-rocket"></i>
            <span class="counter">60</span>
            <h5>выполненных проектов</h5>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6 col-md-6">
          <div class="counter-stat">
            <i class="icofont icofont-hand-power"></i>
            <span class="counter">30</span>
            <h5>людей в команде</h5>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6 col-md-6">
          <div class="counter-stat">
            <i class="icofont icofont-shield-alt"></i>
            <span class="counter">25</span>
            <h5>Проектов в работе</h5>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--  COUNTER AREA END  -->
  <?php get_footer(); ?>