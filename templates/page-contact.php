<?php
/*
Template Name: Contact Page
*/

get_header();
?>

<main>
  <?php
  while (have_posts()) :
    the_post();
    get_template_part("template-parts/content/content", "page");
  endwhile;
  ?>

  <section class="parish-contact-section">
    <?php
    get_template_part("template-parts/contact-form");

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
</main>

<?php get_footer(); ?>