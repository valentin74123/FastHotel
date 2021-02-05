<?php
    session_start();
?>
<!DOCTYPE html>
<html  class="page" lang="ru">
  <head>
    <meta charset="utf-8">
    <title>Fast Hotels</title>
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans:wght@400;700&display=swap" rel="stylesheet">
    <!-- <link href="css/normalize.css" rel="stylesheet"> -->
    <link href="css/style-importsss.css" rel="stylesheet">
  </head>
  <body class="page-body">

    <header class="main-header">
      <nav class="main-header__navigation">

        <div class="main-header__wrapper">
          <ul class="main-header__site-navigation container">
            <a href="" class="main-header__logo"><img src="img/logo3.png" width="200" height="70" alt="Логотип"></a>
            <li class="main-header__navigation--active"><a href="index.php">Информация</a></li>
            <li><a href="">Отзывы</a></li>
            <li><a href="">Контакты</a></li>
            <li><a href="catalog.php">Гостиницы</a></li>
            <div class="main-header__user-navigation">
              <a class="main-header__login-link" href="login.html">Вход</a>
              <?php
                echo $_SESSION['user'];
              ?>
            </div>
          </ul>
        </div>
      </nav>
    </header>

    <main class="container">
      <article class="fasthotels__image-bg"><img class="fasthotels__img" src="img/logo2.png" width="400" alt=""></article>
      <h1 class="visually-hidden">FastHotels</h1>
      <section class="fasthotels">
        <h2 class="fasthotels__description">Fast Hotels - лучший гостиничный сервис для поиска гостиниц во всем Челябинске!</h2>
        <p class="fasthotels__description-text">Рассмотрим несколько причин, по которым Fast Hotels лучше, чем остальные!</p>
      </section>
      <section class="reasons">
        <ul class="reasons__list">
          <li>
            <article class="reasons__reason">
              <div class="reasons__resons-text">
                <h3 class="text-h3 reasons__resons-text-h3">Выгодные предложения</h3>
                <p class="reasons__resons-text-p reasons__resons-text-p-first">У нас особые договоренности с лучшими отелями в Челябинске. И они предоставляют нам самые низкие цены. А мы делимся с вами!</p>
              </div>
              <div class="reasons__photo-chelyabinsk">
                <a href="">
                  <img src="img/city-sedona.jpg" width="800" height="256" alt="Город Седона">
                </a>
              </div>
            </article>
          </li>

          <li>
            <ul class="reasons__about-fasthotels">
              <li>
                <img src="img/icon-house.svg" alt="Жильё" width="75" height="72" class="reasons__about-fasthotels-svg">
                <h3 class="text-h3">Выбирайте лучшее</h3>
                <p class="reasons__about-fasthotels-p">Более 1 млн гостиниц, отелей, апартаментов на любой вкус и кошелёк</p>
              </li>

              <li>
                <img src="img/payment.svg" alt="Сувениры" width="64" height="77" class="reasons__about-fasthotels-svg reasons__about-fasthotels-svg-third">
                <h3 class="text-h3">Не переплачивайте</h3>
                <p class="reasons__about-fasthotels-p">У нас гарантированно честные и выгодные цены: без комиссий и скрытых платежей, все налоги включены</p>
              </li>

              <li>
                <img src="img/review.svg" alt="Еда" width="75" height="70" class="reasons__about-fasthotels-svg">
                <h3 class="text-h3">Достоверные отзывы</h3>
                <p class="reasons__about-fasthotels-p">Мы собираем и публикуем отзывы путешественников, а также добавляем отзывы TripAdvisor. Так вы получаете ещё больше информации об отеле</p>
              </li>
            </ul>
          </li>

          <li>
            <article class="reasons__reason second-reasons__reason">
              <div class="reasons__photo-chelyabinsk">
                <a href="">
                  <img src="img/bridge.jpg" width="800" height="256" alt="Мост дьявола">
                </a>
              </div>
              <div class="reasons__resons-text">
                <h3 class="text-h3 reasons__resons-text-h3">Знайте об отеле всё</h3>
                <p class="reasons__resons-text-p reasons__resons-text-p-second">Рейтинг на основе настоящих отзывов гостей, год постройки и последнего ремонта, реальные фотографии от постояльцев</p>
              </div>
            </article>
          </li>
        </ul>
      </section>

      <section class="alleged-dates">
        <article class="alleged-dates__text">
          <p class="alleged-dates__interested-in">Заинтересовались?</p>
          <p>Укажите предполагаемые даты поездки, и мы покажем вам лучщие предложения гостиниц в Челябинске</p>
        </article>
        <div class="search-hotels">

          <button class="button-brown button-interested-in">Поиск гостиницы</button>

          <section class="modal modal-date section-date-form">
            <h2 class="visually-hidden">Поиск гостиницы в Седоне</h2>
            <form class="date-form" action="https://echo.htmlacademy.ru" method="POST">
              <article class="date-item">
                <label for="arrival-date">Дата заезда:</label>
                <div class="calendar-date">
                  <input class="search-arrival-date" type="text" id="arrival-date" name="arrival-date" placeholder="24 Апреля 2017">
                  <button type=button class="calendar-button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="21" height="22" viewBox="0 0 21 22">
                      <path d="M19.251 2.025h-2.845V.648c0-.381-.294-.689-.656-.689-.363 0-.656.308-.656.689v1.377h-3.938V.648c0-.381-.294-.689-.655-.689-.363 0-.657.308-.657.689v1.377H5.906V.648c0-.381-.294-.689-.656-.689-.363 0-.657.308-.657.689v1.377H1.75C.784 2.025 0 2.847 0 3.862v16.302C0 21.179.784 22 1.75 22h17.501c.966 0 1.749-.821 1.749-1.836V3.862c0-1.015-.783-1.837-1.749-1.837zm.437 18.139a.448.448 0 0 1-.437.459H1.75a.45.45 0 0 1-.438-.459V3.862a.45.45 0 0 1 .438-.459h2.844v1.378c0 .381.294.689.657.689.362 0 .656-.308.656-.689V3.403h3.938v1.378c0 .381.294.689.657.689.361 0 .655-.308.655-.689V3.403h3.938v1.378c0 .381.293.689.656.689.362 0 .656-.308.656-.689V3.403h2.845c.241 0 .437.206.437.459v16.302z"/><path d="M4.594 8.225h2.625v2.066H4.594zM4.594 11.668h2.625v2.067H4.594zM4.594 15.112h2.625v2.066H4.594zM9.188 15.112h2.625v2.066H9.188zM9.188 11.668h2.625v2.067H9.188zM9.188 8.225h2.625v2.066H9.188zM13.781 15.112h2.625v2.066h-2.625zM13.781 11.668h2.625v2.067h-2.625zM13.781 8.225h2.625v2.066h-2.625z"/>
                    </svg>
                  </button>
                </div>
              </article>
              <article class="date-item">
                <label for="departure-date">Дата выезда:</label>
                <div class="calendar-date">
                  <input class="search-departure-date"  type="text" id="departure-date" name="departure-date" placeholder="4 Июля 2017">
                  <button type=button class="calendar-button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="21" height="22" viewBox="0 0 21 22">
                      <path d="M19.251 2.025h-2.845V.648c0-.381-.294-.689-.656-.689-.363 0-.656.308-.656.689v1.377h-3.938V.648c0-.381-.294-.689-.655-.689-.363 0-.657.308-.657.689v1.377H5.906V.648c0-.381-.294-.689-.656-.689-.363 0-.657.308-.657.689v1.377H1.75C.784 2.025 0 2.847 0 3.862v16.302C0 21.179.784 22 1.75 22h17.501c.966 0 1.749-.821 1.749-1.836V3.862c0-1.015-.783-1.837-1.749-1.837zm.437 18.139a.448.448 0 0 1-.437.459H1.75a.45.45 0 0 1-.438-.459V3.862a.45.45 0 0 1 .438-.459h2.844v1.378c0 .381.294.689.657.689.362 0 .656-.308.656-.689V3.403h3.938v1.378c0 .381.294.689.657.689.361 0 .655-.308.655-.689V3.403h3.938v1.378c0 .381.293.689.656.689.362 0 .656-.308.656-.689V3.403h2.845c.241 0 .437.206.437.459v16.302z"/><path d="M4.594 8.225h2.625v2.066H4.594zM4.594 11.668h2.625v2.067H4.594zM4.594 15.112h2.625v2.066H4.594zM9.188 15.112h2.625v2.066H9.188zM9.188 11.668h2.625v2.067H9.188zM9.188 8.225h2.625v2.066H9.188zM13.781 15.112h2.625v2.066h-2.625zM13.781 11.668h2.625v2.067h-2.625zM13.781 8.225h2.625v2.066h-2.625z"/></svg>
                  </button>
                </div>
              </article>
              <article class="date-item">
                <label for="adults">Взрослые:</label>
                <div class="number-of-people">
                  <button class="button-minus" type="button">
                    <span class="visually-hidden">-</span>
                  </button>
                  <input type="number" id="adults" name="adults" min="1" value="1">
                  <button class="button-plus" type="button">
                    <span class="visually-hidden">+</span>
                  </button>
                </div>
                <label for="children">Дети:</label>
                <div class="number-of-people">
                  <button class="button-minus" type="button">
                    <span class="visually-hidden">-</span>
                  </button>
                  <input type="number" id="children" name="children" min="0" value="0">
                  <button class="button-plus" type="button">
                    <span class="visually-hidden">+</span>
                  </button>
                </div>
              </article>
              <button class="button-light-blue button-light-blue-search" type="submit">
                <span class="search-text">Найти</span>
              </button>
            </form>
          </section>
        </div>
      </section>

      <section class="section-map">
        <h2 class="visually-hidden">Карта</h2>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d145899.63940781192!2d61.29318999967121!3d55.15384565116218!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x43c592cb104a3a8d%3A0xef224a2a6d1711bf!2z0KfQtdC70Y_QsdC40L3RgdC6LCDQp9C10LvRj9Cx0LjQvdGB0LrQsNGPINC-0LHQuy4!5e0!3m2!1sru!2sru!4v1593275123666!5m2!1sru!2sru"
        width="1199" height="594" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0" title="Карта"></iframe>
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
      <form class="login-form" method="POST" action="verification.php">
        <p class="login-info">
          <label class="visually-hidden" for="login-login">Логин</label>
          <input class="login-icon-user" id="login-login" type="text" name="login" placeholder="qwerty" required>
        </p>

        <font color="red">
    			<?php
    				echo $_SESSION['message'];
    				unset($_SESSION['message']);
    			?>
    		</font>

        <p class="login-info">
          <label class="visually-hidden" for="login-password">Пароль</label>
          <input class="login-icon-password" id="login-password" type="password" name="password" placeholder="••••••••" required>
        </p>

        <p>
          <button type="submit" class="button-light-blue button-log-in">Войти</button>

          <a href="login.php" class="button-brown regestration">Зарегистрироваться</a><br>
        </p>

        <?php
            echo session_id().'<br>';
            echo $_SESSION['login'];
        ?>
      </form>
      <button class="modal-close" type="button" aria-label="Закрыть"></button>
    </section>


    <script src="js/search-hotel.js"></script>

  </body>
</html>
