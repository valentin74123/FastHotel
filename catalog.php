<!DOCTYPE html>
<html  class="page" lang="ru">
  <head>
    <meta charset="utf-8">
    <title>Fast Hotels</title>
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link href="css/style-importsss.css" rel="stylesheet">
  </head>
  <body class="page-body">

    <?php
      // require('php/bd.php');
      // $query = "SELECT * FROM hotels";
      // $where = "";
      // $hotels_types = array();
      // foreach (array('Гостиница', 'Хостел', 'Апартаменты') as $hotel_type){
      //   if ($_GET[$hotel_type]) $hotels_types[] = '"' . $hotel_type . '"';
      // }
      // if (count($hotels_types) > 0) $where = ' type IN (' . implode(',', $hotels_types) . ')';
      // if ($_GET['max-cost']) {
      //   if (strlen($where) > 0) $where .= " AND";
      //   $where =  $where . " price <= " . $_GET['max-cost'];
      // }
      // if ($_GET['min-cost']) {
      //   if (strlen($where) > 0) $where .= " AND";
      //   $where = $where . " price >=" . $_GET['min-cost'];
      // }
      // if (strlen($where) > 0) $query =  $query . ' WHERE' . $where;
      // $result = mysql_query($query);
      // $number_of_record = mysql_num_rows($result);

      // $min_price_query = (strlen($where) === 0) ? "SELECT MIN(price) AS min FROM hotels" : "SELECT MIN(price) AS min FROM hotels" . ' WHERE' . $where;
      // $max_price_query = (strlen($where) === 0) ? "SELECT MAX(price) AS max FROM hotels" : "SELECT MAX(price) AS max FROM hotels" . ' WHERE' . $where;
      // $min_price = mysql_query($min_price_query);
      // $max_price = mysql_query($max_price_query);
      // $min_cost = mysql_fetch_array($min_price);
      // $max_cost = mysql_fetch_array($max_price);
      // $min_cost = $min_cost['min'];
      // $max_cost = $max_cost['max'];
    ?>

    <header class="main-header">
      <nav class="main-header__navigation">
        <div class="main-header__wrapper">
          <ul class="main-header__site-navigation container">
            <a href="" class="main-header__logo"><img src="img/logo3.png" width="200" height="70" alt="Логотип"></a>
            <li><a href="index.php">Информация</a></li>
            <li><a href="">Отзывы</a></li>
            <li><a href="">Контакты</a></li>
            <li class="main-header__navigation--active"><a href="catalog.php">Гостиницы</a></li>
            <div class="main-header__user-navigation">
              <a class="main-header__login-link" href="login.html">Вход</a>
            </div>
          </ul>
        </div>
      </nav>
    </header>

    <main class="container">
      <section class="criterion">
       <h2 class="visually-hidden">Критерии жилья</h2>
       <form action="catalog.php" method="GET" class="criterion__form">
          <fieldset class="criterion__fieldset">
            <legend class="criterion__type">Тип жилья:</legend>
            <ul class="criterion__checkboxes">
              <li class="criterion__checkbox">
                <input class="visually-hidden criterion__input-checkbox" type="checkbox" id="filter-hotel" name="Гостиница" <?php if ($_GET['Гостиница'] == 'on') print('checked')?>>
                <label for="filter-hotel" class="criterion__label-checkbox">Гостиница</label>
              </li>
              <li class="criterion__checkbox">
                <input class="visually-hidden criterion__input-checkbox" type="checkbox" id="filter-motel" name="Хостел" <?php if ($_GET['Хостел'] == 'on') print('checked')?>>
                <label for="filter-motel" class="criterion__label-checkbox">Хостел</label>
              </li>
              <li class="criterion__checkbox">
                <input class="visually-hidden criterion__input-checkbox" type="checkbox" id="filter-apartments" name="Апартаменты" <?php if ($_GET['Апартаменты'] == 'on') print('checked')?>>
                <label for="filter-apartments" class="criterion__label-checkbox">Апартаменты</label>
              </li>
            </ul>
          </fieldset>
        <fieldset class="criterion__fieldset-days  criterion__fieldset">
          <legend  class="criterion__type">Стоимость в сутки (р):</legend>
            <div class="criterion__range-filter">
              <div class="criterion__price-controls">
                <div class="min">
                  <label class="min-cost" for="min-cost">От</label>
                  <input type="number" id="min-cost" name="min-cost" value="<?=$min_cost ?>">
                </div>
                <div>
                  <label class="max-cost" for="max-cost">До</label>
                  <input type="number" id="max-cost" name="max-cost" value=""> <?=$max_cost ?>
                </div>
              </div>
              <div class="range-controls">
                <div class="scale">
                  <div class="bar"></div>
                </div>
                <div class="toggle toggle-min"></div>
                <div class="toggle toggle-max"></div>
              </div>
            </div>
          <button type="submit" class="button-white criterion__show-button">Показать</button>
        </fieldset>
      </form>
      </section>

      <section class="search-filters">
        <div class="search-filters__filters">
          <div class="search-filters__search">
            <p class="search-filters__found">Найдено: <?= $number_of_record ?></p>

          </div>
          <div class="search-filters__buttons-up-down">
            <button class="search-filters__button-up-down"><svg xmlns="http://www.w3.org/2000/svg" width="11" height="10" viewBox="0 0 11 10"><path fill="#231F20" d="M5.5 0L0 10h11z"/></svg></button>
            <button class="search-filters__button-up-down search-filters__button-up-down-active"><svg xmlns="http://www.w3.org/2000/svg" width="11" height="10" viewBox="0 0 11 10"><path fill="#231F20" d="M5.5 10L0 0h11"/></svg></button>
          </div>
        </div>
      </section>

      <section>
        <ul class="hotels-list__selection">
          <?php
            //   while ($row = mysql_fetch_array($result)) {
            //     printf (
            //   '', $row['img'], $row['name'], $row['name'], $row['type'], $row['price'], $row['hotels-list__rating']);
            // }
          ?>
          <li class="hotels-list__hotel-all">
              <div class="hotels-list__hotel">
                <a href="" class="hotels-list__hotel-image"><img src="" width="135" height="90" alt="Гостиница"></a>
                <div class="hotels-list__main">
                  <div class="hotels-list__main-description">
                    <h3 class="visually-hidden">Название отеля</h3>
                    <a class="hotels-list__hotel-name" href="">Название отеля</a>
                    <p class="hotels-list__hotel-description">Тип</p>
                    <p class="hotels-list__hotel-description hotels-list__hotel-price">От 5000 р.</p>
                    <a href="" class="button-light-blue hotels-list__detail-button">Подробнее</a>
                    <button type="button" class="button-brown hotels-list__reservation-button">Забронировать</button>
                  </div>
                </div>
                  <div class="hotels-list__rating">
                    <p class="hotels-list__rating-text">Рейтинг: 9.1</p>
                  </div>
                </div>
              </div>
            </li>
        </ul>
      </section>
    </main>

    <footer  class="main-footer">
      <div class="container">
        <section class="main-footer__info">
          <b class="main-footer__hashtag">#Fasthotels</b>
          <b><a href="tel:+74956660166">Тел: +7 (499) 111-01-11</a></b>
        </section>
        <section>
          <ul class="main-footer__social-list">
            <li>
              <a class="main-footer__social-item" href="" >
                <span class="visually-hidden">Twitter</span>
                <svg width="17" height="15" viewBox="0 0 17 15">
                  <path fill="#FFF" d="M10.95.144c1.685-.496 2.984.27 3.577 1.179.673-.231 1.331-.481 2.011-.708a2.345 2.345 0 0 1-.857 1.768c.685.17 1.304-.491 1.304-.491-.169 1-1.006 1.788-1.563 2.024-.231 6.75-3.175 11.217-10.077 11.082h-.446c-.41 0-4.164-.46-4.898-1.887 2.271.196 3.893-.422 4.693-1.177-.96-.3-2.679-.477-2.979-2.95.349.106.564.228 1.19.119C1.705 8.247.374 7.53.448 5.33c.285.328 1.067.536 1.34.472C1.085 5.561-.182 2.442.894.85c1.818 1.854 3.735 3.606 7.152 3.773C8.254 2.33 9.183.793 10.95.144z"/>
                </svg>
              </a>
            </li>
            <li>
              <a class="main-footer__social-item" href="">
                <span class="visually-hidden">Facebook</span>
                <svg width="12" height="22" viewBox="0 0 12 22">
                  <path fill="#FFF" d="M12 4V0H8a4 4 0 0 0-4 4v4H0v4h4v10h4V12h4V8H8V4h4z"/>
                </svg>
              </a>
            </li>
            <li>
              <a class="main-footer__social-item" href="">
                <span class="visually-hidden">Youtube</span>
                <svg width="20" height="16" viewBox="0 0 20 16">
                  <path fill="#FFF" d="M17 0H3C1.35 0 0 1.35 0 3v10c0 1.65 1.35 3 3 3h14c1.65 0 3-1.35 3-3V3c0-1.65-1.35-3-3-3zM6.027 11.998V4.002L15.014 8l-8.987 3.998z"/>
                </svg>
              </a>
            </li>
          </ul>
        </section>
        <section class="main-footer__copyright">
          <p class="main-footer__website-by">Website by</p>
          <a class="main-footer__htmla-logo" href="">
              <img src="img/camel.svg">
          </a>
        </section>
      </div>
    </footer>

    <section class="section-login-form modal-login">
      <h2>Личный кабинет</h2>
      <p class="modal-description">Введите пожалуйста свой логин и пароль</p>
      <form class="login-form" action="php/testreg.php" method="post">
        <p class="login-info">
          <label class="visually-hidden" for="login-login">Логин</label>
          <input class="login-icon-user" id="login-login" type="text" name="login" placeholder="qwerty">
        </p>
        <!--**** В текстовое поле (name="login" type="text") пользователь вводит свой логин ***** -->
        <p class="login-info">
          <label class="visually-hidden" for="login-password">Пароль</label>
          <input class="login-icon-password" id="login-password" type="password" name="password" placeholder="••••••••">
        </p>
        <!--В поле для паролей (name="password" type="password") пользователь вводит свой пароль-->
        <p>
          <input class="button-light-blue button-log-in" type="submit" name="submit" value="Войти">
          <!-- Кнопка (type="submit") отправляет данные на страничку testreg.php -->

          <!--ссылка на регистрацию  -->
          <a href="php/reg.php" class="button-brown regestration">Регистрация</a>
        </p>
      </form>
      <button class="modal-close" type="button" aria-label="Закрыть"></button>
    </section>


  </body>
</html>