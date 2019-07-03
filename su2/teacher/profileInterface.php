<html>
<head>
	<title> Profile</title>
	<meta charset="utf-8"/>
	<link rel="stylesheet" href="css/main.css" type="text/css"/>
</head>

<body>
		<?php
		include("header.html");
		include("underhead.html");
		require_once("functions.php");
		$mysqli=connect();
		if ($mysqli){
			$q="SELECT `id`,`name`,`email`,`subject`,`school`,`olympiads` FROM `teacherusers` WHERE `login`='".$_SESSION["teacherLogin"]."';";
			$result=$mysqli->query($q);
			$rows=$result->fetch_assoc();
			do{
				echo "Name: ".$rows["name"];
				echo "<br/> E-mail: ".$rows["email"];
				echo "<br/> Subject: ".$rows["subject"];
				echo "<br/> School: ".$rows["school"];
				$mass=explode(";",$rows["olympiads"]);
				echo "<br/> Olympiads: <ul>";
				$id=$rows["id"];
				foreach($mass as $elem){
					echo "<li> <a href=\"aboutOlympiad.php?q=".$elem."\"> $elem </a></li>";
				}
				echo "</ul>";
			} while ($rows=$result->fetch_assoc());
		}
	    
		?>
</body>

</html>