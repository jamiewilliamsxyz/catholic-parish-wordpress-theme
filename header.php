<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="<?php bloginfo('charset'); ?>">
  <title><?php bloginfo('name') ?></title>
  <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

  <header>
    <nav>
      <?php
      wp_nav_menu(
        array(
          "menu_class" => "navbar-menu",
          "container_class" => "navbar-menu-container",
          "theme_location" => "navbar-menu"
        )
      );
      ?>
    </nav>
  </header>