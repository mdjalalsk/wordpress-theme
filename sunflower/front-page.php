<?php
/*
 * Theme Front Page 
*/


get_header(); ?>
<!-- start curasel  -->
<div class="container">
 
  <div id="recent-posts-carousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <?php
      $args = array(
        'posts_per_page' => 5 // number of recent posts to display
      );
      $recent_posts = new WP_Query($args);
      if ($recent_posts->have_posts()) :
        $i = 0;
        while ($recent_posts->have_posts()) : $recent_posts->the_post(); ?>
          <div class="carousel-item <?php if ($i == 0) {
                                      echo 'active';
                                    } ?>" data-bs-interval="2000">
            <a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail_url(); ?>" class="d-block w-100" alt=""></a>
            <div class="carousel-caption d-md-block">
              <h5><a href="<?php the_permalink(); ?>">
             <?php the_title()?>
                </a></h5>

            </div>
          </div>
          <?php $i++; ?>
      <?php endwhile;
        wp_reset_postdata();
      endif; ?>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#recent-posts-carousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#recent-posts-carousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</div>
<!-- end curasel  -->


<div id="homepage_post">
  <div class="container">
    <div class="row">

      <?php dynamic_sidebar('home-1'); ?>

    </div>
  </div>
</div>

<section id="service_area">
  <div class="container">
    <div class="row">
      <?php
      query_posts('post_type=service&post_status=publish&posts_per_page=3&order=ASC&paged=' . get_query_var('post'));

      if (have_posts()) :
        while (have_posts()) : the_post();
      ?>
          <div class="col-md-4">
            <div class="child_service">
              <h2><?php the_title(); ?></h2>
              <?php echo the_post_thumbnail('service') ?>
              <?php the_excerpt(); ?>
            </div>
          </div>

      <?php
        endwhile;
      endif;
      ?>
    </div>
  </div>
</section>



<?php get_footer(); ?>