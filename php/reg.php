<?php
	session_start();
	require_once 'class/connect.php';
	require_once 'class/encryption.php';


	$db = new Connect();
	$user = new Data();

	$login = $user->login;

	$verify_login = $db->makeQueryValues("SELECT * FROM `reg` WHERE `login` = ?;", $login);

	if (count($verify_login) >= 1) {
		$_SESSION['message'] = 'Логин занят, придумай др!';
		header("Location: index.php");
	}

	$password = $user->password;
	$salt = $user->generateSalt();
	$password_bcrypt = $user->encryption_bcrypt($password);
	$password_md5 = $user->encryption_md5($salt, $password);

	$values = array('login' => $login, 'password_md5' => $password_md5, 'salt' => $salt,
		'password_bcrypt' => $password_bcrypt);

	$new_user = $db->insert('reg', $values);

	header("Location: index.php");
?>
