<div class="search-meta flex">
<!-- // link to search page -->
<!-- // mr2 = margin-right 2 units -->
<!-- // db = display: block; -->
<!-- // db is useful because it gets rid of any extra space we may not want -->
<!-- // always have to write 'echo' in php to actually retrieve the file -->
  
  <a class="db mr2" href="<?php echo site_url('/search/'); ?>">

    <img src="<?php echo get_template_directory_uri() . '/images/icon-search.svg'; ?>" class="db">

  </a>

  <!-- link to cart page by using the function in woocommerce.php -->
  <a href="<?php cart_url(); ?>">

    <img src="<?php echo get_template_directory_uri() . '/images/icon-cart.svg'; ?>" class="db">
  
  </a>


</div>
