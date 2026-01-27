<div class="parish-contact-form">
  <h2><?php the_title(); ?></h2>

  <form method="post" action="">
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

    <button type="submit">
      <?php esc_html_e("Send Email", "catholic-parish-wordpress-theme"); ?>
    </button>

    <?php
    // Form error/success message display

    $form_message = "";

    if (isset($_GET["parish_contact_status"])) {
      if ($_GET["parish_contact_status"] === "success") {
        $form_message = '<p class="parish-contact-form-success-msg">'
          . esc_html__("Your message has been sent", "catholic-parish-wordpress-theme")
          . '</p>';
      } else {
        $form_message = '<p class="parish-contact-form-err-msg">'
          . esc_html__("An error has occurred, please try again", "catholic-parish-wordpress-theme")
          . '</p>';
      }
    }

    echo $form_message;
    ?>
  </form>


</div>