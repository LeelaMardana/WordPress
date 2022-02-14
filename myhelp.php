<div class="head">


  <!DOCTYPE html>
  <html lang="ru">

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="seo & digital marketing" />
    <meta name="keywords" content="marketing,digital marketing,creative, agency, startup,promodise,onepage, clean, modern,seo,business, company" />
    <?php wp_head() ?>
  </head>


</div>


<div class="logo">
  <?php
  if (has_custom_logo()) {
    // логотип есть выводим его
    echo get_custom_logo();
  }
  ?>
</div>


<div class="menu">
  <?php
  wp_nav_menu([
    'theme_location'  => 'header',
    'container'       => 'false',
    'menu_class'      => 'navbar-nav',
    'menu_id'         => false,
    'echo'            => true,
    'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
    'depth'           => 2,
    'walker'          => new bootstrap_4_walker_nav_menu(),
  ]);
  ?>
</div>


<div class="front-page">
  <?php get_header(); ?>
  <section>content</section>
  <section>content</section>
  <section>content</section>
  <?php get_footer(); ?>
</div>


<div class="footer">

  <body>
    <section></section>
    <?php wp_footer() ?>
  </body>

</div>