<div class="parish-contact-form">
  <h2><?php the_title() ?></h2>

  <form>
    <div class="parish-contact-form-col">
      <div class="parish-contact-input-field">
        <label>
          <?php esc_html_e("Name", "catholic-parish-wordpress-theme") ?>
        </label>
        <input name="contact_name" type="text" required placeholder="<?php echo esc_attr__("John Doe") ?>" />
      </div>

      <div class="parish-contact-input-field">
        <label>
          <?php esc_html_e("Email", "catholic-parish-wordpress-theme") ?>
        </label>
        <input name="contact_email" type="email" required placeholder="<?php echo esc_attr__("john.doe@gmail.com") ?>" />
      </div>

      <div class="parish-contact-input-field">
        <label>
          <?php esc_html_e("Subject", "catholic-parish-wordpress-theme") ?>
        </label>
        <input name="contact_subject" type="text" required placeholder="<?php echo esc_attr__('e.g. "Support"') ?>" />
      </div>

      <div class="parish-contact-textarea-field">
        <label>
          <?php esc_html_e("Message", "catholic-parish-wordpress-theme") ?>
        </label>
        <textarea name="contact_message" required placeholder="<?php echo esc_attr__("Your message") ?>"></textarea>
      </div>
    </div>

    <button type="submit"><?php esc_html_e("Send Email", "catholic-parish-wordpress-theme") ?></button>
  </form>
</div>