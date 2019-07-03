<?php
if(isset($_POST["name"])){
	$name=$_POST["name"];
	echo "Олимпиада - ".$name."<br/>";
	$mysqli=connect();
	$q="SELECT `questions` FROM `olympiads` WHERE `name`='$name';";
	$result=$mysqli->query($q);
	$rows=$result->fetch_assoc();
	$mass=explode(";",$rows["questions"]);
	foreach($mass as $elem){
		echo $elem."<br/>";
	}
}

?>