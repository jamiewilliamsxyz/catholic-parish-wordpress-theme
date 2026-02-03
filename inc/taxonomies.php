<?php

add_action("init", "parish_register_taxonomies");

function parish_register_taxonomies()
{
  $church_group_type_labels = array(
    "name" => _x("Church Group Types", "taxonomy general name", "catholic-parish-wordpress-theme"),
    "singular_name" => _x("Church Group Type", "taxonomy singular name", "catholic-parish-wordpress-theme"),
    "search_items" => __("Search Church Group Types", "catholic-parish-wordpress-theme"),
    "all_items" => __("All Church Group Types", "catholic-parish-wordpress-theme"),
    "edit_item" => __("Edit Church Group Type", "catholic-parish-wordpress-theme"),
    "update_item" => __("Update Church Group Type", "catholic-parish-wordpress-theme"),
    "add_new_item" => __("Add New Church Group Type", "catholic-parish-wordpress-theme"),
    "new_item_name" => __("New Church Group Type Name", "catholic-parish-wordpress-theme"),
    "not_found" => __("No Church Group Types found", "catholic-parish-wordpress-theme"),
    "menu_name" => __("Church Group Types", "catholic-parish-wordpress-theme"),
  );

  register_taxonomy("parish_church_group_type", "parish_church_group", array(
    "labels" => $church_group_type_labels,
    "public" => true,
    "description" => __("Used to categorise church groups e.g. Youth, Choir, Bible Study", "catholic-parish-wordpress-theme"),
    "show_admin_column" => true,
    "query_var" => true,
    "rewrite" => array("slug" => "church_group_type"),
  ));

  $parish_staff_type_labels = array(
    "name" => _x("Parish Staff Types", "taxonomy general name", "catholic-parish-wordpress-theme"),
    "singular_name" => _x("Parish Staff Type", "taxonomy singular name", "catholic-parish-wordpress-theme"),
    "search_items" => __("Search Parish Staff Types", "catholic-parish-wordpress-theme"),
    "all_items" => __("All Parish Staff Types", "catholic-parish-wordpress-theme"),
    "edit_item" => __("Edit Parish Staff Type", "catholic-parish-wordpress-theme"),
    "update_item" => __("Update Parish Staff Type", "catholic-parish-wordpress-theme"),
    "add_new_item" => __("Add New Parish Staff Type", "catholic-parish-wordpress-theme"),
    "new_item_name" => __("New Parish Staff Type Name", "catholic-parish-wordpress-theme"),
    "not_found" => __("No Parish Staff Types found", "catholic-parish-wordpress-theme"),
    "menu_name" => __("Parish Staff Types", "catholic-parish-wordpress-theme"),
  );

  register_taxonomy("parish_staff_type", "parish_staff_member", array(
    "labels" => $parish_staff_type_labels,
    "public" => true,
    "description" => __("Used to categorise parish staff members e.g. Clergy or Non-Clergy", "catholic-parish-wordpress-theme"),
    "show_admin_column" => true,
    "query_var" => true,
    "rewrite" => array("slug" => "staff_type"),
  ));
}
