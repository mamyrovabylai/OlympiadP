<?php
require_once("functions.php");
$mysqli=connect();
$q="SELECT `questions` FROM `olympiads` WHERE `name`='Информационные технологии'";
$result=$mysqli->query($q);
$rows=$result->fetch_assoc();
$mass=explode(";",$rows["questions"]);
foreach($mass as $elem){
	echo $elem."<br/>";
}