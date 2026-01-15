<?php

// Enqueue Styles
add_action("wp_enqueue_scripts", "parish_enqueue_styles");

function parish_enqueue_styles()
{
  $version = wp_get_theme()->get("Version");

  // Style.css
  wp_enqueue_style(
    "parish-style",
    get_stylesheet_uri(),
    [],
    $version
  );

  // Font
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
