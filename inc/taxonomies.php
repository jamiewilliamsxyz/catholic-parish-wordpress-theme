<?php

add_action("init", "parish_register_taxonomies");

function parish_register_taxonomies()
{
  register_taxonomy("parish_church_group_type", "parish_church_group", array(
    "labels" => array(
      "name" => __("Group Types", "catholic-parish-wordpress-theme"),
      "singular_name" => __("Group Type", "catholic-parish-wordpress-theme")
    ),
    "public" => true,
    "description" => "Used to categorise church groups by type",
    "show_in_rest" => true,
    "show_admin_column" => true,
    "query_var" => true,
    "rewrite" => ["slug" => "church_group_type"],
  ));
}
