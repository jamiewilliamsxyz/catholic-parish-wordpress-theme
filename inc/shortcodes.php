<?php

function parish_theme_mod($key)
{
  return get_theme_mod("parish_" . $key, __("Not Provided", "catholic-parish-wordpress-theme"));
}

add_shortcode("parish_phone", function () {
  return parish_theme_mod("phone");
});

add_shortcode("parish_email", function () {
  return parish_theme_mod("email");
});

add_shortcode("parish_church_address", function () {
  return parish_theme_mod("church_address");
});

add_shortcode("parish_office_address", function () {
  return parish_theme_mod("office_address");
});

add_shortcode("parish_office_hours", function () {
  return parish_theme_mod("office_hours");
});

add_shortcode("parish_details", function () {
  ob_start();

  $details_arr = array(
    "phone" => "Phone",
    "email" => "Email",
    "church_address" => "Church Address",
    "office_address" => "Office Address",
    "office_hours" => "Office Opening Hours"
  );

  foreach ($details_arr as $key => $title) {
    $data = get_theme_mod("parish_$key");

    echo "<p><b>" . esc_html__($title, "catholic-parish-wordpress-theme") . "</b>: "
      . ($data ? esc_html($data) : esc_html__("Not provided", "catholic-parish-wordpress-theme"))
      . "</p>";
  }

  return ob_get_clean();
});
