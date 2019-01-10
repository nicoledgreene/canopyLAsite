<?php
/* enqueue styles and scripts */
function addStyleSheets() {
  
  /* theme's primary style.css file */
  wp_enqueue_style('main-styles' , get_stylesheet_uri());
  /*main fonts */
  wp_enqueue_style('font-style',  get_stylesheet_directory_uri(), 'https://use.typekit.net/ysh4zhf.css');
}
add_action('wp_enqueue_scripts' , 'addStyleSheets');

