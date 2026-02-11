<?php
$announcements = get_posts(array(
  "post_type" => "cpc_announcement",
  "posts_per_page" => 3,
  "post_status" => "publish",
));

if ($announcements) :
?>
  <section class="parish-announcements">
    <h3>
      <?php esc_html_e("Latest Announcements", "catholic-parish-wordpress-theme") ?>
    </h3>

    <div class="parish-announcements-content">
      <div class="parish-latest-announcements">
        <?php foreach ($announcements as $post) : setup_postdata($post); ?>
          <article id="post-<?php the_ID(); ?>" <?php post_class(["parish-announcement-card", "parish-animate-card"]); ?>>
            <span><?php echo get_the_date(); ?></span>
            <h4><?php the_title(); ?></h4>
            <p><?php the_excerpt(); ?></p>
            <a href="<?php the_permalink(); ?>">
              <?php esc_html_e("Read more", "catholic-parish-wordpress-theme") ?>
            </a>
          </article>
        <?php endforeach;
        wp_reset_postdata(); ?>
      </div>

      <a href="<?php echo esc_url(get_post_type_archive_link("cpc_announcement")); ?>" class="parish-see-more-link">See more</a>
    </div>
  </section>
<?php endif; ?>