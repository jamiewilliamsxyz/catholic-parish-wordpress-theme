<?php get_header(); ?>

<main class="parish-archive">
  <header>
    <h1><?php post_type_archive_title(); ?></h1>
  </header>


  <?php
  if (have_posts()) : ?>

    <section>
      <div class="parish-archive-container">
        <?php while (have_posts()) : the_post() ?>
          <article class="parish-archive-card" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <div class="parish-archive-card-content">
              <span><?php echo get_the_date(); ?></span>
              <h2><?php the_title(); ?></h2>
              <p><?php the_excerpt(); ?></p>
            </div>
            <a href="<?php the_permalink(); ?>"><?php esc_html_e("Read more", "catholic-parish"); ?></a>
          </article>
        <?php endwhile; ?>
      </div>
    </section>

    <?php get_template_part("template-parts/pagination") ?>

  <?php else : ?>

    <div class="parish-archive-no-posts">
      <p><?php esc_html_e("No posts found", "catholic-parish"); ?></p>
    </div>

  <?php endif; ?>

</main>

<?php get_footer(); ?>