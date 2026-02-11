<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="<?php bloginfo('charset'); ?>">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <header>
    <nav class="parish-navbar">
      <div class="parish-navbar-topbar">
        <?php
        if (has_custom_logo()) {
          the_custom_logo();
        } else {
        ?>
          <a href="<?php echo esc_url(home_url("/")); ?>">
            <?php bloginfo("name") ?>
          </a>
        <?php
        }
        ?>

        <button aria-expanded="false" id="parishMenuToggle" class="parish-navbar-menu-icon" aria-label="Open menu">
          <?php
          echo file_get_contents(get_template_directory() .
            "/assets/icons/parish-menu-icon-closed.svg");
          ?>

          <?php
          echo file_get_contents(get_template_directory() .
            "/assets/icons/parish-menu-icon-opened.svg");
          ?>
        </button>
      </div>

      <?php
      wp_nav_menu(
        array(
          "menu_class" => "parish-navbar-menu",
          "container_class" => "parish-navbar-menu-container",
          "container_id" => "parishNavbarMenuContainer",
          "theme_location" => "parish-navbar-menu"
        )
      );
      ?>
    </nav>
  </header>

  <div id="parishMenuBackdrop" class="parish-menu-backdrop" hidden></div>
  <div id="parishContentContainer" class="parish-content-container">