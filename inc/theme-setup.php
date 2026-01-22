<?php

add_action("after_setup_theme", "parish_theme_setup");

function parish_theme_setup()
{
  // Theme support
  add_theme_support("menus");
  add_theme_support("title-tag");
  add_theme_support("html5");
  add_theme_support("post-thumbnails");

  add_theme_support("custom-logo", array(
    "height" => 48,
    "width" => 48,
    "flex-width" => true,
    "unlink-homepage-logo" => true
  ));

  // Menu registration
  register_nav_menus(
    array(
      "parish-navbar-menu" => __("Navbar Menu Location", "catholic-parish"),
      "parish-footer-general-links-menu" => __("Footer General Links Location", "catholic-parish"),
      "parish-footer-social-links-menu" => __("Navbar Social Links Location", "catholic-parish")
    )
  );
}
