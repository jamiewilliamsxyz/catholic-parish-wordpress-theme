<?php

// CPTs, taxonomies and meta boxes setup
$template_dir = get_template_directory();

require_once $template_dir . "/inc/cpts.php";
require_once $template_dir . "/inc/taxonomies.php";
require_once $template_dir . "/inc/meta-boxes.php";

// Enqueue styles
add_action("wp_enqueue_scripts", "parish_enqueue_styles");

function parish_enqueue_styles()
{
  $version = wp_get_theme()->get("Version");

  // Style.css
  wp_enqueue_style("parish-style", get_stylesheet_uri(), [], $version);

  // Font
  wp_enqueue_style("parish-font", "https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&display=swap");
}

// Theme setup
add_action("after_setup_theme", "parish_theme_setup");

function parish_theme_setup()
{
  // Theme support
  add_theme_support("menus");

  // Menu registration
  register_nav_menus(
    array(
      "navbar-menu" => __("Navbar Menu Location", "catholic-parish"),
    )
  );
}
