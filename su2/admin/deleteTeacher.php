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

function deleteTeacher($email){
	$mysqli=connect();
	if(!$mysqli){echo "Acces denied";} else{
		$q="SELECT `login` FROM `teacherusers` WHERE `email`='$email'";
		$result=$mysqli->query($q);
		if($result->num_rows==0){echo "Таких пользователей нет!<br/>" ;} else{
			$rows=$result->fetch_assoc();
			$q="DELETE FROM teacherusers WHERE email='$email';";
			$mysqli->query($q);
			echo $rows["login"]." was deleted!<br/>";
			
		}
	}
}


if(isset($_POST["deleteButton"])){
	$email=trim(stripslashes(htmlspecialchars($_POST["email"])));
		deleteTeacher($email);
}
echo "<a href=\"index.php\"> Go to the main page </a>";
?>