<?php
/*
Template Name: Contact Page
*/

get_header();
?>

<main>
  <?php
  $title = get_the_title();

  if (!empty($title)) :
    get_template_part("template-parts/components/page-header");
  else :
  ?>
    <header class="parish-page-header">
      <h1><?php esc_html_e("Contact", "catholic-parish-wordpress-theme"); ?></h1>
    </header>
  <?php endif; ?>

  <div class="parish-page-contact-top-section-wrapper">
    <section class="parish-page-contact-top-section">
      <?php
      while (have_posts()) :
        the_post();
        get_template_part("template-parts/content/content-page", "contact");
      endwhile;
      ?>

      <div class="parish-details-card">
        <?php
        $details_arr = array(
          "phone" => __("Phone", "catholic-parish-wordpress-theme"),
          "email" => __("Email", "catholic-parish-wordpress-theme"),
          "church_address" => __("Church Address", "catholic-parish-wordpress-theme"),
          "office_address" => __("Office Address", "catholic-parish-wordpress-theme"),
          "office_hours" => __("Office Opening Hours", "catholic-parish-wordpress-theme")
        );

        foreach ($details_arr as $key => $title) {
          $data = get_option("cpc_parish_$key");
        ?>
          <div class="parish-details-card-field">
            <h3><?php echo esc_html($title); ?></h3>
            <p><?php echo $data ? nl2br(esc_html($data)) : esc_html__("Not provided", "catholic-parish-wordpress-theme"); ?></p>
          </div>
        <?php
        }
        ?>
      </div>
    </section>
  </div>

  <div class="parish-page-contact-bottom-section-wrapper">
    <section class="parish-page-contact-bottom-section">
      <?php get_template_part("template-parts/components/contact-form"); ?>

      <?php
      $map_url = get_theme_mod("parish_map_url");
      if ($map_url) :
      ?>
        <iframe
          src="<?php echo esc_url($map_url) ?>"
          width="600"
          height="450"
          style="border:0;"
          allowfullscreen=""
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade">
        </iframe>
      <?php endif; ?>
    </section>
  </div>
</main>

<?php get_footer(); ?>