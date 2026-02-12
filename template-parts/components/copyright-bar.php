<p class="parish-copyright-bar">
  <?php
  echo esc_html__("Copyright", "catholic-parish-wordpress-theme")
    .  " &copy; "
    . esc_html(date_i18n("Y"))
    . " "
    . esc_html(get_theme_mod("parish_footer_copyright_name", get_bloginfo("name")));
  ?>
</p>