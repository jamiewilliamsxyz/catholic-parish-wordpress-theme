<?php

add_action("customize_register", "parish_register_theme_options");

function parish_register_theme_options($wp_customize)
{
  // Colours

  $wp_customize->add_section(
    "parish_colours_section",
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
      "section" => "parish_colours_section",
      "type" => "color"
    )
  );

  // Typography

  $wp_customize->add_section(
    "parish_typography_section",
    array(
      "title" => __("Typography", "catholic-parish"),
      "description" => esc_html__("Select fonts for headings and body text across your site", "catholic-parish"),
      "priority" => 102
    )
  );

  $wp_customize->add_setting(
    "parish_heading_font",
    array(
      "default" => "parish-lora-font",
      "sanitize_callback" => "parish_sanitise_font_choice"
    )
  );

  $wp_customize->add_control(
    "parish_heading_font",
    array(
      "label" => __("Heading Font", "catholic-parish"),
      "section" => "parish_typography_section",
      "type" => "select",
      "choices" =>
      array(
        "parish-lora-font" => "Lora",
        "parish-merriweather-font" => "Merriweather",
        "parish-crimson-text-font" => "Crimson Text",
        "parish-inter-font" => "Inter",
        "parish-roboto-font" => "Roboto"
      )
    )
  );

  $wp_customize->add_setting(
    "parish_body_font",
    array(
      "default" => "parish-lora-font",
      "sanitize_callback" => "parish_sanitise_font_choice"
    )
  );

  $wp_customize->add_control(
    "parish_body_font",
    array(
      "label" => __("Body Font", "catholic-parish"),
      "section" => "parish_typography_section",
      "type" => "select",
      "choices" =>
      array(
        "parish-lora-font" => "Lora",
        "parish-merriweather-font" => "Merriweather",
        "parish-crimson-text-font" => "Crimson Text",
        "parish-inter-font" => "Inter",
        "parish-roboto-font" => "Roboto"
      )
    )
  );
}

// Sanitise callback for font selects

function parish_sanitise_font_choice($input, $setting)
{
  $valid = $setting->manager->get_control($setting->id)->choices;
  if (array_key_exists($input, $valid)) {
    return $input;
  }
  return $setting->default;
}
