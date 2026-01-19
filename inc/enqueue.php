<?php

// Enqueue Styles
add_action("wp_enqueue_scripts", "parish_enqueue_styles");

function parish_enqueue_styles()
{
  $template_uri = get_template_directory_uri();
  $version = wp_get_theme()->get("Version");

  // CSS
  wp_enqueue_style(
    "parish-style",
    get_stylesheet_uri(),
    [],
    $version
  );

  wp_enqueue_style(
    "parish-header-style",
    $template_uri . "/assets/css/header.css",
    [],
    $version
  );

  wp_enqueue_style(
    "parish-front-page-style",
    $template_uri . "/assets/css/font-page.css",
    [],
    $version
  );

  // Google font
  wp_enqueue_style(
    "parish-font",
    "https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&display=swap"
  );
}

// Enqueue Scripts
add_action("wp_enqueue_scripts", "parish_enqueue_scripts");

function parish_enqueue_scripts()
{
  $template_uri = get_template_directory_uri();
  $version = wp_get_theme()->get("Version");

  // Navbar menu script
  wp_enqueue_script(
    "parish-toggle-menu",
    $template_uri . "/assets/js/menu-toggle.js",
    [],
    $version,
    true
  );
}
