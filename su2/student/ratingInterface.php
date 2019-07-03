<html>
<head>
	<title> Rating</title>
	<meta charset="utf-8"/>
	<link rel="stylesheet" href="css/rating.css" type="text/css"/>
</head>

<body>
		<?php
		include("header.html");
		include("underhead.html");
		echo "<div class=\"main\">";
	    require_once("functions.php");
		$mysqli=connect();
		if ($mysqli){
			if(!isset($_POST["searchStudent"]) || !isset($_POST["searchStudentButton"]) ){
			$q="SELECT `name`,`login` FROM `studentusers`";
			} else {$q="SELECT `name`,`login` FROM `studentusers` WHERE `name` LIKE '%".$_POST["searchStudent"]."%';";}
			$result=$mysqli->query($q);
			echo '<form method="POST" class="ratingForm"> <input type="text" class="ratingFormEdit" name="searchStudent" size="45%" placeholder="Введите имя ученика"/> <input class="ratingFormButton" type="submit" name="searchStudentButton" value="Поиск"/> </form>';
			if($result->num_rows==0){ echo "<span>Таких учеников нет!</span>";} else{
				echo "<ul class=\"list\" />";
			$rows=$result->fetch_assoc();
			do{
				echo "<li class=\"listElem\"><a href=\"studentRate.php?q=".$rows["login"]."\">".$rows["name"]." </a></li> <br/><br/> " ;
			} while($rows=$result->fetch_assoc());
			echo "</ul>";
		}
		}
		echo "</div>";	
		include("footer.html");
		?>
</body>
<div class="bottom">

</div>
</html>