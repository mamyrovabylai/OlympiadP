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
function insert($name,$email,$login,$password){
	$mysqli=connect();
	if(!$mysqli){ return false;} else{
	$q="INSERT INTO `studentusers` (`name` ,
`login` ,
`passwords` ,
`email`,`school`) VALUES ('$name','$login','$password','$email','Не указано');";
	$mysqli->query($q);
$q="INSERT INTO `studentolympiads` (`login`) VALUES ('$login');";
$mysqli->query($q);	
	return true;
	}
}
function check($login,$email){
	$mysqli=connect();
	if(!$mysqli){echo "Acces denied";} else{
		$q="SELECT email FROM studentusers WHERE login='$login';";
		$result=$mysqli->query($q);
		$q="SELECT login FROM studentusers WHERE email='$email';";
		$result2=$mysqli->query($q);
		if(($result->num_rows==1)){
			return 0;
		} else if($result2->num_rows==1){
			return 1;
		} else{
			return 2;
		}
	}
}
if(isset($_POST["signupSubmit"])){
		$name=trim(stripslashes(htmlspecialchars($_POST["signupName"])));
		$second_name=trim(stripslashes(htmlspecialchars($_POST["signupSecondName"])));
		$email=trim(stripslashes(htmlspecialchars($_POST["email"])));
		$login=trim(stripslashes(htmlspecialchars($_POST["signupLogin"])));
		$password=trim(stripslashes(htmlspecialchars($_POST["signupPassword"])));
		$passwordAgain=trim(stripslashes(htmlspecialchars($_POST["signupPasswordAgain"])));
		if(empty($name) ||
		empty($second_name) ||
		empty($email) ||
		empty($login) ||
		empty($password) ||
		empty($passwordAgain) )
		{  echo "Some edit is empty!";}
	else {
		if($password!=$passwordAgain) {echo "Password!=PasswordAgain";} else{
				$bool=check($login,$email);
				if($bool==0){ echo "Same login exists!";
				} else if ($bool==1)  { echo "Same e-mail exists !";}
				else{
					$name=$second_name." ".$name;
					$bool=insert($name,$email,$login,md5($password));
					
					if($bool){
					header('Location: studentLogin.php');
					exit();
					}	else {
							echo "Acces denied";
						}
				}
		}
	}
}
?>