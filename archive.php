<?php get_header(); ?>

<main class="parish-archive">
  <div class="parish-archive-main-wrapper">

    <?php
    get_template_part("template-parts/components/page-header");

    if (have_posts()) :
      $post_type = get_post_type();
    ?>

      <section>
        <?php if (get_object_taxonomies($post_type)) get_template_part("template-parts/components/filter"); ?>
        <div class="parish-archive-container">
          <?php
          while (have_posts()) :
            the_post();

            get_template_part(
              "template-parts/content/content-archive/content-archive",
              $post_type
            );

          endwhile;
          ?>
        </div>
      </section>
  </div>
  <?php get_template_part("template-parts/components/pagination") ?>

<?php else : ?>

  <div class="parish-archive-no-posts">
    <p><?php esc_html_e("No posts found", "catholic-parish-wordpress-theme"); ?></p>
  </div>

<?php endif; ?>

</main>

<?php get_footer(); ?>