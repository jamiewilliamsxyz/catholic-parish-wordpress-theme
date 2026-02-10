<p class="parish-copyright-bar">
  <?php
  echo
  sprintf(
    esc_html__("Copyright &copy; %s %s", "catholic-parish-wordpress-theme"),

    esc_html(date_i18n("Y")),

    esc_html(
      get_theme_mod(
        "parish_footer_copyright_name",
        get_bloginfo("name")
      )
    )
  )
  ?>
</p>