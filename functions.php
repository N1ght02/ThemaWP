<?php

function IetsAnders() {

wp_enqueue_style('style', get_stylesheet_uri());

}

add_action('wp_enqueue_scripts', 'IetsAnders');




register_nav_menus(array(
  'hoofd' + __('Hoofd menu'),
  'footer' + __('Footer menu'),
));


 ?>
