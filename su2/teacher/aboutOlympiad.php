<?php
session_start();
require_once("functions.php");
	
if(isset($_SESSION["teacherLogin"])|| isset($_SESSION["teacherPassword"]) ){
 if(loginT($_SESSION["teacherLogin"],$_SESSION["teacherPassword"])){
	$login=$_SESSION["teacherLogin"];
	$password=$_SESSION["teacherPassword"];
	include("aboutOlympiadInterface.php");
 }
} else {
	header('Location: http://localhost/su/teacherLogin.php?q=0');
	exit();
}