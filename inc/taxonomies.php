<?php

add_action("init", "parish_register_taxonomies");

function parish_register_taxonomies()
{
  register_taxonomy("parish_clergy_member_role", "parish_clergy_member", array(
    "labels" => array(
      "name" => __("Roles", "catholic-parish"),
      "singular_name" => __("Role", "catholic-parish")
    ),
    "public" => true,
    "description" => "Used to categorise clergy members by role",
    "show_in_rest" => true,
    "show_admin_column" => true,
    "query_var" => true,
    "rewrite" => ["slug" => "clergy_member_role"],

  ));

  register_taxonomy("parish_church_group_type", "parish_clergy_member", array(
    "labels" => array(
      "name" => __("Group Types", "catholic-parish"),
      "singular_name" => __("Group Type", "catholic-parish")
    ),
    "public" => true,
    "description" => "Used to categorise church groups by type",
    "show_in_rest" => true,
    "show_admin_column" => true,
    "query_var" => true,
    "rewrite" => ["slug" => "church_group_type"],

  ));
}
