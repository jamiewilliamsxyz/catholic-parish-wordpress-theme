<?php get_header(); ?>

<main class="parish-archive">
  <?php
  if (have_posts()) :
  ?>

    <section>
      <div class="parish-archive-container">
        <?php
        while (have_posts()) :
          the_post();
          get_template_part("template-parts/content/content-archive/content-archive");
        endwhile;
        ?>
      </div>
    </section>

    <?php get_template_part("template-parts/components/pagination") ?>

  <?php else : ?>

    <div class="parish-archive-no-posts">
      <p><?php esc_html_e("No posts found", "catholic-parish-wordpress-theme"); ?></p>
    </div>

  <?php endif; ?>
</main>

<?php get_footer(); ?>