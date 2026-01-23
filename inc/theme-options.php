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
      "priority" => 11,
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

  // Hero Section

  $wp_customize->add_section(
    "parish_hero_section",
    array(
      "title" => __("Hero Section", "catholic-parish"),
      "description" => esc_html__("Configure the hero section displayed at the top of your front page", "catholic-parish"),
      "priority" => 103
    )
  );

  $wp_customize->add_setting(
    "parish_hero_title",
    array(
      "default" => "Parish Hero Title",
      "sanitize_callback" => "sanitize_text_field"
    )
  );

  $wp_customize->add_control(
    "parish_hero_title",
    array(
      "label" => __("Title"),
      "section" => "parish_hero_section",
      "type" => "text"
    )
  );

  $wp_customize->add_setting(
    "parish_hero_card_text",
    array(
      "default" => "Parish hero card text",
      "sanitize_callback" => "sanitize_textarea_field"
    )
  );

  $wp_customize->add_control(
    "parish_hero_card_text",
    array(
      "label" => __("Card Text"),
      "section" => "parish_hero_section",
      "priority" => 11,
      "type" => "textarea"
    )
  );

  $wp_customize->add_setting(
    "parish_hero_bg_img",
    array(
      "sanitize_callback" => "esc_url_raw"
    )
  );

  $wp_customize->add_control(
    new WP_Customize_Image_Control(
      $wp_customize,
      "parish_hero_bg_img",
      array(
        "label" => __("Background Image"),
        "section" => "parish_hero_section",
        "priority" => 12,
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
