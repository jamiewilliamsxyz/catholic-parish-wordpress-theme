<?php get_header(); ?>

<main class="parish-page-main">
  <header>
    <h1 class="parish-page-title"><?php the_title(); ?></h1>
  </header>

  <div class="parish-page-content-wrapper">
    <section class="parish-page-content parish-content">
      <?php the_content(); ?>
    </section>
  </div>
</main>

<?php get_footer(); ?>