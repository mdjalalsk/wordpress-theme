<?php
/*
* The template for displaying 404 page (not found)
*/ 
get_header(); ?>

  <section id="body_area">
    <div class="container">
      <div class="row">
        <div class="col-md-12 error_page">
            <h1>404 Error - Page not Found</h1>
            <h3>Oops! Looks Like something wrong</h3>
            <div class="error_search">
                <?php get_search_form(); ?>
            </div>
            <a href="<?php echo home_url(); ?>" class="homepage">Homepage</a>
        </div>
      </div>
    </div>
  </section>

  <?php get_footer(); ?>