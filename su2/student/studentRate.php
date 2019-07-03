<?php
session_start();
require_once("functions.php");
	
if(isset($_SESSION["studentLogin"])|| isset($_SESSION["studentPassword"]) ){
 if(loginS($_SESSION["studentLogin"],$_SESSION["studentPassword"])){
	$login=$_SESSION["studentLogin"];
	$password=$_SESSION["studentPassword"];
	include("studentRateInterface.php");
 }
} else {
	header('Location: http://localhost/su/studentLogin.php?q=0');
	exit();
}
?>