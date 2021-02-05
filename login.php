<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Авторизация</title>
	<meta charset="utf-8">
</head>
<body>
	



	<form class="login-form" method="POST" action="reg.php">
		<p class="login-info">
			<label class="visually-hidden" for="login-login">Логин</label>
			<input class="login-icon-user" id="login-login" type="text" name="login" placeholder="qwerty">
		</p>
		<?php
				echo $_SESSION['message'];
				unset($_SESSION['message']);
		?>
		<p class="login-info">
			<label class="visually-hidden" for="login-password">Пароль</label>
			<input class="login-icon-password" id="login-password" type="password" name="password" placeholder="••••••••">
		</p>

		<p>
			<button class="button-brown regestration" type="submit">Зарегистрироваться</button>

			<a href="index.php" class="button-light-blue button-log-in">Войти</a><br>
		</p>

		<?php
				echo session_id().'<br>';
				echo $_SESSION['reg'];
		?>
	</form>
</body>
</html>
