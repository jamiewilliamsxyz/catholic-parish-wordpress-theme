<?php get_header(); ?>

<main class="parish-archive">
  <header>
    <h1><?php post_type_archive_title(); ?></h1>
  </header>

  <section>
    <?php
    if (have_posts()) : ?>

      <div class="parish-archive-posts">
        <?php while (have_posts()) : the_post() ?>
          <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <span><?php echo get_the_date(); ?></span>
            <h2><?php the_title(); ?></h2>
            <p><?php the_excerpt(); ?></p>
            <a href="<?php the_permalink(); ?>"><?php _e("Read more", "catholic-parish"); ?></a>
          </article>
        <?php endwhile; ?>
      </div>

      <div class="parish-pagination-container">
        <?php get_template_part("template-parts/pagination") ?>
      </div>

    <?php else : ?>
      <p class="parish-archive-no-posts"><?php _e("No posts found", "catholic-parish"); ?></p>

    <?php endif; ?>
  </section>
</main>

<?php get_footer(); ?>