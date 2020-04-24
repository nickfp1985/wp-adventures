<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Adventure Tours</title>
  <meta name="description" content="Power Digital Marketing assessment project." />
  <meta name="author" content="Nick Peddie" />

  <!-- <link href="style.css" rel="stylesheet" /> -->

  <?php wp_head(); ?>

</head>

<body>


  <header>
    <div class="nav-wrapper">
      <!-- decided not to use this -->
      <!-- <?php wp_nav_menu(
              array(
                'theme_location' => 'top-menu',
                'menu' => 'main-menu',
                'container' => 'nav',
                'menu_class' => 'navbar',
              )
            ); ?> -->

      <nav class="navbar" id="main-menu">
        <a href="#people">PEOPLE</a>
        <a href="#places">PLACES</a>
        <a href="#gallery">GALLERY</a>
      </nav>
    </div>

    <?php $hero = get_field('hero'); ?>
    <div class="social-icon-bar">
      <h5>SHARE</h5>
      <?php if ($hero['facebook_link']) : ?>
        <a href="https://www.facebook.com/" target="https://www.facebook.com/"><img class="social-icon" id="facebook" src="<?php bloginfo('template_directory'); ?>/icons/icon-facebook.svg" /></a>
      <?php endif; ?>
      <?php if ($hero['twitter_link']) : ?>
        <a href="https://twitter.com/nickfp1985" target="https://twitter.com/nickfp1985"><img class="social-icon" id="twitter" src="<?php bloginfo('template_directory'); ?>/icons/icon-twitter.svg" /></a>
      <?php endif; ?>
      <?php if ($hero['pinterest_link']) : ?>
        <a href="https://www.pinterest.com/" target="https://www.pinterest.com/"><img class="social-icon" id="pinterest" src="<?php bloginfo('template_directory'); ?>/icons/icon-pinterest.svg" /></a>
      <?php endif; ?>
    </div>
    <!-- social icon bar END -->
    <h1><?php echo $hero['main_title']; ?></h1>
    <img id="dude" src="<?php bloginfo('template_directory'); ?>/images/dude.png" />

  </header>