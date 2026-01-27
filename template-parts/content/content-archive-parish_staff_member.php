<?php
$post_id = get_the_ID();
$post_meta = get_post_meta($post_id);

$role = !empty($post_meta["role"][0]) ? $post_meta["role"][0] : "";
$about = !empty($post_meta["about"][0]) ? $post_meta["about"][0] : "";
$email = !empty($post_meta["email"][0]) ? $post_meta["email"][0] : "";
$phone = !empty($post_meta["phone"][0]) ? $post_meta["phone"][0] : "";
?>

<article id="post-<?php the_ID(); ?>" <?php post_class("parish-archive-card"); ?>>
  <div class="parish-archive-card-content">
    <h2><?php the_title(); ?></h2>
    <span><?php echo esc_html__($role, "catholic-parish-wordpress-theme"); ?></span>

    <?php
    if (has_post_thumbnail()) :
      the_post_thumbnail("parish-staff-photo", array(
        "class" => "parish-staff-photo"
      ));
    ?>
    <?php endif;

    if ($about) :
    ?>
      <div class="parish-content-archive-staff-card-section">
        <h3><?php esc_html_e("About", "catholic-parish-wordpress-theme"); ?></h3>
        <p><?php echo esc_html__($about, "catholic-parish-wordpress-theme"); ?></p>
      </div>
    <?php endif;

    if ($email || $phone) :
    ?>
      <div class="parish-content-archive-staff-card-section">
        <h3><?php esc_html_e("Contact", "catholic-parish-wordpress-theme"); ?></h3>
        <?php
        if ($email) : ?>
          <p><?php echo esc_html($email); ?></p>
        <?php endif;
        if ($phone) : ?>
          <p><?php echo esc_html($phone); ?></p>
        <?php endif; ?>
      </div>
    <?php endif; ?>
  </div>
</article>