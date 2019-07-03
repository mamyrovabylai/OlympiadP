<html>
<head>
<title> Олимпиада</title>
<meta charset="utf-8"/>
	<link rel="stylesheet" href="css/inform.css" type="text/css"/>
</head>

<body>
<?php include("header.html"); ?>
<div class="main">
<?php 
		$name=trim(stripslashes(htmlspecialchars($_GET["q"])));
	   require_once("functions.php");
		$mysqli=connect();
		$now=date("Y-m-d H:i:s");
		if ($mysqli){
			$q="SELECT `subject`,`teacher`,`time_start`,`time_end`,`description`,`first_place`,`second_place`,`third_place` FROM `olympiads` WHERE `name`='".$name."';";
			$result=$mysqli->query($q);
			if($result->num_rows==1){
			$rows=$result->fetch_assoc();
			echo "Название олимпиады :".$name."<br/><br/>";
			echo "Предмет : ".$rows["subject"]."<br/><br/>";
			echo "Создатель олимпиады : ".$rows["teacher"]."<br/><br/>";
			echo "Про олимпиаду : ".$rows["description"]."<br/><br/>";
			echo "Начало : ".date('H:i j F',strtotime($rows["time_start"]))."<br/><br/>";
			echo "Завершение : ".date('H:i j F',strtotime($rows["time_end"]))."<br/><br/>";
			if($now>$rows["time_end"]){
			echo "Золото занял(и) : ".$rows["first_place"]."<br/><br/>";
			echo "Серебро занял(и) : ".$rows["second_place"]."<br/><br/>";
			echo "Бронзу занял(и) : ".$rows["third_place"]."<br/>";
			} else {
				
				echo '<form action="addOlympiad.php" method="POST">
				<button type="submit" name="addOlympiadButton" value="'.$name.'"> Принять участие в олимпиаде</button>
				</form>';
			}
			} else { echo "Такой олимпиады нет!";}
		}
	?>
<button style="float:right;" id="link"><a id="link" href="index.php" ><= Назад</a></button><br/>
</div><br/>
<?php
include("footer.html");
?>
<br/>
</body>

</html>