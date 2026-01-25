<?php get_header(); ?>

<main class="parish-archive">
  <header>
    <h1><?php echo post_type_archive_title(); ?></h1>
    <div class="parish-archive-header-separator"></div>
    <h2><?php the_archive_description(); ?></h2>
  </header>

  <?php
  if (have_posts()) : ?>

    <section>
      <div class="parish-archive-container">
        <?php
        while (have_posts()) :
          the_post();

          get_template_part(
            "template-parts/content/content-archive",
            get_post_type()
          );

        endwhile;
        ?>
      </div>
    </section>

    <?php get_template_part("template-parts/pagination") ?>

  <?php else : ?>

    <div class="parish-archive-no-posts">
      <p><?php esc_html_e("No posts found", "catholic-parish-wordpress-theme"); ?></p>
    </div>

  <?php endif; ?>

</main>

<?php get_footer(); ?>