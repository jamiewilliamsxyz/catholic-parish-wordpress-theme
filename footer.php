<footer class="parish-footer">
  <div class="parish-foot-wrapper">
    <div class="parish-foot-identity">
      <div class="parish-foot-title-info">
        <h5><?php bloginfo("name"); ?></h5>

        <div class="parish-foot-info">
          <h6><?php esc_html_e("Parish Info", "catholic-parish"); ?></h6>
          <p><?php bloginfo("description"); ?></p>
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


<!--

<?php


function parish_register_widgets()
{
  // Footer Links
  register_sidebar(
    array(
      "name" => __("Footer Links", "catholic-parish"),
      "id" => "parish-footer-links-widget",
      "description" => "Parish general footer links",
      "class" => "parish-foot-links-widget",
      "before_title" => "<h6>",
      "after_title" => "</h6>"
    )
  );

  // Footer Social Links
  register_sidebar(
    array(
      "name" => __("Footer Social Links", "catholic-parish"),
      "id" => "parish-footer-social-links-widget",
      "description" => "Parish social media footer links",
      "class" => "parish-foot-social-links-widget",
      "before_title" => "<h6>",
      "after_title" => "</h6>"
    )
  );
}
