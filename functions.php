<?php

$template_dir = get_template_directory();

require_once $template_dir . "/inc/cpts.php";
require_once $template_dir . "/inc/taxonomies.php";
require_once $template_dir . "/inc/meta-boxes.php";
require_once $template_dir . "/inc/enqueue.php";
require_once $template_dir . "/inc/theme-setup.php";
require_once $template_dir . "/inc/theme-options.php";
require_once $template_dir . "/inc/theme-options-css-vars.php";
require_once $template_dir . "/inc/contact-form-handler.php";

// add_filter("show_admin_bar", "__return_false");
