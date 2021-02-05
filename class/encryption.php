<?php
	class Data {
		public $salt;

		public function __construct() {
			$this->login = trim($_POST['login']);
			$this->password = $_POST['password'];
		}

		public function generateSalt() {
			$salt = bin2hex(random_bytes(10));
			$this->salt = $salt;
			return $salt;
		}

		public function encryption_bcrypt(string $password) {
			$option = ['cost' => 13];
			$password_bcrypt = password_hash($password, PASSWORD_BCRYPT, $option);
			$this->password_bcrypt = $password_bcrypt;
			return $password_bcrypt;
		}

		public function encryption_md5(string $salt, string $password) {
			$password_md5 = md5($password.$salt);
			$this->password_md5 = $password_md5;
			return $password_md5;
		}
	}
?>