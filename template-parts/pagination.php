<?php
global $wp_query;

$prev_icon = file_get_contents(get_template_directory() . "/assets/icons/parish-chevron-left.svg");
$next_icon = file_get_contents(get_template_directory() . "/assets/icons/parish-chevron-right.svg");

the_posts_pagination(
  array(
    "mid_size" => 2,
    "prev_text" => $prev_icon . " " . __("Previous", "catholic-parish"),
    "next_text" => __("Next", "catholic-parish") . " " . $next_icon,
    "total" => $wp_query->max_num_pages
  )
);
