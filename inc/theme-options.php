<?php

add_action("customize_register", "parish_register_theme_options");

function parish_register_theme_options($wp_customize)
{
  // Colours

  $wp_customize->add_section(
    "parish_colours_section",
    array(
      "title" => __("Colours", "catholic-parish-wordpress-theme"),
      "description" => esc_html__("Customise the colours used across your site", "catholic-parish-wordpress-theme"),
      "priority" => 101
    )
  );

  // Colours - accent colour
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
      "label" => __("Accent Colour", "catholic-parish-wordpress-theme"),
      "section" => "parish_colours_section",
      "type" => "color"
    )
  );

  // Typography

  $wp_customize->add_section(
    "parish_typography_section",
    array(
      "title" => __("Typography", "catholic-parish-wordpress-theme"),
      "description" => esc_html__("Select fonts for headings and body text across your site", "catholic-parish-wordpress-theme"),
      "priority" => 102
    )
  );

  // Typography - heading font
  $wp_customize->add_setting(
    "parish_heading_font",
    array(
      "default" => "parish-font-lora",
      "sanitize_callback" => "parish_sanitise_font_choice"
    )
  );

  $wp_customize->add_control(
    "parish_heading_font",
    array(
      "label" => __("Heading Font", "catholic-parish-wordpress-theme"),
      "section" => "parish_typography_section",
      "type" => "select",
      "choices" =>
      array(
        "parish-font-lora" => "Lora",
        "parish-font-merriweather" => "Merriweather",
        "parish-font-crimson-text" => "Crimson Text",
        "parish-font-inter" => "Inter",
        "parish-font-roboto" => "Roboto"
      )
    )
  );

  // Typography - body font
  $wp_customize->add_setting(
    "parish_body_font",
    array(
      "default" => "parish-font-lora",
      "sanitize_callback" => "parish_sanitise_font_choice"
    )
  );

  $wp_customize->add_control(
    "parish_body_font",
    array(
      "label" => __("Body Font", "catholic-parish-wordpress-theme"),
      "section" => "parish_typography_section",
      "priority" => 11,
      "type" => "select",
      "choices" =>
      array(
        "parish-font-lora" => "Lora",
        "parish-font-merriweather" => "Merriweather",
        "parish-font-crimson-text" => "Crimson Text",
        "parish-font-inter" => "Inter",
        "parish-font-roboto" => "Roboto"
      )
    )
  );

  // Hero Section

  $wp_customize->add_section(
    "parish_hero_section",
    array(
      "title" => __("Hero Section", "catholic-parish-wordpress-theme"),
      "description" => esc_html__("Configure the hero section displayed at the top of your front page", "catholic-parish-wordpress-theme"),
      "priority" => 103
    )
  );

  // Hero Section - title
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

  // Hero Section - card text
  $wp_customize->add_setting(
    "parish_hero_card_text",
    array(
      "default" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit",
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

  // Hero Section - background image
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

  // Footer

  $wp_customize->add_section(
    "parish_footer_section",
    array(
      "title" => __("Footer", "catholic-parish-wordpress-theme"),
      "description" => esc_html__("Manage the footer information displayed at the bottom of every page", "catholic-parish-wordpress-theme"),
      "priority" => 104
    )
  );

  // Footer - title
  $wp_customize->add_setting(
    "parish_footer_title",
    array(
      "default" => "Parish",
      "sanitize_callback" => "sanitize_text_field"
    )
  );

  $wp_customize->add_control(
    "parish_footer_title",
    array(
      "label" => __("Title"),
      "section" => "parish_footer_section",
      "type" => "text"
    )
  );

  // Footer - parish info text
  $wp_customize->add_setting(
    "parish_footer_info_text",
    array(
      "default" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.",
      "sanitize_callback" => "sanitize_textarea_field"
    )
  );

  $wp_customize->add_control(
    "parish_footer_info_text",
    array(
      "label" => __("Parish Info Text"),
      "section" => "parish_footer_section",
      "priority" => 11,
      "type" => "textarea"
    )
  );

  // Footer - copyright name
  $wp_customize->add_setting(
    "parish_footer_copyright_name",
    array(
      "default" => "Parish",
      "sanitize_callback" => "sanitize_text_field"
    )
  );

  $wp_customize->add_control(
    "parish_footer_copyright_name",
    array(
      "label" => __("Copyright Name"),
      "section" => "parish_footer_section",
      "priority" => 12,
      "type" => "text"
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
