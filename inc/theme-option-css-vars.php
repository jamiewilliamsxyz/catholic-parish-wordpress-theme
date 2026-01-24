<?php

add_action("wp_head", "parish_set_css_vars");

function parish_set_css_vars()
{
  $accent_colour = get_theme_mod("parish_accent_colour", "#7dd3fc");
  $heading_font = get_theme_mod("parish_heading_font", "parish-lora-font");
  $body_font = get_theme_mod("parish_body_font", "parish-lora-font");

  $fonts_css = [
    "parish-lora-font" => "'Lora, serif'",
    "parish-merriweather-font" => "'Merriweather, serif'",
    "parish-crimson-text-font" => "'Crimson Text, serif'",
    "parish-inter-font" => "'Inter, serif'",
    "parish-roboto-font" => "'Roboto, serif'",
  ];
?>

  <style>
    * {
      --parish-heading-font: <?php echo esc_html($fonts_css[$heading_font] ?? $fonts_css["parish-lora-font"]); ?>;
      --parish-body-font: <?php echo esc_html($fonts_css[$body_font] ?? $fonts_css["parish-lora-font"]); ?>;
      --parish-accent-colour: <?php esc_html($accent_colour ?? "#7dd3fc") ?>
    }
  </style>
<?php
}
