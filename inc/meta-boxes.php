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
    "parish_staff_id",
    "Parish Staff Member Info",
    "parish_staff_meta_box",
    "parish_staff_member",
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
  <div class="parish-meta-box">
    <div class="parish-meta-box-field">
      <label for="pdf_file">PDF File URL</label>
      <input type="url" name="pdf_file" placeholder="https://example.com/file.pdf" value="<?php echo esc_attr($pdf_file); ?>" />
    </div>
  </div>
<?php
}

function parish_staff_meta_box($post)
{
  $role = get_post_meta($post->ID, "role", true);
  $about = get_post_meta($post->ID, "about", true);
  $email = get_post_meta($post->ID, "email", true);
  $phone = get_post_meta($post->ID, "phone", true);

  wp_nonce_field("parish_save_staff", "parish_staff_nonce");

?>
  <div class="parish-meta-box">
    <div class="parish-meta-box-field">
      <label for="role">Role</label>
      <input type="text" name="role" placeholder="Assistant Priest" value="<?php echo esc_attr($role); ?>" />
    </div>

    <div class="parish-meta-box-field">
      <label for="about">About</label>
      <textarea name="about" rows="8" placeholder="Brief bio of the staff/clergy member"><?php echo esc_textarea($about); ?></textarea>
    </div>

    <div class="parish-meta-box-field">
      <label for="email">Email</label>
      <input type="email" name="email" placeholder="john.doe@gmail.com" value="<?php echo esc_attr($email); ?>" />
    </div>

    <div class="parish-meta-box-field">
      <label for="phone">Phone</label>
      <input type="text" name="phone" placeholder="+44 1234 567890" value="<?php echo esc_attr($phone); ?>" />
    </div>
  </div>
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
  <div class="parish-meta-box">
    <div class="parish-meta-box-field">
      <label for="leader_name">Leader Name</label>
      <input type="text" name="leader_name" placeholder="John Doe" value="<?php echo esc_attr($leader_name); ?>" />
    </div>

    <div class="parish-meta-box-field">
      <label for="leader_email">Leader Email</label>
      <input type="email" name="leader_email" placeholder="john.doe@gmail.com" value="<?php echo esc_attr($leader_email); ?>" />
    </div>

    <div class="parish-meta-box-field">
      <label for="leader_phone">Leader Phone</label>
      <input type="text" name="leader_phone" placeholder="+44 1234 567890" value="<?php echo esc_attr($leader_phone); ?>" />
    </div>

    <div class="parish-meta-box-field">
      <label for="description">Description</label>
      <textarea name="description" rows="8" placeholder="Description of the church group"><?php echo esc_textarea($description); ?></textarea>
    </div>

    <div class="parish-meta-box-field">
      <label for="meeting_time">Meeting Time</label>
      <input type="text" name="meeting_time" placeholder="18:00 every Tuesday" value="<?php echo esc_attr($meeting_time); ?>" />
    </div>

    <div class="parish-meta-box-field">
      <label for="location">Location</label>
      <input type="text" name="location" placeholder="Church hall" value="<?php echo esc_attr($location); ?>" />
    </div>
  </div>
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

  // Parish Staff
  if (
    isset($_POST["parish_staff_nonce"]) &&
    wp_verify_nonce($_POST["parish_staff_nonce"], "parish_save_staff")
  ) {
    if (isset($_POST["role"])) {
      update_post_meta(
        $post_id,
        "role",
        sanitize_text_field($_POST["role"])
      );
    }

    if (isset($_POST["about"])) {
      update_post_meta(
        $post_id,
        "about",
        sanitize_textarea_field($_POST["about"])
      );
    }

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
