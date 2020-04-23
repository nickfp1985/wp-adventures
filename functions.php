<?php


function load_css()
{
  wp_register_style('mystyle', get_template_directory_uri() . '/css/style.css', array(), false, 'all');
  wp_enqueue_style('mystyle');

  // wp_register_style('animateOnScrollcss', get_template_directory_uri() . '/css/aos.css', array(), false, 'all');
  // wp_enqueue_style('animateOnScrollcss');
}
add_action('wp_enqueue_scripts', 'load_css');


function Load_js()
{
  wp_enqueue_script('jquery');

  // wp_register_script('animateOnScrolljs', get_template_directory_uri() . '/js/aos.js', '', 1, true);
  // wp_enqueue_script('animateOnScrolljs');
}
add_action('wp_enqueue_scripts', 'load_js');


// theme options
add_theme_support('menus');
add_theme_support('post-thumbnails');
add_theme_support('widgets');

// register menus
register_nav_menus(

  array(
    'top-menu' => 'Top Menu Location',
    'mobile-menu' => 'Mobile Menu Location',
    'footer-menu' => 'Footer Menu Location',
  )

);


add_image_size('blog-large', 800, 600, false);
add_image_size('blog-small', 300, 200, true);


function custom_sidebars()
{

  register_sidebar(

    array(
      'name' => 'Home Sidebar',
      'id' => 'home-sidebar',
      'before_title' => '<h4 class="widget-title">',
      'after_title' => '</h4>',

    )
  );

  register_sidebar(

    array(
      'name' => 'Blog Sidebar',
      'id' => 'blog-sidebar',
      'before_title' => '<h4 class="widget-title">',
      'after_title' => '</h4>',

    )
  );
}
add_action('widgets_init', 'custom_sidebars');


function custom_post_type()
{

  $args = array(

    'labels' => array(
      'name' => 'Powers',
      'singular_name' => 'Power',
    ),
    'hierarchical' => false,
    'has_archive' => true,
    'menu_icon' => 'dashicons-universal-access-alt',
    'public' => true,
    'has_archive' => true,
    'support' => array('title', 'editor', 'thumbnail'),

  );

  register_post_type('powers', $args);
}
add_action('init', 'custom_post_type');


function custom_post_taxonomy()
{

  $args = array(

    'labels' => array(
      'name' => 'Smarts',
      'singular_name' => 'Smart',
    ),
    'public' => true,
    'hierarchical' => true,

  );

  register_taxonomy('smarts', array('powers'), $args);
}
add_action('init', 'custom_post_taxonomy');
