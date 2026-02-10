<?php

add_action("admin_menu", "parish_add_setup_guide_page");

function parish_add_setup_guide_page()
{
  add_menu_page(
    __("Parish Setup Guide", "catholic-parish-wordpress-theme"),
    __("Parish Setup Guide", "catholic-parish-wordpress-theme"),
    "manage_options",
    "parish-setup-guide",
    "parish_render_setup_guide_page",
    "dashicons-editor-help",
    25
  );
}

function parish_render_setup_guide_page()
{
  if (!current_user_can("manage_options")) return;

?>
  <div class="parish-setup-guide wrap">
    <header>
      <h1><?php echo esc_html(get_admin_page_title()); ?></h1>
      <p>
        <?php esc_html_e("This setup guide helps parish administrators set up and use the Catholic Parish theme and the core companion plugin. It explains what has been added to WordPress, where content appears on the site and the important steps needed to get everything working correctly.", "catholic-parish-wordpress-theme"); ?>
      </p>
    </header>

    <main>
      <nav>
        <h2><?php esc_html_e("Quick Setup Steps", "catholic-parish-wordpress-theme"); ?></h2>
        <ol>
          <li><a href="#parish-plugin-activation"><?php esc_html_e("Install & activate the companion plugin", "catholic-parish-wordpress-theme"); ?></a></li>
          <li><a href="#parish-set-front-page"><?php esc_html_e("Set the front page", "catholic-parish-wordpress-theme"); ?></a></li>
          <li><a href="#parish-setup-menus"><?php esc_html_e("Set up menus", "catholic-parish-wordpress-theme"); ?></a></li>
          <li><a href="#parish-site-customisation"><?php esc_html_e("Customise the site", "catholic-parish-wordpress-theme"); ?></a></li>
          <li><a href="#parish-create-content"><?php esc_html_e("Create parish content", "catholic-parish-wordpress-theme"); ?></a></li>
          <li><a href="#parish-templates-shortcodes-overview"><?php esc_html_e("Parish Details, Templates & Shortcodes", "catholic-parish-wordpress-theme"); ?></a></li>
          <li><a href="#parish-theme-tips"><?php esc_html_e("Helpful tips", "catholic-parish-wordpress-theme"); ?></a></li>
        </ol>
      </nav>

      <hr />

      <section id="parish-plugin-activation">
        <h2><?php esc_html_e("Install & Activate the Companion Plugin", "catholic-parish-wordpress-theme"); ?></h2>

        <p>
          <?php esc_html_e("The Catholic Parish theme works together with a core companion plugin. This plugin allows all features that work together with the theme such as shortcodes, contact form logic, taxonomies and parish-specific custom post types.", "catholic-parish-wordpress-theme"); ?>
        </p>

        <ul>
          <li>
            <?php
            printf(
              wp_kses_post(__('Download the plugin from the GitHub repository <a href="%s" target="_blank" rel="noopener">here</a>', "catholic-parish-wordpress-theme")),
              esc_url("https://github.com/jamiewilliamsxyz/catholic-parish-core")
            );
            ?>
          </li>
          <li><?php echo wp_kses_post(__("Go to <strong>Plugins → Add Plugin → Upload Plugin</strong>", "catholic-parish-wordpress-theme")); ?></li>
          <li><?php esc_html_e("Upload the downloaded .zip file", "catholic-parish-wordpress-theme"); ?></li>
          <li><?php echo wp_kses_post(__("Activate the plugin under <strong>Plugins → Installed Plugins</strong>", "catholic-parish-wordpress-theme")); ?></li>
        </ul>
      </section>

      <hr />

      <section id="parish-set-front-page">
        <h2><?php esc_html_e("Set the Front Page", "catholic-parish-wordpress-theme"); ?></h2>

        <p>
          <?php esc_html_e("The theme has a custom front page which must be set in WordPress.", "catholic-parish-wordpress-theme"); ?>
        </p>

        <ul>
          <li><?php echo wp_kses_post(__("Go to <strong>Settings → Reading</strong>", "catholic-parish-wordpress-theme")); ?></li>
          <li><?php echo wp_kses_post(__("Set <strong>Your homepage displays</strong> to <strong>A static page</strong>", "catholic-parish-wordpress-theme")); ?></li>
          <li><?php esc_html_e("Select the page you want to use as the homepage", "catholic-parish-wordpress-theme"); ?></li>
        </ul>

        <p class="parish-setup-guide-subtext description">
          <?php esc_html_e("Content written in the front page editor appears below the latest announcements section.", "catholic-parish-wordpress-theme"); ?>
        </p>
      </section>

      <hr />

      <section id="parish-setup-menus">
        <h2><?php esc_html_e("Set Up Menus", "catholic-parish-wordpress-theme"); ?></h2>

        <p>
          <?php esc_html_e("The theme has three menu locations:", "catholic-parish-wordpress-theme"); ?>
        </p>

        <ul>
          <li><?php echo wp_kses_post(__("<strong>Navbar</strong> - main site navigation", "catholic-parish-wordpress-theme")); ?></li>
          <li><?php echo wp_kses_post(__("<strong>Footer General Links</strong>", "catholic-parish-wordpress-theme")); ?></li>
          <li><?php echo wp_kses_post(__("<strong>Footer Social Links</strong>", "catholic-parish-wordpress-theme")); ?></li>
        </ul>

        <p>
          <?php echo wp_kses_post(__("Head to <strong>Appearance → Menus</strong> to create and manage your menus.", "catholic-parish-wordpress-theme")); ?>
        </p>

        <h3><?php esc_html_e("Navbar Menu", "catholic-parish-wordpress-theme"); ?></h3>
        <ul>
          <li><?php echo wp_kses_post(__("Create a new menu and assign it to the <strong>Navbar Menu</strong> location", "catholic-parish-wordpress-theme")); ?></li>
          <li><?php esc_html_e("Add pages and archive pages (Announcements, Newsletters, Services, Parish Staff, Church Groups)", "catholic-parish-wordpress-theme"); ?></li>
          <li><?php esc_html_e("Save the menu", "catholic-parish-wordpress-theme"); ?></li>
        </ul>

        <p class="parish-setup-guide-subtext description">
          <?php esc_html_e("Archive pages will automatically display content from their sections, no extra setup is required.", "catholic-parish-wordpress-theme"); ?>
        </p>

        <h3><?php esc_html_e("Footer Menus", "catholic-parish-wordpress-theme"); ?></h3>
        <ul>
          <li><?php echo wp_kses_post(__("Create separate menus for <strong>Footer General Links</strong> and <strong>Footer Social Links</strong>", "catholic-parish-wordpress-theme")); ?></li>
          <li><?php echo wp_kses_post(__("Use <strong>Custom Links</strong> for external sites and social media links", "catholic-parish-wordpress-theme")); ?></li>
        </ul>
      </section>

      <hr />

      <section id="parish-site-customisation">
        <h2><?php esc_html_e("Customise the Site", "catholic-parish-wordpress-theme"); ?></h2>

        <p>
          <?php echo wp_kses_post(__("Most visual and content settings are managed through the WordPress Customiser. Navigate to <strong>Appearance → Customise</strong>.", "catholic-parish-wordpress-theme")); ?>
        </p>

        <ul>
          <li><?php echo wp_kses_post(__("<strong>Colours:</strong> Accent colour", "catholic-parish-wordpress-theme")); ?></li>
          <li><?php echo wp_kses_post(__("<strong>Typography:</strong> Fonts", "catholic-parish-wordpress-theme")); ?></li>
          <li><?php echo wp_kses_post(__("<strong>Hero Section:</strong> Front page hero title, card text and background image", "catholic-parish-wordpress-theme")); ?></li>
          <li><?php echo wp_kses_post(__("<strong>Contact Page:</strong> Google Maps embed URL for the Contact Page template", "catholic-parish-wordpress-theme")); ?></li>
          <li><?php echo wp_kses_post(__("<strong>Footer:</strong> Footer title, info text and copyright name", "catholic-parish-wordpress-theme")); ?></li>
        </ul>
      </section>

      <hr />

      <section id="parish-create-content">
        <h2><?php esc_html_e("Create Parish Content", "catholic-parish-wordpress-theme"); ?></h2>

        <p>
          <?php esc_html_e("The companion plugin adds the following content sections to the admin menu.", "catholic-parish-wordpress-theme"); ?>
        </p>

        <ul>
          <li>
            <?php echo wp_kses_post(__("<strong>Announcements</strong><br />Used for parish news and notices.<br /><em>Where it appears:</em> Front page latest announcements section and announcements archive.", "catholic-parish-wordpress-theme")); ?>
          </li>
          <li>
            <?php echo wp_kses_post(__("<strong>Services</strong><br />Used for Mass, Confession, Adoration and similar services.<br /><em>Where it appears:</em> Front page services section.", "catholic-parish-wordpress-theme")); ?>
          </li>
          <li>
            <?php echo wp_kses_post(__("<strong>Newsletters</strong><br />Upload PDF newsletters.<br /><em>Where it appears:</em> Newsletters archive page.", "catholic-parish-wordpress-theme")); ?>
          </li>
          <li>
            <?php echo wp_kses_post(__("<strong>Parish Staff</strong><br />Clergy and parish staff members.<br /><em>Where it appears:</em> Parish Staff archive page.", "catholic-parish-wordpress-theme")); ?>
            <p class="parish-setup-guide-subtext description">
              <?php esc_html_e("Includes filtering by the staff type taxonomy terms.", "catholic-parish-wordpress-theme"); ?>
            </p>
          </li>
          <li>
            <?php echo wp_kses_post(__("<strong>Church Groups</strong><br />Parish groups and ministries.<br /><em>Where it appears:</em> Church Groups archive page.", "catholic-parish-wordpress-theme")); ?>
            <p class="parish-setup-guide-subtext description">
              <?php esc_html_e("Includes filtering by group type taxonomy terms.", "catholic-parish-wordpress-theme"); ?>
            </p>
          </li>
        </ul>
      </section>

      <hr />

      <section id="parish-templates-shortcodes-overview">
        <h2><?php esc_html_e("Parish Details, Templates & Shortcodes", "catholic-parish-wordpress-theme"); ?></h2>

        <h3><?php esc_html_e("Parish Details", "catholic-parish-wordpress-theme"); ?></h3>
        <p>
          <?php echo wp_kses_post(__("Parish Details are managed by the companion plugin to provide information used across the site. Navigate to <strong>Settings -> Parish Details</strong> to enter parish details.", "catholic-parish-wordpress-theme")); ?>
        </p>

        <ul>
          <li><?php esc_html_e("Phone Number", "catholic-parish-wordpress-theme"); ?></li>
          <li><?php esc_html_e("Email Address", "catholic-parish-wordpress-theme"); ?></li>
          <li><?php esc_html_e("Church Address", "catholic-parish-wordpress-theme"); ?></li>
          <li><?php esc_html_e("Office Hours", "catholic-parish-wordpress-theme"); ?></li>
          <li><?php esc_html_e("Office Opening Hours", "catholic-parish-wordpress-theme"); ?></li>
        </ul>

        <p class="parish-setup-guide-subtext description"><?php esc_html_e("These details are displayed automatically on the Contact Page template and via shortcodes.", "catholic-parish-wordpress-theme") ?></p>

        <h3><?php esc_html_e("Contact Page Template", "catholic-parish-wordpress-theme"); ?></h3>
        <ul>
          <li><?php esc_html_e("Create or edit a page", "catholic-parish-wordpress-theme"); ?></li>
          <li><?php echo wp_kses_post(__("Select the <strong>Contact Page</strong> template in the page tab on the right sidebar", "catholic-parish-wordpress-theme")); ?></li>
          <li><?php esc_html_e("Publish or save the page", "catholic-parish-wordpress-theme"); ?></li>
        </ul>

        <p class="parish-setup-guide-subtext description">
          <?php esc_html_e("The contact form on the template sends messages to the site administrator email address.", "catholic-parish-wordpress-theme"); ?><br />
          <?php esc_html_e("The map embed is taken from the Customiser.", "catholic-parish-wordpress-theme"); ?>
        </p>

        <h3><?php esc_html_e("Shortcodes", "catholic-parish-wordpress-theme"); ?></h3>
        <p>
          <?php esc_html_e("Shortcodes allow you to add parish details into pages or posts via the editor.", "catholic-parish-wordpress-theme"); ?>
        </p>

        <ul>
          <li><code>[parish_phone]</code></li>
          <li><code>[parish_email]</code></li>
          <li><code>[parish_church_address]</code></li>
          <li><code>[parish_office_address]</code></li>
          <li><code>[parish_office_hours]</code></li>
          <li><code>[parish_details]</code> <em>- <?php esc_html_e("inserts all the above details", "catholic-parish-wordpress-theme"); ?></em></li>
        </ul>
      </section>

      <hr />

      <section id="parish-theme-tips">
        <h2><?php esc_html_e("Helpful Tips", "catholic-parish-wordpress-theme"); ?></h2>

        <ul>
          <li><?php echo wp_kses_post(__("Set your site title, tagline and admin email under <strong>Settings → General</strong>", "catholic-parish-wordpress-theme")); ?></li>
          <li><?php esc_html_e("Disable comments if not required", "catholic-parish-wordpress-theme"); ?></li>
          <li><?php echo wp_kses_post(__("Use the <strong>Post name</strong> permalink structure", "catholic-parish-wordpress-theme")); ?></li>
          <li><?php esc_html_e("Preview pages before publishing", "catholic-parish-wordpress-theme"); ?></li>
          <li><?php esc_html_e("Archive pages automatically display posts from their corresponding custom post type", "catholic-parish-wordpress-theme"); ?></li>
          <li><?php echo wp_kses_post(__('If a page shows "404", navigate to <code>Settings → Permalinks</code> and click <strong>Save Changes</strong>.', "catholic-parish-wordpress-theme")); ?></li>
        </ul>
      </section>
    </main>

    <footer>
      <a href="https://github.com/jamiewilliamsxyz/catholic-parish-wordpress-theme" target="_blank" rel="noopener"><?php esc_html_e("Theme GitHub repository", "catholic-parish-wordpress-theme"); ?></a>
      <a href="https://github.com/jamiewilliamsxyz/catholic-parish-core" target="_blank" rel="noopener"><?php esc_html_e("Plugin GitHub repository", "catholic-parish-wordpress-theme"); ?></a>
    </footer>
  </div>
<?php
}
