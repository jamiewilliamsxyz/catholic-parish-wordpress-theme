<?php get_header(); ?>

<main class="parish-404">
  <h1>404</h1>

  <h2>
    <?php esc_html_e("Page not found", "catholic-parish-wordpress-theme") ?>
  </h2>

  <a href="<?php echo esc_url(home_url("/")); ?>">
    <?php esc_html_e("Return home", "catholic-parish-wordpress-theme") ?>
  </a>
</main>

<?php get_footer(); ?>