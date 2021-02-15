<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <title>Fast Hotels</title>
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link href="../css/style-importsss.css" rel="stylesheet">
</head>

	
<body class="page-login">
	<section class="login">
		<div class="login__wrapper">
			<h2>Регистрация</h2>
			<p class="modal-description">Придумайте собственный логин и пароль</p>
			<form class="login__form" method="POST" action="reg.php">
				<p class="login__info">
					<label class="visually-hidden" for="login-login">Логин</label>
					<input class="login__icon-user" id="login-login" type="text" name="login" placeholder="qwerty">
				</p>
				<?php
						echo $_SESSION['message'];
						unset($_SESSION['message']);
				?>
				<p class="login__info">
					<label class="visually-hidden" for="login-password">Пароль</label>
					<input class="login__icon-password" id="login-password" type="password" name="password" placeholder="••••••••">
				</p>

				<p>
					<button class="button-brown login__button-regestration-reg" type="submit">Зарегистрироваться</button>

					<a href="index.php" class="button-light-blue login__button-login-reg">Войти</a><br>
				</p>

				<?php
						echo session_id().'<br>';
						echo $_SESSION['reg'];
				?>
			</form>
		</div>
	</section>   
</body>

</html>
