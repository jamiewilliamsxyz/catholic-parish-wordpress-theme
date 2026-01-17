<?php get_header(); ?>

<main>
  <section
    class="parish-hero"
    style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/parish-hero-bg-placeholder.jpg');">
    <header>
      <h1>
        <?php bloginfo("name") ?>
      </h1>

      <div class="parish-description-container">
        <h2>
          <?php bloginfo("description") ?>
        </h2>
      </div>
    </header>
  </section>

  <?php
  get_template_part('template-parts/latest-announcements');
  ?>
</main>

<?php get_footer(); ?>