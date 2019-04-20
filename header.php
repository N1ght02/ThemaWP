<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
  <head>
    <meta charset="<?php bloginfo('charset');?>">
    <title><?php bloginfo('name');?></title>
    <meta name="author" content="Flint Naafs MG1B">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
  </head>

  <body>

    <header class="header">
      <div class="container">
        <nav>
          <?php $argumenten = array('theme_location' => 'hoofd', ); ?>
          <?php wp_nav_menu($argumenten); ?>
        </nav>
      <a href="<?php echo home_url(); ?>"><h1><?php bloginfo('name'); ?></h1></a>
    <p><?php bloginfo('description');?></p>
    </div>
    </header>
