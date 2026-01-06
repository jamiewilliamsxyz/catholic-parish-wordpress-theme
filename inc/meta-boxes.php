<?php

// Register meta boxes
add_action("add_meta_boxes", "parish_add_meta_boxes");

function parish_add_meta_boxes()
{
  add_meta_box(
    "parish_newsletter_id",
    "Newsletter Info",
    "parish_newsletter_meta_box",
    "parish_newsletter",
    "normal"
  );

  add_meta_box(
    "parish_clergy_id",
    "Clergy Member Info",
    "parish_clergy_meta_box",
    "parish_clergy_member",
    "normal"
  );

  add_meta_box(
    "parish_group_id",
    "Church Group Info",
    "parish_group_meta_box",
    "parish_church_group",
    "normal"
  );
}

// Meta box callbacks
function parish_newsletter_meta_box($post)
{
  $pdf_file = get_post_meta($post->ID, "pdf_file", true);

  wp_nonce_field("parish_save_newsletter", "parish_newsletter_nonce");

?>
  <label for="pdf_file">PDF File URL</label><br />
  <input type="url" name="pdf_file" value="<?php echo esc_attr($pdf_file); ?>" />
<?php
}

function parish_clergy_meta_box($post)
{
  $email = get_post_meta($post->ID, "email", true);
  $phone = get_post_meta($post->ID, "phone", true);
  $about = get_post_meta($post->ID, "about", true);

  wp_nonce_field("parish_save_clergy", "parish_clergy_nonce");

?>
  <label for="email">Email</label><br />
  <input type="email" name="email" value="<?php echo esc_attr($email); ?>" /><br />

  <label for="phone">Phone</label><br />
  <input type="text" name="phone" value="<?php echo esc_attr($phone); ?>" /><br />

  <label for="about">About</label><br />
  <textarea name="about" rows="8" cols="50"><?php echo esc_textarea($about); ?></textarea>
<?php
}

function parish_group_meta_box($post)
{
  $leader_name = get_post_meta($post->ID, "leader_name", true);
  $leader_email = get_post_meta($post->ID, "leader_email", true);
  $leader_phone = get_post_meta($post->ID, "leader_phone", true);
  $description = get_post_meta($post->ID, "description", true);
  $meeting_time = get_post_meta($post->ID, "meeting_time", true);
  $location = get_post_meta($post->ID, "location", true);

  wp_nonce_field("parish_save_group", "parish_group_nonce");

?>
  <label for="leader_name">Leader Name</label><br />
  <input type="text" name="leader_name" value="<?php echo esc_attr($leader_name); ?>" /><br />

  <label for="leader_email">Leader Email</label><br />
  <input type="email" name="leader_email" value="<?php echo esc_attr($leader_email); ?>" /><br />

  <label for="leader_phone">Leader Phone</label><br />
  <input type="text" name="leader_phone" value="<?php echo esc_attr($leader_phone); ?>" /><br />

  <label for="description">Description</label><br />
  <textarea name="description" rows="8" cols="50"><?php echo esc_textarea($description); ?></textarea><br />

  <label for="meeting_time">Meeting Time</label><br />
  <input type="text" name="meeting_time" value="<?php echo esc_attr($meeting_time); ?>" /><br />

  <label for="location">Location</label><br />
  <input type="text" name="location" value="<?php echo esc_attr($location); ?>" />
<?php
}

// Save meta box data
add_action("save_post", "parish_save_meta_boxes");

function parish_save_meta_boxes($post_id)
{
  if (defined("DOING_AUTOSAVE") && DOING_AUTOSAVE) return;

  // Newsletter
  if (
    isset($_POST["parish_newsletter_nonce"]) &&
    wp_verify_nonce($_POST["parish_newsletter_nonce"], "parish_save_newsletter")
  ) {
    if (isset($_POST["pdf_file"])) {
      update_post_meta(
        $post_id,
        "pdf_file",
        esc_url_raw($_POST["pdf_file"])
      );
    }
  }

  // Clergy
  if (
    isset($_POST["parish_clergy_nonce"]) &&
    wp_verify_nonce($_POST["parish_clergy_nonce"], "parish_save_clergy")
  ) {
    if (isset($_POST["email"])) {
      update_post_meta(
        $post_id,
        "email",
        sanitize_email($_POST["email"])
      );
    }

    if (isset($_POST["phone"])) {
      update_post_meta(
        $post_id,
        "phone",
        sanitize_text_field($_POST["phone"])
      );
    }

    if (isset($_POST["about"])) {
      update_post_meta(
        $post_id,
        "about",
        sanitize_textarea_field($_POST["about"])
      );
    }
  }

  // Church group
  if (
    isset($_POST["parish_group_nonce"]) &&
    wp_verify_nonce($_POST["parish_group_nonce"], "parish_save_group")
  ) {
    if (isset($_POST["leader_name"])) {
      update_post_meta(
        $post_id,
        "leader_name",
        sanitize_text_field($_POST["leader_name"])
      );
    }

    if (isset($_POST["leader_email"])) {
      update_post_meta(
        $post_id,
        "leader_email",
        sanitize_email($_POST["leader_email"])
      );
    }

    if (isset($_POST["leader_phone"])) {
      update_post_meta(
        $post_id,
        "leader_phone",
        sanitize_text_field($_POST["leader_phone"])
      );
    }

    if (isset($_POST["description"])) {
      update_post_meta(
        $post_id,
        "description",
        sanitize_textarea_field($_POST["description"])
      );
    }

    if (isset($_POST["meeting_time"])) {
      update_post_meta(
        $post_id,
        "meeting_time",
        sanitize_text_field($_POST["meeting_time"])
      );
    }

    if (isset($_POST["location"])) {
      update_post_meta(
        $post_id,
        "location",
        sanitize_text_field($_POST["location"])
      );
    }
  }
}
