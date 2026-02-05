<?php

// Theme Option Styles/Scripts

add_action("customize_controls_enqueue_scripts", "parish_enqueue_customizer_scripts");

function parish_enqueue_customizer_scripts()
{
  wp_enqueue_script('wp-color-picker');
  wp_enqueue_style('wp-color-picker');
}

// Admin Styles

add_action("admin_enqueue_scripts", "parish_enqueue_admin_styles");

function parish_enqueue_admin_styles()
{
  $screen = get_current_screen();

  if (!$screen) return;

  $post_type = $screen->post_type;

  if (
    $post_type !== "parish_newsletter" &&
    $post_type !== "parish_service" &&
    $post_type !== "parish_staff_member" &&
    $post_type !== "parish_church_group"
  ) {
    return;
  }

  wp_enqueue_style(
    "parish-admin-style",
    get_template_directory_uri() . "/assets/css/admin.css",
    [],
    wp_get_theme()->get("Version")
  );
}

// Non-Admin Styles/Scripts

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

  if (is_archive() || is_home()) {
    wp_enqueue_style(
      "parish-archive-style",
      $template_uri . "/assets/css/archive.css",
      [],
      $version
    );
  }

  if (is_page()) {
    wp_enqueue_style(
      "parish-page-style",
      $template_uri . "/assets/css/page.css",
      [],
      $version
    );
  }

  if (is_single()) {
    wp_enqueue_style(
      "parish-single-style",
      $template_uri . "/assets/css/single.css",
      [],
      $version
    );
  }

  if (is_single() || is_page()) {
    wp_enqueue_style(
      "parish-content-style",
      $template_uri . "/assets/css/content.css",
      [],
      $version
    );
  }

  if (is_page_template("templates/page-contact.php")) {
    wp_enqueue_style(
      "parish-page-contact-style",
      $template_uri . "/assets/css/page-contact.css",
      [],
      $version
    );
  }

  if (is_404()) {
    wp_enqueue_style(
      "parish-404-style",
      $template_uri . "/assets/css/404.css",
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

  if (is_archive()) {
    wp_enqueue_style(
      "parish-filter-style",
      $template_uri . "/assets/css/filter.css",
      [],
      $version
    );
  }

  // Google fonts
  $selected_heading_font = get_theme_mod("parish_heading_font", "parish-font-lora");
  $selected_body_font = get_theme_mod("parish_body_font", "parish-font-lora");

  $font_urls = [
    "parish-font-lora" => "https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&display=swap",
    "parish-font-merriweather" => "https://fonts.googleapis.com/css2?family=Merriweather:ital,opsz,wght@0,18..144,300..900;1,18..144,300..900&display=swap",
    "parish-font-crimson-text" => "https://fonts.googleapis.com/css2?family=Crimson+Text:ital,wght@0,400;0,600;0,700;1,400;1,600;1,700&display=swap",
    "parish-font-inter" => "https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap",
    "parish-font-roboto" => "https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
  ];

  if (isset($font_urls[$selected_heading_font])) {
    wp_enqueue_style(
      $selected_heading_font . "-heading",
      $font_urls[$selected_heading_font]
    );
  }

  if (isset($font_urls[$selected_body_font])) {
    wp_enqueue_style(
      $selected_body_font . "-body",
      $font_urls[$selected_body_font]
    );
  }

  // Navbar menu script
  wp_enqueue_script(
    "parish-toggle-menu-script",
    $template_uri . "/assets/js/menu-toggle.js",
    [],
    $version,
    true
  );

  // Animation script
  if (is_front_page()) {
    wp_enqueue_script(
      "parish-animate-script",
      $template_uri . "/assets/js/animate.js",
      [],
      $version,
      true
    );
  }
}
