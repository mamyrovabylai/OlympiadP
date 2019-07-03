<?php
function connect(){
	$mysqli= new mysqli(
	"localhost",
	"mamyrov.abylai",
	"4588hkE",
	"id840574_zakaz"
	);
	if($mysqli->errno!=0){
		return false;
	} else return $mysqli;
}

function update($x,$y,$constemail){
	$mysqli=connect();
	if(!$mysqli){echo "Acces denied";} else{
		$q="SELECT `login` FROM `teacherusers` WHERE `email`='$constemail'";
		$result=$mysqli->query($q);
		if($result->num_rows==0){echo "Таких пользователей нет!<br/>" ;}  else{
			$rows=$result->fetch_assoc();
			$q="UPDATE teacherusers SET $x='$y' WHERE email='$constemail';";
			$mysqli->query($q);
			echo $rows["login"]."'s $x was updated<br/>";
		}
	}
}






if(isset($_POST["updateButton"])){
	$constemail=trim(stripslashes(htmlspecialchars($_POST["email"])));
	if(isset($_POST["loginCheck"])){
		$login=trim(stripslashes(htmlspecialchars($_POST["newLogin"])));
		if(empty($login)){ echo " Password поле не заполнено!";} else {
		update("login",$login,$constemail);}
	}
	if(isset($_POST["passwordCheck"])){
		$password=trim(stripslashes(htmlspecialchars($_POST["newPassword"])));
		$p=trim(stripslashes(htmlspecialchars($_POST["newPasswordAgain"])));
		if($password==$p){
			if(empty($password)){ echo "Password поле не заполнено!";} else {
			update("passwords",md5($password),$constemail);}
		} else{echo "p!=password";}
		
	}
	if(isset($_POST["subjectCheck"])){
		$subject=trim(stripslashes(htmlspecialchars($_POST["newSubject"])));
		if(empty($subject)){ echo "Subject поле не заполнено!";} else {
		update("subject",$subject,$constemail);}
	}
	if(isset($_POST["emailCheck"])){
		$email=trim(stripslashes(htmlspecialchars($_POST["newEmail"])));
		if(empty($email)){ echo "E-mail поле не заполнено!";} else {
		update("email",$email,$constemail);
		}
	}
}


?>