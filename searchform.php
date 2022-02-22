<form class="form-group search" role="search" method="get" id="searchform" action="<?php echo home_url('/') ?>">
  <input type="text" placeholder="поиск" class="form-control" value="<?php echo get_search_query() ?>" name="s" id="s" />
  <i type="submit" class="fa fa-search"></i>
</form>