<?php

$template_dir = get_template_directory();

require_once $template_dir . "/includes/enqueue.php";
require_once $template_dir . "/includes/theme-setup.php";
require_once $template_dir . "/includes/customiser/customiser.php";
require_once $template_dir . "/includes/customiser/customiser-css-vars.php";

if (is_admin()) require_once $template_dir . "/includes/setup-guide-page.php";

// Hide Admin Bar
add_filter("show_admin_bar", "__return_false");
