<html>
<head>
<title>
Add olympiad
</title>
<meta charset="utf-8"/>
</head>
<body>
<?php
if(isset($_POST["addOlympiadButton"])) {
	$mysqli=connect();
	$ol=$_POST["addOlympiadButton"];
	$q="SELECT `your_olympiads` FROM `studentolympiads` WHERE `login`='$login'";
	$result=$mysqli->query($q);
	$rows=$result->fetch_assoc();
	$yourol=$rows["your_olympiads"];
	$mass=explode(";",$yourol);
	$bool=true;
	foreach($mass as $elem){
		if($elem==$ol){
			$bool=false;
			break;
		}
	}
	if($bool){
	$ool=$yourol.$ol.";";
	$q="UPDATE `studentolympiads` SET `your_olympiads`='$ool' WHERE `login`='$login';";
	$result=$mysqli->query($q);
	if($result->errno==0){
		echo "Вы успешно добавили в список ваших олимпиад!";
	} else {
		echo "Отказано!";
	}
	} else {echo "Вы уже записаны!";}
}
?>
</body>
</html>