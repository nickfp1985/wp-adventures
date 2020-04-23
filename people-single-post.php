<?php

/*
 * Template Name: Featured Person
 * Template Post Type: post, page, product
 */
get_header(); ?>



<?php

$post_object = get_field('post_object');

if ($post_object) :

  // override $post
  $post = $post_object;
  setup_postdata($post);

?>
  <div>
    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
    <span>Post Object Custom Field: <?php the_field('field_name'); ?></span>
  </div>
  <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly 
  ?>
<?php endif; ?>




<div class="post-card">
  <div class="post-card-section-left">
    <img class="post-image" src="<?php bloginfo('template_directory'); ?>/images/anthony-bourdain.jpg" />
  </div>
  <div class="post-card-section-right">
    <div class="post-title">
      <h5>POST TITLE</h5>
      <!-- <h5><?php echo $post_title; ?></h5> -->
    </div>
    <div class="post-bio">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi dolor magni odit molestias ad, ipsum repellat blanditiis corporis, ea eos reiciendis tempore facere ut doloremque! Harum accusamus et a deleniti.</p>
      <!-- <p><?php echo $post_bio; ?></p> -->
    </div>
    <button class="card-btn" id="post-btn">Close Bio</button>
  </div>
</div>


<?php get_footer(); ?>