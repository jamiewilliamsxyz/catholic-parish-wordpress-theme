<header class="parish-page-header">
  <h1>
    <?php
    if (is_archive()) {
      post_type_archive_title();
    } else {
      the_title();
    }
    ?>
  </h1>
</header>