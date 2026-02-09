<article id="post-<?php the_ID(); ?>" <?php post_class("parish-archive-card"); ?>>
  <div class="parish-archive-card-content">
    <span><?php echo get_the_date(); ?></span>
    <h2><?php the_title(); ?></h2>

    <?php
    $post_id = get_the_ID();
    $post_newsletter_url = get_post_meta($post_id, "pdf_file", true);

    if ($post_newsletter_url) :
    ?>
      <a
        class="parish-content-archive-newsletter-link"
        href="<?php echo esc_url($post_newsletter_url); ?>"
        target="_blank"
        rel="noopener">
        <?php esc_html_e("Download", "catholic-parish-wordpress-theme") ?>
      </a>
    <?php endif; ?>
  </div>
</article>