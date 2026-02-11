<?php

$template_dir = get_template_directory();

require_once $template_dir . "/includes/enqueue.php";
require_once $template_dir . "/includes/theme-setup.php";
require_once $template_dir . "/includes/customiser/customiser.php";
require_once $template_dir . "/includes/customiser/customiser-css-vars.php";

if (is_admin()) require_once $template_dir . "/includes/setup-guide-page.php";

// Hide Admin Bar
add_filter("show_admin_bar", "__return_false");

// Admin Notice
add_action("admin_notices", "parish_notify_admin");

function parish_notify_admin()
{
  if (!is_plugin_active("catholic-parish-core/catholic-parish-core.php")) :
?>
    <div class="notice notice-warning">
      <p>
        <?php echo wp_kses_post(__(
          '<strong>Catholic Parish Theme</strong><br />
          This theme has a companion plugin.<br />
          <a href="https://github.com/jamiewilliamsxyz/catholic-parish-core" rel="noopener" target="_blank">Download the plugin here</a>',
          "catholic-parish-core"
        ));
        ?>
      </p>
    </div>
<?php endif;
}
