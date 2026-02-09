<?php

$template_dir = get_template_directory();

require_once $template_dir . "/inc/enqueue.php";
require_once $template_dir . "/inc/theme-setup.php";
require_once $template_dir . "/inc/theme-options.php";
require_once $template_dir . "/inc/theme-options-css-vars.php";
require_once $template_dir . "/inc/setup-guide-page.php";

// add_filter("show_admin_bar", "__return_false");
