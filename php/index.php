<?php
    session_start();
?>
<!DOCTYPE html>
<html  class="page" lang="ru">
  <head>
    <meta charset="utf-8">
    <title>Fast Hotels</title>
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link href="../css/style-importsss.css" rel="stylesheet">
  </head>
  <body class="page-login">
    <section class="login">
        <div class="login__wrapper">
            <h2>Личный кабинет</h2>
            <p class="modal-description">Введите пожалуйста свой логин и пароль</p>
            <form class="login__form" method="POST" action="verification.php">
            <p class="login__info">
                <label class="visually-hidden" for="login-login">Логин</label>
                <input class="login__icon-user" id="login-login" type="text" name="login" placeholder="qwerty" required>
            </p>

            <font color="red">
                <?php
                    echo $_SESSION['message'];
                    unset($_SESSION['message']);
                ?>
            </font>

            <p class="login__info" style="color: red;">
                <label class="visually-hidden" for="login-password">Пароль</label>
                <input class="login__icon-password" id="login-password" type="password" name="password" placeholder="••••••••" required>
            </p>

            <p>
                <button type="submit" class="button-light-blue login__button-login">Войти</button>

                <a href="login.php" class="button-brown login__button-regestration">Зарегистрироваться</a><br>
            </p>

            <?php
                echo session_id().'<br>';
                echo $_SESSION['login'];
            ?>
            </form>
            <!-- <button class="modal-close" type="button" aria-label="Закрыть"></button> -->
        
        </div>
    </section>   
  </body>
</html>
