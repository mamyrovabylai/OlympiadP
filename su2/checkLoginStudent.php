<?php
	session_start();
	require_once("functions.php");
	
	
	if(isset($_POST["loginButton"])){
		$login=trim(stripslashes(htmlspecialchars($_POST["login"])));
		$password=trim(stripslashes(htmlspecialchars($_POST["password"])));
		if(empty($login) || empty($password)) {header('Location: http://localhost/su/studentLogin.php?q=1');} 
		else {
			if(loginS($login,md5($password))){
				header('Location: student/index.php');
				$_SESSION["studentLogin"]=$login;
				$_SESSION["studentPassword"]=md5($password);
				
				exit();
			} else{
				header('Location: http://localhost/su/studentLogin.php?q=0');
			
				exit();
			}
		}
	}
	?>