<?php

add_action("wp_enqueue_scripts", "parish_enqueue_scripts");

function parish_enqueue_scripts()
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
    "parish-footer-style",
    $template_uri . "/assets/css/footer.css",
    [],
    $version
  );

  if (is_front_page()) {
    wp_enqueue_style(
      "parish-front-page-style",
      $template_uri . "/assets/css/front-page.css",
      [],
      $version
    );
  }

  if (is_archive()) {
    wp_enqueue_style(
      "parish-archive-style",
      $template_uri . "/assets/css/archive.css",
      [],
      $version
    );
  }

  wp_enqueue_style(
    "parish-pagination-style",
    $template_uri . "/assets/css/pagination.css",
    [],
    $version
  );

  // Google font
  wp_enqueue_style(
    "parish-font",
    "https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&display=swap"
  );

  // Navbar menu script
  wp_enqueue_script(
    "parish-toggle-menu",
    $template_uri . "/assets/js/menu-toggle.js",
    [],
    $version,
    true
  );
}
