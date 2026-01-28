<?php

// Register CPTs

add_action("init", "parish_register_cpts");

function parish_register_cpts()
{
  $service_labels = array(
    "name" => _x("Services", "post type general name", "catholic-parish-wordpress-theme"),
    "singular_name" => _x("Service", "post type singular name", "catholic-parish-wordpress-theme"),
    "add_new" => __("Add New", "catholic-parish-wordpress-theme"),
    "add_new_item" => __("Add New Service", "catholic-parish-wordpress-theme"),
    "edit" => __("Edit", "catholic-parish-wordpress-theme"),
    "edit_item" => __("Edit Service", "catholic-parish-wordpress-theme"),
    "new_item" => __("New Service", "catholic-parish-wordpress-theme"),
    "view" => __("View", "catholic-parish-wordpress-theme"),
    "view_item" => __("View Service", "catholic-parish-wordpress-theme"),
    "search_items" => __("Search Services", "catholic-parish-wordpress-theme"),
    "not_found" => __("No Services found", "catholic-parish-wordpress-theme"),
    "not_found_in_trash" => __("No Services found in Trash", "catholic-parish-wordpress-theme"),
    "parent" => __("Parent Service:", "catholic-parish-wordpress-theme"),
  );

  register_post_type("parish_service", array(
    "labels" => $service_labels,
    "description" => __("Parish services", "catholic-parish-wordpress-theme"),
    "menu_icon" => "dashicons-calendar-alt",
    "public" => true,
    "supports" => ["title"],
  ));

  $announcement_labels = array(
    "name" => _x("Announcements", "post type general name", "catholic-parish-wordpress-theme"),
    "singular_name" => _x("Announcement", "post type singular name", "catholic-parish-wordpress-theme"),
    "add_new" => __("Add New", "catholic-parish-wordpress-theme"),
    "add_new_item" => __("Add New Announcement", "catholic-parish-wordpress-theme"),
    "edit" => __("Edit", "catholic-parish-wordpress-theme"),
    "edit_item" => __("Edit Announcement", "catholic-parish-wordpress-theme"),
    "new_item" => __("New Announcement", "catholic-parish-wordpress-theme"),
    "view" => __("View", "catholic-parish-wordpress-theme"),
    "view_item" => __("View Announcement", "catholic-parish-wordpress-theme"),
    "search_items" => __("Search Announcements", "catholic-parish-wordpress-theme"),
    "not_found" => __("No Announcements found", "catholic-parish-wordpress-theme"),
    "not_found_in_trash" => __("No Announcements found in Trash", "catholic-parish-wordpress-theme"),
    "parent" => __("Parent Announcement:", "catholic-parish-wordpress-theme"),
  );

  register_post_type("parish_announcement", array(
    "labels" => $announcement_labels,
    "description" => __("Parish announcements and notices", "catholic-parish-wordpress-theme"),
    "menu_icon" => "dashicons-megaphone",
    "public" => true,
    "has_archive" => true,
    "show_in_nav_menus" => true,
    "rewrite" => array("slug" => "announcements"),
    "supports" => ["title", "editor", "excerpt", "thumbnail"],
  ));

  $newsletter_labels = array(
    "name" => _x("Newsletters", "post type general name", "catholic-parish-wordpress-theme"),
    "singular_name" => _x("Newsletter", "post type singular name", "catholic-parish-wordpress-theme"),
    "add_new" => __("Add New", "catholic-parish-wordpress-theme"),
    "add_new_item" => __("Add New Newsletter", "catholic-parish-wordpress-theme"),
    "edit" => __("Edit", "catholic-parish-wordpress-theme"),
    "edit_item" => __("Edit Newsletter", "catholic-parish-wordpress-theme"),
    "new_item" => __("New Newsletter", "catholic-parish-wordpress-theme"),
    "view" => __("View", "catholic-parish-wordpress-theme"),
    "view_item" => __("View Newsletter", "catholic-parish-wordpress-theme"),
    "search_items" => __("Search Newsletters", "catholic-parish-wordpress-theme"),
    "not_found" => __("No Newsletters found", "catholic-parish-wordpress-theme"),
    "not_found_in_trash" => __("No Newsletters found in Trash", "catholic-parish-wordpress-theme"),
    "parent" => __("Parent Newsletter:", "catholic-parish-wordpress-theme"),
  );

  register_post_type("parish_newsletter", array(
    "labels" => $newsletter_labels,
    "description" => __("Parish newsletters", "catholic-parish-wordpress-theme"),
    "menu_icon" => "dashicons-media-document",
    "public" => true,
    "has_archive" => true,
    "show_in_nav_menus" => true,
    "rewrite" => array("slug" => "newsletters"),
    "supports" => ["title"],
  ));

  $staff_member_labels = array(
    "name" => _x("Parish Staff", "post type general name", "catholic-parish-wordpress-theme"),
    "singular_name" => _x("Parish Staff Member", "post type singular name", "catholic-parish-wordpress-theme"),
    "add_new" => __("Add New", "catholic-parish-wordpress-theme"),
    "add_new_item" => __("Add New Parish Staff Member", "catholic-parish-wordpress-theme"),
    "edit" => __("Edit", "catholic-parish-wordpress-theme"),
    "edit_item" => __("Edit Parish Staff Member", "catholic-parish-wordpress-theme"),
    "new_item" => __("New Parish Staff Member", "catholic-parish-wordpress-theme"),
    "view" => __("View", "catholic-parish-wordpress-theme"),
    "view_item" => __("View Parish Staff Member", "catholic-parish-wordpress-theme"),
    "search_items" => __("Search Parish Staff", "catholic-parish-wordpress-theme"),
    "not_found" => __("No Parish Staff found", "catholic-parish-wordpress-theme"),
    "not_found_in_trash" => __("No Parish Staff found in Trash", "catholic-parish-wordpress-theme"),
    "parent" => __("Parent Parish Staff Member:", "catholic-parish-wordpress-theme"),
  );

  register_post_type("parish_staff_member", array(
    "labels" => $staff_member_labels,
    "description" => __("Information about parish staff and clergy members", "catholic-parish-wordpress-theme"),
    "menu_icon" => "dashicons-businessperson",
    "public" => true,
    "show_in_nav_menus" => true,
    "has_archive" => true,
    "rewrite" => array("slug" => "staff"),
    "supports" => ["title", "thumbnail"],
  ));

  $church_group_labels = array(
    "name" => _x("Church Groups", "post type general name", "catholic-parish-wordpress-theme"),
    "singular_name" => _x("Church Group", "post type singular name", "catholic-parish-wordpress-theme"),
    "add_new" => __("Add New", "catholic-parish-wordpress-theme"),
    "add_new_item" => __("Add New Church Group", "catholic-parish-wordpress-theme"),
    "edit" => __("Edit", "catholic-parish-wordpress-theme"),
    "edit_item" => __("Edit Church Group", "catholic-parish-wordpress-theme"),
    "new_item" => __("New Church Group", "catholic-parish-wordpress-theme"),
    "view" => __("View", "catholic-parish-wordpress-theme"),
    "view_item" => __("View Church Group", "catholic-parish-wordpress-theme"),
    "search_items" => __("Search Church Groups", "catholic-parish-wordpress-theme"),
    "not_found" => __("No Church Groups found", "catholic-parish-wordpress-theme"),
    "not_found_in_trash" => __("No Church Groups found in Trash", "catholic-parish-wordpress-theme"),
    "parent" => __("Parent Church Group:", "catholic-parish-wordpress-theme"),
  );

  register_post_type("parish_church_group", array(
    "labels" => $church_group_labels,
    "description" => __("Information about the parish groups", "catholic-parish-wordpress-theme"),
    "menu_icon" => "dashicons-groups",
    "public" => true,
    "has_archive" => true,
    "show_in_nav_menus" => true,
    "rewrite" => array("slug" => "church-groups"),
    "supports" => ["title"],
  ));
}

// Filter for custom title placeholders
add_filter("enter_title_here", "parish_filter_enter_title", 10, 2);

function parish_filter_enter_title($title_placeholder, $post)
{
  switch ($post->post_type) {
    case "parish_service":
      $title_placeholder = __("Enter Service Name", "catholic-parish-wordpress-theme");
      break;
    case "parish_announcement":
      $title_placeholder = __("Enter Announcement Title", "catholic-parish-wordpress-theme");
      break;
    case "parish_newsletter":
      $title_placeholder = __("Enter Newsletter Name", "catholic-parish-wordpress-theme");
      break;
    case "parish_staff_member":
      $title_placeholder = __("Enter Parish Staff Member Name", "catholic-parish-wordpress-theme");
      break;
    case "parish_church_group":
      $title_placeholder = __("Enter Church Group Name", "catholic-parish-wordpress-theme");
      break;
    default:
      break;
  }
  return $title_placeholder;
}
