<article id="post-<?php the_ID(); ?>" <?php post_class("parish-single-post"); ?>>
  <header>
    <div class="parish-sp-header-content">
      <h1 class="parish-sp-title"><?php the_title(); ?></h1>
      <span class="parish-sp-date-posted">
        <?php esc_html_e("Date posted", "catholic-parish-wordpress-theme") ?>:
        <?php echo get_the_date(); ?>
      </span>

      <?php if (has_post_thumbnail()) : ?>
        <div class="parish-sp-thumb-wrapper">
          <?php the_post_thumbnail("parish-post-thumb", array(
            "class" => "parish-sp-thumb"
          )); ?>
        </div>
      <?php endif; ?>
    </div>
  </header>

  <div class="parish-sp-content parish-content"><?php the_content(); ?></div>
</article>