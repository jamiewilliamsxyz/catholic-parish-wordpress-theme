<?php

$services = get_posts([
  "post_type" => "parish_service",
  "posts_per_page" => 3,
  "post_status" => "publish",
  "orderby" => "date",
  "order" => "ASC"
]);

if ($services) :
?>
  <section class="parish-services-section">
    <h3>
      <?php esc_html_e("Parish Services", "catholic-parish-wordpress-theme") ?>
    </h3>

    <div class="parish-services-content">
      <div class="parish-service-cards">
        <?php
        foreach ($services as $post) : setup_postdata($post);
          get_template_part("template-parts/content/content", get_post_type());
        endforeach;
        wp_reset_postdata();
        ?>
      </div>
    <?php
  else : return;
  endif;
    ?>
    </div>

  </section>