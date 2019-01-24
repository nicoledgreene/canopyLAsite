<?php
/* enqueue styles and scripts */
function addStyleSheets() {
  
  /* theme's primary style.css file */
  wp_enqueue_style('main-styles' , get_stylesheet_uri());
  /*main fonts */
  wp_enqueue_style('font-style',  get_stylesheet_directory_uri(), 'https://use.typekit.net/ysh4zhf.css');
  wp_enqueue_style('font-awesome-style', get_stylesheet_directory_uri(), 'https://use.fontawesome.com/releases/v5.6.3/css/all.css');
}

function addScripts() {

  wp_enqueue_script( 'indexJS', get_stylesheet_directory_uri(), '/wp-content/themes/canopytheme/js/index.js');
  
  wp_enqueue_script( 'scrollReveal', get_stylesheet_directory_uri(), 'https://unpkg.com/scrollreveal');

}

add_action('wp_enqueue_scripts', 'addStyleSheets', 'addScripts');

// <script src="https://unpkg.com/scrollreveal"></script>