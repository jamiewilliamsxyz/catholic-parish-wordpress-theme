<?php

add_action("wp_head", "parish_set_css_vars");

function parish_set_css_vars()
{
  $accent_colour = get_theme_mod("parish_accent_colour", "#7dd3fc");
  $heading_font = get_theme_mod("parish_heading_font", "parish-font-lora");
  $body_font = get_theme_mod("parish_body_font", "parish-font-lora");

  $fonts_css = [
    "parish-font-lora" => '"Lora", serif',
    "parish-font-merriweather" => '"Merriweather", serif',
    "parish-font-crimson-text" => '"Crimson Text", serif',
    "parish-font-inter" => '"Inter", sans-serif',
    "parish-font-roboto" => '"Roboto", sans-serif'
  ];
?>

  <style>
    * {
      --parish-heading-font: <?php echo $fonts_css[$heading_font] ?? $fonts_css["parish-font-lora"]; ?>;
      --parish-body-font: <?php echo $fonts_css[$body_font] ?? $fonts_css["parish-font-lora"]; ?>;
      --parish-accent-colour: <?php echo $accent_colour ?? "#7dd3fc" ?>
    }
  </style>
<?php
}
