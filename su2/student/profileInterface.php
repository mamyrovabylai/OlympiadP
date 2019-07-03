<html>
<head>
	<title> Profile</title>
	<meta charset="utf-8"/>
	<link rel="stylesheet" href="css/profile.css" type="text/css"/>
</head>

<body>
		<?php
		include("header.html");
		include("underhead.html");
		require_once("functions.php");
		echo "<div class=\"main1\">";
		$mysqli=connect();
		if ($mysqli){
			$q="SELECT `id`,`login`,`name`,`email`,`school`,`photo`,`grade` FROM `studentusers` WHERE `login`='".$_SESSION["studentLogin"]."';";
			$q2="SELECT `firstplaces`,`secondplaces`,`thirdplaces` FROM `studentolympiads` WHERE `login`='".$_SESSION["studentLogin"]."';";
			$result=$mysqli->query($q);
			$result2=$mysqli->query($q2);
			$rows=$result->fetch_assoc();
			$rows2=$result2->fetch_assoc();
			do{
				$photo=$rows["photo"];
				echo "<div class=\"main\">";
				echo "<div class=\"image\"><img src=\"$photo\" /></div><br/>";
				echo ' <div class="labels">
					<div id="name"> Имя :</div>
					<br/>
					<div> Логин : </div>
					<br/>
					<div> E-mail : </div>
					<br/>
					<div> Школа : </div>
					<br/>
					<div> Класс : </div>
					<br/>
					
				</div>
				';
				echo "<div class=\"labelinputs\"> <form action=\"changeProfile.php\" method=\"POST\" ><input  type=\"text\" value=\"".$rows["name"]."\" name=\"name\" > <br/>";
				echo "<br/><input  type=\"text\" value=\"".$rows["login"]."\" name=\"login\" > <br/>";
				echo "<br/>  <input type=\"email\" value=\"".$rows["email"]."\" name=\"email\" > <br/>";
				echo "<br/>  <input type=\"text\" value=\"".$rows["school"]."\" name=\"school\" > <br/>
						<br/><input type=\"text\" value=\"".$rows["grade"]."\" name=\"grade\">
														
						<br/>
						<br/> <input id=\"button\" type=\"submit\" name=\"changeProfile\" value=\"Сохранить изменения!\"  />  </form></div><br/>";
				$mass=explode(";",$rows2["firstplaces"]);
				if(($rows2["firstplaces"])!=""){
					$mass=explode(";",$rows2["firstplaces"]);	
					$l=count($mass)-1;
					echo "<br/> First Places: <ul>";
					for($i=0;$i<$l;$i++){
						echo "<li> <a href=\"aboutOlympiad.php?q=".$mass[$i]."\">".$mass[$i]."</a></li>";
					}
					echo "</ul>";
			}
				
			if(($rows2["secondplaces"])!=""){
					$mass=explode(";",$rows2["secondplaces"]);
					$l=count($mass)-1;
					echo "<br/> Second Places: <ul>";
					for($i=0;$i<$l;$i++){
						echo "<li> <a href=\"aboutOlympiad.php?q=".$mass[$i]."\">".$mass[$i]."</a></li>";
					}
					echo "</ul>";
				}
			if(($rows2["thirdplaces"])!=""){
				
					$mass=explode(";",$rows2["thirdplaces"]);
					$l=count($mass)-1;
					echo "<br/> Third Places: <ul>";
					for($i=0;$i<$l;$i++){
						echo "<li> <a href=\"aboutOlympiad.php?q=".$mass[$i]."\">".$mass[$i]."</a></li>";
					}
					echo "</ul>";
				}
			echo "</div>";
			} while ($rows=$result->fetch_assoc());
		}
		echo "</div>";	
		include("footer.html");
	    
		?>
</body>
<div class="bottom">

</div>

</html>