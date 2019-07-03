<?php
		session_start();
		header('Location: http://localhost/su/index.php');
		unset($_SESSION["studentLogin"]);
		unset($_SESSION["studentPassword"]);
		exit();
?>