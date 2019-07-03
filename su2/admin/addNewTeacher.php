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
function insert($name,$second_name,$email,$login,$password,$subject,$school){
	$mysqli=connect();
	if(!$mysqli){echo "access denied"; return false;} else{
	$q="INSERT INTO teacherusers (`name` ,
`second_name` ,
`login` ,
`passwords` ,
`email` ,
`subject`,`school`) VALUES ('$name','$second_name','$login','$password','$email','$subject','$school');";
	$mysqli->query($q);	
	return true;
	}
}
function check($login){
	$mysqli=connect();
	if(!$mysqli){echo "Acces denied";} else{
		$q="SELECT `id` FROM teacherusers WHERE `login`='$login';";
		$result=$mysqli->query($q);
		if($result->num_rows==1){
			return false;
		} else{
			return true;
		}
	}
}
function check2($email){
	$mysqli=connect();
	if(!$mysqli){echo "Acces denied";} else{
		$q="SELECT `id` FROM teacherusers WHERE `email`='$email';";
		$result=$mysqli->query($q);
		if($result->num_rows==1){
			return false;
		} else{
			return true;
		}
	}
}


if(isset($_POST["signupTeacherButton"])){
		$name=trim(stripslashes(htmlspecialchars($_POST["signupName"])));
		$second_name=trim(stripslashes(htmlspecialchars($_POST["signupSecondName"])));
		$email=trim(stripslashes(htmlspecialchars($_POST["email"])));
		$login=trim(stripslashes(htmlspecialchars($_POST["signupLogin"])));
		$password=trim(stripslashes(htmlspecialchars($_POST["signupPassword"])));
		$passwordAgain=trim(stripslashes(htmlspecialchars($_POST["signupPasswordAgain"])));
		$subject=trim(stripslashes(htmlspecialchars($_POST["signupSubject"])));
		$school=trim(stripslashes(htmlspecialchars($_POST["signupSchool"])));
		if(empty($name) ||
		empty($second_name) ||
		empty($email) ||
		empty($login) ||
		empty($password) ||
		empty($passwordAgain)||
		empty($subject)||
		empty($school)  ) 
		{  echo "Some edit is empty!";} else {
			if($password!=$passwordAgain) {echo "Password!=PasswordAgain";} else{
				$bool=check($login);
				$bool2=check2($email);
				if(($bool)&&($bool2)){
					$bool=insert($name,$second_name,$email,$login,md5($password),$subject,$school);
					if($bool){
					echo "Registration completed!<br/>";
					} else {
					echo "Acces denied";
					}
				} else if (!$bool2){echo "Same email exists!";} 
				else{echo "Same login exists!";}
			}
		}
	}
	


echo "<a href=\"index.php\"> Go to the main page </a>";
?>