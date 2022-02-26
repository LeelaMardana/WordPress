<div class="blog-post">
  <?php
  if (has_post_thumbnail()) {
    the_post_thumbnail(
      'post-thumbnail',
      array(
        'class' => "img-fluid w-100",
      )
    );
  } else {
    echo '<img class="img-fluid w-100" src="' . get_template_directory_uri() . '/images/default.jpg" alt="img-error" />';
  }
  ?>
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
  <?php the_content(); ?>
  <div class="my-4">
    <h5 class="d-inline-block mr-3">Поделитесь:</h5>
    <ul class="list-inline d-inline-block">
      <li class="list-inline-item"><a href="#"><i class="fab fa-facebook"></i></a></li>
      <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
      <li class="list-inline-item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
      <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin"></i></a></li>
    </ul>
  </div>
</div>