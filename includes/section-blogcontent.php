<!-- <?php the_content(); ?>

<?php
$firstName = get_the_author_meta('first_name');
$lastName = get_the_author_meta('last_name');
?>

<p>Posted by <?php echo $fname; ?> <?php echo $lastName; ?></p>

<?php
$tags = get_the_tags();
if ($tags) :
  foreach ($tags as $tag) : ?>

    <a href="<?php echo get_tag_link($tag->term_id); ?>" class="badge badge-success">
      <?php echo $tag->name; ?>
    </a>

<?php endforeach;
endif; ?>

<?php
$categories = get_the_category();
foreach ($categories as $category);

?> -->