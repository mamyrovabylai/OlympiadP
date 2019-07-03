<?php
session_start();
require_once("functions.php");
if(isset($_SESSION["studentLogin"])|| isset($_SESSION["studentPassword"])){
if(loginS($_SESSION["studentLogin"],$_SESSION["studentPassword"])){
	header('Location: http://localhost/su/student'); exit();}
	} else 
if(isset($_SESSION["teacherLogin"])|| isset($_SESSION["teacherPassword"])){
if(loginT($_SESSION["teacherLogin"],$_SESSION["teacherPassword"])){
	header('Location: http://localhost/su/teacher'); exit(); }
} else{
	include("indexInterface.php");
}
?>
