<?php
	session_start();
    require_once 'class/connect.php';
    require_once 'class/verification.php';
    
    $db = new Connect();
    $verify = new Verify();
    
	$login = $verify->login;
	$password = $verify->password;

	$authorization = $db->makeQueryValues("SELECT * FROM `reg` WHERE `login` = ?;", $login);
	if (!$authorization[0]) {
		$_SESSION['message'] = 'Неверный логин!<br>';
		header("Location: index.php");
	}
	
	$verify->getInfo($authorization);
	$salt = $verify->salt;
	$password_md5 = $verify->password_md5;
	$password_bcrypt = $verify->password_bcrypt;


	$verify->verification($password, $salt, $password_md5, $password_bcrypt, $login);
?>