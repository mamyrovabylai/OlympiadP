<?php
		session_start();
		header('Location: http://localhost/su/index.php');
		unset($_SESSION["teacherLogin"]);
		unset($_SESSION["teacherPassword"]);
		exit();
?>