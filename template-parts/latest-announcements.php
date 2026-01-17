<?php
$announcements = get_posts([
  "post_type" => "parish_announcement",
  "posts_per_page" => 3,
  "post_status" => "publish",
]);

if ($announcements) :
?>
  <section class="parish-announcements">
    <h3>Latest Announcements</h3>

    <div class="parish-announcements-content">
      <div class="parish-latest-announcements">
        <?php foreach ($announcements as $post) : setup_postdata($post); ?>
          <div class="parish-announcement-card">
            <span><?php echo get_the_date(); ?></span>
            <h4><?php the_title(); ?></h4>
            <p><?php the_excerpt(); ?></p>
            <a href="<?php esc_url(the_permalink()); ?>">Read more</a>
          </div>
        <?php endforeach;
        wp_reset_postdata(); ?>
      </div>
    <?php else : ?>
      <div class="parish-no-announcements">
        <p>There are no announcements at the moment</p>
        <p>Please check back soon</p>
      </div>
    <?php endif; ?>

    <a href="<?php echo esc_url(get_post_type_archive_link("parish_announcement")); ?>" class="parish-see-more-link">See more</a>
    </div>

  </section>