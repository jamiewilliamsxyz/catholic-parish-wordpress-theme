<?php get_header(); ?>

<main class="parish-page-main">
  <header>
    <?php if (has_post_thumbnail()) : ?>
      <div class="parish-page-thumbnail-container">
        <?php the_post_thumbnail(); ?>
      </div>
    <?php endif; ?>
    <h1><?php the_title(); ?></h1>
  </header>

  <section>
    <?php the_content(); ?>
  </section>
</main>

<?php get_footer(); ?>