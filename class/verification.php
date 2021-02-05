<?php
    class Verify {

        public $authorization;
        public $salt;
        public $password_md5;
		public $password_bcrypt;
        public $password_md5_authorization;

        public function __construct() {
            $this->login = $_POST['login'];
            $this->password = $_POST['password'];
        }

        public function getInfo($authorization) {
            $password_md5 = $authorization[0]['password_md5'];
            $this->password_md5 = $password_md5;

            $salt = $authorization[0]['salt'];
            $this->salt = $salt;

            $password_bcrypt = $authorization[0]['password_bcrypt'];
            $this->password_bcrypt = $password_bcrypt;
        }

        public function verification(string $password, string $salt, string $password_md5, string $password_bcrypt, string $login) {
            $password_md5_authorization = md5($password.$salt);

            if ($password_md5 === $password_md5_authorization && password_verify($password, $password_bcrypt)) {
                $_SESSION['reg'] = $login;
                $_SESSION['user'] = "<b>$login</b> <a href='index.php'>Выйти</a><br>".$_SESSION['reg'];
                header("Location: index.php");
            } else {
                $_SESSION['message'] = 'Неверный логин или пароль.<br>';
                header("Location: index.php");
            }
        }
    }
?>
