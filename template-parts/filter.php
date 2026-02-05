<div class="parish-filter">
  <?php
  $post_type = get_query_var("post_type");
  $taxonomies = get_object_taxonomies($post_type);
  $current_url = get_post_type_archive_link($post_type);

  foreach ($taxonomies as $tax) :
    $terms = get_terms(array(
      "taxonomy" => $tax,
      "hide_empty" => true,
    ));

    if ($terms) : ?>
      <a
        href="<?php echo esc_url($current_url); ?>"
        class=<?php echo esc_attr(!$_GET ? "parish-filter-link-is-active" : "") ?>>
        <?php esc_html_e("All", "catholic-parish-wordpress-theme"); ?>
      </a>

      <?php
      foreach ($terms as $term) :
        $filter_url = "$current_url?$tax=$term->slug";
        $active_class = $term->slug === get_query_var("term") ? "parish-filter-link-is-active" : "";
      ?>
        <a
          href="<?php echo esc_url($filter_url); ?>"
          class=<?php echo esc_attr($active_class); ?>>
          <?php echo esc_html($term->name); ?>
        </a>
  <?php
      endforeach;
    endif;
  endforeach;
  ?>
</div>