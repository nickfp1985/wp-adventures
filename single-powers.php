<?php get_header(); ?>


<div class="container" style="display: flex; flex-direction: column; align-items: center; text-align: center; padding-top: 5px; padding-bottom: 5px; height: 600px; width: 90%;">

  <h1><?php the_title(); ?></h1>

  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

      <?php the_content(); ?>

  <?php endwhile;
  endif; ?>

</div>


<?php get_footer(); ?>