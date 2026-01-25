<?php

add_action("init", "parish_register_cpts");

function parish_register_cpts()
{
  register_post_type("parish_service", array(
    "labels" => array(
      "name" => __("Services", "catholic-parish-wordpress-theme"),
      "singular_name" => __("Service", "catholic-parish-wordpress-theme")
    ),
    "description" => __("Parish services", "catholic-parish-wordpress-theme"),
    "menu_icon" => "dashicons-calendar-alt",
    "public" => true,
    "has_archive" => true,
    "show_in_nav_menus" => true,
    "rewrite" => array("slug" => "services"),
    "supports" => ["title"],
  ));

  register_post_type("parish_announcement", array(
    "labels" => array(
      "name" => __("Announcements", "catholic-parish-wordpress-theme"),
      "singular_name" => __("Announcement", "catholic-parish-wordpress-theme")
    ),
    "description" => __("Parish announcements and notices", "catholic-parish-wordpress-theme"),
    "menu_icon" => "dashicons-megaphone",
    "public" => true,
    "has_archive" => true,
    "show_in_nav_menus" => true,
    "rewrite" => array("slug" => "announcements"),
    "supports" => ["title", "editor", "excerpt", "thumbnail"],
  ));

  register_post_type("parish_newsletter", array(
    "labels" => array(
      "name" => __("Newsletters", "catholic-parish-wordpress-theme"),
      "singular_name" => __("Newsletter", "catholic-parish-wordpress-theme")
    ),
    "description" => __("Parish newsletters", "catholic-parish-wordpress-theme"),
    "menu_icon" => "dashicons-media-document",
    "public" => true,
    "has_archive" => true,
    "show_in_nav_menus" => true,
    "rewrite" => array("slug" => "newsletters"),
    "supports" => ["title"],
  ));

  register_post_type("parish_staff_member", array(
    "labels" => array(
      "name" => __("Parish Staff", "catholic-parish-wordpress-theme"),
      "singular_name" => __("Parish Staff Member", "catholic-parish-wordpress-theme"),
    ),
    "description" => __("Information about parish staff and clergy members", "catholic-parish-wordpress-theme"),
    "menu_icon" => "dashicons-businessperson",
    "public" => true,
    "show_in_nav_menus" => true,
    "has_archive" => true,
    "rewrite" => array("slug" => "staff"),
    "supports" => ["title", "thumbnail"],
  ));

  register_post_type("parish_church_group", array(
    "labels" => array(
      "name" => __("Church Groups", "catholic-parish-wordpress-theme"),
      "singular_name" => __("Church Group", "catholic-parish-wordpress-theme")
    ),
    "description" => __("Information about the parish groups", "catholic-parish-wordpress-theme"),
    "menu_icon" => "dashicons-groups",
    "public" => true,
    "has_archive" => true,
    "show_in_nav_menus" => true,
    "rewrite" => array("slug" => "church-groups"),
    "supports" => ["title"],
  ));
}
