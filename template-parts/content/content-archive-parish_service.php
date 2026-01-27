<?php
$post_id = get_the_ID();
$post_meta = get_post_meta($post_id);

$service_description = !empty($post_meta["service_description"][0]) ? $post_meta["service_description"][0] : "";
$service_occurrences = !empty($post_meta["service_occurrences"][0]) ? $post_meta["service_occurrences"][0] : "";
?>

<article id="post-<?php the_ID(); ?>" <?php post_class("parish-archive-card"); ?>>
  <div class="parish-archive-card-content">
    <h2><?php the_title(); ?></h2>

    <?php
    if ($service_description) : ?>
      <div class="parish-content-archive-service-card-section">
        <h3><?php esc_html_e("Description", "catholic-parish-wordpress-theme"); ?></h3>
        <p><?php esc_html_e($service_description); ?></p>
      </div>
    <?php endif;

    if ($service_occurrences) : ?>
      <div class="parish-content-archive-service-card-section">
        <h3><?php esc_html_e("Occurrences", "catholic-parish-wordpress-theme"); ?></h3>
        <p><?php echo nl2br(esc_html($service_occurrences)); ?></p>
      </div>
    <?php endif; ?>
  </div>
</article>