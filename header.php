<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(); ?></title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<img class="site-logo" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="Robin signature">
<header>
<br>
<h1 class="site-title">..<?php bloginfo('name'); ?></h1>
    <nav class="main-navigation">
      <?php
        wp_nav_menu(array(
          'theme_location' => 'primary-menu',
          'container' => false,
          'menu_class' => 'primary-menu',
          'depth' => 2,
          'walker' => new Custom_Walker_Nav_Menu()
        ));
      ?>
    </nav>
</header>