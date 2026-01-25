<article id="post-<?php the_ID(); ?>" <?php post_class("parish-archive-card"); ?>>
  <div class="parish-archive-card-content">
    <span><?php echo get_the_date(); ?></span>
    <h2><?php the_title(); ?></h2>
    <p><?php the_excerpt(); ?></p>
  </div>
  <a href="<?php the_permalink(); ?>"><?php esc_html_e("Read more", "catholic-parish"); ?></a>
</article>