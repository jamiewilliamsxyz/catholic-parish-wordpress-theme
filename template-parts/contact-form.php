<form method="post" action="" class="parish-contact-form">
  <input type="hidden" name="parish_contact_form_submitted" value="submitted" />
  <?php
  wp_nonce_field("parish_send_contact_email", "parish_contact_form_nonce");
  ?>

  <div class="parish-contact-form-col">
    <div class="parish-contact-input-field">
      <label>
        <?php esc_html_e("Name", "catholic-parish-wordpress-theme"); ?>
      </label>
      <input name="contact_name" type="text" minlength="2" maxlength="50" required placeholder="<?php echo esc_attr("John Doe"); ?>" />
    </div>

    <div class="parish-contact-input-field">
      <label>
        <?php esc_html_e("Email", "catholic-parish-wordpress-theme"); ?>
      </label>
      <input name="contact_email" type="email" minlength="5" maxlength="100" required placeholder="<?php echo esc_attr("john.doe@gmail.com"); ?>" />
    </div>

    <div class="parish-contact-input-field">
      <label>
        <?php esc_html_e("Subject", "catholic-parish-wordpress-theme"); ?>
      </label>
      <input name="contact_subject" type="text" minlength="3" maxlength="100" required placeholder="<?php echo esc_attr('e.g. "') . esc_attr__("Support", "catholic-parish-wordpress-theme") . esc_attr('"'); ?>" />
    </div>

    <div class="parish-contact-textarea-field">
      <label>
        <?php esc_html_e("Message", "catholic-parish-wordpress-theme"); ?>
      </label>
      <textarea name="contact_message" minlength="10" maxlength="1000" required placeholder="<?php echo esc_attr__("Your message", "catholic-parish-wordpress-theme"); ?>"></textarea>
    </div>
  </div>

  <?php
  // Set button text/class based on form submit result

  $btn_class = "";
  $form_msg = __("Send email", "catholic-parish-wordpress-theme");

  if (isset($_GET["parish_contact_status"])) {
    if ($_GET["parish_contact_status"] === "success") {
      $form_msg = __("Message sent", "catholic-parish-wordpress-theme");
      $btn_class = "parish-submit-btn-success";
    } else {
      $form_msg = __("Send failed, try again", "catholic-parish-wordpress-theme");
      $btn_class = "parish-submit-btn-err";
    }
  }
  ?>

  <button type="submit" class="<?php echo esc_attr($btn_class) ?>">
    <?php echo esc_html($form_msg); ?>
  </button>
</form>