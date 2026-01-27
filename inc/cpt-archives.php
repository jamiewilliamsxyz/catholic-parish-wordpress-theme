<?php
add_action("pre_get_posts", "parish_cpt_archives_posts_per_page");

function parish_cpt_archives_posts_per_page($query)
{
  if (!is_admin() && $query->is_main_query() && $query->is_post_type_archive("parish_announcement")) {
    $query->set("posts_per_page", 6);
  }

  if (!is_admin() && $query->is_main_query() && $query->is_post_type_archive("parish_newsletter")) {
    $query->set("posts_per_page", 8);
  }
}
