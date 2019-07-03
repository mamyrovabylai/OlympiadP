<?php
	session_start();
	require_once("functions.php");
	
	
	if(isset($_POST["loginButton"])){
		$login=trim(stripslashes(htmlspecialchars($_POST["login"])));
		$password=trim(stripslashes(htmlspecialchars($_POST["password"])));
		if(empty($login) || empty($password)) {header('Location: http://localhost/su/teacherLogin.php?q=1'); } 
		else {
			if(loginT($login,md5($password))){
				header('Location: teacher/index.php');
				$_SESSION["teacherLogin"]=$login;
				$_SESSION["teacherPassword"]=md5($password);
				exit();
			} else {
				header('Location: http://localhost/su/teacherLogin.php?q=0');
				exit();
			}
		}
	}
	?>