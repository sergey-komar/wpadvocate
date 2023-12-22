<!DOCTYPE html>
<html lang="<?php language_attributes();?>">

<head>
  <meta charset="<?php bloginfo('charset')?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head();?>
</head>

<body>

  <header class="header">
    <div class="container">
      <div class="header__inner">
        <a href="/" class="logo">
          <img src="<?php echo get_template_directory_uri()?>/assets/images/logo.svg" alt="img">
        </a>
        <nav class="menu">
         
          <?php
            wp_nav_menu([
              'theme_location' => 'header-menu',
              'menu_class' => 'menu__list',
              'container' => ''
            ])
          ?>
        </nav>

        <div class="header__info">
          <a href="tel:88129870897" class="header__info-phone">8 812 987-08-97</a>
          <a href="mailto:info@drobotov.net" class="header__info-email">info@drobotov.net</a>
        </div>

        <div class="nav-icon">
          <div class="nav-icon__middle"></div>
        </div>
      </div>
    </div>
  </header>
  