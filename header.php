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
          <ul class="menu__list">
            <li>
              <a href="./services.html" class="menu__list-link--active">Услуги</a>
              <ul class="sub-menu">
                <li><a href="#">Первая</a></li>
                <li><a href="#">Вторая</a></li>
                <li><a href="#">Третья</a></li>
                <li><a href="#">Четвёртая</a></li>
              </ul>
            </li>
            <li>
              <a href="./victory.html">Победы</a>
            </li>
            <li>
              <a href="./media.html">МЫ В СМИ</a>
            </li>
            <li>
              <a href="#">О нас</a>
              <ul class="sub-menu">
                <li><a href="#">Первая</a></li>
                <li><a href="#">Вторая</a></li>
                <li><a href="#">Третья</a></li>
                <li><a href="#">Четвёртая</a></li>
              </ul>
            </li>
            <li>
              <a href="./contact.html">Контакты</a>
            </li>
          </ul>
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
  