<footer class="parish-footer">
  <div class="parish-foot-wrapper">
    <div class="parish-foot-identity">
      <div class="parish-foot-title-info">
        <h5><?php bloginfo("name"); ?></h5>

        <div class="parish-foot-info">
          <h6><?php esc_html_e("Parish Info", "catholic-parish"); ?></h6>
          <p><?php bloginfo("description"); ?></p>
        </div>
      </div>

      <div class="parish-copyright-bar-wrapper-desktop">
        <?php get_template_part("template-parts/copyright-bar") ?>
      </div>
    </div>

    <div class="parish-foot-links">
      <div class="parish-foot-links-content">
        <h6>Placeholder Title</h6>
        <ul>
          <li><a>Placeholder link</a></li>
          <li><a>Placeholder link</a></li>
          <li><a>Placeholder link</a></li>
          <li><a>Placeholder link</a></li>
          <li><a>Placeholder link</a></li>
        </ul>
      </div>

      <div class="parish-foot-links-content">
        <h6>Social Links</h6>
        <ul>
          <li><a>Placeholder link</a></li>
          <li><a>Placeholder link</a></li>
          <li><a>Placeholder link</a></li>
        </ul>
      </div>
    </div>
  </div>

  <div class="parish-copyright-bar-wrapper-mobile">
    <?php get_template_part("template-parts/copyright-bar") ?>
  </div>

  </div>
</footer>

</div>

<?php wp_footer(); ?>

</body>

</html>