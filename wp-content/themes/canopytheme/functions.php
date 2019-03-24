<?php
  /* enqueue styles and scripts */
  function addStyleSheets() {
    
    /* theme's primary style.css file */
    wp_enqueue_style('main-styles' , get_stylesheet_uri());
    /*main fonts */
    wp_register_style('font-style', 'https://use.typekit.net/ysh4zhf.css');
    wp_enqueue_style('font-style');

    wp_register_style('font-awesome-style', 'https://use.fontawesome.com/releases/v5.6.3/css/all.css');
    wp_enqueue_style('font-awesome-style');
    // wp_enqueue_style('font-awesome', 'https://use.fontawesome.com/releases/v5.6.3/css/all.css');
  }
  add_action('wp_head', 'addStyleSheets');

  function enqueue_load_fa() {
    wp_enqueue_style( 'load-fa', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );
  }
  add_action( 'wp_enqueue_scripts', 'enqueue_load_fa' );

  function addScripts() {
    wp_register_script('scrollReveal', 'https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js');
    wp_enqueue_script('scrollReveal');

    wp_register_script('jQuery', 'https://code.jquery.com/jquery-3.3.1.min.js');
    wp_enqueue_script('jQuery');

    wp_enqueue_script( 'indexJS', '/wp-content/themes/canopytheme/js/index.js');

  }
  add_action('wp_head', 'addScripts');

  //update default size upload
  @ini_set( 'upload_max_size' , '64M' );
  @ini_set( 'post_max_size', '64M');
  @ini_set( 'max_execution_time', '300' );

  add_theme_support( 'post-thumbnails' ); 
?>