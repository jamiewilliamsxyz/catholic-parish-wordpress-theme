<?php
$post_id = get_the_ID();
$post_meta = get_post_meta($post_id);

$leader_name = !empty($post_meta["leader_name"][0]) ? $post_meta["leader_name"][0] : "";
$leader_email = !empty($post_meta["leader_email"][0]) ? $post_meta["leader_email"][0] : "";
$leader_phone = !empty($post_meta["leader_phone"][0]) ? $post_meta["leader_phone"][0] : "";
$description = !empty($post_meta["description"][0]) ? $post_meta["description"][0] : "";
$meeting_time = !empty($post_meta["meeting_time"][0]) ? $post_meta["meeting_time"][0] : "";
$location = !empty($post_meta["location"][0]) ? $post_meta["location"][0] : "";
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(["parish-archive-card", "parish-animate-archive-card"]); ?>>
  <div class="parish-archive-card-content">
    <h2><?php the_title(); ?></h2>

    <?php if ($leader_name || $leader_email || $leader_phone) : ?>
      <div class="parish-content-archive-group-card-section">
        <h3><?php esc_html_e("Leader Details", "catholic-parish-wordpress-theme"); ?></h3>
        <?php if ($leader_name) : ?>
          <p><?php echo esc_html($leader_name); ?></p>
        <?php endif; ?>
        <?php if ($leader_email) : ?>
          <p><?php echo esc_html($leader_email); ?></p>
        <?php endif; ?>
        <?php if ($leader_phone) : ?>
          <p><?php echo esc_html($leader_phone); ?></p>
        <?php endif; ?>
      </div>
    <?php endif; ?>

    <?php if ($description) : ?>
      <div class="parish-content-archive-group-card-section">
        <h3><?php esc_html_e("Group Description", "catholic-parish-wordpress-theme"); ?></h3>
        <p><?php echo esc_html__($description, "catholic-parish-wordpress-theme"); ?></p>
      </div>
    <?php endif; ?>

    <?php if ($meeting_time) : ?>
      <div class="parish-content-archive-group-card-section">
        <h3><?php esc_html_e("Meeting Time", "catholic-parish-wordpress-theme"); ?></h3>
        <p><?php echo esc_html($meeting_time); ?></p>
      </div>
    <?php endif; ?>

    <?php if ($location) : ?>
      <div class="parish-content-archive-group-card-section">
        <h3><?php esc_html_e("Location", "catholic-parish-wordpress-theme"); ?></h3>
        <p><?php echo esc_html($location); ?></p>
      </div>
    <?php endif; ?>
  </div>
</article>