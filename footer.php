<footer class="parish-footer">
  <div class="parish-foot-wrapper">
    <div class="parish-foot-identity">
      <div class="parish-foot-title-info">
        <?php  ?>
        <h5><?php echo esc_html(get_theme_mod("parish_footer_title",  get_bloginfo("name"))); ?></h5>

        <div class="parish-foot-info">
          <h6><?php esc_html_e("Parish Info", "catholic-parish-wordpress-theme"); ?></h6>
          <p><?php echo esc_html(get_theme_mod("parish_footer_info_text",  get_bloginfo("description"))); ?></p>
        </div>
      </div>

      <div class="parish-copyright-bar-wrapper-desktop">
        <?php get_template_part("template-parts/copyright-bar") ?>
      </div>
    </div>

    <div class="parish-foot-links">
      <div class="parish-foot-links-content">
        <h6>General Links</h6>
        <?php
        wp_nav_menu(
          array(
            "menu_class" => "parish-foot-links-menu",
            "container_class" => "parish-foot-links-menu-container",
            "theme_location" => "parish-footer-general-links-menu"
          )
        );
        ?>
      </div>

      <div class="parish-foot-links-content">
        <h6>Social Links</h6>
        <?php
        wp_nav_menu(
          array(
            "menu_class" => "parish-foot-links-menu",
            "container_class" => "parish-foot-links-menu-container",
            "theme_location" => "parish-footer-social-links-menu"
          )
        );
        ?>
      </div>
    </div>
  </div>

  <div class="parish-copyright-bar-wrapper-mobile">
    <?php get_template_part("template-parts/copyright-bar") ?>
  </div>

  </div>
</footer>

</div>

<?php wp_footer(); ?>

</body>

</html>