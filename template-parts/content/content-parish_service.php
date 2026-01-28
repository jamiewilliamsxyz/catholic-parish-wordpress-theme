<?php
$post_id = get_the_ID();
$post_meta = get_post_meta($post_id);

$service_description = !empty($post_meta["service_description"][0]) ? $post_meta["service_description"][0] : "";
$service_occurrences = !empty($post_meta["service_occurrences"][0]) ? $post_meta["service_occurrences"][0] : "";
?>

<article id="post-<?php the_ID(); ?>" <?php post_class("parish-service-card"); ?>>
  <h4><?php the_title(); ?></h4>

  <?php
  if ($service_description) : ?>
    <div class="parish-content-service-card-section">
      <h5><?php esc_html_e("Description", "catholic-parish-wordpress-theme"); ?></h5>
      <p><?php esc_html_e($service_description); ?></p>
    </div>
  <?php endif;

  if ($service_occurrences) : ?>
    <div class="parish-content-service-card-section">
      <h5><?php esc_html_e("Occurrences", "catholic-parish-wordpress-theme"); ?></h5>
      <p><?php echo nl2br(esc_html($service_occurrences)); ?></p>
    </div>
  <?php endif; ?>

</article>