<html>

<head>
	<title> Rating</title>
	<meta charset="utf-8"/>
	<link rel="stylesheet" href="css/inform.css" type="text/css"/>
</head>

<body>
<?php include("header.html"); ?>
<div class="main">
		<?php
		$login=trim(stripslashes(htmlspecialchars($_GET["q"])));
	    require_once("functions.php");
		$mysqli=connect();
		if ($mysqli){
			$q="SELECT `name`,`school`,`grade`,`email`,`photo` FROM `studentusers` WHERE `login`='$login';";
			$result=$mysqli->query($q);
			
			
			if($result->num_rows>0){
				$q2="SELECT `firstplaces`,`secondplaces`,`thirdplaces` FROM `studentolympiads` WHERE `login`='$login';";
				$result2=$mysqli->query($q2);
				$rows=$result->fetch_assoc();
			$rows2=$result2->fetch_assoc();
			$photo=$rows["photo"];
			echo '<div class="main1">';
				echo "<div class=\"image\"><img src=\"$photo\" /></div>".$rows["name"]."<br/><br/>";
				echo "Школа : ".$rows["school"]."<br/>Grade : ".$rows["grade"]."<br/><br/>";
				echo "Email : ".$rows["email"]."<br/>";
			echo '</div>';
			echo '<div class="main2">';
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
				
			} else {echo "Таких учеников нет!";}	
		}
		?>
		<button style="float:right;" id="link"><a  href="rating.php" ><= Назад</a></button><br/>
</div><br/>
<?php
include("footer.html");
?>
</body>

</html>