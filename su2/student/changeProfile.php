<?php
session_start();
require_once("functions.php");
	
if(isset($_SESSION["studentLogin"])|| isset($_SESSION["studentPassword"]) ){
 if(loginS($_SESSION["studentLogin"],$_SESSION["studentPassword"])){
	$login=$_SESSION["studentLogin"];
	$password=$_SESSION["studentPassword"];
		
		$mysqli=connect();
		
			$q="SELECT `name`,`email`,`school`,`photo`,`grade` FROM `studentusers` WHERE `login`='$login';";
		$result=$mysqli->query($q);
		$rows=$result->fetch_assoc();
		

		$name=$rows["name"];
		$email=$rows["email"];
		$school=$rows["school"];
		$grade=$rows["grade"];
		$new_login=trim(stripslashes(htmlspecialchars($_POST["login"])));
		$new_name=trim(stripslashes(htmlspecialchars($_POST["name"])));
		$new_email=trim(stripslashes(htmlspecialchars($_POST["email"])));
		$new_school=trim(stripslashes(htmlspecialchars($_POST["school"])));
		$new_grade=(int)trim(stripslashes(htmlspecialchars($_POST["grade"])));
		
		update("name",$new_name,$name,$mysqli,$login);
		update("school",$new_school,$school,$mysqli,$login);
		if($new_grade<13&&$new_grade>4){
		update("grade",$new_grade,$grade,$mysqli,$login);
		}
		
		updates("email",$new_email,$email,$mysqli,$login);
		updates("login",$new_login,$login,$mysqli,$login);
				
	
 }
} else {
	header('Location: http://localhost/su/studentLogin.php?q=0');
	exit();
}
?>