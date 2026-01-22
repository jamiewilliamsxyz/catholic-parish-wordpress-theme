<?php get_header(); ?>

<main>
  <article class="parish-single-post">
    <header>
      <div class="parish-sp-thumbnail-container">
        <?php if (has_post_thumbnail()) : ?>
          <?php the_post_thumbnail(); ?>
        <?php endif; ?>
      </div>
      <h1><?php the_title(); ?></h1>
      <span class="parish-sp-date-posted">Date posted: <?php echo get_the_date(); ?></span>
    </header>

    <div class="parish-sp-content-container"><?php the_content(); ?></div>
  </article>
</main>

<?php get_footer(); ?>