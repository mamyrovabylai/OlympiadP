<html>

<head>
	<title> Rating</title>
	<meta charset="utf-8"/>
	<link rel="stylesheet" href="css/rating.css" type="text/css"/>
</head>

<body>
		<?php
		
		$login=trim(stripslashes(htmlspecialchars($_GET["q"])));
	    require_once("functions.php");
		$mysqli=connect();
		if ($mysqli){
			$q="SELECT `name` FROM `studentusers` WHERE `login`='$login';";
			$result=$mysqli->query($q);
			
			
			if($result->num_rows>0){
				$q2="SELECT `firstplaces`,`secondplaces`,`thirdplaces` FROM `studentolympiads` WHERE `login`='$login';";
				$result2=$mysqli->query($q2);
				$rows=$result->fetch_assoc();
			$rows2=$result2->fetch_assoc();
				echo $rows["name"];
				
					$mass=explode(";",$rows2["firstplaces"]);	
					echo "<br/> First Places: <ul>";
					foreach($mass as $elem){
						echo "<li> <a href=\"aboutOlympiad.php?q=".$elem."\"> $elem </a></li>";
					}
					echo "</ul>";
					
				
				
					$mass=explode(";",$rows2["secondplaces"]);
					echo "<br/> Second Places: <ul>";
					foreach($mass as $elem){
						echo "<li> <a href=\"aboutOlympiad.php?q=".$elem."\"> $elem </a></li>";
					}
					echo "</ul>";
				
				
					$mass=explode(";",$rows2["thirdplaces"]);
					echo "<br/> Third Places: <ul>";
					foreach($mass as $elem){
						echo "<li> <a href=\"aboutOlympiad.php?q=".$elem."\"> $elem </a></li>";
					}
					echo "</ul>";
					
				
			} else {echo "Таких учеников нет!";}	
		}
		?>
		<a href="aboutOlympiad.php?q="> 
</body>

</html>