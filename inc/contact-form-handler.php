<?php

add_action("template_redirect", "parish_handle_contact_form");

function parish_handle_contact_form()
{
  if (empty($_POST["parish_contact_form_submitted"])) return;

  if (
    !isset($_POST["parish_contact_form_nonce"]) ||
    !wp_verify_nonce($_POST["parish_contact_form_nonce"], "parish_send_contact_email")
  ) {
    parish_redirect_on_submit("error");
  }

  $contact_name = sanitize_text_field($_POST["contact_name"]);
  $contact_email = sanitize_email($_POST["contact_email"]);
  $contact_subject = sanitize_text_field($_POST["contact_subject"]);
  $contact_message = sanitize_textarea_field($_POST["contact_message"]);

  if (!$contact_name || !$contact_email || !$contact_subject || !$contact_message) {
    parish_redirect_on_submit("error");
  }

  $to = get_option("admin_email");
  $body = "Name: $contact_name\nEmail: $contact_email\n\nMessage:\n$contact_message";
  $headers = "Reply-To: $contact_name <$contact_email>";

  $email_sent = wp_mail($to, $contact_subject, $body, $headers);

  if ($email_sent) {
    parish_redirect_on_submit("success");
  } else {
    parish_redirect_on_submit("error");
  }
}

// Redirect back to referring page after form submission to prevent resubmission
function parish_redirect_on_submit($status) // "success" or "error"
{
  wp_redirect(add_query_arg("parish_contact_status", $status, wp_get_referer()), 303);
  exit;
}
