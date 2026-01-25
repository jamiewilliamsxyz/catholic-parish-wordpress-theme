<?php
global $wp_query;

$prev_icon = file_get_contents(get_template_directory() . "/assets/icons/parish-chevron-left.svg");
$next_icon = file_get_contents(get_template_directory() . "/assets/icons/parish-chevron-right.svg");

the_posts_pagination(
  array(
    "mid_size" => 2,
    "prev_text" => $prev_icon . " " . esc_html__("Previous", "catholic-parish-wordpress-theme"),
    "next_text" => esc_html__("Next", "catholic-parish-wordpress-theme") . " " . $next_icon,
    "total" => $wp_query->max_num_pages
  )
);
