<?php

add_action("customize_register", "parish_register_theme_options");

function parish_register_theme_options($wp_customize)
{
  // Colours

  $wp_customize->add_section(
    "parish_colours",
    array(
      "title" => __("Colours", "catholic-parish"),
      "description" => esc_html__("Customise the colours used across your site", "catholic-parish"),
      "priority" => 101
    )
  );

  $wp_customize->add_setting(
    "parish_accent_colour",
    array(
      "default" => "#7dd3fc",
      "sanitize_callback" => "sanitize_hex_color"
    )
  );

  $wp_customize->add_control(
    "parish_accent_colour",
    array(
      "label" => __("Accent Colour", "catholic-parish"),
      "section" => "parish_colours",
      "type" => "color"
    )
  );
}
